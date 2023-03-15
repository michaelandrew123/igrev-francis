<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '마이페이지';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>
<section class="container mypage_before">
    <div class="img_area">
        <img src="../img/my_page.svg" alt="">
    </div>
    <div class="txt_1">
        <strong>로그인</strong>이 필요한 서비스입니다 :)
    </div>
    <div class="btnType">
        <ul>
            <li><a href="#" class="btn btn-blue-bg">로그인</a></li>
            <li><a href="#" class="btn btn-blue-bd">회원가입</a></li>
        </ul>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');