<!-- Header Section -->
<?php

require_once "./inc/header-v1.php";
include_once('./_common.php');
include_once('./_head.sub.php');
$quiz_idx = ifilter("quiz_idx", "", "string");
$page = ifilter("page", 0, "number");
$nextPage = $page + 1;
$answer_cnt = ifilter("answer_cnt", 0, "number");
if($quiz_idx == ""){
    alert("올바른 방법으로 이용해주세요.","/");
}
$sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name,(select count(*) cnt from nan_question where quiz_idx = '".$quiz_idx."' ) cnt
            from nan_quiz a 
            left join nan_quiz_data_file b on b.file_idx = a.file_id 
            left join g5_member c on c.mb_id = a.mb_id 
            where a.quiz_idx = '" . $quiz_idx . "'  ";
$quiz_row = sql_fetch($sql);

$sql = " select *,FN_CODE('quiz_type',a.question_type) question_type_name 
                from nan_question a 
                left join nan_quiz_data_file b on b.file_idx = a.file_id 
                where a.quiz_idx = '" . $quiz_idx . "' 
                 order by question_idx 
                 limit ".$page.", 1 ";
$question_row = sql_fetch($sql);

$sql = " select *
        from nan_question_option a 
        left join nan_quiz_data_file b on b.file_idx = a.file_id 
        where a.question_idx = '" . $question_row['question_idx'] . "' 
         order by option_idx desc ";
$option_list = sql_query($sql);

?>
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx;?>">
<input type="hidden" name="question_idx" id="question_idx" value="<?=$question_row['question_idx'];?>">
<input type="hidden" name="answer_cnt" id="answer_cnt" value="<?=$answer_cnt;?>">

<!----> 
<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none  h-screen w-[360px] ml-0  mt-0" style="margin-left: auto; margin-right: auto">
    <div class="modal-content border-none  relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding outline-none text-current  ">
        <div class="mx-[15px]">
            <div class="modal-header flex flex-shrink-0 items-center justify-between mt-[35px] mb-[30px] rounded-t-md">
                <div> 
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        <?=$quiz_row['quiz_subject']?> <span class="text-sm font-bold"><?=$nextPage?>/<?=$quiz_row['cnt']?></span>
                    </h5>
                </div>
                <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close" onclick="location.href='./before-quiz.php?quiz_idx=<?=$quiz_idx?>'">
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
                    <div class="relative flex flex-col h-[90vh] overflow-auto gap-2 justify-between">
                        <div class="flex flex-col justify-center items-center">
                            <div class="progress-bar grow flex flex-col justify-center items-center hidden show 1" rel='1'>
                                <div class="flex flex-col gap-2">   
                                    <div> 
                                        <div class="flex justify-center ">
                                            <div class="rounded-lg  bg-white max-w-sm">  
                                                <div class="flex flex-col justify-center gap-2">
                                                    <div class="block   rounded-lg   max-w-sm   ">
                                                        <p class="text-gray-700 text-base  text-center">
                                                        <?=$question_row['title']?>
                                                        </p> 
                                                    </div> 
                                                    <div>
                                                        <img class="w-full" src="<?=$question_row['full_url']?>" />
                                                    </div> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                </div> 
                                <div class="flex flex-row justify-center w-full mt-[30px]">
                                    <?php if($question_row['question_type'] == "1"){ ?>
                                    <div class="flex flex-col gap-3 w-full text-center taking-quiz-1">
                                            <?php for ($i=0; $option_row=sql_fetch_array($option_list); $i++) {  ?>
                                                <div rel="choice-<?=$option_row['option_idx']?>" correct_answer_yn="<?=$option_row['correct_answer_yn']?>">
                                                    <div class="choice-<?=$option_row['option_idx']?> w-full inline-block px-6 py-4 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border border-blue-500"><?=$option_row['option_title']?></div>
                                                </div>
                                            <?php } ?>
                                    </div>
                                    <?php }else{ ?>
                                        <div class="flex flex-col gap-3 w-full text-center">
                                            <div class="relative flex flex-row items-center w-full">
                                                <?php for ($i=0; $option_row=sql_fetch_array($option_list); $i++) {  ?>
                                                    <input type="hidden" id="correct_answer" value="<?=$option_row['option_title']?>">
                                                <?php } ?>
                                                <textarea class="auto-resize-textarea3 border  w-full   bg-white py-1.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="answer_title"  style="resize: none;" ></textarea>
                                            </div>
                                            <div>
                                                <div class=" w-full inline-block px-6 py-4 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border border-blue-500" onclick="answer_save_text();">submit</div>
                                            </div>
                                            <div>
                                                <div class="w-full inline-block px-6 py-4 text-gray-700 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border border-red-500" onclick="skip();">skip</div>
                                            </div>
                                        </div>
                                    <?php } ?>
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
 
 
                        <div class="fixed top-0 left-[50%] z-10 hidden wrong-answer  h-full w-[350px] m-auto overflow-y-auto overflow-x-hidden outline-none bg-slate-900/50" style="transform: translate(-50%);">

                            <div class="absolute bottom-0 flex space-x-2 justify-center w-full bg-gray-900 ">
                                <div class=" shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg   w-full" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                                    <div class=" flex flex-col   pt-2 px-3 gap-2 bg-clip-padding   rounded-t-lg">
                                        <div class="flex flex-row gap-2 items-center">
                                            <img class="w-6 h-6" src="../nanna-v2/img/remove.png" />
                                            <p class="font-bold text-gray-500 uppercase text-red-600">
                                                wrong answer
                                            </p> 
                                        </div>
                                        <p class="font-bold text-gray-500 text-red-600 items-center">
                                            Please try again
                                        </p> 
                                    </div>
                                    <div class="p-3  rounded-b-lg break-words text-gray-700">
                                        <button type="submit" class="text-[16px] w-full px-6 py-2.5 bg-red-600 text-white font-medium   leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" id="wrong-answer">ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
  

                        <div class="fixed top-0 left-[50%] z-10 hidden right-answer  h-full w-[350px] m-auto overflow-y-auto overflow-x-hidden outline-none bg-slate-900/50" style="transform: translate(-50%);">
                            <div class="absolute bottom-0 flex space-x-2 justify-center w-full bg-gray-900 ">
                                <div class=" shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg   w-full" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                                    <div class=" flex flex-col   pt-2 px-3 gap-2 bg-clip-padding   rounded-t-lg">
                                        <div class="flex flex-row gap-2 items-center">
                                            <img class="w-6 h-6" src="../nanna-v2/img/check.png" />
                                            <p class="font-bold text-gray-500 uppercase text-green-600">
                                                right answer
                                            </p> 
                                        </div>
                                        <p class="font-bold text-gray-500 text-green-600 items-center">
                                        
                                        </p> 
                                    </div>
                                    <div class="p-3  rounded-b-lg break-words text-gray-700">
                                        <button type="submit" class="text-[16px] w-full px-6 py-2.5 bg-green-600 text-white font-medium   leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" id="right-answer">Continue</button>
                                    </div>
                                </div>  
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
    var first = true;
    var question_type = <?=$question_row['question_type'];?>;
    $('.taking-quiz-1 > div').on('mousedown', function(){ 
        var data = $(this).attr('rel');
        var answer_idx = "";
        if(data.split('-')[1]){
            answer_idx = data.split('-')[1]
        }
        var correct_answer_yn  = $(this).attr('correct_answer_yn');
        /** 정답체크
        $('.taking-quiz-1 > div').each(function (index, item) {
            if($(item).attr('correct_answer_yn') == "Y"){
                $(this.children[0]).addClass('border-red-500');
            }
        });
         **/
        $('.taking-quiz-1 > div > div').removeClass('taking-quiz-1-active');
        $('.'+data).addClass('taking-quiz-1-active');

        if(answer_idx != "" && first){
            answer_save(answer_idx,correct_answer_yn);
            first =  false;
        }

        if(correct_answer_yn == 'Y'){
            $('.wrong-answer').removeClass('show');
            $('.right-answer').addClass('show');
        }else{
            $('.right-answer').removeClass('show');
            $('.wrong-answer').addClass('show');
        }

    })  

    $('#wrong-answer').on('mousedown', function(){
        $('.wrong-answer').removeClass('show');
    })

    $('#right-answer').on('mousedown', function(){
        $('.right-answer').removeClass('show');
        next();
    })

function answer_save(answer_idx,correct_answer_yn){
    var objParams = {
        "type" : "answer_save",
        "quiz_idx" : $("#quiz_idx").val(),
        "question_idx" : $("#question_idx").val(),
        "answer_idx"   : answer_idx,
        "answer_cnt"   : $("#answer_cnt").val(),
        "now_page"         : <?=$nextPage?>,
        "last_page"     : <?=$quiz_row['cnt']?>,
        "correct_yn"    : correct_answer_yn
    };

    $.ajax({
        url: "./ajaxProc.php",
        type: "POST",
        data: objParams,
        dataType: "json",
        success: function(data, textStatus) {
            if(data.code == "200"){
         //       alert(data.msg);
                return false;
            }else{
                alert(data.msg);
                return false;
            }
        }
    });
}
var save_flag = false;
function answer_save_text(){
    if(!$("#answer_title").val()){
        alert("대답을 입력해 주세요.");
        return false;
    }
    var correct_yn = 'N';
    if($("#answer_title").val() == $("#correct_answer").val()){
        correct_yn = 'Y';
    }else{
        correct_yn = 'N';
    }
    if(first){
        var objParams = {
            "type" : "answer_save",
            "quiz_idx" : $("#quiz_idx").val(),
            "question_idx" : $("#question_idx").val(),
            "answer_idx"   : $("#answer_title").val(),
            "answer_cnt"   : $("#answer_cnt").val(),
            "now_page"         : <?=$nextPage?>,
            "last_page"     : <?=$quiz_row['cnt']?>,
            "correct_yn"    : correct_yn
        };

        $.ajax({
            url: "./ajaxProc.php",
            type: "POST",
            data: objParams,
            dataType: "json",
            success: function(data, textStatus) {
                if(data.code == "200"){
                    //       alert(data.msg);
                    save_flag = true;
                    if($("#answer_title").val() == $("#correct_answer").val()){
                        $('.wrong-answer').removeClass('show');
                        $('.right-answer').addClass('show');
                        next();
                    }else{
                        $('.right-answer').removeClass('show');
                        $('.wrong-answer').addClass('show');
                    }
                    return false;
                }else{
                    alert(data.msg);
                    return false;
                }
            }
        });
    }else{
        if($("#answer_title").val() == $("#correct_answer").val()){
            $('.wrong-answer').removeClass('show');
            $('.right-answer').addClass('show');
            next();
        }else{
            $('.right-answer').removeClass('show');
            $('.wrong-answer').addClass('show');
        }
    }


}
function next(){
        var last = <? if($nextPage == $quiz_row['cnt']){echo "true";}else{echo "false";}?>;
        if(last){
            location.href = "./quiz-result.php?quiz_idx=<?=$quiz_idx?>&answer_cnt=<?=$answer_cnt?>"
        }else{
            location.href = "./answering-multiple-choice.php?quiz_idx=<?=$quiz_idx?>&answer_cnt=<?=$answer_cnt?>&page=<?=$nextPage?>";
        }

}
function skip(){
    if(save_flag){
        next();
    }else{
        alert("한번이라도 대답을 해야 skp이 가능합니다");
    }
}
</script>


