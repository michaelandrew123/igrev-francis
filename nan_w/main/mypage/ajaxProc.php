<?php
include_once('./_common.php');

if($type == 'yetview'){
    ob_start();
        //for($i=0; $row=sql_fetch_array($result); $i++) {
            for($i=0; $i<5; $i++) {?>

            <li>
                <img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
                <div class="px-0 py-2">
                    <div class=" mb-0">Mountain</div>
                    <p class="text-gray-700 text-base">
                        Wiki
                    </p>
                </div> 
            </li>

        <?php } 
        $content = ob_get_contents();
    ob_end_clean();

}else if($type == 'viewing'){
    ob_start();
        //for($i=0; $row=sql_fetch_array($result); $i++) {
            for($i=0; $i<5; $i++) {?>

            <li>
                <img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
                <div class="px-0 py-2">
                    <div class=" mb-0">Mountain</div>
                    <p class="text-gray-700 text-base">
                        Quiz
                    </p>
                </div> 
            </li>

        <?php } 
        $content = ob_get_contents();
    ob_end_clean();

}else if($type == 'done'){
    ob_start();
        //for($i=0; $row=sql_fetch_array($result); $i++) {
            for($i=0; $i<5; $i++) {?>

            <li>
                <img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
                <div class="px-0 py-2">
                    <div class=" mb-0">Mountain</div>
                    <p class="text-gray-700 text-base">
                        Done
                    </p>
                </div> 
            </li>

        <?php } 
        $content = ob_get_contents();
    ob_end_clean();

}


// ----------------------------------------------------------------------------------------마이페이지----------------------------------------------------------------------------------------

if($type == 'mypage_main'){

    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' order by a.quiz_idx desc limit 0,5  ";
    $result_recent = sql_query($sql);
    ob_start();
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>

                <div class=" flex-none ml-[15px]">
                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                        <div class="relative h-full"> 
                            <img class="rounded-lg  infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                        </div>
                    </div>
                    
                    <div class=""> 
                        <p class="text-gray-500 text-[16px] py-1">
                            <?=$row['quiz_type_name']?>
                        </p>
                        <div class="font-bold text-[16px] text-black thumbnail-name">
                            <?=$row['quiz_subject']?>
                        </div>
                    </div> 
                </div>

        <?php } 
        $content_SOLVING = ob_get_contents();
    ob_end_clean();

    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' order by a.quiz_idx desc limit 0,5  ";
    $result_recent = sql_query($sql);
    ob_start();
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>

                <div class=" flex-none ml-[15px]">
                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                        <div class="relative h-full"> 
                            <img class="rounded-lg  infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                        </div>
                    </div>
                    
                    <div class=""> 
                        <p class="text-gray-500 text-[16px] py-1">
                            <?=$row['quiz_type_name']?>
                        </p>
                        <div class="font-bold text-[16px] text-black thumbnail-name">
                            <?=$row['quiz_subject']?>
                        </div>
                    </div> 
                </div>

        <?php } 
        $content_NOTED = ob_get_contents();
    ob_end_clean();

    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' order by a.quiz_idx desc limit 0,5  ";
    $result_recent = sql_query($sql);
    ob_start();
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>

                <div class=" flex-none ml-[15px]">
                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                        <div class="relative h-full"> 
                            <img class="rounded-lg  infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                        </div>
                    </div>
                    
                    <div class=""> 
                        <p class="text-gray-500 text-[16px] py-1">
                            <?=$row['quiz_type_name']?>
                        </p>
                        <div class="font-bold text-[16px] text-black thumbnail-name">
                            <?=$row['quiz_subject']?>
                        </div>
                    </div> 
                </div>

        <?php } 
        $content_MINE = ob_get_contents();
    ob_end_clean();

    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' order by a.quiz_idx desc limit 0,5  ";
    $result_recent = sql_query($sql);
    ob_start();
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>

                <div class=" flex-none ml-[15px]">
                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                        <div class="relative h-full"> 
                            <img class="rounded-lg  infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                        </div>
                    </div>
                    
                    <div class=""> 
                        <p class="text-gray-500 text-[16px] py-1">
                            <?=$row['quiz_type_name']?>
                        </p>
                        <div class="font-bold text-[16px] text-black thumbnail-name">
                            <?=$row['quiz_subject']?>
                        </div>
                    </div> 
                </div>

        <?php } 
        $content_FAV = ob_get_contents();
    ob_end_clean();


    $result = array(
        'code' => '200',
        'content_SOLVING'   => $content_SOLVING,
        'content_NOTED'   => $content_NOTED,
        'content_MINE'   => $content_MINE,
        'content_FAV'   => $content_FAV       
    );
    
    die(json_encode($result));

}else if($type == 'help_center'){

    $sql = " select * from g5_write_notice order by wr_id desc;  ";
    $result_recent = sql_query($sql);
    ob_start(); 
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>

            <li>
                <input type="checkbox" checked>
                <i></i>
                <h2><?=$row['wr_subject']?></h2>
                <pre  class="help_p"><?=$row['wr_content']?></pre>
            </li>

        <?php } 
        $content_help = ob_get_contents();
    ob_end_clean();


    $result = array(
        'code' => '200',
        'content_help'   => $content_help      
    );
    
    die(json_encode($result));
}

// ----------------------------------------------------------------------------------------마이페이지-서브---------------------------------------------------------------------------------------

else if($type == 'mypage_sub'){
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' order by a.quiz_idx desc limit 0,5  ";
    $result_recent = sql_query($sql);
    ob_start();
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>

                <div class="w-5/12 grow ">
                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                        <div class="relative h-full">
                            <?php if($i!=2){ //노란색마크표시 ?> 
                                <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./nanna-v2/img/bookmark.png" alt="Mountain">
                            <?}else{?>
                                <img class="w-4 h-4 absolute right-2 top-2" src="./nanna-v2/img/bookmark-yellow.png" alt="Mountain">
                            <?php } ?>
                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                        </div>
                    </div>                            
                    <div class=""> 
                        <p class="text-gray-500 text-[16px] py-1">
                            <?=$row['quiz_type_name']?>
                        </p>
                        <div class="font-bold text-[16px] text-black thumbnail-name">
                            <?=$row['quiz_subject']?>
                        </div>
                    </div> 
                </div>

        <?php } 
        $content = ob_get_contents();
    ob_end_clean();


    $result = array(
        'code' => '200',
        'type' => 'mypage_sub',
        'content'   => $content       
    );
    
    die(json_encode($result));

}







$result = array(
    'code' => '200',
    'html'   => $content
);

die(json_encode($result));