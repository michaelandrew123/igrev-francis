<?php  require_once "./inc/header-v1.php";?> 
 
 
<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none my-2 h-screen w-[360px] ml-0" style="margin-left: auto; margin-right: auto">
            
            <div class="modal-content border-none  relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding outline-none text-current  ">
                
                <div class=" px-5">
                    
                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <div> 
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                단어 맞추기 <span class="text-sm font-bold">20/20</span>
                            </h5> 
                        </div>

                        <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                            <img class="w-4" src="./img/close.png" />
                        </button>
                    </div>
                    <div class="modal-body relative "> 

                        <div> 
                            <!-- Progress Bar -->
                            <!-- <div class="flex flex-col gap-2"> 
                                <div class="w-full bg-slate-200 rounded-full mr-2">
                                    <div class="rounded-full bg-blue-500 text-xs leading-none h-2 text-center text-white" id="meterBar"></div> 
                                </div>
                            </div>
                             -->
                                <!-- End Progress Bar -->
                            <div class="mt-5 flex flex-col h-[90vh] overflow-auto gap-2 justify-between">
                            
                                <div class="flex flex-col justify-center items-center">
                                    <div class="progress-bar grow flex flex-col justify-center items-center hidden show 1 w-full" rel='1'>

                                        <div class="flex flex-col gap-2 h-[100%] " >  


                                        <div class="flex justify-center items-center  rounded-lg  bg-white h-full w-full">  

                                            <div class="  p-1  rounded-full  border border-blue-500 w-[200px] h-[200px]">
                                                <div class="flex flex-col justify-center items-center    rounded-full   border-2 border-blue-500 w-full h-full ">
                                                    <span class="text-sm font-bold text-center">총 20문제</span>
                                                    <p class="text-blue-500 text-base text-center">
                                                        정답 10개
                                                    </p> 
                                                </div> 

                                            </div>

                                        </div>

<!--                                            
                                            <div> 
                                                <div class="">


                                                


                                                </div>
                                
                                            </div> -->
                                        </div>

                                        <div class="flex flex-row justify-center w-full mt-5">
                                            <div class="flex flex-col gap-3 w-full text-center">
                                                    <div class="form-check">

                                                        <div class="w-full inline-block px-6 py-2.5 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border bg-blue-500 text-white"  >오답노트</div>
                                

                                                    </div>
                                                    <div class="form-check">
                                                   
                                                    <div class="w-full inline-block px-6 py-2.5 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border bg-blue-500 text-white"  >복습알림 설정</div>
                                

                                                    </div> 
                                            </div>  
                                        </div>

                                    </div> 
                            


                                </div>




















                                <div class="flex flex-row justify-between  mb-5" id="arrow" >
                                    <div class="text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer rotate-180" id="arrow-left"  > 
					                    <img class="w-5 h-5"  src="./img/fast-forward-double-right-arrows-symbol.png" />
                                    </div>
                                    <div class="  text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer" id="arrow-right" > 
                                        
					                    <img class="w-5 h-5"  src="./img/fast-forward-double-right-arrows-symbol.png" />
                                    </div>
                                </div>

                            </div> 

                            
                        </div> 
                    </div> 
                </div>
            </div>
        </div>


 

  

<script type="text/javascript">
		

	var num = 1; 
	var prograssBar = $('.progress-bar').length; 
	var numBar = '' + num + '/' + prograssBar; 
	$('#numBar').text(numBar); 

	var percent = (num/prograssBar * 100);
	$('#meterBar').css({ 'width': percent + '%' });
	

	$('.form-check > div').on('touchstart', function(){ 
		$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
		$(this).addClass('bg-blue-600'); 

	})

	$('div#arrow > div').on('touchstart', function(){  

		// console.log(prograssBar);
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


