<?php
$sub_menu = '300403';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, "r");



$g5['title'] = '신고 회원';
include_once(G5_ADMIN_PATH . '/admin.head.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$sql_common = " from nan_member_report a
                left join g5_member e on (a.mr_mb_no = e.mb_no )
                left join g5_member f on (a.mr_mb_no_ = f.mb_no )";

$sql_search = " where (1) ";

if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        case "title":
            $sql_search .= " ({$sfl} like '{$stx}%') ";
            break;
        case "mb_id":
            $sql_search .= " ({$sfl} = '{$stx}') ";
            break;
        default:
            $sql_search .= " ({$sfl} like '%{$stx}%') ";
            break;
    }
    $sql_search .= " ) ";
}
// 테이블의 전체 레코드수만 얻음
$sql = " select count(*) as cnt {$sql_common}  {$sql_search} ";
$row_ = sql_fetch($sql);
$total_count = $row_['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) {
    $page = 1;
} // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select *, e.mb_id as mb_id_, e.mb_nick as mb_nick_, e.mb_del_yn as mb_del_yn_, e.mb_no as mb_no_ {$sql_common} {$sql_search} ";
$result = sql_query($sql);

?>

<div class="local_ov01 local_ov">
    <?php if ($page > 1) { ?><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">처음으로</a><?php } ?>
    <span class="btn_ov01"><span class="ov_txt">전체 개수</span><span class="ov_num"> <?php echo $total_count; ?>건</span></span>
</div>
<form id="fsearch" name="fsearch" class="local_sch01 local_sch" method="get">

    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="e.mb_id" <?php echo get_selected($sfl, "mb_id"); ?>>회원아이디</option>
        <option value="e.mb_nick" <?php echo get_selected($sfl, "mb_nick"); ?>>닉네임</option>
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo $stx ?>" id="stx" required class="required frm_input">
    <input type="submit" class="btn_submit" value="검색">

</form>

<!-- 
<div class="btn_fixed_top">
    <a href="./contentform.php" class="btn btn_01">내용 추가</a>
</div> -->

<div class="tbl_head01 tbl_wrap">
    <table>
        <caption><?php echo $g5['title']; ?> 목록</caption>
        <thead>
            <tr>
                <th scope="col">번호</th>
                <th scope="col">ID</th>
                <th scope="col">닉네임</th>
                <th scope="col">내용</th>
                <th scope="col">수신일</th>
                <th scope="col">신고인</th>
                <th scope="col">상태</th>
                <th scope="col">관리</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $row = sql_fetch_array($result); $i++) {
                $bg = 'bg' . ($i % 2);
            ?>
                <tr class="<?php echo $bg; ?>">
                    <td class="td_id"><?php echo $row['mr_idx']; ?></td>
                    <td class="td_id">
                        <a style=" color: blue !important;" href="./member_form.php?sst=&sod=&sfl=&stx=&page=&w=u&mb_id=<?= $row['mb_id_'] ?>">
                            <?php echo $row['mb_id_']; ?>
                        </a>
                    </td>
                    <td class="td_id"><?php echo $row['mb_nick_']; ?></td>
                    <td class="td_left"><?php echo htmlspecialchars2($row['mr_content']); ?></td>
                    <td class="td_id"><?php echo $row['mr_regdate']; ?></td>
                    <td class="td_id"><?php echo $row['mb_id']; ?></td>
                    <?php if ($row['mr_done'] == 'n') {  ?>
                        <td style=" color : blue;"> 처리 대기</td>
                    <?php } else { ?>
                        <td> 처리 완료 </td>
                    <?php } ?>
                    <?php if ($row['mb_del_yn_'] == 'n') {  ?>
                        <td class="td_mng td_mng_l">
                            <input type="button" name="act_button" id="button_action" value="Block" onclick="del(<?= $row['mb_no_'] ?>,'bl',<?= $row['mr_idx'] ?>)" class="btn btn_01">
                        </td>
                    <?php } else { ?>
                        <td class="td_mng td_mng_l">
                            <input type="button" name="act_button" id="button_action" value="Unblock" onclick="del(<?= $row['mb_no_'] ?>,'unbl',<?= $row['mr_idx'] ?>)" class="btn btn_03">
                        </td>
                    <?php } ?>
                </tr>
            <?php
            }
            if ($i == 0) {
                echo '<tr><td colspan="8" class="empty_table">신고가 한건도 없습니다.</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>


<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>

<?php
include_once(G5_ADMIN_PATH . '/admin.tail.php');
?>

<script>
    function del(id, action, mr_idx) {
        var mb_no = id;
        var action = action;
        var mr_idx = mr_idx;

        $.ajax({
            url: "./ajaxProc.php",
            method: "POST",
            data: {
                mb_no: mb_no,
                action: action,
                mr_idx: mr_idx
            },
            dataType: "json",
            success: function(data) {
                alert("반영 되었습니다.");
            }

        }).done(function(body) {

            var message = body.response.message;

            var error = body.response.error;

            if (error)

                alert('통신 실패');

            /* get_msg(message); */

            if (error == false) {

                var url = '${referer}';

                if (url == '')

                    url = '<c:url value="./ported_comment_list" />';

                location.href = url;

                /* location.reload(); */

            }

        });
        document.location.reload();

    }
</script>