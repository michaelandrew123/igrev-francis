<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '폴더이동';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container gray_bg storage_box">
	<div class="contType_1">
		<!--
        <div class="page_top_area">
            <a href="#" class="btn_back">이전</a>
            <h1>폴더이동</h1>
        </div>
		-->

        <div class="folder_move">
            <ul>
                <li>
                    <input type="radio" name="folder_name" id="folder_name_1">
                    <label for="folder_name_1">기본 폴더</label>
                </li>
                <li>
                    <input type="radio" name="folder_name" id="folder_name_2">
                    <label for="folder_name_2">폴더 2</label>
                </li>
                <li>
                    <input type="radio" name="folder_name" id="folder_name_3">
                    <label for="folder_name_3">폴더 3</label>
                </li>
            </ul>
        </div>
    </div>

    <div class="btn_wrap">
        <button type="button" class="basic-btn01 btn-blue-bd">이동하기</button>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');