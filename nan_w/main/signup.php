<!-- Header Section -->
<?php
include_once('./_common.php');
include_once('./_head.sub.php');

include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_LIB_PATH.'/register.lib.php');

run_event('register_form_before');

// 불법접근을 막도록 토큰생성
$token = md5(uniqid(rand(), true));
set_session("ss_token", $token);
set_session("ss_cert_no",   "");
set_session("ss_cert_hash", "");
set_session("ss_cert_type", "");

$is_social_login_modify = false;

if( isset($_REQUEST['provider']) && $_REQUEST['provider']  && function_exists('social_nonce_is_valid') ){   //모바일로 소셜 연결을 했다면
    if( social_nonce_is_valid(get_session("social_link_token"), $provider) ){  //토큰값이 유효한지 체크
        $w = 'u';   //회원 수정으로 처리
        $_POST['mb_id'] = $member['mb_id'];
        $is_social_login_modify = true;
    }
}

if ($w == "") {

    // 회원 로그인을 한 경우 회원가입 할 수 없다
    // 경고창이 뜨는것을 막기위해 아래의 코드로 대체
    // alert("이미 로그인중이므로 회원 가입 하실 수 없습니다.", "./");
    if ($is_member) {
        goto_url(G5_URL);
    }

    // 리퍼러 체크
    referer_check();

    $agree  = preg_replace('#[^0-9]#', '', $_POST['agree']);
    $agree2 = preg_replace('#[^0-9]#', '', $_POST['agree2']);

    $member['mb_birth'] = '';
    $member['mb_sex']   = '';
    $member['mb_name']  = '';
    if (isset($_POST['birth'])) {
        $member['mb_birth'] = $_POST['birth'];
    }
    if (isset($_POST['sex'])) {
        $member['mb_sex']   = $_POST['sex'];
    }
    if (isset($_POST['mb_name'])) {
        $member['mb_name']  = $_POST['mb_name'];
    }

    $g5['title'] = '회원 가입';

} else if ($w == 'u') {

    if ($is_admin == 'super')
        alert('관리자의 회원정보는 관리자 화면에서 수정해 주십시오.', G5_URL);

    if (!$is_member)
        alert('로그인 후 이용하여 주십시오.', G5_URL);
    if ($member['mb_id'] != $_SESSION['mb_id'])
        alert('로그인된 회원과 넘어온 정보가 서로 다릅니다.');

    /*
    if (!($member[mb_password] == sql_password($_POST[mb_password]) && $_POST[mb_password]))
        alert("비밀번호가 틀립니다.");

    // 수정 후 다시 이 폼으로 돌아오기 위해 임시로 저장해 놓음
    set_session("ss_tmp_password", $_POST[mb_password]);
    */

    if($_POST['mb_id'] && ! (isset($_POST['mb_password']) && $_POST['mb_password'])){
        if( ! $is_social_login_modify ){
            alert('비밀번호를 입력해 주세요.');
        }
    }

    if (isset($_POST['mb_password'])) {
        // 수정된 정보를 업데이트후 되돌아 온것이라면 비밀번호가 암호화 된채로 넘어온것임
        if (isset($_POST['is_update']) && $_POST['is_update']) {
            $tmp_password = $_POST['mb_password'];
            $pass_check = ($member['mb_password'] === $tmp_password);
        } else {
            $pass_check = check_password($_POST['mb_password'], $member['mb_password']);
        }

        if (!$pass_check)
            alert('비밀번호가 틀립니다.');
    }

    $g5['title'] = '회원 정보 수정';

    set_session("ss_reg_mb_name", $member['mb_name']);
    set_session("ss_reg_mb_hp", $member['mb_hp']);

    $member['mb_email']       = get_text($member['mb_email']);
    $member['mb_homepage']    = get_text($member['mb_homepage']);
    $member['mb_birth']       = get_text($member['mb_birth']);
    $member['mb_tel']         = get_text($member['mb_tel']);
    $member['mb_hp']          = get_text($member['mb_hp']);
    $member['mb_addr1']       = get_text($member['mb_addr1']);
    $member['mb_addr2']       = get_text($member['mb_addr2']);
    $member['mb_signature']   = get_text($member['mb_signature']);
    $member['mb_recommend']   = get_text($member['mb_recommend']);
    $member['mb_profile']     = get_text($member['mb_profile']);
    $member['mb_1']           = get_text($member['mb_1']);
    $member['mb_2']           = get_text($member['mb_2']);
    $member['mb_3']           = get_text($member['mb_3']);
    $member['mb_4']           = get_text($member['mb_4']);
    $member['mb_5']           = get_text($member['mb_5']);
    $member['mb_6']           = get_text($member['mb_6']);
    $member['mb_7']           = get_text($member['mb_7']);
    $member['mb_8']           = get_text($member['mb_8']);
    $member['mb_9']           = get_text($member['mb_9']);
    $member['mb_10']          = get_text($member['mb_10']);
} else {
    alert('w 값이 제대로 넘어오지 않았습니다.');
}



$register_action_url = G5_HTTPS_BBS_URL.'/register_form_update.php';
$req_nick = !isset($member['mb_nick_date']) || (isset($member['mb_nick_date']) && $member['mb_nick_date'] <= date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400)));
$required = ($w=='') ? 'required' : '';
$readonly = ($w=='u') ? 'readonly' : '';

$agree  = isset($_REQUEST['agree']) ? preg_replace('#[^0-9]#', '', $_REQUEST['agree']) : '';
$agree2 = isset($_REQUEST['agree2']) ? preg_replace('#[^0-9]#', '', $_REQUEST['agree2']) : '';

?>

<?php  require_once "./inc/header.php";?>
<script src="<?php echo G5_JS_URL ?>/jquery.register_form.js"></script>
<?php if($config['cf_cert_use'] && ($config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
    <script src="<?php echo G5_JS_URL ?>/certify.js?v=<?php echo G5_JS_VER; ?>"></script>
<?php } ?>
	<div class="grow flex flex-col items-center justify-center">
			<div>
				<div>
					<img src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" class="w-24 m-auto" />
				</div> 
				<div class="block p-6  bg-white max-w-sm">
                    <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="w" value="<?php echo $w ?>">
                    <input type="hidden" name="url" value="<?php echo $urlencode ?>">
                        <div class="form-group mb-6">
					      <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id" <?php echo $readonly ?>  minlength="3" maxlength="20" placeholder="아이디"
                                 class="form-control block w-full  px-3  py-1.5  text-base  font-normal   text-gray-700
					        bg-white bg-clip-padding  border border-solid border-gray-300  rounded transition ease-in-out  m-0
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" >
			<!-- 		      <small id="emailHelp" class="block mt-1 text-xs text-gray-600">We'll never share your email with anyone
					        else.</small> -->
                            <span id="msg_mb_id"></span>
					    </div>
					    <div class="form-group mb-6"> 
					      <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>"  size="10" placeholder="이름" class="form-control block
					        w-full
					        px-3
					        py-1.5
					        text-base
					        font-normal
					        text-gray-700
					        bg-white bg-clip-padding
					        border border-solid border-gray-300
					        rounded
					        transition
					        ease-in-out
					        m-0
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword1"
					        >
					    </div> 
					    <div class="form-group mb-6"> 
					      <input type="password" name="mb_password" id="reg_mb_password" minlength="3" maxlength="20" placeholder="비밀번호" class="form-control block
					        w-full
					        px-3
					        py-1.5
					        text-base
					        font-normal
					        text-gray-700
					        bg-white bg-clip-padding
					        border border-solid border-gray-300
					        rounded
					        transition
					        ease-in-out
					        m-0
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword1"
					        >
					    </div>  
					    <div class="form-group mb-6"> 
					      <input type="password" name="mb_password_re" id="reg_mb_password_re" minlength="3" maxlength="20" placeholder="비밀번호 확인" class="form-control block
					        w-full
					        px-3
					        py-1.5
					        text-base
					        font-normal
					        text-gray-700
					        bg-white bg-clip-padding
					        border border-solid border-gray-300
					        rounded
					        transition
					        ease-in-out
					        m-0
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword1"
					        >
					    </div>
					    <!--div class="flex flex-col gap-2">
						    <a href="#"
                               data-bs-toggle="modal" data-bs-target="#verify-email"
                               id="signup-verify-email"
                               class="
                                  px-6
                                  py-2.5
                                  bg-white text-gray-700
                                  border border-slate-900
                                  font-medium
                                  text-xs
                                  text-center
                                  leading-tight
                                  uppercase
                                  rounded
                                  shadow-md
                                  hover:bg-white hover:shadow-lg
                                  focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0
                                  active:bg-white active:shadow-lg
                                  transition
                                  duration-150
                                  ease-in-out"
                            >VERIFY EMAIL</a-->
                        <div class="flex flex-col gap-2">

						    <a id="btn_submit"  onclick="fregisterform_submit();" accesskey="s" class="px-6
						      py-2.5
						      bg-white text-gray-700
						      border border-slate-900
						      font-medium
						      text-xs
						      text-center
						      leading-tight
						      uppercase
						      rounded
						      shadow-md
						      hover:bg-white hover:shadow-lg
						      focus:bg-whitefocus:shadow-lg focus:outline-none focus:ring-0
						      active:bg-white active:shadow-lg
						      transition
						      duration-150
						      ease-in-out"><?php echo $w==''?'Sign up':'info Change'; ?></a>
                            <a href="<?php echo G5_URL ?>" class="px-6
						      py-2.5
						      bg-white text-gray-700
						      border border-slate-900
						      font-medium
						      text-xs
						      text-center
						      leading-tight
						      uppercase
						      rounded
						      shadow-md
						      hover:bg-white hover:shadow-lg
						      focus:bg-whitefocus:shadow-lg focus:outline-none focus:ring-0
						      active:bg-white active:shadow-lg
						      transition
						      duration-150
						      ease-in-out">취소</a>
					      </div>
				  </form>
				</div> 
			</div>
	</div>



<!-- from header div element -->
</div>


<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="verify-email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog relative w-auto pointer-events-none" style="position: absolute;top: 50%;transform: translate(0px, -50%);">
        <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">A verification email has been sent.</h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <p>Cant check your email? </p>
                <p>Check Spam folder or <a href="#" class="underline underline-offset-4 text-blue-600">Send again</a></p>
            </div>
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button type="button" class="px-6
                      py-2.5
                      bg-white text-gray-700
                      border border-slate-900
                      font-medium
                      text-xs
                      leading-tight
                      uppercase
                      rounded
                      shadow-md
                      hover:bg-purple-700 hover:shadow-lg
                      focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                      active:bg-purple-800 active:shadow-lg
                      transition
                      duration-150
                      ease-in-out" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
 
 <!-- Fixed Menu --> 
<?php require_once "./inc/fixed-menu.php"; ?> 
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>


<script type="text/javascript">
    // submit 최종 폼체크
    function fregisterform_submit(f)
    {
        var f = document.fregisterform;
        // 회원아이디 검사
        if (f.w.value == "") {
            var msg = reg_mb_id_check();
            if (msg) {
                alert(msg);
                f.mb_id.select();
                return false;
            }
        }

        if (f.w.value == "") {
            if (f.mb_password.value.length < 3) {
                alert("비밀번호를 3글자 이상 입력하십시오.");
                f.mb_password.focus();
                return false;
            }
        }

        if (f.mb_password.value != f.mb_password_re.value) {
            alert("비밀번호가 같지 않습니다.");
            f.mb_password_re.focus();
            return false;
        }

        if (f.mb_password.value.length > 0) {
            if (f.mb_password_re.value.length < 3) {
                alert("비밀번호를 3글자 이상 입력하십시오.");
                f.mb_password_re.focus();
                return false;
            }
        }

        // 이름 검사
        if (f.mb_name.value.length < 1) {
            alert("이름을 입력하십시오.");
            f.mb_name.focus();
            return false;
        }


        document.getElementById("btn_submit").disabled = "disabled";

        document.fregisterform.submit();
    }

    $('a#signup-verify-email').on('touchstart', function () {

        /*This message must be display when the email is verified*/
        $(this).text('E-MAIL VERIFIED');
    })
</script>
