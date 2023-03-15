	<div class="archived library-archived hidden show"> 

		<!-- Archived Panel --> 
		<?php require_once "./nanna/inc/library/panel/archived-panel-btn.php" ?>

		<div class=" "> 
                    <div class="mt-6 mb-6 flex flex-row justify-between">
                        <div class="flex flex-row items-center gap-2">

                            <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                                <img src="./nanna/img/filter.png" class="w-6 h-5" />

                                <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Sort: Recent
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: Title
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: Reply
                                        </a>
                                    </li>
                              </ul>
                            </a>


                            <p class="sort-text" >Recent</p>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <a href="#" id="library-grid">
                                <img src="./nanna/img/visualization.png" class="w-6 h-5" />
                            </a>

                            <a href="#" id="library-list">
                                <img src="./nanna/img/list.png" class="w-6 h-5" />
                            </a>
                        </div>
                    </div>
			<div> 
 
				<!-- Flex wrap to get column layout List: flex flex-row flex-wrap -->
				<!-- Grid to get the layout to Grid: grid grid-rows-4 grid-flow-col --> 
				<div  class="hidden show" id="yetview">

					<ul class="library-panel-section grid grid-rows-2 grid-flow-col gap-2 overflow-x-auto min-[639px]:overflow-x-auto  ">   
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

 
