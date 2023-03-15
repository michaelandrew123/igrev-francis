<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '마이페이지';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container gray_bg mypage">
    <div class="contType_1">
        <div class="name_area">
            <div class="name">
                <strong>홍길동</strong>님
            </div>
            <span class="type icon_naver">네이버 계정회원</span> 
        </div>
        <div class="mypage_list">
            <ul>
                <li> <a href="my_info_change.html">내정보 변경</a> </li>
                <li> <a href="my_notice.html">알림</a> </li>
                <li> <a href="version_info.html">버전정보</a> </li>
                <li>
                    <a href="#" class="s_menu_open">약관 및 정책</a>
                    <div class="s_menu">
                        <ul>
                            <li><a href="terms_use.html">이용약관</a></li>
                            <li><a href="privacy_policy.html">개인정보 취급방침</a></li>
                        </ul>
                    </div>
                </li>
                <li> <a href="#">로그아웃</a> </li>
            </ul>
        </div>
    </div>
</section>

<!-- 본인확인 popup -->
<div class="popup identification_popup">
    <div class="popup_cover"></div>
    <div class="popup-content">
        <div class="popup_inner">
            <div class="txt">
                <strong>본인확인</strong>
                본인확인을 위해 비밀번호를 입력해 주세요
            </div>
            <ul>
                <li>
                    <input type="password" placeholder="비밀번호를 입력해주세요">
                    <div class="error_txt">
                        비밀번호가 일치 하지 않습니다.
                    </div>
                </li>
            </ul>
            <div class="btn_area">
                <button type="button" class="basic-btn01 btn-blue-bg popup_close">확인</button>
            </div>
        </div>
    </div>
</div>
<!-- // 본인확인 popup -->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');