<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '비밀번호 찾기';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>
<section class="container id_search">
    <div class="img_area">
        <img src="../img/pw_search_img2.svg" alt="">
    </div>
    <div class="txt_area">
        <div class="txt">
            <strong>메일 전송 완료</strong>
            t***@n****.com 주소로 <br>
            비밀번호 변경이 가능한 링크가 전송되었습니다. <br>
            이메일에 포함된 지침에 따라 암호를 재설정 하십시오
        </div>
        <div class="btn_area">
            <button type="button" class="basic-btn01 btn-blue-bg">확인</button>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');