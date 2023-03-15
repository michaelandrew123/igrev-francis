<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '알림';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container my_notice">
    <div class="title_area">
        <div class="title">
            알림 활성화
        </div>
        <div class="right_area">
            <div class="switch">
                <label class="el-switch">
                    <input type="checkbox" name="switch" class="all_view ">
                    <span class="el-switch-style"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="time_select">
        <select name="" id="">
            <option value="#">18 시</option>
        </select>
        <select name="" id="">
            <option value="#">30 분</option>
        </select>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');