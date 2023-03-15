<?php
include_once('./_ajaxCommon.php');
$in_data = json_decode(file_get_contents('php://input'), true);

// $mb_id = isset($in_data['mb_id']) ? strip_tags($in_data['mb_id']) : '';
$acces_type = isset($in_data['acces_type']) ? strip_tags($in_data['acces_type']) : '';
$os = isset($in_data['os']) ? strip_tags($in_data['os']) : '';
$token = isset($in_data['token']) ? strip_tags($in_data['token']) : '';
$card_no = isset($in_data['card_no']) ? strip_tags($in_data['card_no']) : '';
$card_dtl_no = isset($in_data['card_dtl_no']) ? strip_tags($in_data['card_dtl_no']) : '';
$card_grp_no = isset($in_data['card_grp_no']) ? strip_tags($in_data['card_grp_no']) : '';
$card_title = isset($in_data['card_title']) ? strip_tags($in_data['card_title']) : '';
$card_dtl_txt = isset($in_data['card_dtl_txt']) ? strip_tags($in_data['card_dtl_txt']) : '';
$hash_tag = isset($in_data['hash_tag']) ? strip_tags($in_data['hash_tag']) : '';
$lang_cd = isset($in_data['lang_cd']) ? strip_tags($in_data['lang_cd']) : 'ko'; //한국어 - 임시
$curr_step = isset($in_data['curr_step']) ? strip_tags($in_data['curr_step']) : '1';
$tot_view_cnt = isset($in_data['tot_view_cnt']) ? strip_tags($in_data['tot_view_cnt']) : '0';
$hash_tags = isset($in_data['hash_tags']) ? strip_tags($in_data['hash_tags']) : '0';

$data = array();
$data['resultData'] = array();

$mb_id = $member['mb_id'];
$mb_no = getMbNoQry($mb_id);
if($acces_type == 'i'){
  $card_dtl_seq = '1'; 	//카드 순번 1 - 임시
  $card_type_cd = '01'; 	//카드 유형 01 - 한면만
  $contents_clf_cd = 'tx'; 	//컨텐츠 유형 tx - 텍스트
  $limit_time_sec = '10'; 	//시간 제한 10 - 10초
  $share_posbl_yn = 'y'; 	//공유 가능 여부 - 임시
  $origin_file_nm = ''; 	//고유 파일명 - 임시
  $file_path = ''; 	//파일 경로 - 임시
  $file_nm = ''; 	//파일명 - 임시

	$sql = "INSERT INTO nan_db.nan_card_master
	(mb_no, card_type_cd, limit_time_sec, status_cd, curr_step, tot_view_cnt, share_posbl_yn, use_yn, del_yn, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
	VALUES ({$mb_no}, '{$card_type_cd}', {$limit_time_sec}, '{$status_cd}', {$curr_step}, {$tot_view_cnt}, '{$share_posbl_yn}', 'y', 'n',  now(), {$mb_no},  now(), {$mb_no});
	";
	$row = sql_fetch($sql);
	$data['card_no'] = sql_insert_id();

	$sql = "INSERT INTO nan_db.nan_card_dtl
	(card_no, card_dtl_seq, lang_cd, card_title, card_dtl_txt, contents_clf_cd, origin_file_nm, file_path, file_nm, view_cnt, del_yn, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
	VALUES ({$data['card_no']}, {$card_dtl_seq}, '{$lang_cd}', '{$card_title}', '{$card_dtl_txt}', '{$contents_clf_cd}', '{$origin_file_nm}', '{$file_path}', '{$file_nm}', '{$view_cnt}', 'n',  now(), {$mb_no},  now(), {$mb_no});
	";
	$row = sql_fetch($sql);
  // $data['dtl_qry'] = $sql;
	$data['card_dtl_no'] = sql_insert_id();

	$sql = "SELECT count(*) cnt FROM nan_db.nan_card_grp WHERE mb_no = {$mb_no}";
	$row = sql_fetch($sql);

	//폴더 생성 되지 않은 경우 기본폴더 생성
	if($row['cnt'] < 1 || !$card_grp_no){
		$sql = "INSERT INTO nan_db.nan_card_grp
		(mb_no, upper_card_grp_no, card_grp_nm, share_posbl_yn, use_yn, del_yn, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
		VALUES ({$mb_no}, null, '기본폴더', '{$share_posbl_yn}', 'y', 'n',  now(), {$mb_no},  now(), {$mb_no});
		";
		$row = sql_fetch($sql);
		$data['card_grp_no'] = sql_insert_id();
	}

	$sql = "INSERT INTO nan_db.nan_card_grp_dtl
	(card_no, card_dtl_no, card_grp_no, use_yn, del_yn, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
	VALUES ({$data['card_no']}, {$card_dtl_no}, {$data['card_grp_no']}, 'y', 'n',  now(), {$mb_no},  now(), {$mb_no});
	";
	$row = sql_fetch($sql);
	$data['card_grp_dtl_no'] = sql_insert_id();

  $mmry_step = $curr_step - 1;
  $mmry_step_nm_qry = "(SELECT mmry_step_nm FROM nan_memory_step where mmry_step_no = {$mmry_step})";
  $sql = "INSERT INTO nan_db.nan_learning_hist
  (mb_no, mmry_step_grp_no, card_no, card_dtl_no, mmry_step_no, mmry_step, mmry_step_nm, stay_time_sec, nan_yn, del_yn, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
  VALUES ({$mb_no}, 0, {$data['card_no']}, {$data['card_dtl_no']}, 1, {$mmry_step}, {$mmry_step_nm_qry}, '{$stay_time_sec}', 'y', 'n', now(), {$mb_no},  now(), {$mb_no})
  ";

  $row = sql_fetch($sql);
  $data['lrn_hist_no'] = sql_insert_id();

  $sql = getValidDtUpdQuery($mb_no);
  $row = sql_fetch($sql);

  if($hash_tags){
    $hash_tags_arr = explode(",",$hash_tags);
    for($i=0; $i<count($hash_tags_arr); $i++){
      $hash_tag = $hash_tags_arr[$i];
      if($hash_tag){
        $sql = "INSERT INTO nan_db.nan_card_hash_tag
        (card_no, card_dtl_no, hash_tag, del_yn, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
        VALUES ({$data['card_no']}, {$data['card_dtl_no']}, '{$hash_tag}', 'n',  now(), {$mb_no},  now(), {$mb_no});
        ";
        $row = sql_fetch($sql);
      }
    }
  }
  
	setRespResult("S0001", $data);
    	    
}else if($acces_type == 'u'){
	$mb_scrty_cd = isset($in_data['mb_scrty_cd']) ? strip_tags($in_data['mb_scrty_cd']) : '';
	if($game_acces_hist_no && $mb_scrty_cd){
		$game_step = isset($in_data['game_step']) ? strip_tags($in_data['game_step']) : '';
		$game_score = isset($in_data['game_score']) ? strip_tags($in_data['game_score']) : '';
	
		$sql = "UPDATE nan_db.nan_game_acces_hist 
		SET 	game_step = '{$game_step}', game_score = '{$game_score}', game_end_dt = now(), upd_dt = now(), {$mb_no} = '{$mb_no}'
		WHERE 	mb_scrty_cd = '{$mb_scrty_cd}' and game_acces_hist_no = '{$game_acces_hist_no}' ";
		$row = sql_fetch($sql);
		if(mysqli_affected_rows($g5['connect_db']) > 0 ){
			$sql = "SELECT TIMESTAMPDIFF(SECOND, game_bgn_dt, game_end_dt) sec_diff FROM nan_db.nan_game_acces_hist
			WHERE 	mb_scrty_cd = '{$mb_scrty_cd}' and game_acces_hist_no = '{$game_acces_hist_no}' ";
			$row = sql_fetch($sql);
			$data['sec_diff'] = $row['sec_diff'];
			setRespResult("S0001", $data);
		} else {
			setRespResult("F0003", $data);
		}
	} else {
		setRespResult("F0004");
	}
}else if($acces_type == 'r'){ //카드 조회
    $sql = "SELECT ncm.limit_time_sec
                  ,ncm.curr_step
                  ,ncm.tot_view_cnt
                  ,ncd.card_dtl_seq
                  ,ncd.card_dtl_txt
                  ,ncd.contents_clf_cd
                  ,ncd.file_path
                  ,ncd.file_nm
                  ,ncd.view_cnt
              FROM    nan_card_master   ncm
                      ,nan_card_dtl     ncd
              WHERE   ncm.card_no   = '{$card_no}'
              AND     ncm.card_no   = ncd.card_no
              /* AND     ncd.card_dtl_no = '{$card_dtl_no}' */
              AND     ncm.use_yn    = 'y'
              AND     ncm.del_yn    = 'n'
              AND     ncd.del_yn    = 'n'
              LIMIT 1
            ";
    $row = sql_fetch($sql);
    setRespResult("S0001", $row);
}else{
    setRespResult("F0005");
}


/*

CREATE TABLE `nan_card_master` (
  `card_no` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '카드 번호',
  `mb_no` int(10) unsigned DEFAULT NULL COMMENT '회원 번호',
  `card_type_cd` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '카드 유형 코드(ca01)',
  `limit_time_sec` int(10) unsigned DEFAULT NULL COMMENT '제한 시간 초',
  `status_cd` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '카드 상태 코드(ca02)',
  `curr_step` int(10) unsigned DEFAULT NULL COMMENT '현재 단계',
  `tot_view_cnt` int(10) unsigned DEFAULT NULL COMMENT '총 조회 횟수',
  `share_posbl_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '공유 가능 여부',
  `use_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '사용 여부',
  `del_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '삭제 여부',
  `reg_dt` datetime DEFAULT NULL COMMENT '생성 일자',
  `reg_mb_no` int(10) unsigned DEFAULT NULL COMMENT '생성 회원 번호',
  `upd_dt` datetime DEFAULT NULL COMMENT '수정 일자',
  `upd_mb_no` int(10) unsigned DEFAULT NULL COMMENT '수정 회원 번호',
  PRIMARY KEY (`card_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='나안나 카드 마스터';

CREATE TABLE `nan_card_dtl` (
  `card_dtl_no` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '카드 번호',
  `card_no` int(10) unsigned DEFAULT NULL COMMENT '카드 상세 번호',
  `card_dtl_seq` int(10) unsigned DEFAULT NULL COMMENT '컨텐츠 순번',
  `lang_cd` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '언어코드(la01)',
  `card_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '제목',
  `card_dtl_txt` text COLLATE utf8_unicode_ci COMMENT '텍스트',
  `contents_clf_cd` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '카드 컨텐츠 분류 코드(ca03)',
  `origin_file_nm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '기존 파일 명',
  `file_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '파일 경로',
  `file_nm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '파일 명',
  `view_cnt` int(10) unsigned DEFAULT NULL COMMENT '조회 횟수',
  `del_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '삭제 여부',
  `reg_dt` datetime DEFAULT NULL COMMENT '생성 일자',
  `reg_mb_no` int(10) unsigned DEFAULT NULL COMMENT '생성 회원 번호',
  `upd_dt` datetime DEFAULT NULL COMMENT '수정 일자',
  `upd_mb_no` int(10) unsigned DEFAULT NULL COMMENT '수정 회원 번호',
  PRIMARY KEY (`card_dtl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='나안나 카드 상세';

CREATE TABLE `nan_card_grp` (
  `card_grp_no` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '카드 그룹 번호',
  `mb_no` int(10) unsigned DEFAULT NULL COMMENT '카드 번호',
  `upper_card_grp_no` int(10) unsigned DEFAULT NULL COMMENT '카드 상세 번호',
  `card_grp_nm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '카드 번호',
  `share_posbl_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '공유 가능 여부',
  `use_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '사용 여부',
  `del_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '삭제 여부',
  `reg_dt` datetime DEFAULT NULL COMMENT '생성 일자',
  `reg_mb_no` int(10) unsigned DEFAULT NULL COMMENT '생성 회원 번호',
  `upd_dt` datetime DEFAULT NULL COMMENT '수정 일자',
  `upd_mb_no` int(10) unsigned DEFAULT NULL COMMENT '수정 회원 번호',
  PRIMARY KEY (`card_grp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='나안나 카드 그룹';

CREATE TABLE `nan_card_grp_dtl` (
  `card_grp_no` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '카드 그룹 번호',
  `card_no` int(10) unsigned DEFAULT NULL COMMENT '카드 번호',
  `card_dtl_no` int(10) unsigned DEFAULT NULL COMMENT '카드 상세 번호',
  `card_grp_dtl_seq` int(10) unsigned DEFAULT NULL COMMENT '카드 그룹 상세 순번',
  `use_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '사용 여부',
  `del_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '삭제 여부',
  `reg_dt` datetime DEFAULT NULL COMMENT '생성 일자',
  `reg_mb_no` int(10) unsigned DEFAULT NULL COMMENT '생성 회원 번호',
  `upd_dt` datetime DEFAULT NULL COMMENT '수정 일자',
  `upd_mb_no` int(10) unsigned DEFAULT NULL COMMENT '수정 회원 번호',
  PRIMARY KEY (`card_grp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='나안나 카드 그룹 상세';

CREATE TABLE `nan_card_hash_tag` (
  `hash_tag_no` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '해시 태그 번호',
  `card_no` int(10) unsigned DEFAULT NULL COMMENT '카드 번호',
  `card_dtl_no` int(10) unsigned DEFAULT NULL COMMENT '카드 상세 번호',
  `hash_tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '해시 태그',
  `del_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '삭제 여부',
  `reg_dt` datetime DEFAULT NULL COMMENT '생성 일자',
  `reg_mb_no` int(10) unsigned DEFAULT NULL COMMENT '회원 번호',
  `upd_dt` datetime DEFAULT NULL COMMENT '수정 일자',
  `upd_mb_no` int(10) unsigned DEFAULT NULL COMMENT '수정 회원 번호',
  PRIMARY KEY (`hash_tag_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='나안나 카드 해시 태그';




*/