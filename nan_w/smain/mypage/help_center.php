<div class="rounded-t-[50px]  bg-white mt-[30px]  "> 

<div style="margin: 0px 10px; margin-bottom: 72px;" id="content_help" class="content_help">
    <ul>
    </ul>
</div>
</div>

<style>
    .help_p{
        background-color: #F2F2F2;
        border: 1px solid #F2F2F2;
    }
    .transition, pre, ul li i:before, ul li i:after {
        transition: all 0.25s ease-in-out;
    }
    .flipIn, h1, ul li {
        animation: flipdown 0.5s ease both;
    }
    h1 {
        text-transform: uppercase;
        font-size: 36px;
        line-height: 42px;
        letter-spacing: 3px;
        font-weight: 100;
    }
    h2 {
        font-size: 26px;
        line-height: 34px;
        font-weight: 300;
        letter-spacing: 1px;
        display: block;
        background-color: #fefffa;
        margin: 0;
        cursor: pointer;
    }
    pre {
        color: rgba(48, 69, 92, 0.8);
        font-size: 17px;
        line-height: 26px;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
        max-height: 800px;
        opacity: 1;
        transform: translate(0, 0);
        margin-top: 14px;
        z-index: 2;
    }
    .content_help ul {
        list-style: none;
        perspective: 900;
        padding: 0;
        margin: 0;
    }
    .content_help ul li {
        position: relative;
        padding: 0;
        margin: 0;
        padding-top: 18px;
        border-bottom: 1px dotted #dce7eb;
    }
    .content_help ul li:nth-of-type(1) {
        animation-delay: 0.5s;
    }
    .content_help ul li:nth-of-type(2) {
        animation-delay: 0.75s;
    }
    .content_help ul li:nth-of-type(3) {
        animation-delay: 1.0s;
    }
    .content_help ul li:last-of-type {
        padding-bottom: 0;
    }
    .content_help ul li i {
        position: absolute;
        transform: translate(-6px, 0);
        margin-top: 16px;
        right: 5px;
    }
    .content_help ul li i:before, ul li i:after {
        content: "";
        position: absolute;
        background-color: #424242;
        width: 3px;
        height: 9px;
    }
    .content_help ul li i:before {
        transform: translate(-2px, 0) rotate(45deg);
    }
    .content_help ul li i:after {
        transform: translate(2px, 0) rotate(-45deg);
    }
    .content_help ul li input[type=checkbox] {
        position: absolute;
        cursor: pointer;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
    }
    .content_help ul li input[type=checkbox]:checked ~ pre {
        margin-top: 0;
        max-height: 0;
        opacity: 0;
        transform: translate(0, 50%);
    }
    .content_help ul li input[type=checkbox]:checked ~ i:before {
        transform: translate(2px, 0) rotate(45deg);
    }
    .content_help ul li input[type=checkbox]:checked ~ i:after {
        transform: translate(-2px, 0) rotate(-45deg);
    }
    @keyframes flipdown {
        0% {
            opacity: 0;
            transform-origin: top center;
            transform: rotateX(-90deg);
        }
        5% {
            opacity: 1;
        }
        80% {
            transform: rotateX(8deg);
        }
        83% {
            transform: rotateX(6deg);
        }
        92% {
            transform: rotateX(-3deg);
        }
        100% {
            transform-origin: top center;
            transform: rotateX(0deg);
        }
    }
</style>

<script>

	window.onload=function(){

		console.log('----');

        $.ajax({
            url: g5_url+"/main/mypage/ajaxProc.php",
            type: "POST",
            data: {
                "type": 'help_center'
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function (data)
            {
				console.log(data);
                if (data.code == "200") //200 코드 성공
                {
                    $("#content_help > ul").html(data.content_help);

                }else{ //200 제외 에러
                    alert(data.msg);
                    return false;
                }
            }
        });
	}

</script>