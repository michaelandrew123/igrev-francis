<?php
$sub_menu = '300900';
include_once('./_common.php');


check_admin_token();

$wr_id = isset($_POST['wr_id']) ? preg_replace('/[^a-z0-9_]/i', '', $_POST['wr_id']) : '';
$co_subject = isset($_POST['co_subject']) ? strip_tags(clean_xss_attributes($_POST['co_subject'])) : '';
$co_html = isset($_POST['co_html']) ? (int) $_POST['co_html'] : 0;
$co_content = isset($_POST['wr_content']) ? $_POST['wr_content'] : '';



@mkdir(G5_DATA_PATH."/content", G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH."/content", G5_DIR_PERMISSION);


$error_msg = '';


$co_seo_title = exist_seo_title_recursive('content', generate_seo_title($co_subject), $g5['content_table'], $co_id);

$sql_common = " mb_id = '{$member['mb_id']}',
                wr_subject          = '$co_subject',
                wr_content          = '$co_content',
                wr_datetime = now() ";
if ($w == "")
{
    $sql = " insert g5_write_notice
                set $sql_common ";
    sql_query($sql);
}
else if ($w == "u")
{
    $sql = " update g5_write_notice
                set $sql_common
              where wr_id = '$wr_id' ";
    sql_query($sql);
}
else if ($w == "d")
{
    @unlink(G5_DATA_PATH."/content/{$co_id}_h");
    @unlink(G5_DATA_PATH."/content/{$co_id}_t");

    $sql = " delete from {$g5['content_table']} where co_id = '$co_id' ";
    sql_query($sql);
}

echo $sql;

//goto_url("./write_notice.php");
