<!-- Header Section -->
<?php
require_once "./inc/header-v1.php";

include_once('./_common.php');
include_once('./_head.sub.php');
include_once(G5_EDITOR_LIB);

?>

<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!---->


	<!-- Progress Bar -->
    <div class="grow-0 flex flex-col   mb-[35px] mt-[15px] gap-2">
        <div class="flex flex-row justify-between mx-[15px] ">
			<div class="flex flex-row items-center gap-2 justify-between w-full  ">			
				<div class=" text-2xl"> < </div> 	
				<div class="flex flex-row gap-2"> 
                    <div onclick="location.href='./quiz-step-1.php'" class="text-gray-400 text-sm" >취소</div>
                    <div class="text-blue-400 text-sm" onclick="save();">저장</div>
                </div> 
			</div> 
		</div> 
		<hr>
	</div>
	<!-- End Progress Bar -->


<!--  --> 
<div class="flex flex-col h-screen  gap-2 mx-[15px]">
    <input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx;?>">

	<div class="grow flex flex-col justify-start    w-full "> 

		<div class="mb-3 ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">WIKI Title</label>
            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                    ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                   name="quiz_subject" id="quiz_subject" size="500" maxLength="500" placeholder="제목"/>
		</div> 

		<div class="mb-3 "> 

        <label for="wiki" class="form-label inline-block mb-2 text-gray-700">DESCRIPTION</label>
            <div class="border border-gray-400">
                <!-- Textarea -->
                <input type="text"  name="quiz_desc" id="quiz_desc" size="500" maxLength="500" placeholder="설명" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                    ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"/>
            
            </div>
        </div>
		<div class="mb-3 "> 

            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">CONTENTS</label>
            <?php echo editor_html('quiz_contents', ''); ?>
		</div>
	</div>  

</div>

 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

<script type="text/javascript">
    function save(){
        if(!$('#quiz_subject').val()){
            alert("제목을 입력해주세요");
            $('#quiz_subject').focus();
            return false;
        }
        if(!$('#quiz_desc').val()){
            alert("설명을 입력해주세요");
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
                    location.href = '/main/quiz-step-1.php';
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

</script>
