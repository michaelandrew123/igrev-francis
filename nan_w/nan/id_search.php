<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '아이디 찾기';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container id_search">
	<!--
	<div class="page_top_area">
        <h1>아이디 찾기</h1>
    </div>
	-->

    <div class="img_area">
        <img src="../img/id_search_img.svg" alt="">
    </div>
    <div class="txt_area">
        <div class="txt">
            <strong>이메일 아이디를 잊으셧나요?</strong>
            가입하신 이름과 휴대전화번호를 입력해주세요
        </div>
        <ul>
            <li>
                <input type="text" placeholder="이름">
            </li>
            <li>
                <input type="number" placeholder="휴대전화번호 ('-' 제외)">
            </li>
        </ul>
        <div class="btn_area">
            <button type="button" class="basic-btn01 btn-blue-bg">확인</button>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');