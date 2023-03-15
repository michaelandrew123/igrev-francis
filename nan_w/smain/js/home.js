let deal_dt="", deal_crawl_dt="", text_dt="", image_dt="", mb_seq=0;
let slider_cnt=1;
let main_list_data={};

$(document).ready(function() {

    let list_mode="";		// keep: 이전까지 봤던 리스트를 한번에 가져온다, new: 새로운 리스트를 가져온다
    // 저장된 데이터가 있으면, 요청에 따라 새로운 데이터 또는 이전 리스트 갱신을 해준다.
    let main_list_data = JSON.parse(window.sessionStorage.getItem("main_list_data"));
    if (main_list_data != null) {
        list_mode = "keep";
        deal_dt = main_list_data.deal_dt;
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
            url: "/ajax.getPage.php",
            type: "POST",
            data: {
                kind: "news",
                list_mode: list_mode,	// keep: 이전까지 봤던 리스트를 한번에 가져온다, new: 새로운 리스트를 가져온다
                deal_dt: deal_dt
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
    for(let cnt in data) {
        posthtml="";
        if(list_cnt == 1){
            posthtml = make_deal_first_post(data[cnt], "");
            deal_dt = data[cnt].wr_datetime; 	// 다음번 리스트를 위한 마지막 날짜
            break;
        }else{
            posthtml = make_deal_post(data[cnt], "");
            deal_dt = data[cnt].wr_datetime; 	// 다음번 리스트를 위한 마지막 날짜
            break;
        }
        $("#list_body").append(posthtml);

        list_cnt++;
    }

    // 각 마지막 게시물을 저장.
    main_list_data = {
        deal_dt: deal_dt
    };

    window.sessionStorage.setItem("main_list_data", JSON.stringify(main_list_data));

//	popup_menu_init();
}
















