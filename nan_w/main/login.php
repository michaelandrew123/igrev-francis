<!-- Header Section -->
<?php
include_once('./_common.php');
include_once('./_head.sub.php');

if( function_exists('social_check_login_before') ){
    $social_login_html = social_check_login_before();
}

$g5['title'] = '로그인';

$url = isset($_GET['url']) ? strip_tags($_GET['url']) : '/main/home.php';
$od_id = isset($_POST['od_id']) ? safe_replace_regex($_POST['od_id'], 'od_id') : '';

// url 체크
check_url_host($url);
// 이미 로그인 중이라면

if ($is_member) {
    if ($url)
        goto_url($url);
    else
        goto_url(G5_URL);
}

$login_url        = login_url($url);
$login_action_url = G5_HTTPS_BBS_URL."/login_check.php";

// 로그인 스킨이 없는 경우 관리자 페이지 접속이 안되는 것을 막기 위하여 기본 스킨으로 대체
//$login_file = $member_skin_path.'/login.skin.php';
//if (!file_exists($login_file))
 //   $member_skin_path   = G5_SKIN_PATH.'/member/basic';

?>

<?php  require_once "./inc/header.php";?>
<div class="grow flex flex-col bg-white rounded-t-[50px]">
    <div class="flex flex-col gap-5  mt-[30px] mb-[20px]">
        <div>
            <img src="https://igrev.kr/assets/images/logo_bottom.png" class="w-24 m-auto" />
        </div>
        <div class="block px-6 py-[15px]   bg-white max-w-sm">
            <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
                <input type="hidden" name="url" value="<?php echo $login_url ?>">
                <div class="form-group mb-6">
                    <input type="text" name="mb_id" id="login_id" size="20" maxLength="20" placeholder="ID"  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" >
                    <small id="emailHelp" class="block mt-1 text-xs text-gray-600">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-6">
                    <input  type="password" name="mb_password" id="login_pw" size="20" maxLength="20" placeholder="비밀번호" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" >
                </div>
                <div class="pb-6">
                    <button type="submit" class=" px-6 py-2.5 w-full bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">LOGIN</button>
                </div>
                <div>
                    <div>Don't have an account yet? </div>
                    <a href="./signup.php" class="underline underline-offset-4 text-blue-600">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- from header div element -->
</div>


<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>


<script type="text/javascript">
    jQuery(function($){
        $("#login_auto_login").click(function(){
            if (this.checked) {
                this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
            }
        });
    });

    function flogin_submit(f)
    {
        if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
            return true;
        }
        return false;
    }

</script>
