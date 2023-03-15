<?php  require_once "./../inc/header-v1.php"; ?> 
 
 



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
			<div class="text-center font-medium text-2xl">
				QUIZ TYPE
			</div>

			<div class="flex flex-col gap-10" id="quiz-step2-btn">
				<a href="./multiple-quiz-step-1.php">
		   			<div class="w-full inline-block px-6 py-6 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  border border-slate-600   transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Multiple(객관식)</div> 
		   		</a>

		   		<div class="w-full inline-block px-6 py-6 bg-white text-gray-700 font-bold  leading-tight  uppercase rounded shadow-md  border border-slate-600   transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Subjective(주관식)</div> 
		     </div>
		</div>
	</div>  

</div>

 

 
 
<?php require_once "./../inc/footer.php"; ?>

<?php require_once "./../inc/fixed-menu.php"; ?>
 


<script type="text/javascript"> 
	$('div#quiz-step2-btn > div').on('touchstart', function(){
		$('div#quiz-step2-btn > div.bg-gray-200').removeClass('bg-gray-200');
		$(this).addClass('bg-gray-200');
	}) 
</script>




