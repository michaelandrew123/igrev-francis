<?php
include_once('./_ajaxCommon.php');
$in_data = json_decode(file_get_contents('php://input'), true);

$os = isset($in_data['os']) ? strip_tags($in_data['os']) : '';
$token = isset($in_data['token']) ? strip_tags($in_data['token']) : '';
$acces_type = isset($in_data['acces_type']) ? strip_tags($in_data['acces_type']) : '';

$mb_nicknm = isset($in_data['mb_nicknm']) ? strip_tags($in_data['mb_nicknm']) : '';
$mb_id = isset($in_data['mb_id']) ? strip_tags($in_data['mb_id']) : '';
$game_acces_hist_no = isset($in_data['game_acces_hist_no']) ? strip_tags($in_data['game_acces_hist_no']) : '';

$data = array();
$data['resultData'] = array();
/*
	CREATE TABLE `nan_game_acces_hist` (
	`game_acces_hist_no` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '게임 접근 이력 번호',
	`game_no` int(10) unsigned DEFAULT NULL COMMENT '게임번호',
	`mb_no` int(10) unsigned DEFAULT NULL COMMENT '회원 번호',
	`mb_nicknm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '회원 별명',
	`mb_scrty_cd` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '회원 보안 코드',
	`try_cnt` int(10) unsigned DEFAULT NULL COMMENT '시도 횟수',
	`game_step` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '게임 단계',
	`game_score` int(10) unsigned DEFAULT NULL COMMENT '게임 점수',
	`game_bgn_dt` datetime DEFAULT NULL COMMENT '게임 시작 일자',
	`game_end_dt` datetime DEFAULT NULL COMMENT '게임 종료 일자',
	`del_yn` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '삭제 여부',
	`reg_dt` datetime DEFAULT NULL COMMENT '생성 일자',
	`reg_mb_no` int(10) unsigned DEFAULT NULL COMMENT '생성 회원 번호',
	`upd_dt` datetime DEFAULT NULL COMMENT '수정 일자',
	`upd_mb_no` int(10) unsigned DEFAULT NULL COMMENT '수정 회원 번호',
	PRIMARY KEY (`game_acces_hist_no`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='나안나 게임 접근 이력';
*/

$mb_no = getMbNoQry($mb_id);
if($acces_type == 'i'){
	//$member['mb_id']
	$game_no = isset($in_data['game_no']) ? strip_tags($in_data['game_no']) : '';
	$mb_scrty_cd = getScrtyCd();

    $sql = "INSERT INTO nan_db.nan_game_acces_hist
	(game_no, mb_no, mb_nicknm, mb_scrty_cd, game_bgn_dt, reg_dt, reg_mb_no, upd_dt, upd_mb_no) 
	VALUES ('{$game_no}', '{$mb_no}', '{$mb_nicknm}', '{$mb_scrty_cd}', now(), now(), {$mb_no}, now(), {$mb_no})"
	;

    $row = sql_fetch($sql);
	$data['game_acces_hist_no'] = sql_insert_id();
	$data['mb_scrty_cd'] = $mb_scrty_cd;
	setRespResult("S0001", $data);
    	    
}else if($acces_type == 'u'){
	$mb_scrty_cd = isset($in_data['mb_scrty_cd']) ? strip_tags($in_data['mb_scrty_cd']) : '';
	if($game_acces_hist_no && $mb_scrty_cd){
		$game_step = isset($in_data['game_step']) ? strip_tags($in_data['game_step']) : '';
		$game_score = isset($in_data['game_score']) ? strip_tags($in_data['game_score']) : '';
	
		$sql = "UPDATE nan_db.nan_game_acces_hist 
		SET 	game_step = '{$game_step}', game_score = '{$game_score}', game_end_dt = now(), upd_dt = now(), upd_mb_no = '{$mb_no}'
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
}else if($acces_type == 'u'){
	
}else{
    setRespResult("F0005");
}
