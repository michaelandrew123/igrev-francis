<?php
$sub_menu = '300900';
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

auth_check_menu($auth, $sub_menu, "w");

$wr_id = isset($_REQUEST['wr_id']) ? preg_replace('/[^a-z0-9_]/i', '', $_REQUEST['wr_id']) : '';

// 상단, 하단 파일경로 필드 추가
if(!sql_query(" select co_include_head from {$g5['content_table']} limit 1 ", false)) {
    $sql = " ALTER TABLE `{$g5['content_table']}`  ADD `co_include_head` VARCHAR( 255 ) NOT NULL ,
                                                    ADD `co_include_tail` VARCHAR( 255 ) NOT NULL ";
    sql_query($sql, false);
}

// html purifier 사용여부 필드
if(!sql_query(" select co_tag_filter_use from {$g5['content_table']} limit 1 ", false)) {
    sql_query(" ALTER TABLE `{$g5['content_table']}`
                    ADD `co_tag_filter_use` tinyint(4) NOT NULL DEFAULT '0' AFTER `co_content` ", true);
    sql_query(" update {$g5['content_table']} set co_tag_filter_use = '1' ");
}


$html_title = "공지사항 ";
$readonly = '';

if ($w == "u")
{
    $html_title .= " 수정";
    $readonly = " readonly";

    $sql = " select * from g5_write_notice where wr_id = '$wr_id' ";
    $co = sql_fetch($sql);
    if (!$co['wr_id'])
        alert('등록된 자료가 없습니다.');
}
else
{
    $html_title .= ' 입력';
    $co = array(
        'co_id' => '',
        'co_subject' => '',
        'co_content' => '',
        'co_mobile_content' => '',
        'co_include_head' => '',
        'co_include_tail' => '',
        'co_tag_filter_use' => 1,
        'co_html' => 2,
        'co_skin' => 'basic',
        'co_mobile_skin' => 'basic'
        );
}

include_once (G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="frmcontentform" action="./noticeformupdate.php" onsubmit="return frmcontentform_check(this);" method="post" enctype="MULTIPART/FORM-DATA" >
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="wr_id" value="<?php echo $co['wr_id']; ?>">
<input type="hidden" name="co_html" value="1">
<input type="hidden" name="token" value="">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row"><label for="co_subject">제목</label></th>
        <td><input type="text" name="co_subject" value="<?php echo htmlspecialchars2($co['wr_subject']); ?>" id="co_subject" required class="frm_input required" size="90"></td>
    </tr>
    <tr>
        <th scope="row">내용</th>
        <td>
            <textarea id="wr_content" name="wr_content" maxlength="10000" required class="required" title="내용" placeholder="댓글내용을 입력해주세요" <?php if ($comment_min || $comment_max) { ?>onkeyup="check_byte('wr_content', 'char_count');" <?php } ?>><?php echo $co['wr_content']; ?></textarea>
        </td>
    </tr>
    
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <a href="./write_notice.php" class="btn btn_02">목록</a>
    <input type="submit" value="확인" class="btn btn_submit" accesskey="s">
</div>

</form>

<script>

</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');