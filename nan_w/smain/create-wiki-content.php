<!-- Header Section -->
<?php
require_once "./inc/header-v1.php";
include_once('./_common.php');
include_once('./_head.sub.php');
include_once(G5_EDITOR_LIB);

$quiz_idx = ifilter("quiz_idx", "", "string");
$sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name, DATE_FORMAT(a.reg_date, '%Y-%m-%d') save_date,DATE_FORMAT(a.edit_date, '%Y-%m-%d') modi_date 
            from nan_quiz a 
            left join nan_quiz_data_file b on b.file_idx = a.file_id 
            left join g5_member c on c.mb_id = a.mb_id 
            where a.quiz_idx = '" . $quiz_idx . "'  ";
$row = sql_fetch($sql);
?>
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg " style="height:100%">
    <input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx;?>">
<!---->


	<!-- Progress Bar -->
    <div class="grow-0 flex flex-col   mb-[35px] mt-[15px] gap-2">
        <div class="flex flex-row justify-between mx-[15px] ">
			<div class="flex flex-row items-center gap-2 justify-between w-full  ">			
				<div class=" text-2xl"> < </div> 	
				<div class="flex flex-row gap-2"> 
                    <div class="text-gray-400 text-sm" onclick="location.href='./create-content.php'">취소</div>
                    <div class="text-blue-400 text-sm" onclick="save();">저장</div>
                </div> 
			</div> 
		</div> 
		<hr>
	</div>
	<!-- End Progress Bar -->


<!--  --> 
<div class="flex flex-col h-screen gap-2 mx-[15px]">
	<div class="grow flex flex-col justify-start w-full ">
		<div class="mb-3 ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">제목</label>
            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                   name="quiz_subject" id="quiz_subject" size="500" maxLength="500" placeholder="제목" value="<?=$row['quiz_subject']?>"/>
		</div>
        <div class="mb-3 ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">Upload Thumbnail</label>
            <form id="FILE_FORM" method="post" enctype="multipart/form-data" action="">
                <input type="file" id="it_img" name="it_img" accept="image/*;capture=camera" <? if($row['full_url']){ ?>style="display:none;"<? } ?>/>
                <input type="hidden" id="file_id" name="file_id" value="<?=$row['file_id'];?>"/>
                <img id="q_img" class="rounded-lg  infinate-slider-image" src="<?=$row['full_url'];?>" onclick="select_question();" alt="" <? if(!$row['full_url']){ ?>style="display:none;"<? } ?>>
            </form>
        </div>
		<div class="mb-3 ">
        <label for="wiki" class="form-label inline-block mb-2 text-gray-700">DESCRIPTION</label>
            <?php echo editor_html('quiz_desc', $row['quiz_desc']); ?>
        </div>
		<div class="mb-3 ">
        <p><strong>Solution with span:</strong> <span class="textarea" role="textbox" contenteditable></span></p>
            <?php echo editor_html('quiz_contents', $row['quiz_contents']); ?>
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
        formData.append("quiz_type", '4');
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
                    location.href='/bbs/login.php';
                }else{
                    alert(data.msg);
                    return false;
                }
            }
        });
    }


    function save(){
        if(!$('#quiz_subject').val()){
            alert("제목을 입력해주세요");
            $('#quiz_subject').focus();
            return false;
        }
        if(!$('#file_id').val()){
            alert("썸네일을 업로드 해주세요");
            $('#file_id').focus();
            return false;
        }

        oEditors.getById["quiz_desc"].exec("UPDATE_CONTENTS_FIELD", []);
        if(!$('#quiz_desc').val()){
            alert("내용을 입력해주세요");
            $('#quiz_desc').focus();
            return false;
        }

        oEditors.getById["quiz_contents"].exec("UPDATE_CONTENTS_FIELD", []);
        if(!$('#quiz_contents').val()){
            alert("내용을 입력해주세요");
            $('#quiz_contents').focus();
            return false;
        }

        var data = new FormData();
        if($('#quiz_idx').val()){
            data.append("type", "wiki_update");
            data.append("quiz_idx", $('#quiz_idx').val());
        }else{
            data.append("type", "wiki_save");
        }

        data.append("quiz_subject", $('#quiz_subject').val());
        data.append("quiz_desc", $('#quiz_desc').val());
        data.append("quiz_contents", $('#quiz_contents').val());
        data.append("file_id", $('#file_id').val());
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
                {
                    alert(data.msg);
                    location.href = '/main/create-content.php';
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
