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

if($row['del_yn'] == 'Y'){
    alert("삭제된 위키입니다.",'/');
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
<script src="https://unpkg.com/dropzone"></script>
<script src="https://unpkg.com/cropperjs"></script>

<style>

    .image_area {
        position: relative;
    }

    img {
        display: block;
        max-width: 100%;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

    .modal-lg{
        max-width: 1000px !important;
    }

    .overlay {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.5);
        overflow: hidden;
        height: 0;
        transition: .5s ease;
        width: 100%;
    }

    .image_area:hover .overlay {
        height: 50%;
        cursor: pointer;
    }

    .text {
        color: #333;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

</style>

<script>

    $(document).ready(function(){

        /*function readURL(input)
        {
              if(input.files && input.files[0])
              {
                var reader = new FileReader();

                reader.onload = function(event) {
                      $('#uploaded_image').attr('src', event.target.result);
                      $('#uploaded_image').removeClass('img-circle');
                      $('#upload_image').after('<div align="center" id="crop_button_area"><br /><button type="button" class="btn btn-primary" id="crop">Crop</button></div>')
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
              }
          }

          $("#upload_image").change(function() {
              readURL(this);
              var image = document.getElementById("uploaded_image");
              cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        });*/


        var $modal = $('#modal');
        var image = document.getElementById('sample_image');
        var cropper;



        //$("body").on("change", ".image", function(e){
        $('#upload_image').change(function(event){
            var files = event.target.files;
            var fileExt = files[0].name.substring(files[0].name.lastIndexOf('.')+1);
            if(fileExt.toLowerCase() != "jpg" && fileExt.toLowerCase() != "jpeg" && fileExt.toLowerCase() != "png"){
                alert("jpg,jpeg,png만 업로드 가능합니다.");
                return false;
            }
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            //var reader;
            //var file;
            //var url;

            if (files && files.length > 0)
            {
                /*file = files[0];
                if(URL)
                {
                  done(URL.createObjectURL(file));
                }
                else if(FileReader)
                {*/
                reader = new FileReader();
                reader.onload = function (event) {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
                //}
            }
        });

        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 165/205,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                width: 165,
                height: 205,
            });

            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;

                    var form = $('#FILE_FORM')[0];
                    var formData = new FormData(form);
                    formData.append("type", "quiz_img_upload");
                    formData.append("fileObj", base64data);
                    $.ajax({
                        url: "./ajaxProc.php",
                        method: "POST",
                        data: {"type" : "quiz_img_upload",
                                image: base64data},
                        success: function(data){
                            if(data.code == "200"){
                                $modal.modal('hide');
                                $("#file_id").val(data.file_id);
                                $("#uploaded_image").attr('src', data.img_url);
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
            });
        });

    });

    function select_img(){
        document.all.image.click();
    }
</script>

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
                    <? if($quiz_idx){ ?>
                        <div class="text-gray-400 text-sm" onclick="del_quiz();">삭제</div>
                    <? } ?>
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
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">TITLE</label>
            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                   name="quiz_subject" id="quiz_subject" size="500" maxLength="500" placeholder="TITLE" value="<?=$row['quiz_subject']?>"/>
		</div>
        <div class="mb-3 image_area">
            <label for="upload_image" class="form-label inline-block mb-2 text-gray-700">Upload Thumbnail</label>
            <form id="FILE_FORM" method="post" enctype="multipart/form-data" action="">
                    <input type="hidden" id="file_id" name="file_id" value="<?=$row['file_id'];?>"/>
                    <img src="<? if($row['full_url']){ echo $row['full_url']; }else{  echo "/img/user.png"; } ?>" onclick="select_img();" id="uploaded_image" class="rounded-lg  infinate-slider-image" />
                    <div class="overlay">
                        <div class="text">Click to Change Thumbnail Image</div>
                    </div>
                    <input type="file" name="image" class="image" id="upload_image" style="display:none">
            </form>
        </div>
        <!--div class="mb-3 ">
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">Upload Thumbnail</label>
            <form id="FILE_FORM" method="post" enctype="multipart/form-data" action="">
                <input type="file" id="it_img" name="it_img" accept="image/*;capture=camera" <? if($row['full_url']){ ?>style="display:none;"<? } ?>/>
                <input type="hidden" id="file_id" name="file_id" value="<?=$row['file_id'];?>"/>
                <img id="q_img" class="rounded-lg  infinate-slider-image" src="<?=$row['full_url'];?>" onclick="select_question();" alt="" <? if(!$row['full_url']){ ?>style="display:none;"<? } ?>>
            </form>
        </div-->
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

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Crop Image Before Upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="" id="sample_image" />
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
<?php // require_once "./inc/footer.php"; ?>


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
        if($('#quiz_idx').val() != ''){
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
    function del_quiz(){
        if(!confirm("퀴즈를 정말 삭제하시겠습니까?")) {
            return false;
        }
        if($('#quiz_idx').val() == ''){
            alert("삭제할 데이터가 없습니다.");
            return false;
        }
        var data = new FormData();
        if($('#quiz_idx').val() != ''){
            data.append("type", "quiz_delete");
            data.append("quiz_idx", $('#quiz_idx').val());

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

    }
    // $('.form-check > div').on('touchstart', function(){

    // 	$('.form-check > div.bg-blue-600').removeClass('bg-blue-600');
    // 	$(this).addClass('bg-blue-600');
    // })
</script>
