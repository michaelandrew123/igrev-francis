<?php
include_once('./_common.php');

// if (G5_IS_MOBILE) {
    // include_once(G5_THEME_MSHOP_PATH.'/index.php');
    // return;
// }

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>



<?php if(defined('_INDEX_')) { // index에서만 실행
	include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
} ?>


<?php
	/*		
		메인이미지
		관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "메인" 으로 선택하여 배너를 업로드 하세요.
		배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
		접속기기를 "PC" 로 선택후 PC용 이미지등록
		접속기기를 "모바일" 로 선택후  모바일용 이미지등록

		PC용 이미지 크기 w 2000 × h 500 : 높이는 가변적이어도 되나 모든 이미지 높이가 같아야 합니다.
		모바일용 이미지 크기 w 900 × h 600 : 높이는 가변적이어도 되나 모든 이미지 높이가 같아야 합니다.

		배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
		접속기기를 "PC" 로 선택후 PC용 이미지등록
		접속기기를 "모바일" 로 선택후  모바일용 이미지등록	
	*/	
?>	

<?php echo display_banner_daon('메인', 'mainbanner.10.daon.skin.php'); //PC용 배너출력     파일위치 : 루트/theme/테마폴더/skin/shop/daon/mainbanner.10.daon.skin.php ?>
<?php echo display_banner_daon('메인', 'mainbanner.mobile.daon.skin.php'); //모바일용 배너출력     파일위치 : 루트/theme/테마폴더/skin/shop/daon/mainbanner.mobile.daon.skin.php ?>


<!-- 콘텐츠 시작 { -->
<div id="container">


<?php
	/*		
		히트상품
		관리자모드 > 쇼핑몰관리 > 쇼핑몰설정 > 쇼핑몰초기화면 에서 이미지 크기와 출력스킨을 조정하세요.
		히트상품출력 : 스킨 main.30.skin.php 	1줄당 이미지 수 4		출력할 줄 수 2		이미지 폭 300		이미지 높이 300
		참고) 출력할 줄수를 1이상 선택하시더라도 1줄로만 출력됩니다.
		상품진열은 관리자모드 > 쇼핑몰관리 > 상품유형관리 에서 히트상품에 체크 설정하시면 됩니다. 

		파일위치 : 루트/theme/테마폴더/skin/shop/daon/main.30.daon.skin.php
	*/
?>
<?php if($default['de_type1_list_use']) { ?>

<!-- 히트상품 시작 { -->
<section class="sct_wrap">
	<header>
		<h2><a href="<?php echo shop_type_url('1'); ?>">HIT ITEM</a></h2>
	</header>
	<?php
	 //세일퍼센트 아이콘은 it_cust_price 와 it_price 가 둘다 true일때 나타납니다.
	$list = new item_list();
	$list->set_type(1);
	//$list->set_category("40");	//특정카테고리만 사용시 40 대신 카테고리 코드를 입력
	$list->set_view('it_img', true);
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_basic', true);
	$list->set_view('it_cust_price', true); 
	$list->set_view('it_price', true);		  
	$list->set_view('it_icon', true);
	$list->set_view('sns', true);
	$list->set_view('star', true);	
	echo $list->run();
	?>
</section>
<!-- } 히트상품 끝 -->
<?php } ?>




<?php
	/*		
		관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "배너1" 으로 선택하여 배너를 업로드 하세요.	
		이미지 크기 w 1300 × h 340 : 높이는 가변적이어도 됩니다.
		배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
		접속기기를 "PC와 모바일" 로 선택후 이미지등록 : PC와 모바일 동시에 사용
		배너1 출력위치에 1개만 등록해야 합니다. 

		초기 영카트는  "배너1" 출력위치가 없으므로
		/adm/shop_admin/bannerform.php 페이지의 약 111라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		 <select name="bn_position" id="bn_position">
				<option value="왼쪽" <?php echo get_selected($bn['bn_position'], '왼쪽'); ?>>왼쪽</option>
				<option value="메인" <?php echo get_selected($bn['bn_position'], '메인'); ?>>메인</option>
				<option value="탑배너" <?php echo get_selected($bn['bn_position'], '탑배너'); ?>>탑배너</option>
				<option value="배너1" <?php echo get_selected($bn['bn_position'], '배너1'); ?>>배너1</option>
		</select>


		/adm/shop_admin/bannerlist.php 페이지의 약 56라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		<select name="bn_position" id="bn_position">
			<option value=""<?php echo get_selected($bn_position, '', true); ?>>위치 전체</option>       
			<option value="왼쪽"<?php echo get_selected($bn_position, '왼쪽', true); ?>>왼쪽</option>
			<option value="메인"<?php echo get_selected($bn_position, '메인', true); ?>>메인</option>
			<option value="탑배너" <?php echo get_selected($bn_position, '탑배너'); ?>>탑배너</option>
			<option value="배너1" <?php echo get_selected($bn_position, '배너1'); ?>>배너1</option>
		</select>


		/adm/shop_admin/bannerlist.php line 7 라인의 코드를 수정해야 합니다.
		
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인', '왼쪽'))) ? $_GET['bn_position'] : '';    
		를
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인','왼쪽','탑배너','배너1'))) ? $_GET['bn_position'] : '';    
		로 수정

	*/
?>
<div class="bn_1_li" >
	<?php echo display_banner('배너1','boxbanner.daon.skin.php');  // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?>
</div>







<?php
	/*		
		추천상품
		관리자모드 > 쇼핑몰관리 > 쇼핑몰설정 > 쇼핑몰초기화면 에서 이미지 크기와 출력스킨을 조정하세요.
		추천상품출력 : 스킨 main.10.skin.php 	1줄당 이미지 수 4		출력할 줄 수 2		이미지 폭 300		이미지 높이 300
		상품진열은 관리자모드 > 쇼핑몰관리 > 상품유형관리 에서 추천상품에 체크 설정하시면 됩니다.
		
		파일위치 : 루트/theme/테마폴더/skin/shop/daon/main.10.daon.skin.php
	*/
?>
<?php if($default['de_type2_list_use']) { ?>
<!-- 추천상품 시작 { -->
<section class="sct_wrap">
	<header>
		<h2><a href="<?php echo shop_type_url('2'); ?>">MD`S PICK</a></h2>
	</header>
	<?php
	 //세일퍼센트 아이콘은 it_cust_price 와 it_price 가 둘다 true일때 나타납니다.
	$list = new item_list();
	$list->set_type(2);
	//$list->set_category("40");	//특정카테고리만 사용시 40 대신 카테고리 코드를 입력
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_basic', true);
	$list->set_view('it_cust_price', true);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', true);
	$list->set_view('sns', true);
	$list->set_view('star', true);
	echo $list->run();
	?>
</section>
<!-- } 추천상품 끝 -->
<?php } ?>




<?php
	/*		
		관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "배너2", "배너3" 으로 선택하여 배너를 업로드 하세요.	
		이미지 크기 w 640 × h 290 : 높이는 가변적이어도 되나  "배너2", "배너3" 이미지 2개의 높이가 같아야 합니다.
		배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
		접속기기를 "PC와 모바일" 로 선택후 이미지등록 : PC와 모바일 동시에 사용
		각 출력위치에 배너를 1개만 등록해야 합니다.  
		
		초기 영카트는  "배너2", "배너3" 출력위치가 없으므로
		/adm/shop_admin/bannerform.php 페이지의 약 111라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		<select name="bn_position" id="bn_position">
				<option value="왼쪽" <?php echo get_selected($bn['bn_position'], '왼쪽'); ?>>왼쪽</option>
				<option value="메인" <?php echo get_selected($bn['bn_position'], '메인'); ?>>메인</option>	
				<option value="탑배너" <?php echo get_selected($bn['bn_position'], '탑배너'); ?>>탑배너</option>
				<option value="배너1" <?php echo get_selected($bn['bn_position'], '배너1'); ?>>배너1</option>
				<option value="배너2" <?php echo get_selected($bn['bn_position'], '배너2'); ?>>배너2</option>
				<option value="배너3" <?php echo get_selected($bn['bn_position'], '배너3'); ?>>배너3</option>
		</select>


		/adm/shop_admin/bannerlist.php 페이지의 약 56라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		<select name="bn_position" id="bn_position">
			<option value=""<?php echo get_selected($bn_position, '', true); ?>>위치 전체</option>       
			<option value="왼쪽"<?php echo get_selected($bn_position, '왼쪽', true); ?>>왼쪽</option>
			<option value="메인"<?php echo get_selected($bn_position, '메인', true); ?>>메인</option>
			<option value="탑배너" <?php echo get_selected($bn_position, '탑배너'); ?>>탑배너</option>
			<option value="배너1" <?php echo get_selected($bn_position, '배너1'); ?>>배너1</option>
			<option value="배너2" <?php echo get_selected($bn_position, '배너2'); ?>>배너2</option>
			<option value="배너3" <?php echo get_selected($bn_position, '배너3'); ?>>배너3</option>
		</select>


		/adm/shop_admin/bannerlist.php line 7 라인의 코드를 수정해야 합니다.
		
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인', '왼쪽'))) ? $_GET['bn_position'] : '';    
		를
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인','왼쪽','탑배너','배너1','배너2','배너3'))) ? $_GET['bn_position'] : '';    
		로 수정

	*/
?>
<div class="bn_2_li" style="padding-bottom:40px;">
	<div class="left"><?php echo display_banner('배너2','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php  ?></div>
	<div class="right"><?php echo display_banner('배너3','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php  ?></div>
</div>





<?php
	/*		
		최신상품
		관리자모드 > 쇼핑몰관리 > 쇼핑몰설정 > 쇼핑몰초기화면 에서 이미지 크기와 출력스킨을 조정하세요.
		최신상품출력 : 스킨 main.40.skin.php 	1줄당 이미지 수 3		출력할 줄 수 2		이미지 폭 200		이미지 높이 200
		상품진열은 관리자모드 > 쇼핑몰관리 > 상품유형관리 에서 최신상품에 체크 설정하시면 됩니다.

		파일위치 : 루트/theme/테마폴더/skin/shop/daon/main.40.daon.skin.php
	*/
?>
<?php if($default['de_type3_list_use']) { ?>
<!-- 신규상품 시작 { -->
<section class="sct_wrap" style="margin-bottom:0px;">
	<header>
		<h2><a href="<?php echo shop_type_url('3'); ?>">NEW ARRVALS</a></h2>
	</header>
	<?php
	 //세일퍼센트 아이콘은 it_cust_price 와 it_price 가 둘다 true일때 나타납니다.
	$list = new item_list();
	$list->set_type(3);
	//$list->set_category("40");	//특정카테고리만 사용시 40 대신 카테고리 코드를 입력
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_basic', true);
	$list->set_view('it_cust_price', true);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', true);
	$list->set_view('sns', true);
	$list->set_view('star', false);
	echo $list->run();
	?>
</section>
<!-- } 신규상품 끝 -->
<?php } ?>



<?php
	/*		
		관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "배너4", "배너5", "배너6" 으로 선택하여 배너를 업로드 하세요.	
		이미지 크기 w 420 × h 200 : 높이는 가변적이어도 되나 "배너4", "배너5", "배너6" 이미지 3개의 높이가 같아야 합니다.
		배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
		접속기기를 "PC와 모바일" 로 선택후 이미지등록 : PC와 모바일 동시에 사용
		각 출력위치에 배너를 1개만 등록해야 합니다.  
		
		초기 영카트는  "배너4", "배너5", "배너6" 출력위치가 없으므로
		/adm/shop_admin/bannerform.php 페이지의 약 111라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		 <select name="bn_position" id="bn_position">
				<option value="왼쪽" <?php echo get_selected($bn['bn_position'], '왼쪽'); ?>>왼쪽</option>
				<option value="메인" <?php echo get_selected($bn['bn_position'], '메인'); ?>>메인</option>
				<option value="탑배너" <?php echo get_selected($bn['bn_position'], '탑배너'); ?>>탑배너</option>
				<option value="배너1" <?php echo get_selected($bn['bn_position'], '배너1'); ?>>배너1</option>
				<option value="배너2" <?php echo get_selected($bn['bn_position'], '배너2'); ?>>배너2</option>
				<option value="배너3" <?php echo get_selected($bn['bn_position'], '배너3'); ?>>배너3</option>
				<option value="배너4" <?php echo get_selected($bn['bn_position'], '배너4'); ?>>배너4</option>
				<option value="배너5" <?php echo get_selected($bn['bn_position'], '배너5'); ?>>배너5</option>
				<option value="배너6" <?php echo get_selected($bn['bn_position'], '배너6'); ?>>배너6</option>
		</select>


		/adm/shop_admin/bannerlist.php 페이지의 약 56라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		<select name="bn_position" id="bn_position">
			<option value=""<?php echo get_selected($bn_position, '', true); ?>>위치 전체</option>       
			<option value="왼쪽"<?php echo get_selected($bn_position, '왼쪽', true); ?>>왼쪽</option>
			<option value="메인"<?php echo get_selected($bn_position, '메인', true); ?>>메인</option>
			<option value="탑배너" <?php echo get_selected($bn_position, '탑배너'); ?>>탑배너</option>
			<option value="배너1" <?php echo get_selected($bn_position, '배너1'); ?>>배너1</option>
			<option value="배너2" <?php echo get_selected($bn_position, '배너2'); ?>>배너2</option>
			<option value="배너3" <?php echo get_selected($bn_position, '배너3'); ?>>배너3</option>
			<option value="배너4" <?php echo get_selected($bn_position, '배너4'); ?>>배너4</option>
			<option value="배너5" <?php echo get_selected($bn_position, '배너5'); ?>>배너5</option>
			<option value="배너6" <?php echo get_selected($bn_position, '배너6'); ?>>배너6</option>
		</select>


		/adm/shop_admin/bannerlist.php line 7 라인의 코드를 수정해야 합니다.
		
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인', '왼쪽'))) ? $_GET['bn_position'] : '';    
		를
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인','왼쪽','탑배너','배너1','배너2','배너3','배너4','배너5','배너6'))) ? $_GET['bn_position'] : '';    
		로 수정

	*/
?>
<div class="bn_3_li" style="padding-bottom:20px;">
	<div class="left"><?php echo display_banner('배너4','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
	<div class="center"><?php echo display_banner('배너5','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
	<div class="right"><?php echo display_banner('배너6','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
</div>




<?php
	/*		
		인기상품
		관리자모드 > 쇼핑몰관리 > 쇼핑몰설정 > 쇼핑몰초기화면 에서 이미지 크기와 출력스킨을 조정하세요.
		인기상품출력 : 스킨 main.50.skin.php 	1줄당 이미지 수 5		출력할 줄 수 2		이미지 폭 233		이미지 높이 233
		상품진열은 관리자모드 > 쇼핑몰관리 > 상품유형관리 에서 인기상품에 체크 설정하시면 됩니다.		
		
		파일위치 : 루트/theme/테마폴더/skin/shop/daon/main.50.daon.skin.php
	*/
?>
<?php if($default['de_type4_list_use']) { ?>
<!-- 인기상품 시작 { -->
<section class="sct_wrap">
	<header>
		<h2><a href="<?php echo shop_type_url('4'); ?>">POPULAR  ITEM</a></h2>
	</header>
	<?php
	 //세일퍼센트 아이콘은 it_cust_price 와 it_price 가 둘다 true일때 나타납니다.
	//상품의 순위는 상품등록의 출력순서에 따릅니다.
	$list = new item_list();
	$list->set_type(4);
	//$list->set_category("40");	//특정카테고리만 사용시 40 대신 카테고리 코드를 입력
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_basic', true);
	$list->set_view('it_cust_price', false);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', true);
	$list->set_view('sns', true);
	$list->set_view('star', true);
	echo $list->run();
	?>
</section>
<!-- } 인기상품 끝 -->
<?php } ?>



<?php
	/*		
		관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "배너7", "배너8", "배너9" , "배너10" 으로 선택하여 배너를 업로드 하세요.	
		이미지 크기 w 300 × h 280 : 높이는 가변적이어도 되나 "배너7", "배너8", "배너9" , "배너10"  이미지 4개의 높이가 같아야 합니다.
		배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
		접속기기를 "PC와 모바일" 로 선택후 이미지등록 : PC와 모바일 동시에 사용
		각 출력위치에 배너를 1개만 등록해야 합니다. 
		
		초기 영카트는  "배너7", "배너8", "배너9" , "배너10"  출력위치가 없으므로
		/adm/shop_admin/bannerform.php 페이지의 약 111라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		 <select name="bn_position" id="bn_position">
				<option value="왼쪽" <?php echo get_selected($bn['bn_position'], '왼쪽'); ?>>왼쪽</option>
				<option value="메인" <?php echo get_selected($bn['bn_position'], '메인'); ?>>메인</option>	
				<option value="탑배너" <?php echo get_selected($bn['bn_position'], '탑배너'); ?>>탑배너</option>
				<option value="배너1" <?php echo get_selected($bn['bn_position'], '배너1'); ?>>배너1</option>
				<option value="배너2" <?php echo get_selected($bn['bn_position'], '배너2'); ?>>배너2</option>
				<option value="배너3" <?php echo get_selected($bn['bn_position'], '배너3'); ?>>배너3</option>
				<option value="배너4" <?php echo get_selected($bn['bn_position'], '배너4'); ?>>배너4</option>
				<option value="배너5" <?php echo get_selected($bn['bn_position'], '배너5'); ?>>배너5</option>
				<option value="배너6" <?php echo get_selected($bn['bn_position'], '배너6'); ?>>배너6</option>
				<option value="배너7" <?php echo get_selected($bn['bn_position'], '배너7'); ?>>배너7</option>
				<option value="배너8" <?php echo get_selected($bn['bn_position'], '배너8'); ?>>배너8</option>
				<option value="배너9" <?php echo get_selected($bn['bn_position'], '배너9'); ?>>배너9</option>
				<option value="배너10" <?php echo get_selected($bn['bn_position'], '배너10'); ?>>배너10</option>
		</select>


		/adm/shop_admin/bannerlist.php 페이지의 약 56라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

		<select name="bn_position" id="bn_position">
			<option value=""<?php echo get_selected($bn_position, '', true); ?>>위치 전체</option>       
			<option value="왼쪽"<?php echo get_selected($bn_position, '왼쪽', true); ?>>왼쪽</option>
			<option value="메인"<?php echo get_selected($bn_position, '메인', true); ?>>메인</option>
			<option value="탑배너" <?php echo get_selected($bn_position, '탑배너'); ?>>탑배너</option>
			<option value="배너1" <?php echo get_selected($bn_position, '배너1'); ?>>배너1</option>
			<option value="배너2" <?php echo get_selected($bn_position, '배너2'); ?>>배너2</option>
			<option value="배너3" <?php echo get_selected($bn_position, '배너3'); ?>>배너3</option>
			<option value="배너4" <?php echo get_selected($bn_position, '배너4'); ?>>배너4</option>
			<option value="배너5" <?php echo get_selected($bn_position, '배너5'); ?>>배너5</option>
			<option value="배너6" <?php echo get_selected($bn_position, '배너6'); ?>>배너6</option>
			<option value="배너7" <?php echo get_selected($bn_position, '배너7'); ?>>배너7</option>
			<option value="배너8" <?php echo get_selected($bn_position, '배너8'); ?>>배너8</option>
			<option value="배너9" <?php echo get_selected($bn_position, '배너9'); ?>>배너9</option>
			<option value="배너10" <?php echo get_selected($bn_position, '배너10'); ?>>배너10</option>
		</select>


		/adm/shop_admin/bannerlist.php line 7 라인의 코드를 수정해야 합니다.
		
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인', '왼쪽'))) ? $_GET['bn_position'] : '';    
		를
		$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인','왼쪽','탑배너','배너1','배너2','배너3','배너4','배너5','배너6','배너7','배너8','배너9','배너10'))) ? $_GET['bn_position'] : '';    
		로 수정
		

	*/
?>
<div class="bn_4_li" style="padding-top:50px; padding-bottom:20px;">
	<div class="left1"><?php echo display_banner('배너7','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
	<div class="left2"><?php echo display_banner('배너8','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
	<div class="right1"><?php echo display_banner('배너9','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
	<div class="right2"><?php echo display_banner('배너10','boxbanner.daon.skin.php'); // 파일위치 : 루트/theme/테마폴더/skin/shop/daon/boxbanner.daon.skin.php ?></div>
</div>




<?php
	/*		
		할인상품
		관리자모드 > 쇼핑몰관리 > 쇼핑몰설정 > 쇼핑몰초기화면 에서 이미지 크기와 출력스킨을 조정하세요.
		할인상품출력 : 스킨 main.20.skin.php 	1줄당 이미지 수 4		출력할 줄 수 2		이미지 폭 300		이미지 높이 300
		상품진열은 관리자모드 > 쇼핑몰관리 > 상품유형관리 에서 할인상품에 체크 설정하시면 됩니다.	

		사용스킨 : 루트/theme/테마폴더/skin/shop/daon/main.20.skin.php
		세팅은 : /theme/테마폴더명/shop/de_type5_list_ajax.php에서 세팅합니다.
	*/
?>
<?php if($default['de_type5_list_use']) { ?>
<!-- 할인상품 시작 { -->
<section class="sct_wrap">
	<header>
		<h2><a href="<?php echo shop_type_url('5'); ?>">HOT SALE</a></h2>
	</header>
	<div id="de_type5_list_ajax"></div>
	<?php 
		/*			
		아래 스크립트는 모바일 반응형에서 가로 진열개수를 재조정하기 위한 코드입니다.
		사용스킨 : 루트/theme/테마폴더/skin/shop/daon/main.20.skin.php
		에만 적용되는 코드이므로 수정/삭제하지 마시고 그대로 사용하시면 됩니다.
		*/
	?>
	<script>
		var wi_d_th = $(window).width();		
		var allData = { "w_width": wi_d_th};
		$.ajax({
			url: "<?php echo G5_THEME_URL;?>/shop/de_type5_list_ajax.php",
			type: "POST",
			data: allData,
			success: function(data){
				$("#de_type5_list_ajax").html(data);
			}
		});
	</script>
</section>
<!-- } 할인상품 끝 -->
<?php } ?>




</div>

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');