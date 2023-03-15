<?php
include_once('./_common.php');


if($type == 'library_'){
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.del_yn = 'n' order by a.quiz_idx desc limit 0,5  ";
    $result_recent = sql_query($sql);
    ob_start();
        for($i=0; $row=sql_fetch_array($result_recent); $i++) { ?>



                <div class="w-5/12 grow ">
                    <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                        <div class="relative h-full">   
                            <a href="./wiki-content.php" class="cursor-pointer" >   
                            <!-- <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./main/img/bookmark-yellow.png" alt="Mountain">  -->
                                <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./main/img/bookmark.png" alt="Mountain"> 
                                <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                            </a>
                        </div>
                    </div>                                
                    <div class=""> 
                        <p class="text-gray-500 text-[16px] py-1">                            
                            <?=$row['quiz_type_name']?>
                        </p>
                        <div class="font-bold text-[16px] text-black thumbnail-name"><?=$row['quiz_subject']?></div>
                    </div> 
                </div>


        <?php } 
        $content = ob_get_contents();
    ob_end_clean();


    $result = array(
        'code' => '200',
        'content'   => $content       
    );
    
    die(json_encode($result));

}



