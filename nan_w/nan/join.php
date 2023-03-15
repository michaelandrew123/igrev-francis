<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '회원가입';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container gray_bg">
	<div class="join_wrap">
		<!-- 
        <div class="page_top_area">
            <a href="#" class="btn_back">이전</a>
            <h1>회원가입</h1>
        </div>
		-->

        <ul>
            <li>
                <input type="text" placeholder="이름">
                <div class="error_txt">
                    이름은 필수 입력항목입니다.
                </div>
            </li>
            <li>
                <div class="right_btn">
                    <input type="text" placeholder="휴대전화번호 ( '-' 제외 )">
                    <button type="button" class="basic-btn02 btn-gray-bg">인증번호 발송</button>
                </div>
                <div class="error_txt">
                    휴대전화번호는 필수 입력항목입니다.
                </div>
            </li>
            <li>
                <div class="right_btn">
                    <div class="time_wrap">
                        <input type="text" placeholder="인증번호">
                        <span class="time">10:00</span>
                    </div>
                    <button type="button" class="basic-btn02 btn-blue-bg">확인</button>
                </div>
                <div class="error_txt">
                    인증번호가 일치하지 않습니다. 다시 확인해주기 바랍니다.
                </div>
            </li>
            <li>
                <div class="right_btn">
                    <div class="email_address">
                        <input type="text" placeholder="이메일 주소 ">
                        <span>@</span>
                        <select name="" id="">
                            <option value="">hanmail.net</option>
                        </select>
                    </div>
                    <button type="button" class="basic-btn02 btn-gray-bg">중복확인</button>
                </div>
                <div class="error_txt">
                    이메일을 입력해주세요. 
                </div>
            </li>
            <li>
                <div class="right_btn">
                    <div class="w_2">
                        <input type="text" placeholder="생년월일 ( yrmmdd )">
                        <div class="error_txt">
                            생년월일을 확인해주세요. 
                        </div>
                    </div>
                    <div class="w_2">
                        <select name="" id="" class="ml_5">
                            <option value="">남자</option>
                            <option value="">여자</option>
                        </select>
                        <div class="error_txt">
                            성별을 선택해주세요.
                        </div>
                    </div>
                </div>
                
            </li>
            <li>
                <div class="pw_view_wrap">
                    <input type="password" placeholder="비밀번호를 입력해주세요.">
                    <button type="button" class="password_view"></button>
                </div>
                <div class="error_txt">
                    비밀번호를 입력해주세요.
                </div>
            </li>
            <li>
                <div class="pw_view_wrap">
                    <input type="password" placeholder="비밀번호를 다시 입력해주세요.">
                    <button type="button" class="password_view"></button>
                </div>
                <div class="error_txt">
                    비밀번호를 입력해주세요.
                </div>
            </li>
        </ul>
    </div>

    <div class="join_agree">
        <div class="all_chk">
            <div class="custom_checkbox2">
                <input type="checkbox" id="all_chk">
                <label for="all_chk">모두 동의합니다.</label>
            </div>
        </div>
        <div class="agree_list">
            <ul>
                <li>
                    <div class="custom_checkbox3">
                        <input type="checkbox" id="agree_1">
                        <label for="agree_1">이용약관에 동의합니다. (필수)</label>
                    </div>
                    <button type="button" class="view_more">보기</button>
                </li>
                <li>
                    <div class="custom_checkbox3">
                        <input type="checkbox" id="agree_2">
                        <label for="agree_2">개인정보취급방침에 동의합니다. (필수)</label>
                    </div>
                    <button type="button" class="view_more">보기</button>
                </li>
                <li>
                    <div class="custom_checkbox3">
                        <input type="checkbox" id="agree_3">
                        <label for="agree_3">마케팅 활용 동의 및 광고 수신 동의 (선택)</label>
                    </div>
                    <button type="button" class="view_more">보기</button>
                </li>
            </ul>
        </div>

        <div class="btn_area"><button type="button" class="basic-btn01 btn-blue-bd">가입하기</button></div>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');