<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '회원가입';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container join_completion">
	<div class="txt">
        <strong>가입 완료!</strong>
        지금 바로 <span>나안나</span>의 <br>다양한 서비스를 이용하실 수 있습니다.
    </div>
    <div class="btn_area">
        <button type="button" class="basic-btn01 btn-blue-bg">로그인 하기</button>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');