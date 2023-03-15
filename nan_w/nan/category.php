<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '카테고리';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container gray_bg category">
	<div class="contType_1">
        <div class="category_list">
            <div class="plus_option">
                <button type="button" class="open_plus_option">나안나에서 제공해드립니다 :)</button>
                <div class="option_list">
                    <ul>
                        <li><button type="button">영어단어</button></li>
                        <li><button type="button">성경구절</button></li>
                    </ul>
                </div>
            </div>
            
            <h2>기억력을 테스트 해보세요!</h2>
            <button type="button" class="btn_test">기억력 테스트</button>
            <h2>내 폴더</h2>
            <ul class="my_folder">
                <li><button type="button" class="folder_name" onclick="popup_open('.name_change_popup');">기본 폴더</button><button type="button" class="btn_delete">삭제</button></li>
                <li><button type="button" class="folder_name" onclick="popup_open('.name_change_popup');">폴더 2</button><button type="button" class="btn_delete">삭제</button></li>
                <li><button type="button" class="folder_name" onclick="popup_open('.name_change_popup');">폴더 3</button><button type="button" class="btn_delete">삭제</button></li>
            </ul>
        </div>
    </div>

    <div class="btn_wrap">
        <button type="button" class="basic-btn01 btn-blue-bd"><span class="plus_icon">폴더추가</span></button>
    </div>
</section>

<!-- popup -->
<div class="popup name_change_popup">
    <div class="popup_cover"></div>
    <div class="popup-content">
        <div class="popup_inner">
            <h1>이름 바꾸기</h1>
            <input type="text" placeholder="이름을 입력하세요">
            <div class="btn_area">
                <button type="button" class="basic-btn01 btn-blue-bg">확인</button>
            </div>
        </div>

    </div>
</div>
<!-- //popup -->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');