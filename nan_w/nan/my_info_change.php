<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '내 정보 변경';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container my_info_change">
    <div class="contType_1">
        <div class="title_area">
            <h2>계정정보</h2>
            <div class="right_btn">
                <button type="button" onclick="popup_open('.pw_change_popup');">비밀번호변경</button>
            </div>
        </div>
        <ul class="my_info_list">
            <li>
                <input type="text" value="ghwjd@igrev.kr">
            </li>
            <li>
                <input type="text" value="010-1234-5678" class="tel_number">
            </li>
            <li>
                <input type="text" class="birthday" value="2121-12-31"> 
                <select name="" id="">
                    <option value="#">남자</option>
                </select>
            </li>
        </ul>
        <div class="txt_r">
            <a href="#" class="basic-btn03 btn-gray-bg">회원탈퇴</a>
        </div>

        <div class="btnType">
            <ul>
                <li><button type="button" class="basic-btn01 btn-blue-bd" onclick="popup_open('.change_popup');">변경하기</button></li>
            </ul>
        </div>
    </div>
</section>

<!-- 정보 변경 popup -->
<div class="notification_popup change_popup">
    <div class="popup_cover"></div>
    <div class="popup-content">
        <div class="popup_inner">
            <div class="img_area">
                <img src="../img/my_info_change.svg" alt="">
            </div>
            <div class="txt">
                <strong>내 정보 변경 완료!</strong>
                정보 변경이 완료 되었습니다.
            </div>
            <div class="btn_area">
                <button type="button" class="basic-btn01 btn-blue-bg popup_close">확인</button>
            </div>
        </div>
    </div>
</div>
<!-- // 정보 변경 popup -->

<!-- 비밀번호 변경 popup -->
<div class="popup pw_change_popup">
    <div class="popup_cover"></div>
    <div class="popup-content">
        <div class="popup_inner">
            <div class="txt">
                <strong>비밀번호 변경</strong>
            </div>
            <ul>
                <li>
                    <input type="password" placeholder="변경할 비밀번호">
                    <div class="error_txt">특수기호 포함 8자리 이상으로 입력해주세요.</div>
                </li>
                <li>
                    <input type="password" placeholder="비밀번호 확인">
                    <div class="error_txt">비밀번호가 일치 하지 않습니다.</div>
                </li>
            </ul>
            <div class="btn_area">
                <button type="button" class="basic-btn01 btn-blue-bg popup_close" onclick="popup_open('.pw_change_completion_popup');">확인</button>
            </div>
        </div>
    </div>
</div>
<!-- // 비밀번호 변경 popup -->

<!-- 비밀번호 변경 완료 popup -->
<div class="notification_popup pw_change_completion_popup">
    <div class="popup_cover"></div>
    <div class="popup-content">
        <div class="popup_inner">
            <div class="img_area">
                <img src="../img/pw_change.svg" alt="">
            </div>
            <div class="txt">
                <strong>비밀번호 변경 완료!</strong>
                비밀번호 변경이 완료 되었습니다.
            </div>
            <div class="btn_area">
                <button type="button" class="basic-btn01 btn-blue-bg popup_close">확인</button>
            </div>
        </div>
    </div>
</div>
<!-- // 비밀번호 변경 popup -->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');