<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '보관함';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container gray_bg storage_write">
	<div class="contType_1">
        <ul>
            <li>
                <select name="" id="">
                    <option value="">폴더를 선택해 주세요</option>
                </select>
            </li>
            <li>
                <textarea name="" id="" cols="30" rows="10" placeholder="기억하고 싶은 문장 또는 단어를 적어주세요."></textarea>
            </li>
            <li><input type="text" placeholder="#태그"></li>
        </ul>
    </div>
    <div class="btn_area">
        <button type="button" class="basic-btn01 btn-blue-bd">등록</button>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');