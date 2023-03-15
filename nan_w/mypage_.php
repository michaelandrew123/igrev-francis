<?php include_once('./_common.php'); ?>


<!-- Header Section -->
<?php  require_once "./header_.php"; ?> 
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<!---->
<?php  require_once "./main/mypage/menu-my-page.php"; ?> 

<?php  
if(!$_GET['page_type']){
    require_once "./main/mypage/mypage.php"; 
}else{
    require_once "./main/mypage/help_center.php"; 
}
?> 

<?php require_once "./footer_.php"; ?>