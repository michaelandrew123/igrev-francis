<?php include_once('./_common.php'); ?>


<!-- Header Section -->
<?php  require_once "./header_library.php"; ?> 
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<!---->
<?php  require_once "./main/library/menu-v1.php"; ?> 

<?php  
require_once "./main/library/library.php"; 

?> 

<?php require_once "./footer_.php"; ?>



<script> 
    $('#create-content').on('mousedown', function(){ 
        window.location.href="./create-content.php";
    })
    $('#library-grid').on('mousedown', function(){ 
        $('#grid-list > div').removeClass('w-5/12');
        $('#grid-list > div').addClass('w-full');
        $('#grid-list > div .grid-img').removeClass('thumbnail-image');
    })
    $('#library-list').on('mousedown', function(){  
        $('#grid-list > div').addClass('w-5/12');
        $('#grid-list > div').removeClass('w-full');
        $('#grid-list > div .grid-img').addClass('thumbnail-image');
    })
</script>