<?php
include_once('./_common.php');

if($_SERVER["REMOTE_ADDR"] != $_SERVER['SERVER_ADDR']){
    echo "외부에서는 실행이 불가능합니다.";
    exit;
}

$sql = " select * from ";
$result = sql_query($sql);
for ($a=0; $row=sql_fetch_array($result); $a++) {

}

?>