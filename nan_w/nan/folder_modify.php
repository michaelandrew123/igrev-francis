<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '기본폴더';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container gray_bg">
	<div class="contType_1">
		<!--
        <div class="page_top_area">
            <a href="#" class="btn_back">이전</a>
            <h1>기본폴더</h1>
        </div>
		-->

        <div class="folder_modify">
            <ul>
                <li><textarea name="" id="" cols="30" rows="10" placeholder="메모 타이틀 보여지는곳"></textarea></li>
                <li><input type="text" placeholder="#태그"></li>
            </ul>
        </div>
    </div>

    <div class="btn_wrap">
        <button type="button" class="basic-btn01 btn-blue-bg">저장</button>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');