<?php  require_once "./inc/header-v1.php";?> 
 
 



<!--  --> 
<div class="mt-6 flex flex-col h-screen overflow-auto gap-2">
	<!-- Progress Bar -->
	<div class="flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-4xl">Korean Text</div>
				<div class="" id="numBar"></div>
			</div>
			<div class="font-bold text-2xl">
				X
			</div>

		</div>
		<div class="w-full bg-slate-200 rounded-full mr-2">
			<div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white" id="meterBar"></div> 
		</div>
	</div>
	<!-- End Progress Bar -->

	<div class="grow flex flex-col justify-center items-center gap-3 text-center">
		<div class="flex flex-col gap-3"> 
			<div>number 7</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		</div>

		<div class="flex flex-row justify-center gap-3">
			  <div class="flex flex-row">
				    <div class="form-check">

				    	<div class="rounded-full h-6 w-6 border border-gray-300 bg-white   focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 select-none"> 
				    	</div> 

				    </div>
				    <div class="form-check">
				    	<div class="rounded-full h-6 w-6 border border-gray-300 bg-white   focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  select-none"> 
				    	</div> 
				    </div>
				    <div class="form-check">
				    	<div class="rounded-full h-6 w-6 border border-gray-300 bg-white   focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 select-none"> 
				    	</div> 
				    </div>
			  </div>
		</div>
	</div> 
	<div class="flex flex-row justify-between  fixed bottom-5 w-10/12">
		<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold"> < </div>
		<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold"> > </div>
	</div>

</div>

 

 
 
<?php require_once "./inc/footer.php"; ?>

<script type="text/javascript">
		

	var numBar = '7/10';
	var percent = (7/10 * 100);
	$('#numBar').text(numBar); 
	$('#meterBar').css({ 'width': percent + '%' });
	

	$('.form-check > div').on('touchstart', function(){

		$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
		$(this).addClass('bg-blue-600');
	})
</script>


