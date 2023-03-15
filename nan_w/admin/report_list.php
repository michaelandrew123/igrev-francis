<?
$sub_menu = "300301";
include_once("./_common.php");
auth_check($auth[$sub_menu], "r");
$listall = "<a href='$_SERVER[PHP_SELF]'>처음</a>";
$g5['title'] = "신고 게시글 관리";
include_once("./admin.head.php");
$report_mode = $_GET['mode'];
set_session("ss_delete_token", $token = uniqid(time()));
?>
<script language="javascript">
	report_content.list = new Array();

	function report_content(i) {
		if (!report_content.list[i]) report_content.list[i] = 0;
		if (report_content.list[i] == 0) {
			$("#report_content" + i).css("display", "");
			report_content.list[i] = 1;
		} else {
			$("#report_content" + i).css("display", "none");
			report_content.list[i] = 0;

		}
	}

	function report_delete(i, bo_table, wr_id, comment) {
		if (!comment) {
			$.ajax({
				type: "GET",
				url: "../bbs/delete.php?bo_table=" + bo_table + "&wr_id=" + wr_id + "&token=<?= $token ?>",
				cache: false,
				success: function(html) {
					$("#report_list" + i).css("display", "none");
					$("#report_content" + i).css("display", "none");
				}
			});
		} else {
			$.ajax({
				type: "GET",
				url: "../bbs/delete_comment.php?bo_table=" + bo_table + "&comment_id=" + wr_id + "&token=<?= $token ?>",
				cache: false,
				success: function(html) {
					$("#report_list" + i).css("display", "none");
					$("#report_content" + i).css("display", "none");
				}
			});
		}

	}
</script>
<div style='width:100%; float:left; border:1px solid black;'>
	<div style='width:3%; float:left;'>NO.</div>
	<div style='width:7%; float:left;'>테이블</div>
	<div style='width:48%; float:left;'>제목</div>
	<div style='width:7%; float:left;'>|글쓴이</div>
	<div style='width:8%; float:left;'>|<?
										for ($i = 1; $i < 4; $i++) {
											if (($report_mode >= $i || !$report_mode) && $report['count'] >= $i)
												echo "<a href='./report_list.php?mode=$i'>●</a>";
											else if ($report['count'] >= $i)
												echo "<a href='./report_list.php?mode=$i'>○</a>";
										}
										?><a href='./report_list.php'><? echo $report_mode ? "☆" : "★" ?></a></div>
	<div style='width:16%; float:left;'>|최초신고일</div>
	<div style='width:5%; float:left;'>|복구</div>
	<div style='width:5%; float:left;'>|삭제</div>
</div>
<?
//g5_report 테이블이 있는지체크
if (sql_num_rows(sql_query("SHOW TABLES LIKE 'g5_report'")) != 1) {
	sql_query(" CREATE TABLE  `$mysql_db`.`g5_report` (
`list_num` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`bo_table` VARCHAR( 20 ) NOT NULL ,
`wr_id` INT( 11 ) NOT NULL ,
`wr_comment` INT( 1 ) NOT NULL ,
`reporter1` VARCHAR( 255 ) NOT NULL ,
`reporter_id1` VARCHAR( 255 ) NOT NULL ,
`reason1` INT( 1 ) NOT NULL ,
`reporter2` VARCHAR( 255 ) NOT NULL ,
`reporter_id2` VARCHAR( 255 ) NOT NULL ,
`reason2` INT( 1 ) NOT NULL ,
`reporter3` VARCHAR( 255 ) NOT NULL ,
`reporter_id3` VARCHAR( 255 ) NOT NULL ,
`reason3` INT( 1 ) NOT NULL ,
`report_time` DATETIME NOT NULL DEFAULT  '0000-00-00 00:00:00',
PRIMARY KEY (  `list_num` )
) ENGINE = MYISAM; ");
}
//g5_report체크끝
// $result = sql_query(" select * from g5_report order by list_num asc ");
// $i = 0;
// while ($row = sql_fetch_array($result)) {
// 	$list[$i]['bo_table'] = $row['bo_table'];
// 	if (sql_num_rows(sql_query("SHOW TABLES LIKE 'g5_write_{$row[bo_table]}'")) != 1) {
// 		sql_query(" delete from `g5_report` where bo_table = '{$row[bo_table]}' and wr_id = '{$row[wr_id]}' ");
// 		continue;
// 	}
// 	$result2 = sql_query(" select * from `g5_write_{$row[bo_table]}` where wr_id = '{$row[wr_id]}' ");
// 	$view = sql_fetch_array($result2);
// 	if (!$view[wr_subject] && !$view[wr_content])
// 		sql_query(" delete from `g5_report` where bo_table = '{$row[bo_table]}' and wr_id = '{$row[wr_id]}' ");
// 	else {
// 		if ((($view['singo'] == $report_mode) && ($row["reporter$report_mode"] && $report_mode)) || !$report_mode) {
// 			$singo_img = "";
// 			for ($k = 1; $k <= 3; $k++)
// 				if ($report['count'] >= $k && $row["reporter$k"]) {
// 					switch ($row["reason$k"]) {
// 						case 1:
// 							$row["reason$k"] = "홍보성";
// 							break;
// 						case 2:
// 							$row["reason$k"] = "서비스품질저해";
// 							break;
// 						case 3:
// 							$row["reason$k"] = "욕설";
// 							break;
// 						case 4:
// 							$row["reason$k"] = "음란성";
// 							break;
// 						case 5:
// 							$row["reason$k"] = "개인정보노출";
// 							break;
// 						case 6:
// 							$row["reason$k"] = "저작권위반";
// 							break;
// 						default:
// 							$row["reason$k"] = "Error. 플러그인 제작자에게 문의하세요.";
// 							break;
// 					}
// 					$singo_img .= "<a href=# title='{$row["reporter$k"]}({$row["reporter_id$k"]})\n사유:{$row["reason$k"]}'>●</a>";
// 				} else
// 					break;
// 			if (!$view['wr_subject'])
// 				$view['wr_subject'] = $view['wr_content'];
// 			echo "<div id='report_list$i' style='float:left; width:100%; border:1px solid black; border-bottom:1px solid #ccc;'><div style='float:left; width:3%;'>$i.</div><div style='width:7%; float:left; overflow:hidden;'><a		href='../bbs/board.php?bo_table={$row[bo_table]}'>{$row[bo_table]}</a></div><div style='float:left; width:48%; overflow:hidden;'>";
// 			if ($view['wr_is_comment'])
// 				echo get_text($view[wr_subject]);
// 			else
// 				echo "<a href=# onclick='report_content($i);'>" . conv_subject($view['wr_subject'], 255) . "</a>";
// 			echo  "</div><div style='float:left; width:7%; overflow:hidden;'>|" . get_sideview($view['mb_id'], $view['wr_name']) . "</div><div style='float:left; width:8%;'>|$singo_img</div><div style='float:left; width:16%;'>|{$row[report_time]}</div><div style='float:left; width:5%;'>|" . report_button() . "</div><div style='float:left; width:5%;'>|<a href='#' onclick='report_delete($i, \"{$row[bo_table]}\", {$row[wr_id]}, {$row[wr_comment]})'>삭제</a></div></div><div id='report_content$i' style='display:none; border:1px solid black; width:100%; ;word-break:break-all;border-top:0;'>" . conv_content($view['wr_content'], '1') . "</div>";
// 		}
// 	}
// 	$i++;
// }
include_once("./admin.tail.php");
?>