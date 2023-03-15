function bookmark_save(icon,quiz_idx){
    var mark_yn = 'Y';
    if(icon.src.indexOf("yellow") == -1){
        mark_yn = 'Y';
        if(!confirm('북마크를 등록 하시겠습니까?')){
            return false;
        }
    }else{
        mark_yn = 'N';
        if(!confirm('북마크를 삭제 하시겠습니까?')){
            return false;
        }
    }
    var data = new FormData();
    data.append("type", "bookmark_save");
    data.append("quiz_idx", quiz_idx);
    data.append("mark_yn", mark_yn);
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
                if(mark_yn == 'Y'){
                    $('img[id^=bookmark]').each(function (index, item) {
                        if(item.id.replace('bookmark-','') == quiz_idx){
                            item.src = './img/bookmark-yellow.png';
                            item.classList.remove('png-white');
                        }
                    });
                }else{
                    $('img[id^=bookmark]').each(function (index, item) {
                        if(item.id.replace('bookmark-','') == quiz_idx){
                            item.src = './img/bookmark.png';
                            icon.classList.add('png-white');
                        }
                    });
                }
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

function rating_save(val){

    if(!confirm('별점을 등록 하시겠습니까?')){
        return false;
    }

    var data = new FormData();
    data.append("type", "rating_save");
    data.append("quiz_idx", $('#quiz_idx').val());
    data.append("rating", val);
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
                $('#avg_rating').text(data.avg_rating);
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