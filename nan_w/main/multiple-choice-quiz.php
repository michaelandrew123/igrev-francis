 <!-- Header Section -->
<?php
require_once "./inc/header-v1.php";
include_once('./_common.php');
include_once('./_head.sub.php');
include_once(G5_EDITOR_LIB);
$quiz_idx = ifilter("quiz_idx", "", "string");
if($quiz_idx != "") {
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name, DATE_FORMAT(a.reg_date, '%Y-%m-%d') save_date,DATE_FORMAT(a.edit_date, '%Y-%m-%d') modi_date 
            from nan_quiz a 
            left join nan_quiz_data_file b on b.file_idx = a.file_id 
            left join g5_member c on c.mb_id = a.mb_id 
            where a.quiz_idx = '" . $quiz_idx . "'  ";
    $row = sql_fetch($sql);

    $sql = " select *,FN_CODE('question_type',a.question_type) question_type_name from nan_question a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.quiz_idx = '".$quiz_idx."'  ";
    $result = sql_query($sql);
    $count = sql_num_rows($result);
}
?>
  
    
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
    <input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx;?>">
<!---->
 

    <div class="grow-0 flex flex-col   mb-[35px] mt-[15px] gap-2">
        <div class="flex flex-row justify-between mx-[15px] ">
            <div class="flex flex-row items-center  justify-between w-full  ">			
                <div class=" text-2xl"> < </div> 	 
                <div class="flex flex-row  gap-2"> 
                    <div class="text-gray-400 text-sm" onclick="location.href='./create-content.php'">Save Draft</div>
                    <div class="text-blue-400 text-sm" onclick="save('save');">Submit</div>
                </div> 
            </div> 
        </div>  
        <hr>
    </div> 


<!--  --> 
<div class=" flex flex-col h-screen  gap-2 mx-[15px]"> 


	<div class="grow flex flex-col justify-start  w-full ">  
        <div class="text-xl font-bold">Make Quiz</div>
		<div class="mb-3 mt-[35px] ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700  font-bold text-sm">Quiz Title</label>
            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                   name="quiz_subject" id="quiz_subject" size="500" maxLength="500" value="<?=$row['quiz_subject']?>" placeholder="제목"/>
		</div>
        <div class="mb-3 ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">Upload Thumbnail</label>
            <form id="FILE_FORM" method="post" enctype="multipart/form-data" action="">
                <input type="file" id="it_img" name="it_img" accept="image/*;capture=camera" <? if($row['full_url']){ ?>style="display:none;"<? } ?>/>
                <input type="hidden" id="file_id" name="file_id" value="<?=$row['file_id'];?>"/>
                <img id="q_img" class="rounded-lg  infinate-slider-image" src="<?=$row['full_url'];?>" onclick="select_question();" alt="" <? if(!$row['full_url']){ ?>style="display:none;"<? } ?>>
            </form>
        </div>
        <div class="mb-3 mt-[35px] ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700  font-bold text-sm">Quiz Summary</label>
            <?php echo editor_html('quiz_desc', $row['quiz_desc']); ?>
        </div>
        <?php if($count != 0){?>
        <div class="mb-3 mt-[35px] " style="overflow-y:scroll; height:400px;">

            <label for="wiki" class="form-label inline-block mb-2 text-gray-700  font-bold text-sm">Quiz List</label>
            <?php
            for ($i=0; $result_row=sql_fetch_array($result); $i++) {
            ?>
                <?php if($result_row['question_type'] == "1"){ ?>
                    <div onclick="location.href='./create-quiz-multiple.php?quiz_idx=<?=$quiz_idx?>&question_idx=<?=$result_row['question_idx']?>'" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                <?php }else if($result_row['question_type'] == "3"){ ?>
                    <div onclick="location.href='./create-quiz-open.php?quiz_idx=<?=$quiz_idx?>&question_idx=<?=$result_row['question_idx']?>'" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">

                    <?php } ?>
                    <img class="rounded-lg  infinate-slider-image" src="<?=$result_row['full_url'];?>" alt="">
                    <?=$result_row['title']?>
                </div>
            <?php } ?>
        </div>
        <?php } ?>
    <div class="w-full">
            <div class="form-check">
                <div  onclick="save('add');" class="text-center w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500"  >
                    Add Quiz
                </div>
            </div> 
        </div>
    
    
  
	</div>  


</div>

 <!-- Footer Section -->
 <?php require_once "./inc/footer.php"; ?>
    <script type="text/javascript">
        $(function() {
            $("#it_img").change(function(e){
                uploadFile(e.target.files[0]);
            });
        });

        function select_question(){
            document.all.it_img.click();
        }

        function uploadFile(inputfile){
            var fileExt = inputfile.name.substring(inputfile.name.lastIndexOf('.')+1);
            if(fileExt.toLowerCase() != "jpg" && fileExt.toLowerCase() != "jpeg" && fileExt.toLowerCase() != "png"){
                alert("jpg,jpeg,png만 업로드 가능합니다.");
                return false;
            }
            var form = $('#FILE_FORM')[0];
            var formData = new FormData(form);

            formData.append("quiz_idx", "<?php echo $quiz_idx; ?>");
            formData.append("type", "quiz_img_upload");
            formData.append("fileObj", inputfile);
            formData.append("quiz_type", '1');
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
                        $("#quiz_idx").val(data.quiz_idx);
                        $("#file_id").val(data.file_id);
                        $("#it_img").hide();
                        $("#q_img").show();
                    }else if(data.code == "201"){
                        alert(data.msg);
                        location.href='/main/login.php';
                    }else{
                        alert(data.msg);
                        return false;
                    }
                }
            });
        }

        function make_question(){
            if(!$('#quiz_idx').val()){
                alert("퀴즈를 저장해야 문제를 만들 수 있습니다.");
                return false;
            }
            location.href = '/main/question.php?quiz_idx='+$('#quiz_idx').val();
        }
        function save(kind){
            if(!$('#quiz_subject').val()){
                alert("제목을 입력해주세요");
                $('#quiz_subject').focus();
                return false;
            }

            oEditors.getById["quiz_desc"].exec("UPDATE_CONTENTS_FIELD", []);
            if(!$('#quiz_desc').val()){
                alert("Summary를 입력해주세요");
                $('#quiz_desc').focus();
                return false;
            }

            var data = new FormData();
            if($('#quiz_idx').val()){
                data.append("type", "quiz_update");
                data.append("quiz_idx", $('#quiz_idx').val());
            }else{
                data.append("type", "quiz_save");
            }

            data.append("quiz_subject", $('#quiz_subject').val());
            data.append("quiz_desc", $('#quiz_desc').val());
            $.ajax({
                url: "ajaxProc.php",
                type: 'post',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (data)
                {
                    if (data.code == "200")
                    {   if(kind == "save"){
                            alert(data.msg);
                            $('#quiz_idx').val(data.idx);
                        }else if(kind == "add"){
                            $('#quiz_idx').val(data.idx);
                            location.href = '/main/question.php?quiz_idx='+$('#quiz_idx').val();
                        }
                        return false;
                  //      location.href = '/main/create-content.php';
                    }else if (data.code == "201")
                    {
                        alert(data.msg);
                        location.href = '/main/login.php';
                        return false;
                    }else{
                        alert(data.msg);
                        return false;
                    }
                },
                error: function (e)
                {
                    alert("에러 : " + e.responseText);
                }
            });
        }
        // $('.form-check > div').on('touchstart', function(){

        // 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
        // 	$(this).addClass('bg-blue-600');
        // })
    </script>