<!-- Header Section -->
<?php
include_once('./_common.php');
require_once "./inc/header.php";

$kind = ifilter("kind", "recently", "string");
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
<script type="text/javascript" src="./js/index.js"></script>
<script>
    let recent_view_dt="", recent_dt="", view_dt="", tilte_dt="", reply_dt="";
    let slider_cnt=1;
    let main_list_data={};
    let search_key = "";
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
                    kind: "<?=$kind?>",
                    search_word: "<?=$search_word?>",
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
</script>

<div class="rounded-t-[50px]  bg-white "> 
    <!-- first slider -->  
    
    <!-- thumbnail  -->

    <div class="flex flex-col">
        
           
    

        <div class="flex flex-col gap-2  mx-[15px] mt-[30px] mb-[10px] "> 

            <!-- sort items -->
            <div class=" "> 
                <div class="  flex flex-row justify-between">
                    <div class="flex flex-row items-center gap-2"> 
                        <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                            <img src="./img/filter.png" class="w-5 h-4" />

                            <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sort: Recent viewed
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">	
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
                        <p class="sort-text" ><?=$sort_title?></p>
                    </div>
                    <div class="flex flex-row items-center gap-2 recent-gl">
                        <a href="#" id="recent-grid">
                            <img src="./img/visualization.png" class="w-5 h-4" />
                        </a>

                        <a href="#" id="recent-list">
                            <img src="./img/list.png" class="w-5 h-4" />
                        </a>
                    </div>
                </div> 
            </div> 


            <div class="font-bold text-xl"><?=$sort_title?></div>
        </div>  
        <div class=" ">  
            <div class=" relative  rounded-xl overflow-hidden ">
                <div class="absolute inset-0 " style="
                background-position: 10px 10px;"> </div>
                <div class="relative rounded-xl   mx-[15px]">
                    <div id="grid-list" class="flex flex-wrap justify-center items-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
                        
                        <!--div class="w-5/12 grow">
                            <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                                <div class="relative h-full">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Aiden님의...</div>
                            </div> 
                        </div>
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2" src="./img/bookmark-yellow.png" alt="Mountain">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] ">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                            </div> 
                        </div>
                        <div class="w-5/12 grow">
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
                        <div class="w-5/12 grow">
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
                        <div class="w-5/12 grow">
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
                        <div class="w-5/12 grow">
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
                        <div class="w-5/12 grow">
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
                        <div class="w-5/12 grow">
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
                <div class="absolute inset-0 pointer-events-none "> </div>
            </div>
        </div>
    </div>

 
</div>
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
 
<script>  
    $('#recent-grid').on('mousedown', function(){  
        $('#grid-list > div').removeClass('w-5/12');
        $('#grid-list > div').addClass('w-full');
        $('#grid-list > div .grid-img').removeClass('thumbnail-image');
    })
    $('#recent-list').on('mousedown', function(){   
        $('#grid-list > div').addClass('w-5/12');
        $('#grid-list > div').removeClass('w-full');
        $('#grid-list > div .grid-img').addClass('thumbnail-image');
    })
</script>