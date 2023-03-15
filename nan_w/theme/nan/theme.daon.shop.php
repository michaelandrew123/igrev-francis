<?php

/*
	
	이 페이지는 절대, 수정, 삭제하지 마세요.

*/

$display_banner_daon_fun_exists = function_exists('display_banner_daon');

if(!$display_banner_daon_fun_exists){

// 배너출력
function display_banner_daon($position, $skin='')
{
    global $g5;

    if (!$position) $position = '왼쪽';
    if (!$skin) $skin = 'boxbanner.skin.php';

    $skin_path = G5_SHOP_SKIN_PATH.'/'.$skin;  
    // echo $skin_path;
    if(file_exists($skin_path)) {
        // 접속기기
        // $sql_device = " and ( bn_device = 'pc' ) ";
        // if(preg_match("/mobile/",$skin))
            $sql_device = " and ( bn_device = 'mobile' ) ";

        // 배너 출력
        $sql = " select * from {$g5['g5_shop_banner_table']} where '".G5_TIME_YMDHIS."' between bn_begin_time and bn_end_time $sql_device and bn_position = '$position' order by bn_order, bn_id desc ";
        // echo $sql;
        $result = sql_query($sql);

        include $skin_path;
    } else {
        echo '<p>'.str_replace(G5_PATH.'/', '', $skin_path).'파일이 존재하지 않습니다.</p>';
    }
}

}

$optimize_t = true;
$MobileArray_d  = array("iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone");
$checkCount = 0; 
for($i=0; $i<sizeof($MobileArray_d); $i++){ 
	if(preg_match("/".$MobileArray_d[$i]."/", strtolower($_SERVER['HTTP_USER_AGENT']))){ $checkCount++; break; } 
} 
// if($checkCount >= 1){
	$_OS_ =  "mobile";
// }else{
	// $_OS_ = "pc";
// }