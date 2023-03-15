  <div class=" ">





	<div id="footer-menu" class="w-full footer-fixed">


		<?php $get_url = $_SERVER['REQUEST_URI'];  ?>
 



		<!-- Only Show on Library page -->
		<?php if($get_url == '/library.php') { ?> 
		 	<div id="adding-archived" class="add-archived library-archived relative hidden "> 
				<a href="./create-quiz-step1.php" class="bg-blue-200 absolute bottom-4 right-4 p-6 rounded-full border border-slate-900">
			 
					<div class="relative"> 
						<span class="absolute font-normal text-4xl" style="top: 50%; left:50%;transform: translate(-50%, -50%) ;">
							+
						</span>
					</div> 
				</a>
			</div>   
		 <?php } ?>
 

 		<div class="flex flex-row justify-evenly  items-center justify-center"> 
			<a href="/home.php" class="flex justify-center w-full inline-flex items-center p-6 bg-white text-sm font-medium text-center border 
			 border-slate-900  hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white  <?php if($get_url == '/home.php') { ?> bg-sky-500 <?php } ?>">
		        HOME 
		    </a>
		    <a href="/library.php" class="flex justify-center w-full inline-flex items-center p-6 bg-white text-sm font-medium text-center border border-slate-900  
		    <?php if($get_url == '/library.php') { ?> bg-sky-500 <?php } ?>  hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white">
		        LIBRARY 
		    </a>
		    <a href="/comm.php" class="flex justify-center w-full inline-flex items-center p-6 bg-white   <?php if($get_url == '/comm.php') { ?> bg-sky-500 <?php } ?> text-sm font-medium text-center border border-slate-900   hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:bg-white dark:hover:bg-white dark:focus:ring-white">
		        COMM 
		    </a> 
		</div>
	</div> 
</div>  

 