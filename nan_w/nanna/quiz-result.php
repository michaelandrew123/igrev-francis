<?php  require_once "./inc/header-v1.php";?> 
 
 



<!--  --> 
<div class="mt-6 flex flex-col h-screen overflow-auto gap-2">
	<!-- Progress Bar -->
	<div class="grow-0 flex flex-col gap-2">
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

	<div class="grow flex flex-col justify-start items-center   ">
 		
		<div class="h-5/6 flex flex-col justify-evenly w-full">
			<div class="flex flex-col gap-2">  
				<div class="text-center text-2xl font-medium">20 Total</div>
				<div> 
					<div class="flex justify-center ">
					  <div class="rounded-lg  bg-white max-w-sm"> 
					  	    <div class=" "> 
								<p class="text-gray-700 text-4xl font-medium mb-4">
									Right Answer 10
								</p>  
					    	</div> 
						   <!--  <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
								<img class="w-6/12 flex-1 m-auto" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain"> 
						    </a>  -->
					  </div>


					</div>
	 
				</div>
			</div>

			<div class="flex flex-row justify-center mt-3 w-full items-stretch">
				<div class="flex flex-col gap-3 w-full text-center"> 
				     <div class="form-check">

				   		<div class="w-full inline-block px-6 py-2.5 bg-white text-gray-700 font-medium  leading-tight  rounded shadow-md  transition duration-150 ease-in-ou font-medium text-1xl border border-slate-500" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Review Note</div>

				    </div> 


				    <div class="form-check" id="qr-notice">

				   		<div  class="set-notice w-full inline-block px-6 py-2.5 bg-green-500 text-white font-medium  leading-tight  rounded shadow-md  transition duration-150 ease-in-ou font-medium border border-slate-500 text-1xl hidden show" style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Set Notice</div>




				   		<div class="d-flex align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".6" style="transform: translate(0px, 0px); opacity: 1;">
                              <a href="show-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                           </div>



				   		<div  class="release-notice w-full inline-block px-6 py-2.5 bg-red-500 text-white font-medium  leading-tight  rounded shadow-md  transition duration-150 ease-in-ou font-medium border border-slate-500 text-1xl hidden " style="filter: drop-shadow(5px 4px 2px rgb(0 0 0 / 61%))">Release Notice</div>

				    </div> 
				</div>  
			</div>

		</div>
 

	</div>  

</div>

 

 
 
<?php require_once "./inc/footer.php"; ?>

<?php require_once "./inc/fixed-menu.php"; ?>

<script type="text/javascript">
		

	var numBar = '7/10';
	var percent = (10/10 * 100);
	$('#numBar').text(numBar); 
	$('#meterBar').css({ 'width': percent + '%' });
	

	var clicedTwice = false;

	$('div#qr-notice > div').on('touchstart', function(){
		  
		 if(clicedTwice != true){
		 	clicedTwice=true;
		 	$('.set-notice').removeClass('show');
		 	$('.release-notice').addClass('show');

		 }else{

		 	$('.set-notice').addClass('show');
		 	$('.release-notice').removeClass('show');
		 	clicedTwice=false;
		 }

		 
		 // $('.set-notice').removeClass('show')
		 // $('.release-notice').addClass('show')

	})
	// $('.form-check > div').on('touchstart', function(){

	// 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
	// 	$(this).addClass('bg-blue-600');
	// })
</script>


