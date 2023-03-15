<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$q = isset($_GET['q']) ? clean_xss_tags($_GET['q'], 1, 1) : '';

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

/* 여기서부터 절대 삭제하지 마세요. */
for($ii = 1; $ii<=5; $ii++){$default['de_type'.$ii.'_list_skin'] = str_replace(".skin.",".daon.skin.", $default['de_type'.$ii.'_list_skin']);}
if($ca['ca_skin']) $ca['ca_skin'] = str_replace(".skin.",".daon.skin.", $ca['ca_skin']);
$default['de_rel_list_skin'] = str_replace(".skin.",".daon.skin.", $default['de_rel_list_skin']);
$default['de_search_list_skin'] = str_replace(".skin.",".daon.skin.", $default['de_search_list_skin']);
$default['de_listtype_list_skin'] = str_replace(".skin.",".daon.skin.", $default['de_listtype_list_skin']);
if($ev['ev_skin']) $ev['ev_skin'] = str_replace(".skin.",".daon.skin.", $ev['ev_skin']);
/* 여기까지 절대 삭제하지 마세요. */

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_javascript('<script src="'.G5_JS_URL.'/slick.js"></script>', 10);
add_javascript('<script src="'.G5_JS_URL.'/sb_common.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/css/common.css">', 0);

if($_OS_ == 'mobile'){
if(!defined('G5_IS_SHOP_AJAX_LIST') && $config['cf_kakao_js_apikey']) { ?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js"></script>
<script>
    // 사용할 앱의 Javascript 키를 설정해 주세요.
    Kakao.init("<?php echo $config['cf_kakao_js_apikey']; ?>");
</script>
<?php }
}
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E2D14LX19B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E2D14LX19B');
</script>

<?php
		/*		
			탑배너
			관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "탑배너" 로 선택하여 배너를 업로드 하세요.			
			배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
			접속기기를 "PC" 로 선택후 PC용 이미지등록
			접속기기를 "모바일" 로 선택후  모바일용 이미지등록

			이미지 사이즈  pc용 w 1300 × h 100 / 모바일용  w 1000× h 250

			초기 영카트는  "탑배너" 출력위치가 없으므로
			/adm/shop_admin/bannerform.php 페이지의 약 111라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

			<select name="bn_position" id="bn_position">
					<option value="왼쪽" <?php echo get_selected($bn['bn_position'], '왼쪽'); ?>>왼쪽</option>
					<option value="메인" <?php echo get_selected($bn['bn_position'], '메인'); ?>>메인</option>				
					<option value="탑배너" <?php echo get_selected($bn['bn_position'], '탑배너'); ?>>탑배너</option>
			</select>

			/adm/shop_admin/bannerlist.php 페이지의 약 56라인  <select name="bn_position" id="bn_position"> select 박스에 출력위치를 추가해 주셔야 합니다.

			<select name="bn_position" id="bn_position">
				<option value=""<?php echo get_selected($bn_position, '', true); ?>>위치 전체</option>       
				<option value="왼쪽"<?php echo get_selected($bn_position, '왼쪽', true); ?>>왼쪽</option>
				<option value="메인"<?php echo get_selected($bn_position, '메인', true); ?>>메인</option>
				<option value="탑배너" <?php echo get_selected($bn_position, '탑배너'); ?>>탑배너</option>
			</select>


			/adm/shop_admin/bannerlist.php line 7 라인의 코드를 수정해야 합니다.
			
			$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인', '왼쪽'))) ? $_GET['bn_position'] : '';    
			를
			$bn_position = (isset($_GET['bn_position']) && in_array($_GET['bn_position'], array('메인','왼쪽','탑배너'))) ? $_GET['bn_position'] : '';    
			로 수정

		*/
?>
<section id="top_banner" <?php if($_COOKIE['topBanner']) echo "style=\"display:none;\""?>>
	<div class="pc">
		<button class="top_banner_close">1day close&nbsp;&nbsp;<i class="fa fa-times-circle" aria-hidden="true"></i></button>
		<?php echo display_banner_daon('탑배너','boxbanner.mobile.daon.skin.php'); //PC용 배너출력?>
	</div>
	<div class="mobile">
		<button class="top_banner_close">1day close&nbsp;&nbsp;<i class="fa fa-times-circle" aria-hidden="true"></i></button>
		<?php echo display_banner_daon('탑배너', 'boxbanner.mobile.daon.skin.php'); //모바일용 배너출력?>
	</div>
</section>
<script language="JavaScript">
	<!--
		//쿠키저장 함수
		function setCookie_T( name, value) { 
			document.cookie = name + "=" + escape( value ) + "; path=/;" 
		}

		$(document).ready(function(){
			$("#top_banner .top_banner_close").click(function(){			
				setCookie_T( "topBanner", "tt"); 		
				$('#top_banner').slideUp(500); 
			});
		});

	//-->

	var userAgent = navigator.userAgent.toLowerCase();
	var member_id = "<?php echo $member['mb_id'] ?>";

    function setToken(itoken) {
        $("#token").val(itoken);
        var os = "";
        if(userAgent.indexOf("igrev-aos") > -1){
            os = "aos";
        } else if(userAgent.indexOf("igrev-ios") > -1){
            os = "ios";
        }
         console.log(itoken+os);
         $.ajax({
             url: "/ajax.set.token.php",
             type: "POST",
             data: {
                 "token": itoken,
                 "os": os
             },
             dataType: "json",
             success: function(data, textStatus) {			
              	 console.log(data.message);            	
             }
         });
     //   $.get("/ajax.set_token.php?token="+itoken+os, function(r){});
    }
    
    function openBrowser(_url){
        // alert(_url);
        if (userAgent.search("igrev-aos") > -1) {
            //alert("igrev-aos");
            window.kbanker.openUrl(_url);
        }else if (userAgent.search("igrev-ios") > -1 && location.href.indexOf("graph.php") < 0 ) {
            //alert("jios");
            window.webkit.messageHandlers.kbanker.postMessage({"name":"openUrl", "param":{"url":_url}});
        } else {
            location.href = _url;
        }
    }
    
    function oB(_url){
        openBrowser(_url);
    }
    
    $(function(){
            
            var token = '';
            var userAgent = navigator.userAgent.toLowerCase();
    
            var getTokenInterval = setInterval(function(){
                console.log("getToken");
                if (userAgent.indexOf("igrev-aos") > 0) {
                    token = window.naanna.getToken();
                }else if (userAgent.indexOf("igrev-ios") > 0){
                    token = window.webkit.messageHandlers.naanna.postMessage({"name":"getToken", "param":{}});
                }
    
            }, 2000);
    
            var setTokenInterval = setInterval(function(){
                console.log("setToken");
                if($("#token").val() == ''){
                    setToken(token);
                }else{
                    clearInterval(getTokenInterval);
                    clearInterval(setTokenInterval);
                }
    
            }, 5000);
    
    		if(userAgent.indexOf("igrev-aos") <= -1 && userAgent.indexOf("igrev-ios") <= -1){
    			clearInterval(getTokenInterval);
                clearInterval(setTokenInterval);
            }
        
            if(member_id != ""){
    
                //자동로그인
                // if (userAgent.search("igrev-aos") > -1) {
                //     window.kbanker.getAutoLogin();
                // }else if (userAgent.search("igrev-ios") > -1) {
                //     window.webkit.messageHandlerskbanker.postMessage({"name":"getAutoLogin","param":{}});
                // }else{
                //     console.log("getAutoLogin");
                // }
    
            }

    
        });
</script>

<?php 
	/*	모바일용 상단 메뉴입니다. */
?>
<header id="mobile_hd">
    <?php if ((!$bo_table || $w == 's' ) && defined('_INDEX_')) { ?><h1><?php echo $config['cf_title'] ?></h1><?php } ?>

    <!-- <div id="skip_to_container"><a href="#container">본문 바로가기</a></div> -->


    <ul id="mobile_hd_mb">        
        <?php if ($is_member) { ?>
        <?php if ($is_admin) {  ?>
        <li><a href="<?php echo G5_ADMIN_URL ?>/shop_admin/"><b>관리자</b></a></li>
        <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">로그아웃</a></li>
        <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>">로그인</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php" id="snb_join">회원가입</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이쇼핑</a></li>
		<li><a href="<?php echo G5_BBS_URL; ?>/qawrite.php">1:1문의</a></li>
    </ul>

    <div id="mobile_hd_wr" <?php if(!defined('_INDEX_')) echo "style='margin-bottom:15px;'";?>>
        <div id="mobile_logo"><a href="/"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a></div>
        <div id="mobile_hd_btn">
            <button type="button" id="mobile_btn_hdcate"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">분류</span></button>
			<a href="<?php echo NAN_URL; ?>/regCard" class="search"><img src="<?php echo G5_IMG_URL ?>/more-btn.gif" class="more-btn"  alt="보관함"></a>
            <a href="<?php echo NAN_URL; ?>/push"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="sound_only">알림</span><span class="cart-count cart-countT"><?php echo getNotiCnt(); ?></span></a>
        </div>
    </div>
	<?php include_once(G5_THEME_SHOP_PATH.'/category_mobile.php');  // 분류  파일위치 : theme/테마폴더명/shop/category_mobile.php ?> 
    <script>
    $( document ).ready( function() {
        var jbOffset = $( '#mobile_hd_wr' ).offset();
        $( window ).scroll( function() {
            if ( $( document ).scrollTop() > jbOffset.top ) {
                $( '#mobile_hd_wr' ).addClass( 'fixed' );
            }
            else {
                $( '#mobile_hd_wr' ).removeClass( 'fixed' );
            }
        });
    });
	
	 function catetory_menu_fn( is_open ){
		var $cagegory = $("#mobile_category");

		if( is_open ){
			$cagegory.fadeIn();
			$("body").addClass("is_hidden");
		} else {
			$cagegory.fadeOut();
			$("body").removeClass("is_hidden");
		}
	}

	$(document).on("click", "#mobile_btn_hdcate", function(e) {
		// 오픈
		catetory_menu_fn(1);
	}).on("click", ".menu_close", function(e) {
		// 숨김
		catetory_menu_fn(0);
	}).on("click", ".cate_bg", function(e) {
		// 숨김
		catetory_menu_fn(0);
	});

   </script>
</header>






<?php 
	/*	PC용 상단 메뉴입니다. */
?>
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <!-- <div id="skip_to_container"><a href="#container">본문 바로가기</a></div> -->

  
    <div id="tnb">
        <h3>회원메뉴</h3>    
		<ul>
			 <!--<li class="tnb_left"><a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>
            <li class="tnb_left"><a href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1문의</a></li>
            <li class="tnb_left"><a href="<?php echo G5_SHOP_URL; ?>/personalpay.php">개인결제</a></li> -->
            <li class="tnb_left"><a href="<?php echo G5_SHOP_URL; ?>/itemuselist.php">사용후기</a></li>
            <li class="tnb_left"><a href="<?php echo G5_SHOP_URL; ?>/itemqalist.php">상품문의</a></li>
			<li class="tnb_left"><a href="<?php echo get_pretty_url('notice'); ?>">공지사항</a></li>
			<li class="tnb_left"><a href="<?php echo get_pretty_url('qa'); ?>">질문과답변</a></li>
			<li class="tnb_left"><a href="<?php echo get_pretty_url('event'); ?>">이벤트</a></li>
			<li class="tnb_left"><a href="<?php echo get_pretty_url('review'); ?>">포토리뷰</a></li>
            <li class="tnb_left"><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php">쿠폰존</a></li>

            <?php if(defined('G5_COMMUNITY_USE') && G5_COMMUNITY_USE) { ?>
            <li class="tnb_left tnb_shop"><a href="<?php echo G5_SHOP_URL; ?>/"><i class="fa fa-shopping-bag" aria-hidden="true"></i> 쇼핑몰</a></li>
            <li class="tnb_left tnb_community"><a href="<?php echo G5_URL; ?>/"><i class="fa fa-home" aria-hidden="true"></i> 커뮤니티</a></li>
            <?php } ?>
            <li class="tnb_cart"><a href="<?php echo NAN_URL; ?>/push"><i class="fa fa-bell-o" aria-hidden="true"></i> 알림 <span class="cart-countT"><?php echo getNotiCnt(); ?></span></a></li>           
            <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이쇼핑</a></li>
            <?php if ($is_member) { ?>
            <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop"><?php echo $member["mb_name"]?>님! 로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL; ?>/shop_admin/"><b>관리자</b></a></li>
            <?php }  ?>
            <?php } else { ?>
            <li><a href="<?php echo G5_BBS_URL; ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>"><b>로그인</b></a></li>
            <?php } ?>
        </ul>
    </div>
    <div id="hd_wrapper">
        <div id="logo"><a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a></div>

        <div id="hd_scha">
            <h3>쇼핑몰 검색</h3>
            <form name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);">
            <label for="sch_str" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="sch_str" required>
            </form>
            <script>
            function search_submit(f) {
                if (f.q.value.length < 2) {
                    alert("검색어는 두글자 이상 입력하십시오.");
                    f.q.select();
                    f.q.focus();
                    return false;
                }
                return true;
            }
            </script>
        </div>

        <?php
			
			/*
			상단 미니 슬라이드 배너
			관리자모드 > 쇼핑몰현황 기타 > 배너관리에서 출력위치를 "왼쪽" 으로 선택하여 배너를 업로드 하세요.			
			배너는 종료일시가 지나면 출력되지 않기 때문에 종료일시를 2099-mm-dd 로 등록하세요. 
			접속기기를 "PC/모바일" 로 선택후 이미지등록

			이미지 사이즈  pc/모바일 공통 w 285 × h 100
			*/
		?>
        <?php echo display_banner('왼쪽'); ?>
        <!-- } 쇼핑몰 배너 끝 -->
    </div>
	<?php
		/*
			상품분류입니다.
			카테고리를 출력할 수 있는 가로크기가 한정적이므로 카테고리 개수를 적당하게 조절하여 사용하십시오.
		*/
	?>
    <div id="hd_menu">		
		<div class="hd_menu_all">	
		  <ul class="ul_1st">
			<li><button type="button" id="menu_open"><i class="fa fa-bars" aria-hidden="true"></i></button></li>
			<?php if($default['de_type1_list_use']) { ?><li><a href="<?php echo shop_type_url('1'); ?>">히트상품</a></li><?php }?>
			<?php if($default['de_type2_list_use']) { ?><li><a href="<?php echo shop_type_url('2'); ?>">추천상품</a></li><?php }?>
			<?php if($default['de_type3_list_use']) { ?><li><a href="<?php echo shop_type_url('3'); ?>">최신상품</a></li><?php }?>
			<?php if($default['de_type4_list_use']) { ?><li><a href="<?php echo shop_type_url('4'); ?>">인기상품</a></li><?php }?>
			<?php if($default['de_type5_list_use']) { ?><li><a href="<?php echo shop_type_url('5'); ?>">할인상품</a></li><?php }?>
			<?php 
				
				/*
					상단의 카테고리가 들어갈 공간은 한정적입니다. 따라서 원하시는 카테고리만 출력이 가능합니다.					
					메뉴가 넓이 조정은 전체 css 파일에서 #hd_menu .ul_1st > li > a  의 padding 를 조정하세요.(2군데) css 파일명은 다운로드 받으신 pdf 파일설명서에서 확인가능합니다.							
				*/
				$top_view_category = "10|20|30|40|50|60|70|80|90|a0"; //출력을 원하시는 1차 카테고리를 " | "를 구분자로 입력하세요. 만약 전체출력을 원하시면 $top_view_category = ""; 와 같이 값을 비웁니다. 	
				$top_2nd = true; // 2차메뉴를 출력하시려면 true, 숨기려면 false 를 입력하세요.
				$top_3rd = true; //  3차메뉴를 출력하시려면 true, 숨기려면 false 를 입력하세요.
				$top_4th = true; //  4차메뉴를 출력하시려면 true, 숨기려면 false 를 입력하세요.
				include_once(G5_SHOP_SKIN_PATH.'/boxcategory.daon.skin.php'); // 상품분류가 자동으로 출력됩니다.  파일위치 : theme/테마폴더명/skin/shop/daon/boxcategory.daon.skin.php
			
			?>		
		</ul>
		<?php include_once(G5_THEME_SHOP_PATH.'/category_pc.php'); // 전체카테고리 보기  전체 카테고리는 2차까지 출력됩니다.  파일위치 : theme/테마폴더명/shop/category_pc.php ?>
		</div>
    </div>	
</div>





<?php 
	/* pc 오른쪽 사이드메뉴입니다. */
?>
<style>
	/*#side_menu *{border:1px solid red;}*/
</style>
<div id="side_menu" >	
	<button class="side_op_bt sop_bt" ><i class="fa fa-chevron-left" aria-hidden="true"></i><!-- <span class="qk_tit">사이드메뉴</span> --></button>
	<ul id="quick">
		<li><button class="btn_sm_cl1 btn_sm"><i class="fa fa-github-alt" aria-hidden="true"></i><span class="qk_tit">마이메뉴</span></button></li>
		<li><button class="btn_sm_cl2 btn_sm"><i class="fa fa-th-large" aria-hidden="true"></i><span class="qk_tit">오늘 본 상품</span></button></li>
		<li><button class="btn_sm_cl4 btn_sm"><i class="fa fa-heart" aria-hidden="true"></i><span class="qk_tit">위시리스트</span></button></li>		
    </ul>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <div id="tabs_con">
	    <div class="side_mn_wr1 qk_con">
	    	<div class="qk_con_wr">
	    		<?php echo outlogin('theme/shop_side'); // 아웃로그인 ?>
		        <ul class="side_tnb">
		        	<li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">- 마이쇼핑</a></li>
					<li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">- 주문내역</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/faq.php">- FAQ</a></li>
		            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">- 1:1문의</a></li>
		            <li><a href="<?php echo G5_SHOP_URL ?>/personalpay.php">- 개인결제</a></li>
		            <li><a href="<?php echo G5_SHOP_URL ?>/itemuselist.php">- 사용후기</a></li>
		            <li><a href="<?php echo G5_SHOP_URL ?>/itemqalist.php">- 상품문의</a></li>
		            <li><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php">- 쿠폰존</a></li>
		            <li><a href="<?php echo get_pretty_url('notice'); ?>">- 공지사항</a></li>
		            <li><a href="<?php echo get_pretty_url('qa'); ?>">- 질문과답변</a></li>
		            <li><a href="<?php echo get_pretty_url('event'); ?>">- 이벤트</a></li>
		            <li><a href="<?php echo get_pretty_url('review'); ?>">- 포토리뷰</a></li>
		        </ul>	        	
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">나의정보 닫기</span></button>
	    	</div>
	    </div>
	    <div class="side_mn_wr2 qk_con">
	    	<div class="qk_con_wr">
	        	<?php include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품    파일위치 : theme/테마폴더명/skin/shop/daon/boxtodayview.skin.php ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">오늘 본 상품 닫기</span></button>
	    	</div>
	    </div>
	    <div class="side_mn_wr3 qk_con">
	    	<div class="qk_con_wr">
	        	<?php include_once(G5_SHOP_SKIN_PATH.'/boxcart.skin.php'); // 장바구니    파일위치 : theme/테마폴더명/skin/shop/daon/boxcart.skin.php  ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">장바구니 닫기</span></button>
	    	</div>
	    </div>
	    <div class="side_mn_wr4 qk_con">
	    	<div class="qk_con_wr">
	        	<?php include_once(G5_SHOP_SKIN_PATH.'/boxwish.skin.php'); // 위시리스트      파일위치 : theme/테마폴더명/skin/shop/daon/boxwish.skin.php ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">위시리스트 닫기</span></button>
	    	</div>
	    </div>
    </div>
</div>
<script>
jQuery(function ($){
	
	var active_class = "btn_sm_on",
	side_btn_el = "#quick .btn_sm",
	quick_container = ".qk_con";


	$(".btn_member_mn").on("click", function() {
        $(".member_mn").toggle();
        $(".btn_member_mn").toggleClass("btn_member_mn_on");
    });
    
	 $(document).on("click", ".sop_bt", function(e){
		 $(".side_mn_wr1").show();
		 $("#side_menu").stop().animate({'right':'0px'},500);	
		 $(this).removeClass('sop_bt');		 
		 $(this).addClass('scl_bt');		 	 
		 $(this).find('i').removeClass('fa-chevron-left'); 	 
		 $(this).find('i').addClass('fa-chevron-right');				
	 });
	
	 $(document).on("click", ".scl_bt", function(e){
		 $(".side_mn_wr1").show();
		 $("#side_menu").stop().animate({'right':'-281px'},500);	
		 $(this).removeClass('scl_bt');		 
		 $(this).addClass('sop_bt');		 	 
		 $(this).find('i').removeClass('fa-chevron-right'); 	 
		 $(this).find('i').addClass('fa-chevron-left');	
		 $(side_btn_el).removeClass(active_class);
	 });


    $(document).on("click", side_btn_el, function(e){
        e.preventDefault();	
        var $this = $(this);
        
        if (!$this.hasClass(active_class)) {
            $(side_btn_el).removeClass(active_class);
            $this.addClass(active_class);
        }
		$(quick_container).hide();		

        if( $this.hasClass("btn_sm_cl1") ){
            $(".side_mn_wr1").fadeIn();
        } else if( $this.hasClass("btn_sm_cl2") ){
            $(".side_mn_wr2").fadeIn();
        } else if( $this.hasClass("btn_sm_cl3") ){
            $(".side_mn_wr3").fadeIn();
        } else if( $this.hasClass("btn_sm_cl4") ){
            $(".side_mn_wr4").fadeIn();
        }
    }).on("click", ".con_close", function(e){
        $(quick_container).fadeOut();
        $(side_btn_el).removeClass(active_class);
    });

	$(window).scroll(function(){
		$(".scl_bt").trigger("click");
	});
	

    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>
<!-- } 상단 끝 -->







<div id="wrapper" style="clear:both;">  

	 <?php if (!defined("_INDEX_")) { ?>

		<!-- 콘텐츠 시작 { -->
		<div id="container">

	 <?php
		$content_class = array('shop-content');
		if( isset($it_id) && isset($it) && isset($it['it_id']) && $it_id === $it['it_id']){
			$content_class[] = 'is_item';
		}
		if( defined('IS_SHOP_SEARCH') && IS_SHOP_SEARCH ){
			$content_class[] = 'is_search';
		}
		if( defined('_INDEX_') && _INDEX_ ){
			$content_class[] = 'is_index';
		}
	?>
	<!-- .shop-content 시작 { -->
	<div class="<?php echo implode(' ', $content_class); ?>">
		<?php if($bo_table) $g5['title'] = $board['bo_subject'];?>		
		<?php if (!defined('_INDEX_')) { ?><div id="wrapper_title"><?php echo $g5['title'] ?></div><?php } ?>
		<!-- 글자크기 조정 display:none 되어 있음 시작 { -->
		<div id="text_size">
			<button class="no_text_resize" onclick="font_resize('container', 'decrease');">작게</button>
			<button class="no_text_resize" onclick="font_default('container');">기본</button>
			<button class="no_text_resize" onclick="font_resize('container', 'increase');">크게</button>
		</div>
		<!-- } 글자크기 조정 display:none 되어 있음 끝 -->

	<?php }?>