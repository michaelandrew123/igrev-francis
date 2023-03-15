<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '비밀번호 찾기';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>
<section class="container id_search">
    <div class="page_top_area">
        <h1>비밀번호 찾기</h1>
    </div>

    <div class="img_area">
        <img src="../img/pw_search_img.svg" alt="">
    </div>
    <div class="txt_area">
        <div class="txt">
            <strong>비밀번호를 잊으셧나요?</strong>
            나안나에 가입했던 이메일을 입력해주세요. <br>
            비밀번호 변경 링크를 보내드립니다.
        </div>
        <ul>
            <li>
                <input type="password" placeholder="이메일을 입력해주세요">
                <div class="error_txt">
                    이메일을 입력해주세요.
                </div>
            </li>
        </ul>
        <div class="btn_area">
            <button type="button" class="basic-btn01 btn-blue-bg">확인</button>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');