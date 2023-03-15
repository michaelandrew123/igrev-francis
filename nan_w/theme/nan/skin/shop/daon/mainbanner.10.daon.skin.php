<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);

$max_width = $max_height = 0;
$bn_first_class = ' class="bn_first"';
$bn_slide_btn = '';
$bn_sl = ' class="bn_sl"';
$main_banners = array();

$item_thumb_html = '';

for ($i=0; $row=sql_fetch_array($result); $i++)
{
    $main_banners[] = $row;

    // 테두리 있는지
    $bn_border  = ($row['bn_border']) ? ' class="sbn_border"' : '';;
    // 새창 띄우기인지
    $bn_new_win = ($row['bn_new_win']) ? ' target="_blank"' : '';

    $bimg = G5_DATA_PATH.'/banner/'.$row['bn_id'];
    $item_html = '';
	

    if (file_exists($bimg))
    {
        $banner = '';
        $size = getimagesize($bimg);

        if($size[2] < 1 || $size[2] > 16)
            continue;

        if($max_width < $size[0])
            $max_width = $size[0];

        if($max_height < $size[1])
            $max_height = $size[1];

        $item_html .= '<div class="swiper-slide swiper-lazy" data-swiper-autoplay="5000">';
        if (preg_match("/^#/", $row['bn_url']))
            $banner .= '<a href="'.$row['bn_url'].'">';
        else if ($row['bn_url'] && $row['bn_url'] != 'http://') {
            $banner .= '<a href="'.G5_SHOP_URL.'/bannerhit.php?bn_id='.$row['bn_id'].'"'.$bn_new_win.'>';
        }
		$item_html .= $banner.'<img src="'.G5_DATA_URL.'/banner/'.$row['bn_id'].'?'.preg_replace('/[^0-9]/i', '', $row['bn_time']).'" width="'.$size[0].'" alt="'.get_text($row['bn_alt']).'"'.$bn_border.'>';
        if($banner)
            $item_html .= '</a>';
		$item_html .= '<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>';
        $item_html .= '</div>';

		$alt_title = $row['bn_alt'] ? cut_str(get_text($row['bn_alt']), 15, '') : '&nbsp;';
		$item_thumb_html  .= '<div class="swiper-slide">'.$alt_title.'</div>';

		
    }
    
    $banner_style = $max_height ? 'style="min-height:'.($max_height + 25).'px"' : '';
   
	if ($i==0) echo '<div id="main_bn"><div class="swiper-container swiper-container-pc"><div class="swiper-wrapper">'.PHP_EOL;
    
    echo $item_html;
}

if ($i > 0) {
    echo '</div>'.PHP_EOL;

	
	echo '<div class="swiper-pagination swiper-pagination-pc"></div><div class="swiper-button-next swiper-button-next-pc"></div><div class="swiper-button-prev swiper-button-prev-pc"></div>'.PHP_EOL;

    echo '</div>'.PHP_EOL;
?>
	<div class="swiper-container gallerythumb gallery-thumbs-pc">
		<div class="swiper-wrapper">			
			<?php 
				echo $item_thumb_html;
			?>
		</div>				
	</div>

<?php
    echo '</div>'.PHP_EOL;
?>

<?php
}
// if($i == 0) echo '<div style="clear:both; width:100%; text-align:center; padding:10px;">관리자모드 > 쇼핑몰현황 기타 >  배너관리에서 메인 PC 배너를 등록하세요.<br>배너등록 및 관리자모드 배너추가 설명은 /theme/테마폴더명/shop/index.php  에 주석처리 되어 있습니다.</div>';
$slide_co = $i;
if($sdlide_co > 6) $sdlide_co = 6; //슬라이드 하단 버튼 6개이상일 경우 6개로 고정
?>
<script>
	/**
	 * Swiper 4.0.7
	 * Most modern mobile touch slider and framework with hardware accelerated transitions
	 * http://www.idangero.us/swiper/
	 *
	 * Copyright 2014-2017 Vladimir Kharlampidi
	 *
	 * Released under the MIT License
	 *
	 * Released on: November 28, 2017
	 */
	//var swiperAnimation = new SwiperAnimation();

	var galleryThumbs = new Swiper('.gallery-thumbs-pc', {
	  spaceBetween: 0,
	  slidesPerView: <?php echo $slide_co?>,
	  loop: <?php if($slide_co > 6) echo "true"; else echo "false";?>,
	  autoHeight: false,
	  calculateHeight:false,
	  freeMode: true,
	  loopedSlides: <?php echo $slide_co?>, //looped slides should be the same					 
	});

	var swiper = new Swiper('.swiper-container-pc', {
		slidesPerView: 1,
		spaceBetween: 0,
		effect:"slide",
		autoHeight: false,
		loop: true, 
		/*
		pagination: {
			el: '.swiper-pagination-pc',
			clickable: true,
		},
		*/
		preloadImages: false,   
		lazy: true,
		lazy: {
			loadPrevNext: true,
		},
		navigation: {
			nextEl: '.swiper-button-next-pc',
			prevEl: '.swiper-button-prev-pc',
		},
		paginationClickable: true,
		speed: 1000,			
		autoplay: {
			delay: 5000,
			disableOnInteraction: false
		},
		/*
		on: {
		  init: function () {
			swiperAnimation.init(this).animate();
		  },
		  slideChange: function () {
			swiperAnimation.init(this).animate();
		  }
		},
		*/
		thumbs: {
			swiper: galleryThumbs
		},
	});

	$( ".swiper-container-pc" ).mouseover(function(){
		$(".swiper-button-next-pc").show();
		$(".swiper-button-prev-pc").show();
	});
	$( ".swiper-container-pc" ).mouseleave(function(){
		$(".swiper-button-next-pc").hide();
		$(".swiper-button-prev-pc").hide();
	});

</script>
