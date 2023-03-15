<?php  require_once "./inc/header-v1.php";?> 
 
 



<!--  --> 
<div class="mt-6 flex flex-col h-screen  gap-2">
	<!-- Progress Bar -->
	<div class="grow-0 flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-3xl">Revise Content</div> 
			</div>
	 

		</div> 
		<hr>
	</div>
	<!-- End Progress Bar -->

	<div class="grow flex flex-col justify-start  gap-3 w-full "> 

		<div>
			<div class="font-bold">WIKI TITLE</div>
			<div>Korean text</div> 
		</div>
		<hr>
		<div>
			<div class="font-bold">DESCRIPTION</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> 
		</div>
	 	 
		<div class="flex flex-col gap-3">
			<div class="font-bold">CONTENTS</div>
			<div>  
				<a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
					<img class="w-6/12 flex-1 m-auto" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain"> 
			    </a>  
			</div> 
			<div>Lorem ipsum dolor sit amet</div>  
		</div>
	</div>  

</div>

 

 
 
<?php require_once "./inc/footer.php"; ?>
 

<script type="text/javascript">
		

	var numBar = '7/10';
	var percent = (10/10 * 100);
	$('#numBar').text(numBar); 
	$('#meterBar').css({ 'width': percent + '%' });
	

	// $('.form-check > div').on('touchstart', function(){

	// 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
	// 	$(this).addClass('bg-blue-600');
	// })
</script>


