$(window).on("load",function(){
    //main
    $(".main_graph_list li").each(function(){
        var percentage_num = $(this).find(".percentage").text();
        $(this).find(".percentage").css("height",percentage_num+"%");
        $(this).find(".number").css("bottom",percentage_num+"%");
    });

    // storage_box
    $(".storage_list>ul>li").each(function(){
        var btn_more = $(this).find(".btn_more");
        var control_btn_open = $(this).find(".control_btn_open");
        btn_more.on("click",function(){
            $(this).parents(".txt").addClass("all");
        });

        control_btn_open.on("click",function(){
            $(this).next(".control_btn_list").slideDown(200);
        });
    });

    $(".btn_list_select").on("click",function(){
        $(".storage_list").toggleClass("check_on");
    });

    //영역외 클릭시 닫기
    $('html').click(function(e){ 
        if($(e.target).parents('.control_btn').length < 1){
            $(".control_btn_list").slideUp(200);
        }
    });

    $(".popup_close , .popup_cover").on("click",function(){
        $(this).parents(".popup").removeClass("active");
        $(this).parents(".notification_popup").removeClass("active");
        $("body").removeAttr("style");
    });

    $(".open_plus_option").on("click",function(){
        $(".option_list").slideToggle();
        $(this).toggleClass("on");
    });
    
    $(".password_view").on("click",function(){
        $(".password_view").toggleClass("on");
    });

	//mypage
    $(".s_menu_open").on("click",function(){
        $(this).next(".s_menu").slideToggle(300);
        return false;
    });


});

// popup
function popup_open(name){
    var name = $(name);
    name.addClass("active");
    $("body").css({"overflow":"hidden","height":"100vh"});
}