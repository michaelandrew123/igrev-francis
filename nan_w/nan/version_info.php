<?php
include_once('../common.php');
define('_SHOP_', true);

$g5['title'] = '버전정보';
include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<section class="container version_info">
    <div class="img_area">
        <img src="../img/version_img.svg" alt="">
    </div>
    <div class="version_list">
        <ul>
            <li>
                <span class="title">현재 버전</span>
                <div class="number">v 0.1</div>
            </li>
            <li>
                <span class="title">최신 버전</span>
                <div class="number">v 0.1</div>
            </li>
        </ul>
    </div>
</section>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');