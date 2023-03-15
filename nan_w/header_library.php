<!DOCTYPE html>
<html lang="en">
	<head>
			<title></title>
	</head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Nanna</title> 
	<link rel="stylesheet" href="./nanna-v2/css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	 


	<script src="https://cdn.tailwindcss.com"></script> 
	<script>
		// 자바스크립트에서 사용하는 전역변수 선언
		var g5_url       = "<?php echo G5_URL ?>";
		var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
		var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
		var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
		var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
		var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
		var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
		var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
		var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
		<?php if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
		var g5_theme_shop_url = "<?php echo G5_THEME_SHOP_URL; ?>";
		var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
		<?php } ?>
		<?php if(defined('G5_IS_ADMIN')) { ?>
		var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
		<?php } ?>
	</script>
<body> 
  <div class="container">