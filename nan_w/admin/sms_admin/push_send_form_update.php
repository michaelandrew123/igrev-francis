<?php
$sub_menu = "900910";
include_once("./_common.php");
include_once(G5_LIB_PATH."/register.lib.php");

if ($w == 'u')
    check_demo();


check_admin_token();

$pu_id = trim($_POST['pu_id']);

/*
$sql_common = "  pu_area = '".implode("|", $_POST['pu_area'])."',
                 pu_sex = '".implode("|", $_POST['pu_sex'])."',
                 pu_age = '".implode("|", $_POST['pu_age'])."' ";
*/

if ($w == 'u')
{
    $sql = " update push_data
                set {$sql_common}
                where pu_id = '{$pu_id}' ";
    sql_query($sql);

	//회원 중 조건에 맞는 회원 검색
	$sql_search = '';
	$mb_id_qry = '';
	if($mb_id){
		$mb_id_qry = " and mb_id = '".$mb_id."' ";
	}
	// $sql = "select * from {$g5['member_table']} where mb_level = 2 and mb_10 <> '' ";
	$sql = "select * from push_user_device where 1=1 {$mb_id_qry} and os != '' and token != '' order by reg_datetime desc limit 1"; //mb_level = 2 and

	$pu_data = sql_fetch("select * from push_data where pu_id = '".$pu_id."'");

	//echo "select * from push_data where pu_id = '".$pu_id."'"; 

 	$sql = $sql.$sql_search;
	// die($sql);
	$rs = sql_query($sql);

	$pu_success_count = 0;
	$pu_fail_count = 0;
	$aos_token_arr = array();
	$ios_token_arr = array();
	while($row = sql_fetch_array($rs)){
		//Push 발송 처리
		if($row['os'] == 'aos'){
			$aos_token_arr[] = $row['token'];
		} else if ($row['os'] == 'ios'){
			$ios_token_arr[] = $row['token'];
		}
	}
	
	// print_r2($aos_token_arr);
	// die($aos_token_arr);
	if(count($aos_token_arr) > 0){
		$res = push_send($aos_token_arr, $pu_data['pu_subject'], $pu_data['pu_content'], $pu_data['pu_url'], 'aos');
		if($res->success) $pu_success_count++;
		if($res->failure) $pu_fail_count++;
	}
	if(count($ios_token_arr) > 0){
		$res = push_send($ios_token_arr, $pu_data['pu_subject'], $pu_data['pu_content'], $pu_data['pu_url'], 'ios');
		if($res->success) $pu_success_count++;
		if($res->failure) $pu_fail_count++;
	}

	
    $sql = " update push_data
                set pu_count = pu_count + '".($pu_success_count+$pu_fail_count)."',
					pu_success_count = '{$pu_success_count}',
					pu_fail_count = '{$pu_fail_count}',
					pu_last = NOW(),
					mb_id = '{$member['mb_id']}',
					mb_name = '{$member['mb_name']}'
                where pu_id = '{$pu_id}' ";
    sql_query($sql);
    
}
else
    alert('제대로 된 값이 넘어오지 않았습니다.');

    alert('Push가 발송되었습니다.', './push_send_form.php?'.$qstr.'&amp;w=u&amp;pu_id='.$pu_id, false);
?>