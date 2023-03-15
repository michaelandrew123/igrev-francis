<?php
$sub_menu = "900910";
include_once('./_common.php');


if ($w == 'u'){
	$row = sql_fetch("select * from push_data where pu_id = '$pu_id'");
}

$g5['title'] .= 'Push 발송';
include_once(G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="fpushs" id="fpushs" action="./push_send_form_update.php" onsubmit="return fpushs_submit(this);" method="post" enctype="multipart/form-data">
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
        <td><?=$row['pu_subject']?></td>
    </tr>
    <tr>
        <th scope="row">내용</th>
        <td><?=nl2br($row['pu_content'])?></td>
    </tr>
	<tr>
        <th scope="row">링크</th>
        <td><?=$row['pu_url']?></td>
    </tr>
    </tbody>
    </table>
</div>

<div class="btn_confirm01 btn_confirm">
    <input type="submit" value="발송" class="btn_submit" accesskey='s' style="height:30px;">
    <a href="./push_list.php?<?php echo $qstr ?>">목록</a>
</div>
</form>

<script>
function fpushs_submit(f)
{
    /*
	var count = 0;
	for(i = 0; i < $("input[name='pu_area[]']").length; i++){
		if($("input[name='pu_area[]']").is(":checked"))
			count++;
	}

	for(i = 0; i < $("input[name='pu_sex[]']").length; i++){
		if($("input[name='pu_sex[]']").is(":checked"))
			count++;
	}

	for(i = 0; i < $("input[name='pu_age[]']").length; i++){
		if($("input[name='pu_age[]']").is(":checked"))
			count++;
	}

	if(count == 0){
		alert("타겟을 선택해 주세요");
		return false;
	}
    */
    return true;
}
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>
