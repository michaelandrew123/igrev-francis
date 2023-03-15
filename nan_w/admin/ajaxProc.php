<?php
include_once('./_common.php');
//수정

if ($_POST["action"] == "del") {
    $query = sql_query("UPDATE nan_quiz set del_yn = 'y'  WHERE quiz_idx = '" . $_POST["quiz_idx"] . "'");
} elseif ($_POST["action"] == "show") {
    $query = sql_query("UPDATE nan_quiz set del_yn = 'n'  WHERE quiz_idx = '" . $_POST["quiz_idx"] . "'");
} elseif ($_POST["action"] == "co_del") {
    $query = sql_query("UPDATE nan_comment set co_del_yn = 'y'  WHERE co_idx = '" . $_POST["co_idx"] . "'");
} elseif ($_POST["action"] == "bl") {
    $query = sql_query("UPDATE g5_member set mb_del_yn = 'b'  WHERE mb_no = '" . $_POST["mb_no"] . "'");
    $query = sql_query("UPDATE nan_member_report set mr_done = 'y'  WHERE mr_idx = '" . $_POST["mr_idx"] . "'");
} elseif ($_POST["action"] == "unbl") {
    $query = sql_query("UPDATE g5_member set mb_del_yn = 'n'  WHERE mb_no = '" . $_POST["mb_no"] . "'");
}
