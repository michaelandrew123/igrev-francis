<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>




<?php if (!defined("_INDEX_")) { ?>       
		</div>  <!-- } .shop-content 끝 -->
	</div>  <!-- } #container 끝 -->
<?php }?>	
</div> <!-- } #wrapper 전체 콘텐츠 끝 -->



<div id="community">	

	<div id="comm_area">
		<div class="comm_cs">
			<h4>Customer center</h4>
			<p class="tel"><?php if($_OS_ == "mobile"){?><a href="tel:<?php echo $default['de_admin_company_tel']; ?>"><?php }?><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $default['de_admin_company_tel']; ?><?php if($_OS_ == "mobile"){?></a><?php }?></p>		
			<p style="font-weight:700;">TEL 070-1234-5678<br>H.P 010-1234-5678</p>
			<p>평일 08:30~18:30<br>토,일,공휴일 : 휴무</p>
		</div>
		<div class="comm_bank"> 
			<h4>bank info</h4>
			<p>국민은행 1234-5678-9012<br>예금주 : <strong>홍길동</strong></p>
		</div>
		<div class="comm_notice">
			<h4>notice</h4>
		   <!-- 커뮤니티 최신글 시작 { -->
			<section id="sidx_lat">				
				<?php echo latest('theme/daon_shop_basic', 'notice', 5, 30); ?> <?php /* latest('theme/daon_shop_basic', '게시판테이블명', 출력할개수, 제목길이); */?>
			</section>
        <!-- } 커뮤니티 최신글 끝 -->
			
		</div>
		
		<div class="comm_quick">
			<h4>RETURN / EXCHANGE</h4>
			<p><strong><?php echo $default['de_admin_company_addr']; ?></strong><br>자세한 교환·반품절차 안내는 상품하단을 참고해주세요</p><p>
			</p><ul>
				<li><a href="<?php echo G5_SHOP_URL; ?>/cart.php"><span><i class="fa fa-shopping-basket" aria-hidden="true"></i></span><p>장바구니</p></a></li>
				<li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php"><span><i class="fa fa-truck" aria-hidden="true"></i></span><p>배송조회</p></a></li>
				<li><a href="<?php echo G5_BBS_URL; ?>/qawrite.php"><span><i class="fa fa-commenting" aria-hidden="true"></i></span><p>1:1문의</p></a></li>
				<li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php"><span><i class="fa fa-desktop" aria-hidden="true"></i></span><p>주문조회</p></a></li>
			</ul>
		</div>
	</div>
</div>


<div id="ft">
    <div class="ft_wr">
        <ul class="ft_ul">
			<li><a href="<?php echo G5_SHOP_URL; ?>/">홈으로</a></li>
            <li><a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a></li>
            <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a></li>
            <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a></li>
            <!-- <li><a href="<?php echo get_device_change_url(); ?>">모바일버전</a></li> --><?php /* 반응형으로 모바일버전은 사용하지 않습니다. */?>
        </ul>
        
        <a href="<?php echo G5_SHOP_URL; ?>/" id="ft_logo"><img src="<?php echo G5_DATA_URL; ?>/common/logo_img2" alt="처음으로"></a>

        <div class="ft_info">
            <span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>
            <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span><br class="saview">
            <span><b>주소</b> <?php echo $default['de_admin_company_addr']; ?></span><br class="saview">
            <span><b>TEL</b> <?php echo $default['de_admin_company_tel']; ?></span>
            <span><b>FAX</b> <?php echo $default['de_admin_company_fax']; ?></span><br class="saview">
            <span><b>개인정보책임관리자</b> <?php echo $default['de_admin_info_name']; ?></span><br>
            <span><b>사업자등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span><br class="saview">
            <span><b>통신판매업신고번호</b> <?php echo $default['de_admin_tongsin_no']; ?></span><br class="saview">
            <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
            <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>

            <p>COPYRIGHT &copy; 2020 <?php echo $default['de_admin_company_name']; ?> ALL RIGHTS RESERVED.</p>
        </div>

        <div class="ft_cs">
            <h2>상담전화</h2>
            <?php if($_OS_ == "mobile"){?><a href="tel:<?php echo $default['de_admin_company_tel']; ?>"><?php }?><strong><?php echo $default['de_admin_company_tel']; ?></strong><?php if($_OS_ == "mobile"){?></a><?php }?>
            <p>월-금 am 9:00 - pm 05:00<br>점심시간 : am 12:00 - pm 01:00</p>
        </div>

        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
    </div>
</div>
<div id="ft_bnk"></div>

<script src="<?php echo G5_THEME_SHOP_URL; ?>/html/css_js/common.js"></script>
<?	
	$sql  = " select * from {$g5['g5_shop_wish_table']} where mb_id = '{$member['mb_id']}' ";
	$result = sql_query($sql);
	for ($i=0; $row = sql_fetch_array($result); $i++) {
		$w_reset[] = $row['it_id'];
	}	
	$w_reset_t = @implode(",",$w_reset);
	
	
	$cart_id_r = get_session("ss_cart_id");
	$sql  = " select * from {$g5['g5_shop_cart_table']} where od_id = '$cart_id_r' ";
	$result = sql_query($sql);
	for ($i=0; $row = sql_fetch_array($result); $i++) {
		$b_reset[] = $row['it_id'];
	}	
	$b_reset_t = @implode(",",$b_reset);	
?>
<script>
	$('button.btn_wish').each(function (index, item) { 		
		var stringVal = "<?php echo $w_reset_t?>",
		substring = $(this).attr('data-it_id');
		if(stringVal.indexOf(substring) !== -1){
			$(this).find('i').css("color","#C53428");
		}		
	});
	<?php if($member['mb_id']){?>
	$("button.btn_wish").click(function() {
		$(this).find('i').css("color","#C53428");
	});
	<?php }?>

	$('button.btn_cart').each(function (index, item) { 		
		var stringVal = "<?php echo $b_reset_t?>",
		substring = $(this).attr('data-it_id');
		if(stringVal.indexOf(substring) !== -1){
			$(this).find('i').css("color","#C53428");
		}		
	});
</script>








<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<!-- } 하단 끝 -->


<?php
include_once(G5_THEME_PATH.'/tail.sub.php');