<!-- Header Section -->
<?php
include_once('./_common.php');
require_once "./inc/header.php";
$quiz_idx = ifilter("quiz_idx", "", "string");
$kind = ifilter("kind", "random", "string");
$search_word = ifilter("search_word", "", "string");
if($quiz_idx == ""){
    alert("올바른 방법으로 이용해주세요.","/");
}
$bookmark_row['mark_img'] = '';
$rating_row['rating'] = '0';
$row['avg_rating'] = '0';
if($quiz_idx != "") {
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name, DATE_FORMAT(a.reg_date, '%Y-%m-%d') save_date,DATE_FORMAT(a.edit_date, '%Y-%m-%d') modi_date,
            (select IFNULL(ROUND(AVG(rating),1),0) avg_rating from nan_quiz_rating where quiz_idx= '{$quiz_idx}') avg_rating 
            from nan_quiz a 
            left join nan_quiz_data_file b on b.file_idx = a.file_id 
            left join g5_member c on c.mb_id = a.mb_id 
            where a.quiz_idx = '" . $quiz_idx . "'  ";
    $row = sql_fetch($sql);

    if(!$row['modi_date']){
        $row['modi_date'] = $row['save_date'];
    }
    if(!$row['avg_rating']){
        $row['avg_rating'] = 0;
    }

    $sql = "update nan_quiz set view_cnt = ifnull(view_cnt,0)+1 where quiz_idx = '{$quiz_idx}'";
    sql_query($sql, false);

    if($_SESSION['mb_id']){
        //뷰히스토리추가
        $sql = "insert into  nan_quiz_view_history set mb_id = '{$_SESSION['mb_id']}',reg_date = now(),quiz_idx = '{$quiz_idx}' ";
        sql_query($sql, false);

        $sql = "select * from nan_bookmark where quiz_idx = '".$quiz_idx."' and mb_id = '".$_SESSION['mb_id']."' ";
        $bookmark_row = sql_fetch($sql);
        if($bookmark_row['mark_yn'] == 'Y'){
            $bookmark_row['mark_img'] = '-yellow';
        }else{
            $bookmark_row['mark_img'] = '';
        }
        $sql = "select * from nan_quiz_rating where quiz_idx = '".$quiz_idx."' and mb_id = '".$_SESSION['mb_id']."' ";
        $rating_row = sql_fetch($sql);
        if(!$rating_row){
            $rating_row['rating'] = '0';
        }
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="./js/masonry.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
<script>
    let recent_view_dt="", recent_dt="", view_dt="", tilte_dt="", reply_dt="";
    let slider_cnt=1;
    let main_list_data={};
    let search_key = "";
    var lastScrollTop = 0;
    var load = false;
    var list_cnt = 1;
    var quiz_idx_loaded = [];
    var loadedAll = false;

    $(document).ready(function() {

        let list_mode="";		// keep: 이전까지 봤던 리스트를 한번에 가져온다, new: 새로운 리스트를 가져온다
        // 저장된 데이터가 있으면, 요청에 따라 새로운 데이터 또는 이전 리스트 갱신을 해준다.
        let main_list_data = JSON.parse(window.sessionStorage.getItem("main_list_data"));
        if (main_list_data != null) {
            list_mode = "keep";
            search_key = main_list_data.search_key;
        }
        else {
            list_mode = "new";
        }
        get_home_list(list_mode);

        setTimeout(function(){
            $(window).scroll(function() {
                // 스크롤이 맨 끝으로 가면 이후 리스트 요청
                if ($(window).scrollTop()+300 >= $(document).height() - $(window).height() - 1) {
                    if(lastScrollTop < $(window).scrollTop()){
                        lastScrollTop = $(window).scrollTop() - 0.1;
                        if(loadedAll){
                            alert("No more data found.");
                            return;
                        }
                        get_home_list("new");
                    }
                }
            });
        }, 2000);

        /* Resize all the grid items on the load and resize events */
        var masonryEvents = ['load', 'resize'];
        masonryEvents.forEach( function(event) {
            window.addEventListener(event, resizeAllMasonryItems);
        } );
    });

    function get_home_list(list_mode) {
        if(!load){
            load = true;
            $.ajax({
                url: "/main/ajaxProc.php",
                type: "POST",
                data: {
                    type: "get_page",
                    kind: "<?=$kind?>",
                    search_word: "<?=$search_word?>",
                    list_mode: list_mode,	// keep: 이전까지 봤던 리스트를 한번에 가져온다, new: 새로운 리스트를 가져온다
                    search_key: search_key,
                    quiz_idx_loaded: quiz_idx_loaded
                },
                dataType: "json",
                success: function(data, textStatus) {
                    if(data.data.length == 0){
                        loadedAll = true;
                        alert("No more data found.");
                        return;
                    } else {
                        set_main_list(data);
                        load = false;
                    }
                }
            });
        }
    }

    function set_main_list(data) {
        let posthtml="";
        for(let cnt in data['data']) {
            posthtml="";
            posthtml = make_html(data['data'][cnt]);
            search_key = data['data'][cnt].search_key; 	// 다음번 리스트를 위한 마지막 날짜
            $("#grid-list").append(posthtml);
            list_cnt++;
        }

        // 각 마지막 게시물을 저장.
        main_list_data = {
            search_key: search_key
        };

        window.sessionStorage.setItem("main_list_data", JSON.stringify(main_list_data));
        
        if(data['data'].length != 0){
            waitForImages();
        }
    }

    function make_html(data){
        quiz_idx_loaded.push(data.quiz_idx);

        var posthtml = "";
        posthtml += '<div class="masonry-item bg-white mb-1" onclick="location.href=\'./wiki-content.php?quiz_idx='+data.quiz_idx+'\'" style="margin-top:20px">';
        posthtml += '   <div class="masonry-content">';
        posthtml += '       <div class="">';
        var addclass = "";
        var addimg = "";
        /**
         if(data.mark_yn != "Y"){
            addclass = "png-white";
        }else{
            addimg = "-yellow";
        }
         posthtml += '<img id="bookmark-'+data.quiz_idx+'" class="w-4 h-4 absolute right-2 top-2 '+addclass+'" src="./img/bookmark'+addimg+'.png" alt="Mountain"  onclick="bookmark_save(this,\''+data.quiz_idx+'\');">';
         **/
        if(data.full_url == null){
            data.full_url = 'https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg';
        }
        if(data.quiz_type == 4){
            posthtml += '<img class="grid-img rounded-lg w-full" src="'+data.full_url+'" alt="'+data.quiz_subject+'">';
        }else{
            posthtml += '<img class="grid-img rounded-lg w-full" src="'+data.full_url+'" alt="'+data.quiz_subject+'">';
        }
        posthtml += '       </div>';
        posthtml += '       <div class="w-full">';
        posthtml += '           <p class="text-gray-500 text-[16px] py-1">'+data.quiz_type_name+'</p>';
        posthtml += '           <div class="font-bold text-[16px] text-black thumbnail-name">'+data.quiz_subject+'</div>';
        posthtml += '       </div>';
        posthtml += '   </div>';
        posthtml += '</div>';
        return posthtml;
    }
    function search(){
        location.href = './home.php?search_word='+$('#search_word').val();
    }

</script>
<!-- For footer last div -->

    <input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx?>">


    <div class="bg-white rounded-t-[5px]">

        <!-- first slider -->
        <div class="flex flex-col " >
            <div class="flex flex-row justify-between mx-[15px]  mt-[10px] mb-[10px]">
                <div class="font-bold" onclick="location.href='/'">HOME</div>
            </div>
            <hr>
            <h5 class="text-xl font-bold leading-normal text-gray-800 ml-[15px] mr-[15px]  my-[10px]  "  >
                Wiki
            </h5>
        <div class="flex flex-col gap-3 ml-[15px] mr-[15px] pt-0">


            <div class="flex flex-row gap-2 items-stretch  ">
                <!-- Thumbnail Image -->
                <div class="w-6/12 ">
                    <? if($row['full_url']){ ?>
                        <img class="flex-1 rounded-lg m-auto"  src="<?=$row['full_url']?>" alt="Mountain">
                    <? } ?>
                </div>
                <div class="flex flex-col w-6/12 flex-1 justify-between">

                    <div class="text-[18px]">
                        <div class="font-bold"><?=$row['quiz_subject']?></div>
                    </div>

                    <!-- Title -->

                    <div class="flex flex-col ">
                        <div class="font-normal text-[14px]">
                            <!--div class="font-bold"><?=$row['mb_name']?></div-->
                            <div>Created <?=$row['save_date']?></div>
                            <? if($row['save_date'] != $row['modi_date']){ ?><div>Edited <?=$row['modi_date']?></div><? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-[20px] flex flex-col gap-2 ml-[15px] mr-[15px] pt-0">

            <hr>
            <div class="flex flex-row gap-3 font-bold text-[18px]">

            </div>
            <div class="text-[14px] pb-[10px]">
                <?=$row['quiz_desc']?>
            </div>

        </div>

        <hr>
        <div class=" ">
            <div class=" relative  rounded-xl overflow-hidden ">
                <div class="absolute inset-0 " style="
            background-position: 10px 10px;"> </div>
                <div class="relative rounded-xl mx-[15px]">
                    <div id="grid-list" class="masonry justify-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
                    </div>
                </div>
                <div class="absolute inset-0 pointer-events-none "> </div>
            </div>
        </div>

    </div>





