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
        <img src="../img/id_search_img2.svg" alt="">
    </div>
    <div class="txt_area">
        <div class="txt_1">
            입력하신 정보와 <br>일치하는 아이디입니다.
        </div>
        <div class="id_info">
            <div class="title"><span>이메일 아이디</span></div>
            <div class="email_id">
                test@naver.com
            </div>
        </div>
        <div class="btn_area">
            <ul>
                <li>
                    <a href="#" class="basic-btn01 btn-blue-bg">로그인</a>
                </li>
                <li>
                    <a href="#" class="basic-btn01 btn-blue-bd">비밀번호 찾기</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');