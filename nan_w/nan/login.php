<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '로그인';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>


<section class="container">
	<div class="login_wrap">
        <div class="top_txt">
            기억이 <strong>나?안나?</strong> <br>기억력 향상을 위한, <strong>나안나!</strong>
        </div>

        <div class="login_form">
            <ul>
                <li><input type="text" placeholder="이메일"></li>
                <li><input type="password" placeholder="비밀번호"></li>
            </ul>
        </div>
        <div class="auto_save">
            <div class="custom_checkbox2">
                <input type="checkbox" id="auto_login">
                <label for="auto_login">자동 로그인</label>
            </div>
        </div>
        <div class="btn_area">
            <button type="button" class="basic-btn01 btn-blue-bd">로그인</button>
        </div>
        <div class="link">
            <ul>
                <li><a href="#">아이디 찾기</a></li>
                <li><a href="#">비밀번호 찾기</a></li>
            </ul>
        </div>

        <div class="sns_area">
            <ul>
                <li>
                    <a href="#"><img src="../img/sns_icon_1.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="../img/sns_icon_2.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="../img/sns_icon_3.svg" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="join_go">
            <span>나안나가 처음이신가요? </span>
            <a href="#">회원가입</a>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');