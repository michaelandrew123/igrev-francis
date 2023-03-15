<!-- Header Section -->
</style>
<?php
include_once('./_common.php');
require_once "./inc/header.php";

$kind = ifilter("kind", "latest", "string");
$search_word = ifilter("search_word", "", "string");

if($kind == "recently"){
    $sort_title = "Recent viewed";
}else if($kind == "latest"){
    $sort_title = "Recent";
}else if($kind == "recommed"){
    $sort_title = "View";
}else if($kind == "tilte"){
    $sort_title = "Title";
}else if($kind == "reply"){
    $sort_title = "Reply";
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

    var load = false;
    function get_home_list(list_mode) {
        if(!load){
            load = true;
            $.ajax({
                url: "/main/ajaxProc.php",
                type: "POST",
                data: {
                    type: "get_page",
                    kind: "<?=$kind?>",
                    search_word: $('#search_word').val(),
                    list_mode: list_mode,	// keep: 이전까지 봤던 리스트를 한번에 가져온다, new: 새로운 리스트를 가져온다
                    search_key: search_key
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

    var list_cnt = 1;
    var quiz_idx_loaded = [];
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

        var posthtml = "";
        posthtml += '<div class="masonry-item bg-white mb-1" onclick="location.href=\'./wiki-content.php?quiz_idx='+data.quiz_idx+'\'"  style="margin-top:20px">';
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
        // 각 마지막 게시물을 저장.
        main_list_data = {
            search_key: ''
        };
        $("#grid-list").empty();
        get_home_list('keep');
    }
</script>
<style>

</style>

<div class="bg-white rounded-t-[5px]">

    <!-- first slider -->
    <div class="flex flex-col" >
        <div class="flex flex-row justify-between mx-[15px]  mt-[10px] mb-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="absolute w-5 h-5">
                <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
            </svg>
            <div class="font-bold ml-[25px]" onclick="location.href='/'">HOME</div>
        </div>
        <hr>
        <div class=" ">
            <div class=" relative rounded-xl overflow-hidden ">
                <div class="absolute inset-0 " style="background-position: 10px 10px;"></div>
                <div class="relative rounded-xl mx-[15px]">
                    <div id="grid-list" class="masonry justify-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
                    </div>
                </div>
                <div class="absolute inset-0 pointer-events-none "> </div>
            </div>
        </div>
    </div>
        <!-- Footer Section -->

<script>



    /** End Recommended Slider */


</script>

