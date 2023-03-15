<!-- Header Section -->
<?php
require_once "./inc/header-v1.php";
include_once('./_common.php');
error_reporting(0);
$quiz_idx = ifilter("quiz_idx", "", "string");
$question_idx = ifilter("question_idx", "", "string");
if($question_idx != ""){
    $sql = " select *,FN_CODE('question_type',a.question_type) question_type_name from nan_question a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.question_idx = '".$question_idx."'  ";
    $row = sql_fetch($sql);


    $sql = " select * from nan_question_option  where question_idx = '".$question_idx."'  ";
    $result = sql_query($sql);
}

?>
<!-- For footer last div -->
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx;?>">
<input type="hidden" name="question_idx" id="question_idx" value="<?=$question_idx;?>">
<!---->

    <div class="grow-0 flex flex-col  mb-[35px] mt-[15px] gap-2  w-full">
        <div class="flex flex-row justify-between mx-[15px]">
            <div class="flex flex-row items-center gap-2 justify-between w-full  ">
                <div>현재문제번호/총문제번호</div>
                <div class="flex flex-row gap-2">
                    <div class="text-gray-400 text-sm" onclick="go_back();">Save Draft</div>
                    <div class="text-blue-400 text-sm" onclick="question_save();">Submit</div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <!--  -->
    <div class="flex flex-col justify-between h-screen  gap-2 mx-[15px]">
        <div class="  flex flex-col justify-start   w-full ">
            <div class="text-xl font-bold">Quiz Title - Q#</div>
            <div class="mb-3  mt-[35px]">
                <label for="wiki" class="text-sm font-bold form-label inline-block mb-2">Question</label>
                <div id="q_body_img" class="flex justify-center" style="<? if(!$row[full_url]){ ?>display:none;<? } ?>margin-bottom: 10px;">
                    <form id="FILE_FORM" method="post" enctype="multipart/form-data" action="">
                        <input type="file" id="it_img" name="it_img" accept="image/*;capture=camera" style="display:none;"/>
                        <input type="hidden" id="file_id" name="file_id" value="<?=$row[file_id];?>"/>
                        <img id="q_img" class="rounded-lg  infinate-slider-image" src="<?=$row[full_url];?>" onclick="select_question('img');" alt="">
                    </form>
                </div>
                <div id="q_body_text" class="flex justify-center"  style="<? if(!$row[title]){ ?>display:none;<? } ?>margin-bottom: 10px;">
                    <input type="text" class=" form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title" name="title" value="<?=$row[title];?>" placeholder="Enter Question title">
                </div>
                <div id="q_botton" class="flex justify-center" style="<? if($row[full_url] && $row[title]){ ?>display:none;<? } ?>">
                    <div class="w-full">
                        <div class="dropdown relative cqm-question">
                            <button class="dropdown-toggle text-center w-full inline-block w-full  text-gray-500 font-thin  text-4xl leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300" type="button" id="cqm-question" data-bs-toggle="dropdown" aria-expanded="false" >
                                +
                            </button>
                                <ul id="cqm-question-drpdwn" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left bg-transparent list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none" aria-labelledby="cqm-question">
                                    <? if(!$row[full_url]){ ?>
                                    <li id="drop_img" rel="image">
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-700 hover:bg-blue-300 bg-blue-500 text-white rounded-xl  px-5 font-bold " href="#" onclick="select_question('img');">
                                            IMAGE
                                        </a>
                                    </li>
                                    <? } ?>
                                    <? if(!$row[title]){ ?>
                                    <li id="drop_text" rel="text">
                                        <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-700 hover:bg-blue-300 bg-blue-500  text-white rounded-xl  px-5 mb-2 font-bold " href="#" onclick="select_question('text');">
                                            TEXT
                                        </a>
                                    </li>
                                    <? } ?>
                                </ul>
                        </div>
                    </div>
                </div>

            <div class="w-full">
                <label for="wiki" class="text-sm font-bold form-label inline-block mb-2 ">Choices</label>
                <div id="choices_body">
                    <?php
                    $choice_idx = 0;
                    for ($i=0; $result_row=sql_fetch_array($result); $i++) {
                        $choice_idx = $i;
                        ?>
                        <div id="main_choice_<?=$i?>" class="form-check mb-3 flex flex-row justify-between items-center gap-2">
                            <img class="w-5 h-5 cursor-pointer" src="./img/trash.png"  onclick="del_choice(this);">
                            <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500">
                                <input type="hidden" id="choice_idx_<?=$i?>" value="<?=$result_row['option_idx']?>">
                                <input type="text" class="float-left form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="choice_text_<?=$i?>" value="<?=$result_row['option_title']?>" placeholder="선택지 내용">
                            </div>
                            <img class="w-5 h-5 cursor-pointer" id="choice_img_<?=$i?>" src="./img/<? if($result_row['correct_answer_yn'] == "Y"){ ?>check.png<? }else{ ?>negative.png<? } ?>" onclick="select_change(this);">
                        </div>
                    <?php } ?>
                    <!--div class="form-check mb-3 flex flex-row justify-between items-center gap-2">
                        <img class="w-5 h-5 cursor-pointer" src="./img/trash.png">
                        <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200  align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            Your Text
                        </div>
                        <img class="w-5 h-5 cursor-pointer" src="./img/check.png">
                    </div>
                    <div class="form-check mb-3 flex flex-row justify-between items-center gap-2">
                        <img class="w-5 h-5 cursor-pointer" src="./img/trash.png">
                        <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200  align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            Your Text
                        </div>
                        <img class="w-5 h-5 cursor-pointer" src="./img/negative.png">
                    </div>
                    <div-- class="form-check mb-3 flex flex-row justify-between items-center gap-2">
                        <img class="w-5 h-5 cursor-pointer" src="./img/trash.png">
                        <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200  align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            Your Text
                        </div>
                        <img class="w-5 h-5 cursor-pointer" src="./img/negative.png">
                    </div-->
                </div>
                <div class="form-check mb-3 flex flex-row justify-between items-center gap-2">
                    <img class="w-5 h-5 cursor-pointer invisible" src="./img/trash.png">
                    <div id="create-quiz-multiple-add" onclick="add_choices();" class="cursor-pointer text-center w-full inline-block px-6  text-gray-500 font-thin  text-4xl leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300">
                        +
                    </div>
                    <img class="w-5 h-5 cursor-pointer invisible" src="./img/negative.png">
                </div>
            </div>
        </div>
        <div class=" flex flex-row justify-between  mb-5 h-[100px]" id="arrow" >
            <div class="text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer rotate-180" id="arrow-left"  >
                <img class="w-5 h-5"  src="./img/fast-forward-double-right-arrows-symbol.png" />
            </div>
            <div class="  text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer" id="arrow-right" >

                <img class="w-5 h-5"  src="./img/fast-forward-double-right-arrows-symbol.png" />
            </div>
        </div>
    </div>


<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

<script>

    $('#cqm-question').on('mousedown', function(){
        $('#cqm-question-drpdwn').css({'display': 'block'})
    })
    $('#cqm-question-drpdwn > li').on('mousedown', function(){
      /**
        $('#cqm-question-drpdwn').css({'display': 'none'})
        var data = $(this).attr('rel');
        /**
        $('#cqm-question').addClass('hidden');
        if(data == 'text'){
            $(".cqm-question").append('<textarea type="text" rows="4" cols="50" class="form-control  block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="" ></textarea>');
        }else{
            $(".cqm-question").append('<input type="file" />');
        }
         **/
    })
/**
    $('ul#cqm-choices-drpdwn > li ').on('mousedown', function(){
        var data = $(this).attr('rel');
        if(data == 'text'){
            $(".cqm-choices").append('<input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-non enter-cqm-choices " />');

            // <input type="text" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-non enter-cqm-choices" placeholder="Example label" />
            $('.cqm-choices-drpdwn').addClass('hidden')
        }
    });
**/
function go_back(){
    location.href='./multiple-choice-quiz.php?quiz_idx=<?=$quiz_idx?>';
}
function select_question(kind){
    if(kind=="img"){
        document.all.it_img.click();

    }else if(kind=="text"){
        $("#q_body_text").show();
    }

    $('#cqm-question-drpdwn').css({'display': 'none'});
    if($("#q_body_text").css('display') == "flex"){
        $("#drop_text").hide();
    }
    if($("#q_body_img").css('display') == "flex"){
        $("#drop_img").hide();
    }
    if($("#q_body_img").css('display') == "flex" && $("#q_body_text").css('display') == "flex"){
        $("#cqm-question").hide();
    }

}
var choice_idx = <?=$choice_idx+1?>;
function add_choices(){
   // var idx = $('#choices_body').children().length;
    var html = '<div id="main_choice_'+choice_idx+'" class="form-check mb-3 flex flex-row justify-between items-center gap-2">';
        html += '<img class="w-5 h-5 cursor-pointer" src="./img/trash.png"  onclick="del_choice(this);">';
        html += '<div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500">';
        html += '<input type="hidden"  id="choice_idx_'+choice_idx+'" value="">';
        html += '<input type="text" class="float-left form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="choice_text_'+choice_idx+'" value="" placeholder="선택지 내용">';
        html += '</div>';
        html += '<img class="w-5 h-5 cursor-pointer" id="choice_img_'+choice_idx+'" src="./img/check.png" onclick="select_change(this);">';
        html += '</div>';

        $('#choices_body').append(html);
        choice_idx++;
}

function select_change(item){
    if(item.src.indexOf("check.png") != -1){
        item.src = "./img/negative.png";
    }else{
        item.src = "./img/check.png";
    }
}

function del_choice(item){
    $(item).parent().remove();
}

$(function() {
    $("#it_img").change(function(e){
        uploadFile(e.target.files[0]);
    });
});

function uploadFile(inputfile){
    var fileExt = inputfile.name.substring(inputfile.name.lastIndexOf('.')+1);
    if(fileExt.toLowerCase() != "jpg" && fileExt.toLowerCase() != "jpeg" && fileExt.toLowerCase() != "png"){
        alert("jpg,jpeg,png만 업로드 가능합니다.");
        return false;
    }
    var form = $('#FILE_FORM')[0];
    var formData = new FormData(form);

    formData.append("quiz_idx", "<?php echo $quiz_idx; ?>");
    formData.append("question_idx", $("#question_idx").val());
    formData.append("type", "img_upload");
    formData.append("fileObj", inputfile);

    $.ajax({
        url: './ajaxProc.php',
        processData: false,
        contentType: false,
        data: formData,
        type: 'POST',
        dataType: "json",
        async: false,
        beforeSend: function () {

        },
        complete: function () {

        },
        success: function(data) {
            if(data.code == "200"){
                $("#q_img").attr('src', data.img_url);
                $("#question_idx").val(data.question_idx);
                $("#file_id").val(data.file_id);
                $("#q_body_img").show();
                if($("#q_body_img").css('display') == "flex"){
                    $("#drop_img").hide();
                }
                if($("#q_body_img").css('display') == "flex" && $("#q_body_text").css('display') == "flex"){
                    $("#cqm-question").hide();
                }
            }else if(data.code == "201"){
                alert(data.msg);
                location.href='/bbs/login.php';
            }else{
                alert(data.msg);
                return false;
            }
        }
    });
}

function question_save(){
    if($('#file_id').val() == "" && $('#title').val() == ""){
        alert("질문을 입력 해주세요");
        $('#title').focus();
        return false;
    }
    if($("#choices_body [id^='main_choice_']").length == 0){
        alert("선택지를 추가 해주세요");
        return false;
    }

    var choiceArray = new Array();
    $("#choices_body [id^='main_choice_']").each(function (index, item) {
        var id = $("#choices_body [id^='main_choice_']")[index].id.replace('main_choice_','');
        var choiceObject = new Object();
        choiceObject['title'] =  $(item).find('#choice_text_'+id).val();
        choiceObject['option_idx'] =  $(item).find('#choice_idx_'+id).val();
        var correct_answer_yn = 'N';
        if($(item).find('#choice_img_'+id).attr("src").indexOf("check.png") != -1){
            correct_answer_yn = 'Y';
        }
        choiceObject['correct_answer_yn'] =  correct_answer_yn;
        choiceArray.push(choiceObject);
    });
    // console.log(rcpArray);



    var objParams = {
        "type" : "question_save",
        "quiz_idx" : "<?=$quiz_idx?>",
        "question_idx" : $("#question_idx").val(),
        "title"   : $('#title').val(),
        "file_id"   : $('#file_id').val(),
        "choiceArray"   :  choiceArray,
        "question_type"   :  "1"
    };

    $.ajax({
        url: "./ajaxProc.php",
        type: "POST",
        data: objParams,
        dataType: "json",
        success: function(data, textStatus) {
            if(data.code == "200"){
                alert(data.msg);
                return false;
            }else{
                alert(data.msg);
                return false;
            }
        }
    });
}
</script>