<?php
include_once('./_ajaxCommon.php');
$in_data = json_decode(file_get_contents('php://input'), true);
// print_r2($in_data);
// print_r2("1231124");
// $os = isset($in_data['os']) ? strip_tags($in_data['os']) : '';
// $token = isset($in_data['token']) ? strip_tags($in_data['token']) : '';
$acces_type = isset($in_data['acces_type']) ? strip_tags($in_data['acces_type']) : '';


$card_dtl_no=isset($in_data['card_dtl_no']) ? strip_tags($in_data['card_dtl_no']) : '';
// $mb_nicknm = isset($in_data['mb_nicknm']) ? strip_tags($in_data['mb_nicknm']) : '';
// $mb_id = isset($in_data['mb_id']) ? strip_tags($in_data['mb_id']) : '';
// $game_acces_hist_no = isset($in_data['game_acces_hist_no']) ? strip_tags($in_data['game_acces_hist_no']) : '';

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

$mb_no = getMbNoQry($member['mb_id']);

if($member['mb_id']){
	if($acces_type == 'r'){
		//$member['mb_id']
		
		// $sql = "SELECT * FROM nan_db.nan_game_acces_hist WHERE reg_mb_no = $mb_no ";
		// $sql = "SELECT * FROM nan_game_acces_hist ngah left join nan_learning_hist nlh on ngah.mb_no = nlh.mb_no where ngah.mb_no=$mb_no and nlh.push_send_yn = 'y' order by ngah.reg_dt desc";
		// $sql = " SELECT * FROM nan_learning_hist nlh
		// WHERE     1=1
		// AND        mb_no     = $mb_no
		// AND        push_send_yn      = 'y'
		// AND        del_yn             = 'n'
		// order by push_send_dt desc";
		$sql = " SELECT nlh.mmry_step_nm, ncd.card_title, ncd.card_dtl_txt, nlh.push_send_dt, ncd.card_dtl_no FROM nan_learning_hist nlh
		inner join nan_card_dtl ncd on nlh.mb_no = ncd.reg_mb_no and nlh.card_dtl_no = ncd.card_dtl_no 
				WHERE     1=1
				AND        nlh.mb_no              = $mb_no
				AND        nlh.push_send_yn      = 'y'
				AND        nlh.del_yn             = 'n'
				order by nlh.push_send_dt desc;";
				
		$result = sql_query($sql);
		setRespResult("S0001", $data, $result);
	} else {
		setRespResult("F0100");
	}    	
}else{
    setRespResult("F1000");
}
