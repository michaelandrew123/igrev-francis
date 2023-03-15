<?php  require_once "./../../inc/header-v1.php"; ?> 
 
 



<!--  --> 
<div class="mt-6 flex flex-col h-screen  gap-2">
	<!-- Progress Bar -->
	<!-- <div class="grow-0 flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-3xl">2022 KIIP1 <span class="font-normal">korean text</span> </div> 
			</div> 
		</div>
		<hr>
	</div>
 -->



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





	<div class="grow flex flex-col justify-start items-center w-full ">  
		
		<div class="h-5/6 w-full flex flex-col justify-between">



			<div class="progress-bar hidden show 1"  rel='1'> 
				<div class="mb-3 xl:w-96">
				    <div class="text-left font-medium text-2xl my-3">
						Quiz
					</div> 
					<div class="px-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div> 
				</div>  
				<div class="flex flex-col gap-3">

					<a style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))" class="w-full border border-slate-900 inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center " href="#" type="button" >
							a. choices 
							<div class="rounded-full  h-4 w-4  float-right"> x </div>
					</a>
					<a style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))" class="w-full border border-slate-900 inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center " href="#" type="button" >
							b. choices 
							<div class="rounded-full  h-4 w-4  float-right"> x </div>
					</a>
					<a style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))" class="w-full border border-slate-900 inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center " href="#" type="button" >
							c. choices 
							<div class="rounded-full  h-4 w-4  float-right"> x </div>
					</a>
					<a style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))" class="w-full border border-slate-900 inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center " href="#" type="button" >
							d. choices 
							<div class="rounded-full border border-slate-900 h-4 w-4  float-right">  </div>
					</a>
				 
					<div class="relative mt-3 flex flex-row justify-center items-center w-full hidden">
						<a href="#"  type="button"
						        id="adddropdownButton1"
						        data-bs-toggle="dropdown"
						        aria-expanded="false" class="bg-black relative   p-4 rounded-full border border-slate-900"> 
							<div class="relative"> 
								<span class="absolute font-normal text-4xl text-white" style="top: 50%; left:50%;transform: translate(-50%, -50%) ;">
									+
								</span>
							</div> 
						</a>
 
						      <ul
						        class="
						          dropdown-menu
						          min-w-max
						          absolute
						          hidden
						          bg-white
						          text-base
						          z-50
						          float-left
						          py-2
						          list-none
						          text-left
						          rounded-lg
						          shadow-lg
						          mt-1
						          hidden
						          m-0
						          bg-clip-padding
						          border-none
						        "
						        aria-labelledby="adddropdownButton1"
						      >
						        <li>
						          <a
						            class="
						              dropdown-item
						              text-sm
						              py-2
						              px-4
						              font-normal
						              block
						              w-full
						              whitespace-nowrap
						              bg-transparent
						              text-gray-700
						              hover:bg-gray-100
						            "
						            href="#"
						            >TEXT</a
						          >
						        </li>
						        <li>
						          <a
						            class="
						              dropdown-item
						              text-sm
						              py-2
						              px-4
						              font-normal
						              block
						              w-full
						              whitespace-nowrap
						              bg-transparent
						              text-gray-700
						              hover:bg-gray-100
						            "
						            href="#"
						            >IMAGE</a
						          >
						        </li>
						        <li>
						          <a
						            class="
						              dropdown-item
						              text-sm
						              py-2
						              px-4
						              font-normal
						              block
						              w-full
						              whitespace-nowrap
						              bg-transparent
						              text-gray-700
						              hover:bg-gray-100
						            "
						            href="#"
						            >CHOICE</a
						          >
						        </li>
						      </ul> 
					</div> 
				</div> 
			</div>




			<div class="progress-bar hidden 2"  rel='2'> 
				<div class="mb-3 xl:w-96">
				    <div class="text-left font-medium text-2xl my-3">
						Quiz
					</div> 
					<div class="px-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div> 
				</div>  
				<div class="flex flex-col gap-3">
 
					<div class="relative mt-3 flex flex-row justify-center items-center w-full">
						<a href="#"  type="button"
						        id="adddropdownButton"
						        data-bs-toggle="dropdown"
						        aria-expanded="false" class="bg-black relative   p-4 rounded-full border border-slate-900"> 
							<div class="relative"> 
								<span class="absolute font-normal text-4xl text-white" style="top: 50%; left:50%;transform: translate(-50%, -50%) ;">
									+
								</span>
							</div> 
						</a>
    
						      <ul
						        class="
						          dropdown-menu
						          min-w-max
						          absolute
						          hidden
						          bg-white
						          text-base
						          z-50
						          float-left
						          py-2
						          list-none
						          text-left
						          rounded-lg
						          shadow-lg
						          mt-1
						          hidden
						          m-0
						          bg-clip-padding
						          border-none
						        "
						        aria-labelledby="adddropdownButton"
						      >
						        <li>
						          <a
						            class="
						              dropdown-item
						              text-sm
						              py-2
						              px-4
						              font-normal
						              block
						              w-full
						              whitespace-nowrap
						              bg-transparent
						              text-gray-700
						              hover:bg-gray-100
						            "
						            href="#"
						            >TEXT</a
						          >
						        </li>
						        <li>
						          <a
						            class="
						              dropdown-item
						              text-sm
						              py-2
						              px-4
						              font-normal
						              block
						              w-full
						              whitespace-nowrap
						              bg-transparent
						              text-gray-700
						              hover:bg-gray-100
						            "
						            href="#"
						            >IMAGE</a
						          >
						        </li>
						        <li>
						          <a
						            class="
						              dropdown-item
						              text-sm
						              py-2
						              px-4
						              font-normal
						              block
						              w-full
						              whitespace-nowrap
						              bg-transparent
						              text-gray-700
						              hover:bg-gray-100
						            "
						            href="#"
						            >CHOICE</a
						          >
						        </li>
						      </ul> 
					</div> 
				</div> 
			</div>


 			<div class="flex flex-row items-center justify-between gap-3" id="arrow"> 


				<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold" id="arrow-left"> < </div>

				<div class="flex flex-row items-center justify-center gap-3">
		   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">save</div> 
					 
		   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">cancel</div> 
				</div>

				<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold" id="arrow-right"> > </div>
 			</div>
		</div>
	</div>  

</div>

 

 
 
<?php require_once "./../../inc/footer.php"; ?>

<?php require_once "./../../inc/fixed-menu.php"; ?>
 



<script type="text/javascript"> 
	var num = 1; 
	var prograssBar = $('.progress-bar').length; 
	var numBar = '' + num + '/' + prograssBar; 
	$('#numBar').text(numBar); 

	var percent = (num/prograssBar * 100);
	$('#meterBar').css({ 'width': percent + '%' });
	

	// $('.form-check > div').on('touchstart', function(){ 
	// 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
	// 	$(this).addClass('bg-blue-600'); 

	// })

	$('div#arrow > div').on('touchstart', function(){  
 
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