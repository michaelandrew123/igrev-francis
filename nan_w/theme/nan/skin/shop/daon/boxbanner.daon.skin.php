<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
?>

<div class="bn_banner_x">
<?php
for ($i=0; $row=sql_fetch_array($result); $i++)
{
    //print_r2($row);
    // 테두리 있는지
    $bn_border  = ($row['bn_border']) ? ' class="sbn_border"' : '';;
    // 새창 띄우기인지
    $bn_new_win = ($row['bn_new_win']) ? ' target="_blank"' : '';

    $bimg = G5_DATA_PATH.'/banner/'.$row['bn_id'];
    if (file_exists($bimg))
    {
        $banner = '';
        $size = getimagesize($bimg);
        if (preg_match("/^#/", $row['bn_url']))
            $banner .= '<a href="'.$row['bn_url'].'">';
        else if ($row['bn_url'] && $row['bn_url'] != 'http://') {
            $banner .= '<a href="'.G5_SHOP_URL.'/bannerhit.php?bn_id='.$row['bn_id'].'"'.$bn_new_win.'>';
        }
		 echo $banner.'<img src="'.G5_DATA_URL.'/banner/'.$row['bn_id'].'?'.preg_replace('/[^0-9]/i', '', $row['bn_time']).'" alt="'.get_text($row['bn_alt']).'" width="'.$size[0].'" height="'.$size[1].'"'.$bn_border.'>';
        if($banner)
            echo '</a>'.PHP_EOL;
    }
}
if($i == 0) echo '<div style="clear:both; width:100%; text-align:center; padding:10px;">관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 배너를 등록하세요.<br>배너등록 및 관리자모드 배너추가 설명은 /theme/테마폴더명/shop/shop.head.php, /theme/테마폴더명/shop/index.php  에 주석처리 되어 있습니다.</div>';
?>
</div>