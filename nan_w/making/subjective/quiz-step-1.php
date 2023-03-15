<?php  require_once "./../../inc/header-v1.php"; ?> 
 
 




<div id="subjective-quiz" >
	 
	<!--  --> 
	<div id="quiz-step-1" class=" flex flex-col gap-2 h-screen pt-6 ">  


		<div class="grow-0 flex flex-col ">
			<div class="flex flex-row justify-between">
				<div class="flex flex-row items-center gap-2">			
					<div class="font-bold text-3xl">Subjective</div> 
				</div> 
			</div>
			<hr>
		</div> 

		<div class="grow flex flex-col justify-start items-center  w-full ">  
			
			<div class="h-5/6  w-full flex flex-col justify-between gap-3">
				<div> 
					<div class="mb-3 xl:w-96 hidden" id="quiz-step-1-input-problem-title">
					    <div class="text-left font-medium text-2xl my-3">
							TITLE
						</div>
					    <input
					     	id="exampleFormControlInput1" placeholder="Enter Problem"
							type="text"
							class="
							    form-control
							    block
							    w-full
							    px-3
							    py-1.5
							    text-base
							    font-normal
							    text-gray-700
							    bg-white bg-clip-padding
							    border-b-2 border-solid border-gray-300
							    rounded
							    transition
							    ease-in-out
							    m-0 
							    focus:text-gray-700 focus:bg-white focus:border-b-2 focus:border-blue-600 focus:outline-none "
					    />
					</div> 
					<div class="text-center relative"> 

						<div>
				   			
							<div class="flex justify-center">
							  <div>
							    <div class="dropdown relative" >
							      <a style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))"
							        class=" 
							          inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center
							        "
							        href="#"
							        type="button" 
							        id="quiz-step-1-input-problem"
							      >
							        INPUT PROBLEM
							        
							      </a> 
							    </div>
							  </div>
							</div>
			  
						</div>
	 
					</div>  
				</div>

	 			<div class="flex flex-row items-center justify-center gap-3"> 
			   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" id="quiz-step-1-save"  style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">save</div> 
	 					 
			   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">cancel</div> 
	 			</div> 
			</div>
		</div>  

	</div>
 

	<!--  --> 
	<div id="quiz-step-2"  class=" hidden flex flex-col h-screen  gap-2 pt-6">
		<!-- Progress Bar -->
		<div class="grow-0 flex flex-col gap-2">
			<div class="flex flex-row justify-between">
				<div class="flex flex-row items-center gap-2">			
					<div class="font-bold text-3xl">2022 KIIP1 <span class="font-normal">korean text</span> </div> 
				</div> 
			</div>
			<hr>
		</div>
		<!-- End Progress Bar -->

		<div class="grow flex flex-col justify-start items-center  w-full ">  
			
			<div class="h-5/6  w-full flex flex-col justify-between">
				<div> 
					<div class="mb-3 xl:w-96">
					    <div class="text-left font-medium text-2xl my-3">
							Quiz
						</div> 
						<div class="px-2">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>

	 
					</div>  
					<div class="flex flex-col gap-3">
						
					 
						<div class="relative mt-3 flex flex-col justify-center items-center w-full gap-3">
							<div id="quiz-step-2-append-options"></div> 
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
							          dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="adddropdownButton" id="quiz-step-2-select-option" >
							        <li>
							          <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-700 hover:bg-gray-100 "
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

	 			<div class="flex flex-row items-center justify-between gap-3"> 


					<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold" id="quiz-step-2-left-arrow"> < </div>

					<div class="flex flex-row items-center justify-center gap-3">
			   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">save</div> 
						 
			   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">cancel</div> 
					</div>

					<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold" id="quiz-step-2-right-arrow"> > </div>
	 			</div>
			</div>
		</div>  

	</div>







<!--  --> 
<div id="quiz"  class="flex flex-col h-screen gap-2 hidden pt-6">
	<!-- Progress Bar -->
	<div class="grow-0 flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-3xl">2022 KIIP1 <span class="font-normal">korean text</span> </div> 
			</div> 
		</div>
		<hr>
	</div>
	<!-- End Progress Bar -->

	<div class="grow flex flex-col justify-start items-center  w-full ">  
		
		<div class="h-5/6  w-full flex flex-col justify-between">
			<div> 
				<div class="mb-3 xl:w-96">
				    <div class="text-left font-medium text-2xl my-3">
						Quiz
					</div> 
					<div class="px-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>

 
				</div>  
				<div class="flex flex-col gap-3">
					 

						<div class="flex-none flex flex-row items-center justify-center gap-3 w-auto ">
							 <div class="pb-3  border-b-4 border-slate-400 ">
								<div class="rounded-full border border-slate-900 h-4 w-4  float-right mx-1">  </div>
								<div class="rounded-full border border-slate-900 h-4 w-4  float-right mx-1">  </div>
								<div class="rounded-full border border-slate-900 h-4 w-4  float-right mx-1" >  </div>
							</div>
						</div>

					<div class="flex-1 relative mt-3 flex flex-row justify-center items-center w-full">
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

 			<div class="flex flex-row items-center justify-between gap-3"> 


				<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold" id="quiz-left-arrow"> < </div>

				<div class="flex flex-row items-center justify-center gap-3">
		   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">save</div> 
					 
		   			<div class="inline-block px-4 py-3 bg-gray-200 text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">cancel</div> 
				</div>

				<div class="rounded-full bg-black text-white text-4xl w-10 h-10 flex items-center justify-center font-bold"> > </div>
 			</div>
		</div>
	</div>  

</div>







</div>





 
 
<?php require_once "./../../inc/footer.php"; ?>

<?php require_once "./../../inc/fixed-menu.php"; ?>
 




<script type="text/javascript"> 

	$('div#quiz-step-1-save').on('touchstart', function(){
		$('div#subjective-quiz > div#quiz-step-1').addClass('hidden');
		$('div#subjective-quiz > div#quiz-step-2').removeClass('hidden');
	});

	$('div#quiz-step-2-left-arrow').on('touchstart', function(){
		$('div#subjective-quiz > div#quiz-step-1').removeClass('hidden');
		$('div#subjective-quiz > div#quiz-step-2').addClass('hidden');
	})



	$('div#quiz-step-2-right-arrow').on('touchstart', function(){
		$('div#subjective-quiz > div#quiz-step-2').addClass('hidden');
		$('div#subjective-quiz > div#quiz').removeClass('hidden');
	})

	$('div#quiz-left-arrow').on('touchstart', function(){
		$('div#subjective-quiz > div#quiz-step-2').removeClass('hidden');
		$('div#subjective-quiz > div#quiz').addClass('hidden');
	})


	$('a#quiz-step-1-input-problem').on('touchstart', function(){
		$('div#quiz-step-1-input-problem-title').addClass('show');
	});


	$('ul#quiz-step-2-select-option li > a').on('touchstart', function(){  
			if($(this).text() =='TEXT'){  
			  	$('div#quiz-step-2-append-options').append("<input type='text' name='' placeholder='text sample'  class='form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-b-2 border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-b-2 focus:border-blue-600 focus:outline-none'/> ");
		 	} 
	})

</script>