<?php  require_once "./../inc/header-v1.php"; ?> 
 
 



<!--  --> 
<div class="mt-6 flex flex-col h-screen  gap-2">
	<!-- Progress Bar -->
	<div class="grow-0 flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-3xl">Multiple</div> 
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
						TITLE
					</div>
				    <input
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
						    focus:text-gray-700 focus:bg-white focus:border-b-2 focus:border-blue-600 focus:outline-none
						"
						id="exampleFormControlInput1"
						placeholder="Example label"
				    />
				</div> 
				<div class="text-center relative"> 

					<div>
			   			
						<div class="flex justify-center">
						  <div>
						    <div class="dropdown relative">
						      <a style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))"
						        class="
						          dropdown-toggle
						          inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  border border-slate-600   transition duration-150 ease-in-out  text-1xl text-center
						        "
						        href="#"
						        type="button"
						        id="dropdownMenuButton2"
						        data-bs-toggle="dropdown"
						        aria-expanded="false"
						      >
						        INPUT PROBLEM
						        
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
						        aria-labelledby="dropdownMenuButton2"
						      >
						        <li>
						          <a
						          	href="./multiple-quiz-step-2.php"
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
		  
					</div>
 
				</div>  
			</div>

 			<div class="flex flex-row items-center justify-center gap-3">
 				
		   			<div class="inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  border border-slate-600   transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">save</div> 
 				
		   			<div class="inline-block px-4 py-3 bg-white text-gray-700 font-bold  leading-tight uppercase rounded shadow-md  border border-slate-600   transition duration-150 ease-in-out  text-1xl text-center" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">cancel</div> 
 			</div>
		     
		</div>
	</div>  

</div>

 

 
 
<?php require_once "./../inc/footer.php"; ?>

<?php require_once "./../inc/fixed-menu.php"; ?>
 


