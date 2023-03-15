<!-- Header Section -->
<?php  require_once "./inc/header.php";?>  
<!-- First slide --> 

<div class="mt-6">
 	<div>
		<p id="my-page" class="flex flex-row items-center">  
		  <button class="w-full inline-flex items-center px-2 py-2.5 text-sm font-medium text-center border border-slate-500   hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white justify-center bg-sky-500" type="button" rel="my-page" >My Paage</button> 
		  <button class="w-full inline-flex items-center px-2 py-2.5 text-sm font-medium text-center border border-slate-500 hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white justify-center" type="button"  rel="help-center" >Help Center</button> 
		</p>
	</div>
</div>
<div class="mt-6">
 	<div class="flex flex-row justify-between">
		
		<div class="text-center">
			<div>4</div>
			<div class="uppercase text-sm">solving</div>
		</div>
		<div class="text-center">
			<div>10</div>
			<div class="uppercase text-sm">review</div>
		</div>
		<div class="text-center">
			<div>4</div>
			<div class="uppercase text-sm">writing</div>
		</div>
		<div class="text-center">
			<div>4</div>
			<div class="uppercase text-sm">mine</div>
		</div>
		<div class="text-center">
			<div>4</div>
			<div class="uppercase text-sm">fav</div>
		</div>
	</div>
</div>

	<div class="hidden show"> 

		<!-- Archived Panel -->  

		<div class=" "> 
			<div class="mt-6 mb-6 flex flex-row justify-between">
				<div class="flex flex-row items-center ">
					<a href="#" class="dropdown-toggle" id="sort-dropdown1" data-bs-toggle="dropdown" aria-expanded="false" >
				 
					<p class="sort-text1 uppercase font-medium cursor-pointer " >Solving</p>
						<ul id="sort-items1" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none font-medium" aria-labelledby="sort-dropdown1" >
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase">
									solving
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" href="#">	
									review
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" href="#">
									writing
								</a>
					        </li> 
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" href="#">
									mine
								</a>
					        </li> 
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" href="#">
									fav
								</a>
					        </li> 
				      </ul> 


					</a>  
				</div>
				<div class="flex flex-row items-center gap-2">
					<img class="w-4 h-4" src="/img/magnifying-glass-solid.svg"  /> 
					<a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >

      					
						<img src="/img/filter.png" class="w-4 h-4" />  

						<ul id="sort-items2" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none font-medium" aria-labelledby="sort-dropdown" >
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase">
									Recent
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" href="#">	
									Past
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" href="#">
									popular
								</a>
					        </li> 
				      </ul> 
					</a>  

					<p class="sort-text2 uppercase font-medium" >Recent</p>
				</div>
			</div>
			<div> 
 
				<!-- Flex wrap to get column layout List: flex flex-row flex-wrap -->
				<!-- Grid to get the layout to Grid: grid grid-rows-4 grid-flow-col --> 
				<div  class="hidden show" id="yetview">

					<ul class="library-panel-section grid grid-rows-4 grid-flow-col gap-2 overflow-x-auto min-[639px]:overflow-x-auto  ">   
					  	<li >
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki
								</p>
							</div> 
					    </li>  
					</ul> 
				</div> 
 
				<div  class="hidden" id="vewing">
					<ul class="library-panel-section grid grid-rows-2 grid-flow-col gap-2 overflow-x-auto min-[639px]:overflow-x-auto ">   
					  	<li >
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Quiz
								</p>
							</div> 
					    </li>

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class="mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Quiz
								</p>
							</div> 
					    </li> 
					    	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Quiz
								</p>
							</div> 
					    </li> 
					    	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Quiz
								</p>
							</div> 
					    </li>  
					</ul> 
				</div> 


				<div  class="hidden" id="done">
					<ul class="library-panel-section grid grid-rows-2 grid-flow-col gap-2 overflow-x-auto min-[639px]:overflow-x-auto ">   
					  	<li >
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Done
								</p>
							</div> 
					    </li>

					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Quiz
								</p>
							</div> 
					    </li>  
					  	<li>
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Quiz
								</p>
							</div> 
					    </li>  
					</ul> 
				</div> 


			</div>  
		</div>   



	</div>

 




 <!-- Fixed Menu --> 
<?php require_once "./inc/fixed-menu.php"; ?> 
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

