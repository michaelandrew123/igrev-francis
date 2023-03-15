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

            <p>COPYRIGHT &copy; 2021 <?php echo $default['de_admin_company_name']; ?> ALL RIGHTS RESERVED.</p>
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