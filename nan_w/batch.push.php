<?
include_once('./common.php');

if($_SERVER["REMOTE_ADDR"] != $_SERVER['SERVER_ADDR']){
    echo "외부에서는 실행이 불가능합니다.";
    exit;
}

/* find the member list */
$sql =
"SELECT  lrn_hist_no, nlh.card_dtl_no, ncd.card_title, ncd.card_dtl_txt, ncd.card_dtl_no, nlh.mb_no
		, (SELECT mb_id FROM g5_member gm WHERE gm.mb_no = nlh.mb_no ) mb_id
FROM    nan_learning_hist   nlh
		,nan_card_dtl       ncd
WHERE   TIMESTAMPDIFF(SECOND, step_valid_bgn_dt, now()) BETWEEN 0 AND 5000
AND     nlh.card_dtl_no = ncd.card_dtl_no
AND     nlh.push_send_yn != 'y'
";

$result = sql_query($sql);
// print_r2($result);
while ( $row = sql_fetch_array($result) ) {
	//function push_send_nan_mb_msg($mb_id, $title="나안나", $msg, $url="naanna.kr", $type, $pu_id, $lrn_hist_no){
	push_send_nan_mb_msg("{$row['mb_id']}", "{$row['title']}", "{$row['msg']}", G5_DOMAIN."/nan/getCard?acces_type=r&card_dtl_no=".$row['card_dtl_no'], "learning", '', "{$row['lrn_hist_no']}");
	echo($row['mb_id'].", ". $row['title'].", ". $row['msg'].", ". G5_DOMAIN."/nan/getCard?acces_type=r&card_dtl_no=".$row['card_dtl_no'].", ". "learning".", ". ''.", ". $row['lrn_hist_no']);
}
