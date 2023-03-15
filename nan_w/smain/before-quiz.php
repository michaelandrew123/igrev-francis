<!-- Header Section -->
<?php
require_once "./inc/header-v1.php";
include_once('./_common.php');
include_once('./_head.sub.php');
$quiz_idx = ifilter("quiz_idx", "", "string");
if($quiz_idx == ""){
    alert("올바른 방법으로 이용해주세요.","/");
}
$bookmark_row['mark_img'] = '';
$rating_row['rating'] = '0';
$row['avg_rating'] = '0';
if($quiz_idx != "") {
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name, DATE_FORMAT(a.reg_date, '%Y-%m-%d') save_date,DATE_FORMAT(a.edit_date, '%Y-%m-%d') modi_date,
            (select IFNULL(ROUND(AVG(rating),1),0) avg_rating from nan_quiz_rating where quiz_idx= '{$quiz_idx}') avg_rating 
            from nan_quiz a 
            left join nan_quiz_data_file b on b.file_idx = a.file_id 
            left join g5_member c on c.mb_id = a.mb_id 
            where a.quiz_idx = '" . $quiz_idx . "'  ";
    $row = sql_fetch($sql);

    if(!$row['modi_date']){
        $row['modi_date'] = $row['save_date'];
    }
    if(!$row['avg_rating']){
        $row['avg_rating'] = 0;
    }
    //뷰카운트 추가
    $sql = "update nan_quiz set view_cnt = ifnull(view_cnt,0)+1 where quiz_idx = '{$quiz_idx}'";
    sql_query($sql, false);

    if($_SESSION['mb_id']){
        //뷰히스토리 추가
        $sql = "insert into  nan_quiz_view_history set mb_id = '{$_SESSION['mb_id']}',reg_date = now(),quiz_idx = '{$quiz_idx}' ";
        sql_query($sql, false);

        $sql = "select * from nan_bookmark where quiz_idx = '".$quiz_idx."' and mb_id = '".$_SESSION['mb_id']."' ";
        $bookmark_row = sql_fetch($sql);
        if($bookmark_row['mark_yn'] == 'Y'){
            $bookmark_row['mark_img'] = '-yellow';
        }else{
            $bookmark_row['mark_img'] = '';
        }
        $sql = "select * from nan_quiz_rating where quiz_idx = '".$quiz_idx."' and mb_id = '".$_SESSION['mb_id']."' ";
        $rating_row = sql_fetch($sql);
        if(!$rating_row){
            $rating_row['rating'] = '0';
        }
    }
}
?>
<!-- For footer last div -->
<div id="body-f-screen" class="flex flex-col h-screen  ">
    <input type="hidden" name="quiz_idx" id="quiz_idx" value="<?=$quiz_idx?>">

    <div class="">



        <h5 class="text-xl font-bold leading-normal text-gray-800 ml-[15px] mr-[15px]  my-[30px]  "  >
            Quiz
        </h5>


        <div class="flex flex-col  ml-[15px] mr-[15px] pt-0">
            <div class="flex flex-row gap-3 items-stretch ">
                <!-- Thumbnail Image -->
                <div class="w-6/12 " style=" height: 185px !important;" >
                    <? if($row['full_url']){ ?>
                        <img class="flex-1 rounded-lg m-auto  w-full h-full"  src="<?=$row['full_url']?>" alt="Mountain">
                    <? } ?>
                </div>
                <div class="flex flex-col w-6/12 flex-1 justify-between">
                    <!-- Share icon -->
                    <div class="flex flex-end justify-end gap-2">

                        <img class="w-5 h-5  " src="./img/bookmark<?=$bookmark_row['mark_img']?>.png" id="bookmark" onclick="bookmark_save(this,'<?=$quiz_idx?>');" alt="Mountain">
                        <img class="w-5 h-5"  src="./img/share.png" />
                    </div>


                    <div class="text-[18px]">
                        <div class="font-bold"><?=$row['quiz_subject']?></div>
                    </div>

                    <!-- Title -->

                    <div class="flex flex-col">
                        <div class="text-[14px]">
                            <div class="font-bold"><?=$row['mb_name']?></div>
                            <div>Created <?=$row['save_date']?></div>
                            <div>Edited <?=$row['modi_date']?></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-2 mt-[20px] mb-[45px]">
                <a href="./answering-multiple-choice.php?quiz_idx=<?=$quiz_idx?>" class=" w-full  py-3 px-2 border border-slate-400 text-center drop-shadow-lg bg-blue-600 text-white font-bold">
                    <div> Start Quiz (Multiple Choice) </div>
                </a>
                <a href="./answering-open-ended.php?quiz_idx=<?=$quiz_idx?>" class=" w-full  py-3 px-2 border border-slate-400 text-center drop-shadow-lg bg-blue-600 text-white font-bold">
                    <div> Start Quiz (Open-Ended) </div>
                </a>
                <a href="#" class=" w-full  py-3 px-2 border border-slate-400 text-center drop-shadow-lg bg-blue-600 text-white font-bold">
                    <div> Revision Notes </div>
                </a>
            </div>
        </div>

        <div class="mt-3 ml-[15px] mr-[15px] pt-0">
            <div class="flex flex-row justify-between font-semibold text-[18px]">
                <div>Summary</div>

            </div>
            <div class="px-2 mt-1 text-[14px]">
                <?=$row['quiz_desc']?>
            </div>
        </div>


        <div class="mt-[25px] ml-[15px] mr-[15px] pt-0">
            <div class="flex flex-row justify-between font-semibold text-[18px]	">
                <div>About <?=$row['mb_name']?></div>

            </div>
            <div class="px-2 mt-1 text-[14px]">
                <?=$row['mb_memo']?>
            </div>
        </div>


        <div class="mt-[35px] ml-[15px] mr-[15px] pt-0 text text-[18px]">
            <div class="font-bold">
                Rating
            </div>
            <div class="flex flex-row justify-between ">
                <div>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" onclick="rating_save('5');"/>
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" onclick="rating_save('4');"/>
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" onclick="rating_save('3');"/>
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" onclick="rating_save('2');"/>
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" onclick="rating_save('1');"/>
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <div id="avg_rating"><?=$row['avg_rating']?></div>
            </div>
        </div>




        <div class="mt-3 ml-[15px] mr-[15px] pt-0">
            <div class="flex flex-row justify-between font-bold text-[18px]">
                <div>Reply</div>
            </div>
            <div>

                <div class="flex flex-row gap-2 mt-3">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row gap-2 items-center">
                                <div class=" ">
                                    <img class="w-10 p-2  rounded-full bg-gray-200" src="./img/user-solid.svg" />
                                </div>
                                <div class="font-semibold text-[14px]">unusual_w</div>
                                <small class="text-gray-400 text-[12px]">3min ago</small>
                            </div>
                            <div>
                                <img class="w-5 h-5"  src="./img/ellipsis-solid.svg" />
                            </div>
                        </div>
                        <div>
                            <div class="text-[14px]">Check out this interesting artucle I found. What do you guys think?</div>
                        </div>
                        <div class="flex flex-row gap-1 text-gray-400 ">
                            <div class="heart-icon">
                                <img class="w-5 h-5" src="./img/heart.png" />
                            </div>
                            <div class="text-[14px]">13</div>
                        </div>
                    </div>
                </div>



                <div class="flex flex-row gap-2 mt-3">

                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row gap-2 items-center">
                                <div class=" ">
                                    <img class="w-10 p-2  rounded-full bg-gray-200" src="./img/user-solid.svg" />
                                </div>
                                <div class="font-semibold text-[14px]">unusual_w</div>
                                <small class="text-gray-400 text-[12px]">3min ago</small>
                            </div>
                            <div>
                                <img class="w-5 h-5"  src="./img/ellipsis-solid.svg" />
                            </div>
                        </div>
                        <div>
                            <div class="text-[14px]">Check out this interesting artucle I found. What do you guys think?</div>
                        </div>
                        <div class="flex flex-row gap-1 text-gray-400 ">
                            <div class="heart-icon">
                                <img class="w-5 h-5" src="./img/heart.png" />
                            </div>
                            <div class="text-[14px]">13</div>
                        </div>
                    </div>
                </div>




                <div class="flex flex-row gap-2 mt-3">

                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row gap-2 items-center">
                                <div class=" ">
                                    <img class="w-10 p-2  rounded-full bg-gray-200" src="./img/user-solid.svg" />
                                </div>
                                <div class="font-semibold text-[14px]">unusual_w</div>
                                <small class="text-gray-400 text-[12px]">3min ago</small>
                            </div>
                            <div>
                                <img class="w-5 h-5"  src="./img/ellipsis-solid.svg" />
                            </div>
                        </div>
                        <div>
                            <div class="text-[14px]">Check out this interesting artucle I found. What do you guys think?</div>
                        </div>
                        <div class="flex flex-row gap-1 text-gray-400 ">
                            <div class="heart-icon">
                                <img class="w-5 h-5" src="./img/heart.png" />
                            </div>
                            <div class="text-[14px]">13</div>
                        </div>
                    </div>
                </div>








                <div class="flex flex-row gap-2 mt-3">

                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row gap-2 items-center">
                                <div class=" ">
                                    <img class="w-10 p-2  rounded-full bg-gray-200" src="./img/user-solid.svg" />
                                </div>
                                <div class="font-semibold text-[14px]">unusual_w</div>
                                <small class="text-gray-400 text-[12px]">3min ago</small>
                            </div>
                            <div>
                                <img class="w-5 h-5"  src="./img/ellipsis-solid.svg" />
                            </div>
                        </div>
                        <div>
                            <div class="text-[14px]">Check out this interesting artucle I found. What do you guys think?</div>
                        </div>
                        <div class="flex flex-row gap-1 text-gray-400 ">
                            <div class="heart-icon">
                                <img class="w-5 h-5" src="./img/heart.png" />
                            </div>
                            <div class="text-[14px]">13</div>
                        </div>
                    </div>
                </div>










            </div>
        </div>








        <div class="flex flex-col ">
            <div class="flex flex-row justify-between mt-[30px] mb-[20px] ml-[15px] mr-[15px] pt-0">
                <div class="font-bold text-[18px]">Content</div>
            </div>
            <div class=" ">
                <div class=" relative rounded-xl overflow-hidden  wrapper-arrow-before">

                    <i class="cursor-pointer absolute left-0 top-0 px-1 text-2xl arrow arrow-left z-10 bg-gray-200 flex items-center text-black"  id="left"> < </i>

                    <div class="relative rounded-xl overflow-auto p-0  carousel-before scrollbar-hidden" style="scroll-behavior: smooth;">
                        <div class="flex flex-nowrap gap-4 font-mono text-white  font-bold leading-6 rounded-lg ml-[15px] mr-[15px] pt-0" style="scroll-behavior: smooth;">
                            <div class="img-card-before flex-none ">
                                <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative h-full">
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                        <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>

                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Aiden님의...</div>
                                </div>
                            </div>
                            <div class="img-card-before flex-none">
                                <div class="  rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">
                                        <img class="w-4 h-4 absolute right-2 top-2" src="./img/bookmark-yellow.png" alt="Mountain">
                                        <img class="rounded-lg infinate-slider-image"   src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                                </div>
                            </div>
                            <div class="img-card-before flex-none">
                                <div class="  rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain" >
                                        <img class="rounded-lg infinate-slider-image"   src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                            <div class="img-card-before flex-none ">
                                <div class="  rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                        <img class="rounded-lg infinate-slider-image"   src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                            <div class="img-card-before flex-none">
                                <div class="  rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                        <img class="rounded-lg infinate-slider-image"  src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                            <div class="img-card-before flex-none">
                                <div class="  rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                        <img class="rounded-lg infinate-slider-image"  src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                            <div class="img-card-before flex-none">
                                <div class="  rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                        <img class="rounded-lg infinate-slider-image"  src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <i class="cursor-pointer absolute right-0 top-0 px-1 text-2xl arrow arrow-right z-10 bg-gray-200 flex items-center text-black" id="right"> > </i>

                </div>
            </div>

        </div>


    </div>



    <!-- Footer Section -->
    <?php require_once "./inc/footer.php"; ?>
    <script>

        var imgH = $('.infinate-slider-image').height()
        $('.arrow').height(imgH);

        const carouselBefore = document.querySelector(".carousel-before"),
            firstImgBefore = carouselBefore.querySelectorAll("div > div.img-card-before")[0],
            arrowIconsBefore = document.querySelectorAll(".wrapper-arrow-before i");


        let isDragStartBefore = false, isDraggingBefore = false, prevPageXBefore, prevScrollLeftBefore, positionDiffBefore;

        const showHideIcons = () => {
            // showing and hiding prev/next icon according to carousel scroll left value
            let scrollWidth = carouselBefore.scrollWidth - carouselBefore.clientWidth; // getting max scrollable width
            arrowIconsBefore[0].style.display = carouselBefore.scrollLeft == 0 ? "none" : "flex";
            arrowIconsBefore[1].style.display = carouselBefore.scrollLeft == scrollWidth ? "none" : "flex";


        }

        arrowIconsBefore.forEach(icon => {
            icon.addEventListener("click", () => {
                let firstImgWidth = firstImgBefore.clientWidth + 14; // getting first img width & adding 14 margin value
                // if clicked icon is left, reduce width value from the carousel scroll left else add to it
                carouselBefore.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;

                setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
            });
        });


        const autoSlideBefore = () => {
            // if there is no image left to scroll then return from here
            if(carouselBefore.scrollLeft - (carouselBefore.scrollWidth - carouselBefore.clientWidth) > -1 || carouselBefore.scrollLeft <= 0) return;
            positionDiffBefore = Math.abs(positionDiffBefore); // making positionDiff value to positive
            let firstImgWidth = firstImgBefore.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiffBefore;
            if(carouselBefore.scrollLeft > prevScrollLeftBefore) { // if user is scrolling to the right
                return carouselBefore.scrollLeft += positionDiffBefore > firstImgWidth / 3 ? valDifference : -positionDiffBefore;
            }
            // if user is scrolling to the left
            carouselBefore.scrollLeft -= positionDiffBefore > firstImgWidth / 3 ? valDifference : -positionDiffBefore;
        }

        const dragStartBefore = (e) => {
            // updatating global variables value on mouse down event
            isDragStartBefore = true;
            prevPageXBefore = e.pageX || e.touches[0].pageX;
            prevScrollLeftBefore = carouselBefore.scrollLeft;
        }
        const draggingBefore = (e) => {
            // scrolling images/carousel to left according to mouse pointer
            if(!isDragStartBefore) return;
            e.preventDefault();
            isDraggingBefore = true;
            carouselBefore.classList.add("dragging");
            positionDiffBefore = (e.pageX || e.touches[0].pageX) - prevPageXBefore;
            carouselBefore.scrollLeft = prevScrollLeftBefore - positionDiffBefore;
            showHideIcons();
        }
        const dragStopBefore = () => {
            isDragStartBefore = false;
            carouselBefore.classList.remove("dragging");
            if(!isDraggingBefore) return;
            isDraggingBefore = false;
            autoSlideBefore();
        }

        carouselBefore.addEventListener("mousedown", dragStartBefore);
        carouselBefore.addEventListener("touchstart", dragStartBefore);
        document.addEventListener("mousemove", draggingBefore);
        carouselBefore.addEventListener("touchmove", draggingBefore);
        document.addEventListener("mouseup", dragStopBefore);
        carouselBefore.addEventListener("touchend", dragStopBefore);
        var rating = <?=$rating_row['rating']?>;
        $(function(){
            for(var i=1; i<=rating; i++){
                $("#star"+i).prop("checked",true);
            }
        });
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
                            $("#bookmark").attr('src','./img/bookmark-yellow.png');
                        }else{
                            $("#bookmark").attr('src','./img/bookmark.png');
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
    </script>