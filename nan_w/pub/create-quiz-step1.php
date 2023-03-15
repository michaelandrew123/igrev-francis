<?php  require_once "./inc/header-v1.php";?> 
 
 



<!--  --> 
<div class="mt-6 flex flex-col h-screen  gap-2">
	<!-- Progress Bar -->
	<div class="grow-0 flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-3xl">Create Content</div> 
			</div>
	 

		</div>
		<hr>
	</div>
	<!-- End Progress Bar -->

	<div class="grow flex flex-col justify-start items-center  w-full "> 

		<div class="h-5/6 flex flex-col justify-evenly w-full">
	   		<div class="w-full inline-block px-6 py-6 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-ou font-medium text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Wiki</div>



	   		<div class="w-full inline-block px-6 py-6 bg-gray-200 text-gray-700 font-bold  leading-tight  uppercase rounded shadow-md  transition duration-150 ease-in-ou font-medium text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Quiz</div>

	 

	   		<div class="w-full inline-block px-6 py-6 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-ou font-medium text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">saved draft</div>
		     
		</div>
	</div>  

</div>

 

 
 
<?php require_once "./inc/footer.php"; ?>

<?php require_once "./inc/fixed-menu.php"; ?>

<script type="text/javascript">
		

	var numBar = '7/10';
	var percent = (10/10 * 100);
	$('#numBar').text(numBar); 
	$('#meterBar').css({ 'width': percent + '%' });
	

	// $('.form-check > div').on('touchstart', function(){

	// 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
	// 	$(this).addClass('bg-blue-600');
	// })
</script>


