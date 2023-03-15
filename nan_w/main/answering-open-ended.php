<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<!----> 

<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none h-screen w-[360px] ml-0 mt-0" style="margin-left: auto; margin-right: auto" >
            <div class="modal-content border-none  relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding outline-none text-current  ">
                <div class="mx-[15px]"> 
                    <div class="modal-header flex flex-shrink-0 items-center justify-between mt-[35px] mb-[30px] rounded-t-md">
                        <div> 
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                            Quiz Title<span class="text-sm font-bold">15/20</span>
                            </h5> 
                        </div> 
                        <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                            <img class="w-4" src="../nanna-v2/img/close.png" />
                        </button>
                    </div>
                    <div class="modal-body relative ">  
                        <div class="flex flex-col gap-2"> 
                                <!-- Progress Bar -->
                            <div class="flex flex-col gap-2"> 
                                <div class="w-full bg-slate-200 rounded-full mr-2">
                                    <div class="rounded-full bg-blue-500 text-xs leading-none h-2 text-center text-white" id="meterBar"></div> 
                                </div>
                            </div>
                                <!-- End Progress Bar -->
                            <div class=" flex flex-col h-[90vh] overflow-auto gap-2 justify-between"> 
                                <div class="flex flex-col justify-center items-center">
                                    <div class="progress-bar grow flex flex-col justify-center items-center hidden show 1" rel='1'>
                                        <div class="flex flex-col gap-2">   
                                            <div> 
                                                <div class="flex justify-center ">
                                                <div class="rounded-lg  bg-white max-w-sm">  
                                                        <div class="flex justify-center">
                                                            <div class="block p-6 rounded-lg  text-white max-w-sm  bg-blue-500">
                                                                <p class="text-base mb-4 text-white text-center">
                                                                scolding or meddling more than necessary, or such words
                                                                </p> 
                                                            </div>
                                                        </div>
                                                </div> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="flex flex-row justify-center w-full mt-5">
                                            <div class="flex flex-col gap-3 w-full text-center">
                                                <div class="relative flex flex-row items-center w-full">   
                                                    <!-- <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] left-2"  src="./img/magnifying-glass-solid.svg"  />
                                                     -->
                                                    
                                                    <textarea class="auto-resize-textarea3 border  w-full   bg-white py-1.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id=""   style="resize: none;"  ></textarea>

                                                    <!-- <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] right-2"  src="./img/mic.png"  />  
                                                 -->
                                                
                                                </div> 
                                            </div>  
                                        </div> 
                                    </div>  
                                </div> 

                                <div class="flex flex-row justify-between  mb-5" id="arrow" >
                                    <div class="text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer rotate-180" id="arrow-left"  > 
					                    <img class="w-5 h-5"  src="../nanna-v2/img/fast-forward-double-right-arrows-symbol.png" />
                                    </div>
                                    <div class="  text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer" id="arrow-right" > 
                                        
					                    <img class="w-5 h-5"  src="../nanna-v2/img/fast-forward-double-right-arrows-symbol.png" />
                                    </div>
                                </div> 
                            </div>  
                        </div> 
                    </div> 
                </div>
            </div>
        </div>


 

  
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

<script type="text/javascript">
	let textareas = document.getElementsByClassName("auto-resize-textarea3");
    
    // Loop through textareas and add event listeners as well as other needed css attributes
    for (const textarea of textareas) {
        // Initially set height as otherwise the textarea is not high enough on load
        textarea.style.height = textarea.scrollHeight.toString();
        // Hide scrollbar
        textarea.style.overflowY = 'hidden';
        // Call resize function with "this" context once during initialisation as it's too high otherwise
        resizeTextarea.call(textarea);
        // Add event listener to resize textarea on input
        textarea.addEventListener('input', resizeTextarea, false);
        // Also resize textarea on window resize event binding textarea to be "this"
        window.addEventListener('resize', resizeTextarea.bind(textarea), false);
    }
    function resizeTextarea() {
        // Textareas have default 2px padding and if not set it returns 0px
        let padding = window.getComputedStyle(this).getPropertyValue('padding-bottom');
        // getPropertyValue('padding-bottom') returns "px" at the end it needs to be removed to be added to scrollHeight
        padding = parseInt(padding.replace('px',''));
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    }


	// var num = 1; 
	// var prograssBar = $('.progress-bar').length; 
	// var numBar = '' + num + '/' + prograssBar; 
	// $('#numBar').text(numBar); 

	// var percent = (num/prograssBar * 100);
	// $('#meterBar').css({ 'width': percent + '%' });
	

	// $('.form-check > div').on('touchstart', function(){ 
	// 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
	// 	$(this).addClass('bg-blue-600'); 

	// })

	// $('div#arrow > div').on('touchstart', function(){  

	// 	// console.log(prograssBar);
	// 	var divAttr = $(this).attr('id'); 
		
	// 	if(divAttr == 'arrow-right' ){
	// 		console.log("Hello world" + divAttr);
	// 		num++; 
	// 		if(num > prograssBar){ 
	// 			num=prograssBar; 
	// 		} 
			
	// 	}else{ 
	// 		num--;  
	// 		if(num < 1){ 
	// 			num = 1; 
	// 		} 
	// 	}
	// 	$('.progress-bar').removeClass('show');
	// 	$('.'+num).addClass('show');

	// 	numBar = '' + num + '/' + prograssBar;  
	// 	$('#numBar').text(numBar); 

	// 	percent = (num/prograssBar * 100) 
	// 	$('#meterBar').css({ 'width': percent + '%' });
	
	// })



</script>


