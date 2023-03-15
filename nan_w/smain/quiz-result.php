<!-- Header Section -->
<?php

require_once "./inc/header-v1.php";
include_once('./_common.php');
include_once('./_head.sub.php');
$quiz_idx = ifilter("quiz_idx", "", "string");
$page = ifilter("page", 1, "number");
$nextPage = $page + 1;
$answer_cnt = ifilter("answer_cnt", 0, "number");
if($quiz_idx == ""){
    alert("올바른 방법으로 이용해주세요.","/");
}
$sql = " select count(*) cnt,(select count(*) cnt from nan_question where quiz_idx = '".$quiz_idx."' ) total_cnt
            from nan_question_answer a 
            where a.quiz_idx = '".$quiz_idx."' and answer_cnt = '".$answer_cnt."' and mb_id = '".$_SESSION['mb_id']."' and correct_yn = 'Y' ";
$correct_row = sql_fetch($sql);



?>
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<!---->
<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none h-screen w-[360px] ml-0 mt-0" style="margin-left: auto; margin-right: auto">
            
            <div class="modal-content border-none  relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding outline-none text-current  ">
                
                <div class="mx-[15px]">
                    
                    <div class="modal-header flex flex-shrink-0 items-center justify-between  mt-[35px] mb-[30px]  rounded-t-md">
                        <div> 
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                <span class="font-black">Quiz Title</span> <span class="text-sm font-bold"><?=$correct_row['total_cnt']?>/<?=$correct_row['total_cnt']?></span>
                            </h5> 
                        </div>

                        <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                            <img class="w-4" src="./img/close.png" />
                        </button>
                    </div>
                    <div class="modal-body relative ">
                        <div class="flex flex-col gap-2"> 
                            <!-- Progress Bar -->
                            <!-- <div class="flex flex-col gap-2"> 
                                <div class="w-full bg-slate-200 rounded-full mr-2">
                                    <div class="rounded-full bg-blue-500 text-xs leading-none h-2 text-center text-white" id="meterBar"></div> 
                                </div>
                            </div>
                             -->
                                <!-- End Progress Bar -->
                            <div class="flex flex-col h-[90vh] overflow-auto gap-2 justify-between">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="progress-bar grow flex flex-col justify-center items-center hidden show 1 w-full" rel='1'>
                                        <div class="flex flex-col gap-2  mt-[75px] mb-[50px]" >
                                            <div class="flex justify-center items-center  rounded-lg  bg-white  w-full">
                                                <div class="  p-1  rounded-full  border border-blue-500 w-[190px] h-[190px]">
                                                    <div class="flex flex-col justify-center items-center    rounded-full   border-2 border-blue-500 w-full h-full ">
                                                        <span class="text-sm font-bold text-center">Total : <?=$correct_row['total_cnt']?></span>
                                                        <p class="text-blue-500 text-base text-center">
                                                        Correct : <?=$correct_row['cnt']?>
                                                        </p> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-center w-full mt-5">
                                            <div class="flex flex-col gap-3 w-full text-center">
                                                    <div class="form-check">
                                                        <div class="w-full inline-block px-6 py-4 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border bg-blue-500 text-white" onclick="location.href='./answering-multiple-choice.php?quiz_idx=<?=$quiz_idx?>&answer_cnt=1'">Revision Notes</div>
                                                    </div>
                                                    <div class="form-check">
                                                    <div class="w-full inline-block px-6 py-4 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border bg-blue-500 text-white"  >Set Notification</div>
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
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
  

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


