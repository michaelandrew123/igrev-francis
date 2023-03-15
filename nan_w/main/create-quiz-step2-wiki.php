<?php
require_once "./inc/header.php";

include_once('./_common.php');
include_once('./_head.sub.php');
include_once(G5_EDITOR_LIB);
?>





<!--  -->
<div class="pt-6 flex flex-col h-screen  gap-2">
    <input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx;?>">
    <!-- Progress Bar -->
    <div class="grow-0 flex flex-col gap-2">
        <div class="flex flex-row justify-between">
            <div class="flex flex-row items-center gap-2">
                <div class="font-bold text-3xl">Create Content WIKI</div>
            </div>


        </div>
        <hr>
    </div>
    <!-- End Progress Bar -->

    <div class="grow flex flex-col justify-start  gap-3 w-full ">

        <div>
            <div class="font-bold">WIKI TITLE</div>
            <div><input type="text" name="quiz_subject" id="quiz_subject" size="500" maxLength="500" placeholder="제목" class="form-control
					        block
					        w-full
					        px-3
					        py-1.5
					        text-base
					        font-normal
					        text-gray-700
					        bg-white bg-clip-padding
					        border border-solid border-gray-300
					        rounded
					        transition
					        ease-in-out
					        m-0
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="ID"></div>
        </div>
        <hr>
        <div>
            <div class="font-bold">DESCRIPTION</div>
            <div><input type="text" name="quiz_desc" id="quiz_desc" size="500" maxLength="500" placeholder="설명" class="form-control
					        block
					        w-full
					        px-3
					        py-1.5
					        text-base
					        font-normal
					        text-gray-700
					        bg-white bg-clip-padding
					        border border-solid border-gray-300
					        rounded
					        transition
					        ease-in-out
					        m-0
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="ID"></div>
        </div>

        <div class="flex flex-col gap-3">
            <div class="font-bold">CONTENTS</div>
            <div>
                <?php echo editor_html('quiz_contents', 'test'); ?>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-3">
    <button type="button" class="
                      px-6
                      py-2.5
                      bg-blue-600
                      text-white
                      font-medium
                      text-xs
                      leading-tight
                      uppercase
                      rounded
                      shadow-md
                      hover:bg-blue-700 hover:shadow-lg
                      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                      active:bg-blue-800 active:shadow-lg
                      transition
                      duration-150
                      ease-in-out" onclick="location.href='/main/create-quiz-step1.php'">취소</button>
    <button type="button" class="
					      px-6
					      py-2.5
					      bg-blue-600
					      text-white
					      font-medium
					      text-xs
					      leading-tight
					      uppercase
					      rounded
					      shadow-md
					      hover:bg-blue-700 hover:shadow-lg
					      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
					      active:bg-blue-800 active:shadow-lg
					      transition
					      duration-150
					      ease-in-out" onclick="save();">저장</button>
    </div>

</div>





<!-- Fixed Menu -->
<?php require_once "./inc/fixed-menu.php"; ?>

<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>


<script type="text/javascript">


    var numBar = '7/10';
    var percent = (10/10 * 100);
    $('#numBar').text(numBar);
    $('#meterBar').css({ 'width': percent + '%' });

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
                    location.href = '/main/create-quiz-step1.php';
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


