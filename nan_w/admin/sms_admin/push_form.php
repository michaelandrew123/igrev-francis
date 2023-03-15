<?php
$sub_menu = "900910";
include_once('./_common.php');


if ($w == 'u'){
	$row = sql_fetch("select * from push_data where pu_id = '$pu_id'");
}

$g5['title'] .= 'Push 등록/수정';
include_once(G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="fpush" id="fpush" action="./push_form_update.php" onsubmit="return fpush_submit(this);" method="post" enctype="multipart/form-data">
<input type="hidden" name="w" value="<?php echo $w ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="">
<input type="hidden" name="pu_id" value="<?=$row['pu_id']?>">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row">제목</th>
        <td><input type="text" name="pu_subject" class="frm_input" value="<?=$row['pu_subject']?>" size="50" /></td>
    </tr>
    <tr>
        <th scope="row">내용</th>
        <td><textarea name="pu_content" class="frm_input" style="height: 60px;"><?=$row['pu_content']?></textarea></td>
    </tr>
    <tr>
        <th scope="row">링크</th>
        <td>
            <input type="text" name="pu_url" id="pu_url" class="frm_input" value="<?=$row['pu_url']?>" size="80" />
		</td>
    </tr>
<!--     <tr>
        <th scope="row">링크(사용자)</th>
        <td>
            <input type="text" name="pu_url" id="pu_url" class="frm_input" value="<?=$row['pu_url']?>" size="80" />
		</td>
    </tr>
    <tr>
        <th scope="row">링크(가맹점)</th>
        <td>
            <input type="text" name="pu_url2" id="pu_url2" class="frm_input" value="<?=$row['pu_url2']?>" size="80" />
		</td>
    </tr>
    <tr>
        <th scope="row">비고</th>
        <td>
			<p style="padding:10px 0;">
				<a href="./pop.bbs_list.php?bo_table=event01" onclick="window.open(this.href, 'pop_url', 'width=1000, height=800, status=no, scrollbars=yes'); return false;" class="btn btn_03">본사이벤트</a>
                <a href="./pop.bbs_list.php?bo_table=event02" onclick="window.open(this.href, 'pop_url', 'width=1000, height=800, status=no, scrollbars=yes'); return false;" class="btn btn_03">가맹점이벤트</a>
				<a href="./pop.bbs_list.php?bo_table=notice" onclick="window.open(this.href, 'pop_url', 'width=1000, height=800, status=no, scrollbars=yes'); return false;" class="btn btn_03">공지사항</a>
			</p>
		</td>
    </tr> -->
    </tbody>
    </table>
</div>

<div class="btn_confirm01 btn_confirm">
    <input type="submit" value="확인" class="btn_submit" accesskey='s' style="height:30px;">
    <a href="./push_list.php?<?php echo $qstr ?>">목록</a>
</div>
</form>

<script>
function fpush_submit(f)
{
	if(f.pu_subject.value == ''){
		alert("제목을 입력하세요.");
		f.pu_subject.focus();
	    return false;
	}

	if(f.pu_content.value == ''){
		alert("내용을 입력하세요.");
		f.pu_content.focus();
	    return false;
	}

    return true;
}
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>
