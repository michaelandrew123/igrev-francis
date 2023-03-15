<!-- Header Section -->
<?php
include_once('./_common.php');
require_once "./inc/header-v1.php";
if(!$_SESSION['mb_id']){
    alert('로그인 후 이용하여 주십시오.', G5_URL);
}
$kind = ifilter("kind", "latest", "string");
$search_word = ifilter("search_word", "", "string");
$archived_type = ifilter("archived_type", "to_view", "string");
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
<script type="text/javascript" src="./js/index.js"></script>
<script>
    let recent_view_dt="", recent_dt="", view_dt="", tilte_dt="", reply_dt="";
    let slider_cnt=1;
    let main_list_data={};
    let search_key = "";
    let kind = "<?=$kind?>";
    let search_word = "<?=$search_word?>";
    let archived_type = "<?=$archived_type?>";
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
                    get_home_list("new");
                }
            });
        }, 2000);
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
                    kind: kind,
                    search_word: search_word,
                    archived_type: archived_type,
                    list_mode: list_mode,	// keep: 이전까지 봤던 리스트를 한번에 가져온다, new: 새로운 리스트를 가져온다
                    search_key: search_key
                },
                dataType: "json",
                success: function(data, textStatus) {
                    set_main_list(data);
                    load = false;
                }
            });
        }
    }

    var list_cnt = 1;
    function set_main_list(data) {
        let posthtml="";
        for(let cnt in data['data']) {
            posthtml="";
            if(archived_type == "add_new"){
                posthtml = make_html_addnew(data['data'][cnt]);
            }else{
                posthtml = make_html(data['data'][cnt]);
            }

            search_key = data['data'][cnt].search_key; 	// 다음번 리스트를 위한 마지막 날짜
            if(archived_type == "add_new"){
                $("#grid-list2").append(posthtml);
            }else{
                $("#grid-list").append(posthtml);
            }

            list_cnt++;
        }

        // 각 마지막 게시물을 저장.
        main_list_data = {
            search_key: search_key
        };

        window.sessionStorage.setItem("main_list_data", JSON.stringify(main_list_data));
    }

    function make_html(data){

        var posthtml = "";
        posthtml += '<div class="w-5/12 grow">';
        posthtml += '<div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm">';
        posthtml += '<div class="relative h-full">';
        var addclass = "";
        var addimg = "";
        if(data.mark_yn != "Y"){
            addclass = "png-white";
        }else{
            addimg = "-yellow";
        }
        posthtml += '<img id="bookmark-'+data.quiz_idx+'" class="w-4 h-4 absolute right-2 top-2 '+addclass+'" src="./img/bookmark'+addimg+'.png" alt="Mountain"  onclick="bookmark_save(this,\''+data.quiz_idx+'\');">';
        if(data.full_url == null){
            data.full_url = 'https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg';
        }
        if(data.quiz_type == 4){
            posthtml += '<img onclick="location.href=\'./wiki-content.php?quiz_idx='+data.quiz_idx+'\'" class="rounded-lg grid-img thumbnail-image" src="'+data.full_url+'" alt="Mountain">';
        }else{
            posthtml += '<img onclick="location.href=\'./before-quiz.php?quiz_idx='+data.quiz_idx+'\'" class="rounded-lg grid-img thumbnail-image" src="'+data.full_url+'" alt="Mountain">';
        }
        posthtml += '</div>';
        posthtml += '</div>';
        posthtml += '<div class="">';
        posthtml += '<p class="text-gray-500 text-[16px] py-1">'+data.quiz_type_name+'</p>';
        posthtml += '<div class="font-bold text-[16px] text-black thumbnail-name">'+data.quiz_subject+'</div>';
        posthtml += '</div>';
        posthtml += '</div>';
        return posthtml;
    }

    function make_html_addnew(data){
        var posthtml = "";
        posthtml += '<div class="w-5/12 grow">';
        posthtml += '<div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm">';
        posthtml += '<div class="relative h-full">';
        if(data.full_url == null){
            data.full_url = 'https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg';
        }

        if(data.quiz_type == 4){
            posthtml += '<a href="./create-wiki-content.php?quiz_idx='+data.quiz_idx+'" class="cursor-pointer" >';
            posthtml += '<img  class="rounded-lg grid-img thumbnail-image" src="'+data.full_url+'" alt="Mountain">';
            posthtml += '</a>';
            posthtml += '<div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">';
            posthtml += '<img class="png-white w-5 h-6 "  src="./img/add.png" onclick="location.href=\'./create-wiki-content.php?quiz_idx='+data.quiz_idx+'\'"/>';
            posthtml += '</div>';
        }else{
            posthtml += '<a href="./multiple-choice-quiz.php?quiz_idx='+data.quiz_idx+'\'" class="cursor-pointer" >';
            posthtml += '<img class="rounded-lg grid-img thumbnail-image" src="'+data.full_url+'" alt="Mountain">';
            posthtml += '</a>';
            posthtml += '<div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">';
            posthtml += '<img class="png-white w-5 h-6 "  src="./img/add.png" onclick="location.href=\'./multiple-choice-quiz.php?quiz_idx='+data.quiz_idx+'\'"/>';
            posthtml += '</div>';
        }


        posthtml += '</div>';
        posthtml += '</div>';
        posthtml += '<div class="">';
        posthtml += '<p class="text-gray-500 text-[16px] py-1">'+data.quiz_type_name+'</p>';
        posthtml += '<div class="font-bold text-[16px] text-black thumbnail-name">'+data.quiz_subject+'</div>';
        posthtml += '</div>';
        posthtml += '</div>';
        return posthtml;
    }

    function view_search(kind){
        //버튼 초기화
        $("div[id^=viewbotton_]").removeClass('bg-blue-600/100');
        $("div[id^=viewbotton_]").removeClass('bg-gray-100/100');
        $("div[id^=viewbotton_]").removeClass('text-white');
        $("div[id^=viewbotton_]").removeClass('text-black');

        $('div[id^=viewbotton_]').each(function (index, item) {
            if(item.id == "viewbotton_"+kind){
                $(item).addClass('bg-blue-600/100');
                $(item).addClass('text-white');
            }else{
                $(item).addClass('bg-gray-100/100');
                $(item).addClass('text-black');
            }
        });

        //초기화후 새로 리스트 가져오기
            archived_type =kind;
            $("#grid-list").empty();
            $("#grid-list2").empty();
            main_list_data = {
                search_key: ''
            };
            get_home_list("keep");
    }
</script>
<!-- For footer last div -->
<div id="body-f-screen" class="flex flex-col h-screen  ">
    <!---->
    <?php  require_once "./inc/menu-v1.php"; ?>
    <div class="page">
        <div class="w-full hidden" id="archived-1">
            <div class="bg-white  mx-[15px]  ">

                <div class="flex flex-row gap-2">
                    <div id="viewbotton_to_view" class=" rounded-[50px] px-2 py-1 bg-blue-600/100 text-white font-bold cursor-pointer" onclick="view_search('to_view');">To View</div>
                    <div id="viewbotton_viewing" class=" rounded-[50px] px-2 py-1 bg-gray-100/100 text-black font-bold cursor-pointer" onclick="view_search('viewing');">Viewing</div>
                    <div id="viewbotton_viewed" class=" rounded-[50px] px-2 py-1 bg-gray-100/100 text-black font-bold cursor-pointer" onclick="view_search('viewed');">Viewed</div>
                </div>
                <!-- sort items -->
                <div class=" ">
                    <div class=" mt-[30px] mb-[20px] flex flex-row justify-between">
                        <div class="flex flex-row items-center gap-2">

                            <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                                <img src="./img/filter.png" class="w-5 h-4" />

                                <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Sort: Recent
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: Title
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: Reply
                                        </a>
                                    </li>
                                </ul>
                            </a>

                            <p class="sort-text" >Recent</p>
                        </div>
                        <div class="flex flex-row items-center gap-2 library-gl">
                            <a href="#" id="library-grid">
                                <img src="./img/visualization.png" class="w-5 h-4" />
                            </a>

                            <a href="#" id="library-list">
                                <img src="./img/list.png" class="w-5 h-4" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="hidden show" id="yetview">
                    <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                        <div class="relative rounded-xl   ">
                            <div id="grid-list" class="flex flex-wrap justify-center items-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
                                <!--div class="w-5/12 grow ">
                                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative h-full">
                                            <a href="./wiki-content.php" class="cursor-pointer" >
                                                <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                                <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">

                                            Wiki
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Aiden님의...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <a href="./before-quiz.php" class="cursor-pointer" >
                                                <img class="w-4 h-4 absolute right-2 top-2 " src="./img/bookmark-yellow.png" alt="Mountain">
                                                <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>

                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div>
                                <div class="w-5/12 grow ">
                                    <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-500 text-[16px] py-1">
                                            Quiz
                                        </p>
                                        <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                    </div>
                                </div-->

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="w-full hidden relative" id="archived-2">
            <div class="bg-white mr-[15px] ml-[15px] m-auto">


                <!-- sort items -->
                <div class=" ">
                    <div class="mt-6 mb-6 flex flex-row justify-between">
                        <div class="flex flex-row items-center gap-2">

                            <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                                <img src="./img/filter.png" class="w-5 h-4" />

                                <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Sort: Recent
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: Title
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                            Sort: Reply
                                        </a>
                                    </li>
                                </ul>
                            </a>

                            <p class="sort-text" >Recent</p>
                        </div>

                    </div>
                </div>





                <div class="hidden show relative" id="yetview">
                    <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                        <div class="relative rounded-xl  ">
                            <div id="grid-list2" class="flex flex-wrap justify-center items-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">



                            </div>
                            <div class="fixed bottom-20 flex flex-row justify-between cursor-pointer">
                                <div class="w-full relative left-64" >
                                    <div class="bg-blue-400 p-5 rounded-full " id="create-content">
                                        <img class="png-white w-5 h-6 "  src="./img/add.png" />
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


    <script>
        $('#create-content').on('mousedown', function(){
            window.location.href="./create-content.php";
        })
        $('#library-grid').on('mousedown', function(){
            $('#grid-list > div').removeClass('w-5/12');
            $('#grid-list > div').addClass('w-full');
            $('#grid-list > div .grid-img').removeClass('thumbnail-image');
        })
        $('#library-list').on('mousedown', function(){
            $('#grid-list > div').addClass('w-5/12');
            $('#grid-list > div').removeClass('w-full');
            $('#grid-list > div .grid-img').addClass('thumbnail-image');
        })
    </script>