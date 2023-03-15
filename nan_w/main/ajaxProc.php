<?php
/** Include file */
include_once('./_common.php');

/**
if (!$is_member) {
$jsonContent = array(
'code' => '201',
'msg' => '로그인 해주세요.',
);
}
 **/
$type = ifilter("type", "", "string");
if ($type == "login")
{
    $today = date("Y-m-d");

    $mb_id = ifilter("mb_id", "", "string");
    $mb_password = ifilter("mb_password", "", "string");


    if (!$mb_id || !$mb_password){
        $jsonContent = array(
            'code' => '202',
            'msg' => '회원아이디나 비밀번호를 입력해주세요.',
        );


    }else{
        $mb = get_member($mb_id);

        if ((!(isset($mb['mb_id']) && $mb['mb_id']) || !login_password_check($mb, $mb_password, $mb['mb_password']))) {

            $jsonContent = array(
                'code' => '203',
                'msg' => '가입된 회원아이디가 아니거나 비밀번호가 틀립니다. 비밀번호는 대소문자를 구분합니다.',
            );
        }

        set_session('mb_id', $mb['mb_id']);
        set_session('mb_password', $mb_password);
        set_session('mb_name', $mb['mb_name']);
        set_session('mb_memo', $mb['mb_memo']);
        set_session('waiting_average', $mb['waiting_average']);
// FLASH XSS 공격에 대응하기 위하여 회원의 고유키를 생성해 놓는다. 관리자에서 검사함 - 110106
        set_session('mb_key', md5($mb['mb_datetime'] . get_real_client_ip() . $_SERVER['HTTP_USER_AGENT']));
        $jsonContent = array(
            'code' => '200',
            'msg' => '로그인 되었습니다.',
        );
    }

}else if ($type == "join")
{

    $mb_id = ifilter("mb_id", "", "string");
    $mb_password = ifilter("mb_password", "", "string");
    $mb_name = ifilter("mb_name", "", "string");
    $mb_memo = ifilter("mb_memo", "", "string");
    $waiting_average = ifilter("waiting_average", "1", "NUMBER");



    if(!$mb_id){
        $jsonContent = array(
            'code' => '202',
            'msg' => '회원아이디를 입력해주세요.',
        );
    }
    $mb = get_member($mb_id);
    if(isset($mb['mb_id'])){
        $jsonContent = array(
            'code' => '202',
            'msg' => '사용중인 아이디 입니다. 다른 아이디를 입력해주세요.',
        );
    }

    if(!$mb_password){
        $jsonContent = array(
            'code' => '202',
            'msg' => '비밀번호를 입력해주세요.',
        );
    }

    $result = passwordCheck($mb_password);
    if ($result[0] == false)
    {
        $jsonContent = array(
            'code' => '201',
            'msg' => $result[1],
        );
    }

    if(!$mb_name){
        $jsonContent = array(
            'code' => '202',
            'msg' => '매장명을 입력해주세요.',
        );
    }

    if(!$mb_memo){
        $jsonContent = array(
            'code' => '202',
            'msg' => '한줄소개를 입력해주세요.',
        );
    }

    if(!$waiting_average){
        $jsonContent = array(
            'code' => '202',
            'msg' => '평균대기시간을 입력해주세요.',
        );
    }

    if (!$mb_id || !$mb_password){
        $jsonContent = array(
            'code' => '202',
            'msg' => '회원아이디나 비밀번호를 입력해주세요.',
        );
    }

    if(!isset($jsonContent)){
        $sql = " insert into {$g5['member_table']}
                    set mb_id = '{$mb_id}',
                         mb_password = '".get_encrypt_string($mb_password)."',
                         mb_name = '{$mb_name}',
                         mb_memo = '{$mb_memo}',
                         mb_today_login = '".G5_TIME_YMDHIS."',
                         mb_datetime = '".G5_TIME_YMDHIS."',
                         mb_ip = '{$_SERVER['REMOTE_ADDR']}',
                         mb_level = '{$config['cf_register_level']}',
                         mb_login_ip = '{$_SERVER['REMOTE_ADDR']}',
                         mb_open_date = '".G5_TIME_YMD."',
                         waiting_average = '{$waiting_average}'
    ";
        sql_query($sql);

        $jsonContent = array(
            'code' => '200',
            'msg' => '회원가입이 되었습니다.',
        );
    }
}else if ($type == "mody")
{
    $mb_password = ifilter("mb_password", "", "string");
    $mb_name = ifilter("mb_name", "", "string");
    $mb_memo = ifilter("mb_memo", "", "string");
    $waiting_average = ifilter("waiting_average", "1", "NUMBER");

    if(!$_SESSION['mb_id']){
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }

    if(!$mb_password){
        $jsonContent = array(
            'code' => '202',
            'msg' => '비밀번호를 입력해주세요.',
        );
    }

    $result = passwordCheck($mb_password);
    if ($result[0] == false)
    {
        $jsonContent = array(
            'code' => '201',
            'msg' => $result[1],
        );
    }

    if(!$mb_name){
        $jsonContent = array(
            'code' => '202',
            'msg' => '매장명을 입력해주세요.',
        );
    }

    if(!$mb_memo){
        $jsonContent = array(
            'code' => '202',
            'msg' => '한줄소개를 입력해주세요.',
        );
    }

    if(!$waiting_average){
        $jsonContent = array(
            'code' => '202',
            'msg' => '평균대기시간을 입력해주세요.',
        );
    }

    if(!isset($jsonContent)){
        $sql = " update {$g5['member_table']}
                    set mb_password = '".get_encrypt_string($mb_password)."',
                         mb_name = '{$mb_name}',
                         mb_memo = '{$mb_memo}',
                         waiting_average = '{$waiting_average}'
                where mb_id = '{$_SESSION['mb_id']}'
    ";
        sql_query($sql);

        $jsonContent = array(
            'code' => '200',
            'msg' => '회원정보 수정이 완료 되었습니다.',
        );
    }
}else if ($type == "wating_step1")
{
    $c_hp = ifilter("c_hp", "", "string");

    if(!preg_match( "/^[0-9]/i", $c_hp )){
        $jsonContent = array(
            'code' => '202',
            'msg' => '전화번호에 문자가 들어갔습니다. 확인해주세요.',
        );
    }

    if(strlen($c_hp) != 11){
        $jsonContent = array(
            'code' => '202',
            'msg' => '전화번호가 11자리가 아닙니다. 확인해주세요.',
        );
    }

    if(!isset($jsonContent)){
        /**
        }
        // $sql = " insert into customer
        set mb_id = '{$_SESSION['mb_id']}',
        c_hp = '{$c_hp}'";
        // print_r($sql);
        //  sql_query($sql);
         * **/
        //  sql_query(" insert into customer set mb_id = '{$_SESSION['mb_id']}', c_hp = '{$c_hp}', status = 'REG'", false);
        //   $c_idx = sql_fetch("select last_insert_id() c_idx from dual");
        set_session('c_hp', $c_hp);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
        );
    }
}else if ($type == "wating_step2")
{
    $adult_cnt = ifilter("adult_cnt", "", "string");
    $child_cnt = ifilter("child_cnt", "", "string");

    if(!preg_match( "/^[0-9]/i", $adult_cnt )){
        $jsonContent = array(
            'code' => '202',
            'msg' => '성인 인원수에 문자가 들어갔습니다. 확인해주세요.',
        );
    }

    if(!preg_match( "/^[0-9]/i", $child_cnt )){
        $jsonContent = array(
            'code' => '202',
            'msg' => '유아 인원수에 문자가 들어갔습니다. 확인해주세요.',
        );
    }

    if(!isset($jsonContent)){
        /**
        }
        // $sql = " insert into customer
        set mb_id = '{$_SESSION['mb_id']}',
        c_hp = '{$c_hp}'";
        // print_r($sql);
        //  sql_query($sql);
         * **/
        //  sql_query(" insert into customer set mb_id = '{$_SESSION['mb_id']}', c_hp = '{$c_hp}', status = 'REG'", false);
        //   $c_idx = sql_fetch("select last_insert_id() c_idx from dual");
        set_session('adult_cnt', $adult_cnt);
        set_session('child_cnt', $child_cnt);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
        );
    }
}else if ($type == "wating_step3")
{
    $adult_cnt = ifilter("adult_cnt", "", "string");
    $child_cnt = ifilter("child_cnt", "", "string");
    $c_hp = ifilter("c_hp", "", "string");

    if(!preg_match( "/^[0-9]/i", $c_hp )){
        $jsonContent = array(
            'code' => '202',
            'msg' => '전화번호에 문자가 들어갔습니다. 확인해주세요.',
        );
    }

    if(strlen($c_hp) != 11){
        $jsonContent = array(
            'code' => '202',
            'msg' => '전화번호가 11자리가 아닙니다. 확인해주세요.',
        );
    }

    if(!preg_match( "/^[0-9]/i", $adult_cnt )){
        $jsonContent = array(
            'code' => '202',
            'msg' => '성인 인원수에 문자가 들어갔습니다. 확인해주세요.',
        );
    }

    if(!preg_match( "/^[0-9]/i", $child_cnt )){
        $jsonContent = array(
            'code' => '202',
            'msg' => '유아 인원수에 문자가 들어갔습니다. 확인해주세요.',
        );
    }

    if(!isset($jsonContent)){

        sql_query(" insert into customer set mb_id = '{$_SESSION['mb_id']}', c_hp = '{$c_hp}', adult_cnt = '{$adult_cnt}', child_cnt = '{$child_cnt}', status = 'WAIT', reg_date = now(), status_change_date = now()", false);
        $c_idx = sql_fetch("select last_insert_id() c_idx from dual");
        set_session('c_idx', $c_idx);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
            'c_idx' => $c_idx,
        );
    }
}else if ($type == "get_shop_waiting_list")
{
    if($_SESSION['mb_id']){
        $arr = array();
        $sql = " select *,if(status_change_date > now() - INTERVAL 2 MINUTE,'REQUEST','OVER') req_status,TIMEDIFF(now(), status_change_date) comp_dif,TIMEDIFF(now(), reg_date) dif from customer where mb_id = '".$_SESSION['mb_id']."'  and DATE_FORMAT(reg_date, '%Y-%m-%d') = DATE_FORMAT(now(), '%Y-%m-%d') ";
        $result = sql_query($sql);
        for ($i=0; $row=sql_fetch_array($result); $i++) {
            $arr[$i] = $row;
        }
        $jsonContent = array(
            'code' => '200',
            'msg' => '조회 되었습니다.',
            'data' => $arr,
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "set_status_change")
{
    if($_SESSION['mb_id']){
        $c_idx = ifilter("c_idx", "", "string");
        $status = ifilter("status", "", "string");
        sql_query(" update customer set  status = '{$status}', status_change_date = now() where c_idx = '{$c_idx}'", false);
        $jsonContent = array(
            'code' => '200',
            'msg' => '변경 되었습니다.',
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "change_shop_name")
{
    if($_SESSION['mb_id']){
        $mb_name= ifilter("mb_name", "", "string");
        sql_query(" update g5_member set  mb_name = '{$mb_name}' where mb_id = '{$_SESSION['mb_id']}'", false);
        $_SESSION['mb_name'] = $mb_name;
        $jsonContent = array(
            'code' => '200',
            'msg' => '변경 되었습니다.',
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "change_shop_memo")
{
    if($_SESSION['mb_id']){
        $mb_memo= ifilter("mb_memo", "", "string");
        sql_query(" update g5_member set  mb_memo = '{$mb_memo}' where mb_id = '{$_SESSION['mb_id']}'", false);
        $_SESSION['mb_memo'] = $mb_memo;
        $jsonContent = array(
            'code' => '200',
            'msg' => '변경 되었습니다.',
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "get_main_list")
{
    $main_recent_arr = array();
    $main_recommend_arr = array();
    $main_similar_arr = array();
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id limit 0,5  ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        $main_recent_arr[$i] = $row;
    }

    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id limit 0,5  ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        $main_recommend_arr[$i] = $row;
    }

    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id limit 0,5  ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        $main_similar_arr[$i] = $row;
    }
    $jsonContent = array(
        'code' => '200',
        'msg' => '조회 되었습니다.',
        'recent_ata' => $main_recent_arr,
        'recommend_data' => $main_recommend_arr,
        'similar_data' => $main_similar_arr,
    );
}else if ($type == "wiki_save")
{
    if($_SESSION['mb_id']){
        $quiz_subject= ifilter("quiz_subject", "", "string");
        $quiz_desc= ifilter("quiz_desc", "", "HTML");
        $quiz_contents= ifilter("quiz_contents", "", "HTML");
        $file_id= ifilter("file_id", "", "string");
        sql_query(" insert into nan_quiz set mb_id = '{$_SESSION['mb_id']}', quiz_subject = '{$quiz_subject}',quiz_desc = '{$quiz_desc}',quiz_contents = '{$quiz_contents}',file_id = '{$file_id}',reg_mb_id='{$_SESSION['mb_id']}', reg_date = now(), status='MAKE',quiz_type='4' ", false);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "wiki_update")
{
    if($_SESSION['mb_id']){
        $quiz_idx= ifilter("quiz_idx", "", "string");
        $quiz_subject= ifilter("quiz_subject", "", "string");
        $quiz_desc= ifilter("quiz_desc", "", "HTML");
        $quiz_contents= ifilter("quiz_contents", "", "HTML");
        $file_id= ifilter("file_id", "", "string");

        sql_query(" update nan_quiz set  quiz_subject = '{$quiz_subject}',quiz_desc = '{$quiz_desc}',quiz_contents = '{$quiz_contents}',file_id = '{$file_id}', edit_date = now(), status='MAKE',quiz_type='4' where mb_id = '{$_SESSION['mb_id']}' and quiz_idx = '{$quiz_idx}'", false);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "quiz_save")
{
    if($_SESSION['mb_id']){
        $quiz_subject= ifilter("quiz_subject", "", "string");
        $quiz_desc= ifilter("quiz_desc", "", "string");

        sql_query(" insert into nan_quiz set mb_id = '{$_SESSION['mb_id']}', quiz_subject = '{$quiz_subject}',quiz_desc = '{$quiz_desc}',reg_mb_id='{$_SESSION['mb_id']}', reg_date = now(), status='MAKE',quiz_type='1' ", false);
        $idx = sql_fetch("select last_insert_id() idx from dual");

        set_session('c_idx', $idx["idx"]);

        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
            'idx' => $idx["idx"]
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "quiz_update")
{
    if($_SESSION['mb_id']){
        $quiz_idx= ifilter("quiz_idx", "", "string");
        $quiz_subject= ifilter("quiz_subject", "", "string");
        $quiz_desc= ifilter("quiz_desc", "", "string");

        sql_query(" update nan_quiz set  quiz_subject = '{$quiz_subject}',quiz_desc = '{$quiz_desc}', edit_date = now(), status='MAKE',quiz_type='1' where mb_id = '{$_SESSION['mb_id']}' and quiz_idx = '{$quiz_idx}'", false);
        $jsonContent = array(
            'code' => '200',
            'msg' => '변경 되었습니다.',
            'idx' => $quiz_idx
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if($type == "img_upload") {
    $quiz_idx = ifilter("quiz_idx", "", "string");
    $question_idx = ifilter("question_idx", "", "string");
    if(!$_SESSION['mb_id']){
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }else if($quiz_idx == ""){
        $jsonContent = array(
            'code' => '202',
            'msg' => '퀴즈를 등록해 주세요.'
        );
    }else{
        if ($_FILES['fileObj']['name']) {
            $it_img_dir = G5_DATA_PATH.'/upload';
            $fullDir= $it_img_dir.'/'.$quiz_idx.'/';
            $it_img = it_img_upload($_FILES['fileObj']['tmp_name'], $_FILES['fileObj']['name'], $it_img_dir.'/'.$quiz_idx);
            $pieces = explode("dat/", $it_img);

            $it_img = "/dat/".$pieces[1];
            sql_query(" insert into nan_quiz_data_file set file_name = '{$_FILES['fileObj']['tmp_name']}', file_origin_name = '{$_FILES['fileObj']['name']}', reg_date = now(), full_url='{$it_img}' ", false);
            $file_idx = sql_fetch("select last_insert_id() idx from dual");
            $file_idx = $file_idx['idx'];
            if($question_idx == ""){
                sql_query(" insert into nan_question set quiz_idx = '{$quiz_idx}',file_id= '{$file_idx}' ", false);
                $question_idx = sql_fetch("select last_insert_id() idx from dual");
                $question_idx = $question_idx['idx'];
            }else{
                sql_query(" update nan_question set quiz_idx = '{$quiz_idx}',file_id= '{$file_idx}' where question_idx = '{$question_idx}' ", false);
            }

            $jsonContent = array(
                'code' => '200',
                'msg' => '업로드 되었습니다.',
                'quiz_idx' => $quiz_idx,
                'question_idx' => $question_idx,
                'file_id' => $file_idx,
                'img_url' => $it_img
            );
        }
    }
}else if($type == "question_save") {
    $quiz_idx = ifilter("quiz_idx", "", "string");
    $question_idx = ifilter("question_idx", "", "string");
    $title = ifilter("title", "", "string");
    $option_title = ifilter("option_title", "", "string");
    $file_id = ifilter("file_id", "", "string");
    $choiceArray = ifilter("choiceArray", "", "ARRAY");
    $question_type = ifilter("question_type", "1", "string");
    if(!$_SESSION['mb_id']){
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }else if($quiz_idx == ""){
        $jsonContent = array(
            'code' => '202',
            'msg' => '퀴즈를 등록해 주세요.'
        );
    }else{
        sql_query(" update nan_quiz set edit_date = now(), edit_mb_id='".$_SESSION['mb_id']."' where quiz_idx = '{$quiz_idx}' ", false);
        if($question_idx == ""){
            sql_query(" insert into nan_question set quiz_idx = '{$quiz_idx}',title= '{$title}',file_id= '{$file_id}',question_type= '{$question_type}' ", false);
            $question_idx = sql_fetch("select last_insert_id() idx from dual");
            $question_idx = $question_idx['idx'];
        }else{
            sql_query(" update nan_question set quiz_idx = '{$quiz_idx}',title= '{$title}',file_id= '{$file_id}',question_type= '{$question_type}' where question_idx = '{$question_idx}' ", false);
        }

        if($question_type == "1"){
            $order_no = 0;
            foreach ($choiceArray as $row) {
                $title = $row["title"];
                $correct_answer_yn = $row["correct_answer_yn"];
                $option_idx = $row["option_idx"];
                if($option_idx != ""){
                    sql_query(" update nan_question_option set quiz_idx = '{$quiz_idx}',question_idx = '{$question_idx}',option_title= '{$title}',correct_answer_yn= '{$correct_answer_yn}',order_no= '{$order_no}' where option_idx = '{$option_idx}'  ", false);
                }else{
                    sql_query(" insert into nan_question_option set quiz_idx = '{$quiz_idx}',question_idx = '{$question_idx}',option_title= '{$title}',correct_answer_yn= '{$correct_answer_yn}',order_no= '{$order_no}' ", false);
                }
                $order_no++;
            }
        }else if($question_type == "3"){
            $cnt = sql_fetch("select count(*) cnt from nan_question_option where question_idx = '{$question_idx}' ");
            if($cnt['cnt'] == 0){
                sql_query(" insert into nan_question_option set quiz_idx = '{$quiz_idx}',question_idx = '{$question_idx}',option_title= '{$option_title}' ", false);
            }else{
                sql_query(" update nan_question_option set quiz_idx = '{$quiz_idx}',question_idx = '{$question_idx}',option_title= '{$option_title}' where question_idx = '{$question_idx}' ", false);
            }
        }


        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.'
        );
    }
}else if($type == "quiz_img_upload") {
//    $quiz_idx = ifilter("quiz_idx", "", "string");
    $quiz_type = ifilter("quiz_type", "", "string");
    if(!$_SESSION['mb_id']){
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }else{
        if ($_POST["image"]) {
            /**
            if($quiz_idx == ""){
                sql_query(" insert into nan_quiz set mb_id = '{$_SESSION['mb_id']}', reg_date = now(), status='MAKE',quiz_type='{$quiz_type}' ", false);
                $quiz_idx = sql_fetch("select last_insert_id() idx from dual");
                $quiz_idx = $quiz_idx['idx'];
            }
**/
            $data = $_POST["image"];
            $image_array_1 = explode(";", $data);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);

            $it_img_dir = G5_DATA_PATH.'/upload';
            $fullDir= $it_img_dir.'/'.$_SESSION['mb_id'];
            $img_name = time().".png";
            $dest_path =$fullDir."/".$img_name;
            if( !is_dir($fullDir) ){
                @mkdir($fullDir, G5_DIR_PERMISSION);
                @chmod($fullDir, G5_DIR_PERMISSION);
            }
       //     @move_uploaded_file($_FILES['fileObj']['tmp_name'], $dest_path);
            file_put_contents($dest_path, $data);
            @chmod($dest_path, G5_FILE_PERMISSION);

            $thumb = thumbnail($img_name, $fullDir, $fullDir, 165, 205, true, true);
            if($thumb) {
                @unlink($dest_path);
                rename($fullDir.'/'.$thumb, $dest_path);
            }
         //   $it_img = it_img_upload($_FILES['fileObj']['tmp_name'], $_FILES['fileObj']['name'], $it_img_dir.'/'.$_SESSION['mb_id']);
            $dest_path = str_replace('\/' , '/', $dest_path);
            $pieces = explode("/dat/", $dest_path);

            $it_img = "/dat/".$pieces[1];
            sql_query(" insert into nan_quiz_data_file set file_name = '{$_FILES['fileObj']['tmp_name']}', file_origin_name = '{$_FILES['fileObj']['name']}', reg_date = now(), full_url='{$it_img}' ", false);
            $file_idx = sql_fetch("select last_insert_id() idx from dual");
            $file_idx = $file_idx['idx'];
/**
            if($quiz_idx == ""){
                sql_query(" insert into nan_quiz set file_id= '{$file_idx}' ", false);
                $quiz_idx = sql_fetch("select last_insert_id() idx from dual");
                $quiz_idx = $quiz_idx['idx'];
            }else{
                sql_query(" update nan_quiz set file_id= '{$file_idx}' where quiz_idx = '{$quiz_idx}' ", false);
            }
**/
            $jsonContent = array(
                'code' => '200',
                'msg' => '업로드 되었습니다.',
                'file_id' => $file_idx,
                'img_url' => $it_img
            );
        }
    }
}else if ($type == "bookmark_save")
{
    if($_SESSION['mb_id']){
        $quiz_idx= ifilter("quiz_idx", "", "string");
        $mark_yn= ifilter("mark_yn", "", "string");

        $sql = "INSERT INTO nan_bookmark VALUES ('{$quiz_idx}', '{$_SESSION['mb_id']}', '{$mark_yn}',now())
        ON DUPLICATE KEY
        UPDATE mark_yn = '{$mark_yn}' , reg_date = now()";
        sql_query($sql, false);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "rating_save")
{
    if($_SESSION['mb_id']){
        $quiz_idx= ifilter("quiz_idx", "", "string");
        $rating= ifilter("rating", "", "string");

        $sql = "INSERT INTO nan_quiz_rating VALUES ('{$quiz_idx}', '{$_SESSION['mb_id']}', '{$rating}',now())
        ON DUPLICATE KEY
        UPDATE rating = '{$rating}' , reg_date = now()";
        sql_query($sql, false);

        $sql = "select IFNULL(ROUND(AVG(rating),1),0) avg_rating from nan_quiz_rating where quiz_idx= '{$quiz_idx}' ";
        $avg_rating = sql_fetch($sql);
        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.',
            'avg_rating' => $avg_rating['avg_rating']
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if ($type == "answer_save")
{
    if($_SESSION['mb_id']){
        $quiz_idx= ifilter("quiz_idx", "", "string");
        $question_idx= ifilter("question_idx", "", "string");
        $answer_idx= ifilter("answer_idx", "", "string");
        $answer_cnt= ifilter("answer_cnt", "", "string");
        $now_page= ifilter("now_page", "", "string");
        $last_page= ifilter("last_page", "", "string");
        $correct_yn= ifilter("correct_yn", "", "string");

        $status = "ING";
        $sql = "select count(*) cnt from nan_quiz_answer where quiz_idx= '{$quiz_idx}' and mb_id = '{$_SESSION['mb_id']}' and  answer_cnt = '{$answer_cnt}'";
        $quiz_answer = sql_fetch($sql);
        if($now_page < $last_page){
            $status = "ING";
        }else{
            $status = "COMPLETE";
        }
        if($quiz_answer['cnt'] == 0){
            $sql = "INSERT INTO nan_quiz_answer 
                        set quiz_idx = '{$quiz_idx}',
                            mb_id = '{$_SESSION['mb_id']}',
                            reg_date =  now(),
                            reg_mb_id = '{$_SESSION['mb_id']}',
                            answer_cnt = '{$answer_cnt}',
                            now_page = '{$now_page}',
                            last_page = '{$last_page}',
                            status = '{$status}'
                            ";
            sql_query($sql, false);
        }else{
            $sql = "update nan_quiz_answer 
                        set edit_date =  now(),
                            edit_mb_id = '{$_SESSION['mb_id']}',
                            now_page = '{$now_page}',
                            last_page = '{$last_page}',
                            status = '{$status}'
                        where quiz_idx = '{$quiz_idx}' 
                          and mb_id = '{$_SESSION['mb_id']}'
                          and answer_cnt = '{$answer_cnt}'
                            ";
            //   print_r($sql);
            sql_query($sql, false);
        }
        $sql = "select count(*) cnt from nan_question_answer where quiz_idx= '{$quiz_idx}' and question_idx = '{$question_idx}' and mb_id = '{$_SESSION['mb_id']}' and  answer_cnt = '{$answer_cnt}'";
        $question_answer = sql_fetch($sql);
        if($question_answer['cnt'] == 0){
            $sql = "INSERT INTO nan_question_answer 
                            set quiz_idx = '{$quiz_idx}',
                                question_idx = '{$question_idx}',
                                mb_id = '{$_SESSION['mb_id']}',
                                answer_title = '{$answer_idx}',
                                reg_date =  now(),
                                reg_mb_id = '{$_SESSION['mb_id']}',
                                answer_cnt = '{$answer_cnt}',
                                correct_yn = '{$correct_yn}'
                                ";
            sql_query($sql, false);
        }else{
            $sql = "update nan_question_answer 
                            set answer_title = '{$answer_idx}',
                                reg_date =  now(),
                                reg_mb_id = '{$_SESSION['mb_id']}',
                                correct_yn = '{$correct_yn}'
                        where quiz_idx = '{$quiz_idx}' 
                          and question_idx = '{$question_idx}' 
                          and mb_id = '{$_SESSION['mb_id']}'
                          and answer_cnt = '{$answer_cnt}'
                            ";
            //   print_r($sql);
            sql_query($sql, false);
        }

        $jsonContent = array(
            'code' => '200',
            'msg' => '저장 되었습니다.'
        );
    }else{
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }
}else if($type == "get_page"){
    $data = array();
    $kind= ifilter("kind", "recently", "string");
    $list_mode= ifilter("list_mode", "recently", "string");
    $search_key= ifilter("search_key", "", "string");
    $search_word= ifilter("search_word", "", "string");
    $archived_type= ifilter("archived_type", "", "string");

    $where = "";
    $listCnt = 40;
    $order = "";
    $search_query = "";
    if($search_key || $search_key == "0"){
        if($list_mode == "new"){
            if($kind == "recently"){
                $where = $where." and ifnull(c.reg_date,a.reg_date) < '{$search_key}' ";
            }else if($kind == "latest"){
                $where = $where." and a.reg_date < '{$search_key}' ";
                $order = " order by a.reg_date desc";
                $search_query = " ,a.reg_date search_key ";
            }else if($kind == "recommed"){
                $where = $where." and a.view_cnt < '{$search_key}' ";
                $order = " order by a.view_cnt desc";
                $search_query = " ,a.view_cnt search_key ";
            }else if($kind == "tilte"){
                $where = $where." and a.quiz_subject < '{$search_key}' ";
                $order = " order by a.quiz_subject ";
                $search_query = " ,a.quiz_subject search_key ";
            }
            /**
            else if($kind == "reply"){

            }
            **/
        }else if($list_mode == "keep"){
            $listCnt = 100;	//상세 보기 후 뒤로가기 최대 조회 개수
            if($kind == "latest"){
                $order = " order by a.reg_date desc";
                $search_query = " ,a.reg_date search_key ";
            }else if($kind == "recommed"){
                $order = " order by a.view_cnt desc";
                $search_query = " ,a.view_cnt search_key ";
            }else if($kind == "tilte"){
                $order = " order by a.quiz_subject ";
                $search_query = " ,a.quiz_subject search_key ";
            }
        }else{
            $listCnt = 100;	//상세 보기 후 뒤로가기 최대 조회 개수
            if($kind == "recently"){
                $where = $where." and ifnull(c.reg_date,a.reg_date) >= '{$search_key}' ";
            }else if($kind == "latest"){
                $where = $where." and a.reg_date >= '{$search_key}' ";
                $order = " order by a.reg_date desc";
                $search_query = " ,a.reg_date search_key ";
            }else if($kind == "recommed"){
                $where = $where." and a.view_cnt >= '{$search_key}' ";
                $order = " order by a.view_cnt desc";
                $search_query = " ,a.view_cnt search_key ";
            }else if($kind == "tilte"){
                $where = $where." and a.quiz_subject >= '{$search_key}' ";
                $order = " order by a.quiz_subject ";
                $search_query = " ,a.quiz_subject search_key ";
            }
        }
    }else{
        if($kind == "latest"){
            $order = " order by a.reg_date desc";
            $search_query = " ,a.reg_date search_key ";
        }else if($kind == "recommed"){
            $order = " order by a.view_cnt desc";
            $search_query = " ,a.view_cnt search_key ";
        }else if($kind == "tilte"){
            $order = " order by a.quiz_subject ";
            $search_query = " ,a.quiz_subject search_key ";
        }
    }

    if($search_word != ""){
        $where = $where." and a.quiz_subject like '%{$search_word}%' ";
    }

    if($archived_type == "to_view"){
        $where = $where." and c.status is null ";
    }else if($archived_type == "viewing"){
        $where = $where." and c.status = 'ING' ";
    }else if($archived_type == "viewed"){
        $where = $where." and c.status = 'COMPLETE' ";
    }else if($archived_type == "add_new"){
        $where = $where." and a.mb_id = '".$_SESSION['mb_id']."' ";
    }

    if($quiz_idx_loaded){
        $where = $where." and a.quiz_idx not in (" + implode( ',', $quiz_idx_loaded ); ") ";
    }
    // 임시!! wiki 만 노출 되도록
    $where = $where."and a.quiz_type = '4' ";

    if($kind == "recently") {
        $sql = "  select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name,a.quiz_idx quiz_idx,ifnull((select mark_yn from nan_bookmark where mb_id = '" . $_SESSION['mb_id'] . "' and quiz_idx = a.quiz_idx),'N') mark_yn, ifnull(c.reg_date,a.reg_date) search_key from nan_quiz a left join (select * from nan_quiz_view_history where mb_id = '".$_SESSION['mb_id']."' group by mb_id,quiz_idx) c on a.quiz_idx = c.quiz_idx left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' ".$where." order by c.reg_date desc,a.reg_date desc limit ".$listCnt." ";
    }else{
        $sql = " select *,a.quiz_idx quiz_idx,FN_CODE('quiz_type',a.quiz_type) quiz_type_name,ifnull((select mark_yn from nan_bookmark where mb_id = '".$_SESSION['mb_id']."' and quiz_idx = a.quiz_idx),'N') mark_yn ".$search_query." from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id left join (select * from nan_quiz_answer where mb_id = '".$_SESSION['mb_id']."') c on c.quiz_idx = a.quiz_idx where a.del_yn = 'n' ".$where." ".$order." limit  ".$listCnt." ";
    }
//print_r($sql);
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
    //    $data[$i] = $row;
        array_push($data, $row);
    }
    $jsonContent = array(
        'code' => '200',
        'msg' => '페이지를 가져왔습니다.',
        'data' => $data
    );
}else if($type == "quiz_delete") {
    $quiz_idx = ifilter("quiz_idx", "", "string");
    if(!$_SESSION['mb_id']){
        $jsonContent = array(
            'code' => '201',
            'msg' => '로그인 해주세요.',
        );
    }else if($quiz_idx == ""){
        $jsonContent = array(
            'code' => '202',
            'msg' => '퀴즈를 등록해 주세요.'
        );
    }else{
        sql_query(" update nan_quiz set del_yn = 'Y' ,edit_date = now(), edit_mb_id='".$_SESSION['mb_id']."' where quiz_idx = '{$quiz_idx}' ", false);
        $jsonContent = array(
            'code' => '200',
            'msg' => '삭제 되었습니다.'
        );
    }
}


header('Content-Type: application/json');
print json_encode($jsonContent);


function passwordCheck($_str)
{
    $pw = $_str;
    $num = preg_match('/[0-9]/u', $pw);
    $eng = preg_match('/[a-z]/u', $pw);
    $spe = preg_match("/[\!\@\#\$\%\^\&\*]/u",$pw);

    if(strlen($pw) < 6 || strlen($pw) > 20)
    {
        return array(false,"비밀번호는 영문, 숫자, 특수문자를 혼합하여 최소 6자리 ~ 최대 20자리 이내로 입력해주세요.");
        exit;
    }

    if(preg_match("/\s/u", $pw) == true)
    {
        return array(false, "비밀번호는 공백없이 입력해주세요.");
        exit;
    }

    if( $num == 0 || $eng == 0 || $spe == 0)
    {
        return array(false, "비밀번호는 영문, 숫자, 특수문자를 혼합하여 입력해주세요.");
        exit;
    }

    return array(true);
}