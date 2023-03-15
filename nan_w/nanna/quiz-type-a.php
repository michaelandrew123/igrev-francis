<?php  require_once "./nanna/inc/header-v1.php";?>
 
  
<!--  --> 
<div class="mt-6 flex flex-col h-screen overflow-auto gap-2">
	<!-- Progress Bar -->


	<div class="flex-none">
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
	</div>
	<!-- End Progress Bar -->



	<div class="relative grow progress-bar hidden show 1"  rel='1'>
		
		<div class=" absolute flex flex-col justify-center items-center gap-3 text-center" style="top: 50%; transform: translate(0px, -50%);">


			<div class="flex flex-col gap-3"> 
				<div>number 1</div>
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

	</div> 



	<div class="relative grow progress-bar hidden 2"  rel='2'>
		
		<div class=" absolute flex flex-col justify-center items-center gap-3 text-center" style="top: 50%; transform: translate(0px, -50%);">


			<div class="flex flex-col gap-3"> 
				<div>number 2</div>
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

	</div> 


	<div class="flex-none">

		<div class="flex flex-row justify-between" id="arrow" style="width: 95%">

			<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer" id="arrow-left" > < </div>
			<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer" id="arrow-right" > > </div>


		<!-- 	<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold"> < </div>
			<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold"> > </div> -->



		</div>
	</div>

</div>

 

 
 
<?php require_once "./nanna/inc/footer.php"; ?>

<script type="text/javascript"> 
	var num = 1; 
	var prograssBar = $('.progress-bar').length; 
	var numBar = '' + num + '/' + prograssBar; 
	$('#numBar').text(numBar); 

	var percent = (num/prograssBar * 100);
	$('#meterBar').css({ 'width': percent + '%' });
	

	$('.form-check > div').on('touchstart', function(){ 
		$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
		$(this).addClass('bg-blue-600'); 

	})

	$('div#arrow > div').on('touchstart', function(){  

		// console.log(prograssBar);
		var divAttr = $(this).attr('id'); 
		
		if(divAttr == 'arrow-right' ){
			console.log("Hello world" + divAttr);
			num++; 
			if(num > prograssBar){ 
				num=prograssBar; 
			} 
			
		}else{ 
			num--;  
			if(num < 1){ 
				num = 1; 
			} 
		}
		$('.progress-bar').removeClass('show');
		$('.'+num).addClass('show');

		numBar = '' + num + '/' + prograssBar;  
		$('#numBar').text(numBar); 

		percent = (num/prograssBar * 100) 
		$('#meterBar').css({ 'width': percent + '%' });
	
	}) 
</script>


