<?php  require_once "./inc/header.php";?> 
 
 



<!--  --> 
<div class="mt-6 ">

	<div>
		<p id="library-archived" class="flex flex-row items-center">  
		  <button class="w-full inline-flex items-center px-2 py-2.5 text-sm font-medium text-center border border-slate-500   hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white justify-center bg-sky-500" type="button" rel="archived" >Archived</button> 
		  <button class="w-full inline-flex items-center px-2 py-2.5 text-sm font-medium text-center border border-slate-500 hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white justify-center" type="button"  rel="add-archived" >Add Archived</button> 
		</p>
	</div>


	<!-- Archived Section -->
	<?php require_once "./inc/library/archive/archived.php"; ?>

	<!-- Add Archived Section-->
	<?php require_once "./inc/library/archive/add-archived.php"; ?>

	<!-- Add Archived Section - Quiz -->
	<?php require_once "./inc/library/panel/thumbnail-panel-quiz.php"; ?>

	<!-- Add Archived Section - Wiki -->
	<?php require_once "./inc/library/panel/thumbnail-panel-wiki.php"; ?>



</div>

 


 
<?php require_once "./inc/fixed-menu.php"; ?>

 
<?php require_once "./inc/footer.php"; ?>


