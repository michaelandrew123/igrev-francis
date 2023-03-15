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

	<div class="grow flex flex-col justify-center items-center   ">
		<div class="flex flex-col gap-2">  
			<div>2. Lorem ipsum dolor sit amet</div>
			<div> 
				<div class="flex justify-center ">
				  <div class="rounded-lg  bg-white max-w-sm"> 
				  	    <div class=" "> 
					      <p class="text-gray-700 text-base mb-4">
					        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					      </p> 
				    	</div> 
					   <!--  <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
							<img class="w-6/12 flex-1 m-auto" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain"> 
					    </a>  -->
				  </div>


				</div>
 
			</div>
		</div>

		<div class="flex flex-row justify-center mt-3 w-full">
			  <div class="flex flex-col gap-3 w-full text-center">
				    <div class="form-check">

				   		<div class="w-full inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">1 Light</div>
   

				    </div>
				    <div class="form-check">
				   		<div class="w-full inline-block px-6 py-2.5 bg-gray-200 text-gray-700 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">2 Light</div>
   
				    </div>
				    <div class="form-check">

				   		<div class="w-full inline-block px-6 py-2.5 bg-gray-200 text-gray-700 border-2 border-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-ou" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">3 Light</div>
   
				    </div>
				    <div class="form-check">

				   		<div class="w-full inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-ou" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">4 Light</div>
   
				    </div>
				    <div>
				    	<a href="#" class="flex flex-row gap-2 justify-end">
					    	Delete 
				   			<img class="w-5 h-5"  src="./img/trash.png" />  
			   			</a>
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
	

	// $('.form-check > div').on('touchstart', function(){

	// 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
	// 	$(this).addClass('bg-blue-600');
	// })
</script>


