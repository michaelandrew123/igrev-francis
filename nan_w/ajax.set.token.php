<?php
// include_once('./_common.php');
include_once('./_ajaxCommon.php');

$os = isset($_POST['os']) ? strip_tags($_POST['os']) : '';
$token = isset($_POST['token']) ? strip_tags($_POST['token']) : '';
$data = array();
if($member['mb_id'] != '' && $token != ''){
    
    $sql = "  select count(*) cnt from push_user_device where mb_id = '".$member['mb_id']."' and os = '".$os."' and token = '".$token."' ";
    $row = sql_fetch($sql);   
	    if($row['cnt'] == 0){
	        sql_query("insert into push_user_device set token = '".$token."', os = '".$os."' , mb_id = '".$member['mb_id']."', reg_datetime = now()");
	        $data['message'] = "인서트성공";
	        $data['code'] = "200";
	    }else{
	        $data['message'] = "중복건있음";
	        $data['code'] = "400";
	    }
    	    
}else{
    $data['message'] = "미로그인";
    $data['code'] = "300";
}
jsonResp($data['code'], $data['message'], '');

