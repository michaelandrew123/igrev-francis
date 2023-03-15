<!-- Header Section -->
<?php  require_once "./inc/header.php"; ?> 

<style>

.carousel.dragging{
    cursor: grab;
    scroll-behavior: auto;
}
.carousel.dragging div{
    pointer-events: none;
}
</style> 
<div class="rounded-t-[50px]  bg-white "> 
    <!-- first slider --> 
    <div class="flex flex-col ">
        <div class="flex flex-row justify-between mx-[15px]  mt-[30px] mb-[20px]"> 
            <div class="font-bold text-xl">Recent</div>
            <a href="./recent-more.php">
                <div class="text-base font-semibold text-blue-500">more</div>
            </a> 
        </div> 
        <div class=" ">  
            <div class=" relative rounded-xl   overflow-hidden   wrapper-arrow-recent">
                <!-- <div class="absolute   inset-0 pointer-events-none  " > </div> -->  
                <i class="cursor-pointer absolute left-0 top-0 px-1 text-2xl arrow arrow-left z-10 flex items-center text-black"  id="left"> 
                    <img class="w-5 h-5 rotate-180" src="./img/arrow.png" />
                </i>
              
                <div class="relative rounded-xl overflow-auto p-0  carousel-recent scrollbar-hidden"  style="scroll-behavior: smooth;">
                    <div class="flex flex-nowrap gap-x-[20px] font-mono   text-white font-bold leading-6   rounded-lg" style="scroll-behavior: smooth;">
          
                        <div class="img-card-recent flex-none ml-[15px] ">
                            <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                                <div class="relative h-full">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"  >
                                    <img class="rounded-lg  infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            
                            <div class="flex flex-col flex-wrap   "> 
                                <p class="text-gray-500 text-[16px]  py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black  thumbnail-name">
                                    Aiden님의] sdasda sdadsasd dadadad
                                </div>
                            </div> 
                        </div>
                        <div class="img-card-recent flex-none">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2" src="./img/bookmark-yellow.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                            </div> 
                        </div>
                        <div class="img-card-recent flex-none">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain" >
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recent flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recent flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recent flex-none">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recent flex-none  ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
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
                <!-- <div class="absolute inset-0 pointer-events-none "> </div> -->
                <i class="cursor-pointer absolute right-0 top-0 px-1 text-2xl arrow arrow-right z-10 flex items-center text-black" id="right"> <img class="w-5 h-5 " src="./img/arrow.png" /> </i>
           
            </div>
        </div>
  
    </div> 

    <!-- 2nd slider --> 
    <div class="flex flex-col">
        <div class="flex flex-row justify-between mx-[15px] mt-[10px] mb-[20px]  "> 
            <div class="font-bold text-xl">Recommended</div>

            <a href="./recommended-more.php">
                <div class="text-base font-semibold text-blue-500">more</div>
            </a> 
        </div> 
        <div class=" ">  
            <div class="relative rounded-xl overflow-hidden  wrapper-arrow-recommended" > 
                    <i class="cursor-pointer absolute left-0 top-0 px-1 text-2xl arrow arrow-left z-10 flex items-center text-black"  id="left"> 
                        <img class="w-5 h-5  rotate-180" src="./img/arrow.png" />
                    </i>   
                <div class="relative rounded-xl overflow-auto p-0  carousel-recommended scrollbar-hidden" style="scroll-behavior: smooth;">
                    <div class="flex flex-nowrap gap-x-[20px] font-mono text-white  font-bold leading-6 rounded-lg  " style="scroll-behavior: smooth;">
                        <div class="img-card-recommended flex-none ml-[15px]">
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
                        <div class="img-card-recommended flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2" src="./img/bookmark-yellow.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                            </div> 
                        </div>
                        <div class="img-card-recommended flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recommended flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recommended flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recommended flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="img-card-recommended flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
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
                    <i class="cursor-pointer absolute right-0 top-0 px-1 text-2xl arrow arrow-right z-10 flex items-center text-black" id="right"> 
                        <img class="w-5 h-5   " src="./img/arrow.png" />
                    </i>
            </div>
        </div>
  
    </div>
  
    <!-- 3rd slider --> 
    <!-- <div class="flex flex-col">
        <div class="flex flex-row justify-between mx-[15px] mt-[10px] mb-[20px] "> 
            <div class="font-bold text-xl">Related</div>
            <div class="text-base font-semibold text-blue-500">More</div>
        </div> 
        <div class=" ">  
            <div class=" relative rounded-xl overflow-hidden  ">
                <div class="absolute inset-0" style="background-position: 10px 10px;"> </div>
                <div class="relative rounded-xl overflow-auto p-0   scrollbar-hidden">
                    <div class="flex flex-nowrap gap-x-[20px] font-mono text-white  font-bold leading-6 rounded-lg">
                        <div class=" flex-none ml-[15px]">
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
                        <div class="flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2" src="./img/bookmark-yellow.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                            </div> 
                        </div>
                        <div class="flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] py-1">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                            </div>
                        </div>
                        <div class="flex-none ">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative">
                                    <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                    <img class="rounded-lg infinate-slider-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
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
                <div class="absolute inset-0 pointer-events-none "> </div>
            </div>
        </div>
  
    </div> -->
 

    <!-- thumbnail  -->
    <div class=" ">  
        <div class=" relative  rounded-xl overflow-hidden ">
            <div class="absolute inset-0 " style="background-position: 10px 10px;"> </div>
            <div class="relative rounded-xl   mx-[15px]">
                <div class="flex flex-wrap justify-between items-center gap-x-4    font-mono text-white font-bold leading-6 bg-stripes-sky rounded-lg">
                     
                    <div class="w-5/12 grow mt-[10px]">
                        <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                            <div class="relative h-full">
                                <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                            </div>
                        </div>
                        
                        <div class=""> 
                            <p class="text-gray-500 text-[16px] py-1">
                                Quiz
                            </p>
                            <div class="font-bold text-[16px] text-black thumbnail-name">Aiden님의...</div>
                        </div> 
                    </div>
                    <div class="w-5/12 grow mt-[10px]">
                        <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                            <div class="relative">
                                <img class="w-4 h-4 absolute right-2 top-2" src="./img/bookmark-yellow.png" alt="Mountain">
                                <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                            </div>
                        </div>
                        <div class=""> 
                            <p class="text-gray-500 text-[16px] ">
                                Quiz
                            </p>
                            <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                        </div> 
                    </div>



                    <div class="w-5/12 grow mt-[30px]">
                        <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                            <div class="relative">
                                <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                            </div>
                        </div>
                        <div class=""> 
                            <p class="text-gray-500 text-[16px] py-1">
                                Quiz
                            </p>
                            <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                        </div>
                    </div>
                    <div class="w-5/12 grow mt-[30px]">
                        <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                            <div class="relative">
                                <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain">
                                <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
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
            <div class="absolute inset-0 pointer-events-none "> </div>
        </div>
    </div>


 
</div>
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

<script>

    var imgH = $('.infinate-slider-image').height()
    $('.arrow').height(imgH);
     






/** Recent Slider */
  
    const carouselRecent = document.querySelector(".carousel-recent"),
        firstImgRecent = carouselRecent.querySelectorAll("div > div.img-card-recent")[0],
        arrowIconsRecent = document.querySelectorAll(".wrapper-arrow-recent i");
      
    let isDragStartRecent = false, isDraggingRecent = false, prevPageXRecent, prevScrollLeftRecent, positionDiffRecent;

    const showHideIconsRecent = () => {
        // showing and hiding prev/next icon according to carousel scroll left value
        let scrollWidth = carouselRecent.scrollWidth - carouselRecent.clientWidth; // getting max scrollable width
        arrowIconsRecent[0].style.display = carouselRecent.scrollLeft == 0 ? "none" : "flex";
        arrowIconsRecent[1].style.display = carouselRecent.scrollLeft == scrollWidth ? "none" : "flex"; 

 
    } 

    arrowIconsRecent.forEach(icon => {
        icon.addEventListener("click", () => {
            let firstImgWidth = firstImgRecent.clientWidth + 14; // getting first img width & adding 14 margin value 
            // if clicked icon is left, reduce width value from the carousel scroll left else add to it
            carouselRecent.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
            
            setTimeout(() => showHideIconsRecent(), 60); // calling showHideIcons after 60ms
        });
    });
     
    const autoSlideRecent = () => {
        // if there is no image left to scroll then return from here
        if(carouselRecent.scrollLeft - (carouselRecent.scrollWidth - carouselRecent.clientWidth) > -1 || carouselRecent.scrollLeft <= 0) return;
            positionDiffRecent = Math.abs(positionDiffRecent); // making positionDiffRecent value to positive
            let firstImgWidth = firstImgRecent.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiffRecent;
        if(carouselRecent.scrollLeft > prevScrollLeftRecent) { // if user is scrolling to the right
            return carouselRecent.scrollLeft += positionDiffRecent > firstImgWidth / 3 ? valDifference : -positionDiffRecent;
        }
        // if user is scrolling to the left
        carouselRecent.scrollLeft -= positionDiffRecent > firstImgWidth / 3 ? valDifference : -positionDiffRecent;
    }

    const dragStartRecent = (e) => {
        // updatating global variables value on mouse down event
        isDragStartRecent = true;
        prevPageXRecent = e.pageX || e.touches[0].pageX;
        prevScrollLeftRecent = carouselRecent.scrollLeft;
    }

    const draggingRecent = (e) => {
        // scrolling images/carousel to left according to mouse pointer
        if(!isDragStartRecent) return;
        e.preventDefault();
        isDraggingRecent = true;
        carouselRecent.classList.add("draggingRecent");
        positionDiffRecent = (e.pageX || e.touches[0].pageX) - prevPageXRecent;
        carouselRecent.scrollLeft = prevScrollLeftRecent - positionDiffRecent;
        showHideIcons();
    }

    const dragStopRecent = () => {
        isDragStartRecent = false;
        carouselRecent.classList.remove("draggingRecent");
        if(!isDraggingRecent) return;
        isDraggingRecent = false;
        autoSlide();
    }

    carouselRecent.addEventListener("mousedown", dragStartRecent);
    carouselRecent.addEventListener("touchstart", dragStartRecent);
    document.addEventListener("mousemove", draggingRecent);
    carouselRecent.addEventListener("touchmove", draggingRecent);
    document.addEventListener("mouseup", dragStopRecent);
    carouselRecent.addEventListener("touchend", dragStopRecent);
 

/** End Recent Slider */




 /** Recommended Slider */
    
 const carouselRecommended = document.querySelector(".carousel-recommended"),
        firstImgRecommended = carouselRecommended.querySelectorAll("div > div.img-card-recommended")[0],
        arrowIconsRecommended = document.querySelectorAll(".wrapper-arrow-recommended i");
      
    let isDragStartRecommended = false, isDraggingRecommended = false, prevPageXRecommended, prevScrollLeftRecommended, positionDiffRecommended;

    const showHideIconsRecommended = () => {
        // showing and hiding prev/next icon according to carousel scroll left value
        let scrollWidth = carouselRecommended.scrollWidth - carouselRecommended.clientWidth; // getting max scrollable width
        arrowIconsRecommended[0].style.display = carouselRecommended.scrollLeft == 0 ? "none" : "flex";
        arrowIconsRecommended[1].style.display = carouselRecommended.scrollLeft == scrollWidth ? "none" : "flex"; 

 
    } 

    arrowIconsRecommended.forEach(icon => {
        icon.addEventListener("click", () => {
            let firstImgWidth = firstImgRecommended.clientWidth + 14; // getting first img width & adding 14 margin value 
            // if clicked icon is left, reduce width value from the carousel scroll left else add to it
            carouselRecommended.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
            
            setTimeout(() => showHideIconsRecommended(), 60); // calling showHideIcons after 60ms
        });
    });
     
    const autoSlideRecommended = () => {
        // if there is no image left to scroll then return from here
        if(carouselRecommended.scrollLeft - (carouselRecommended.scrollWidth - carouselRecommended.clientWidth) > -1 || carouselRecommended.scrollLeft <= 0) return;
            positionDiffRecommended = Math.abs(positionDiffRecommended); // making positionDiffRecommended value to positive
            let firstImgWidth = firstImgRecommended.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiffRecommended;
        if(carouselRecommended.scrollLeft > prevScrollLeftRecommended) { // if user is scrolling to the right
            return carouselRecommended.scrollLeft += positionDiffRecommended > firstImgWidth / 3 ? valDifference : -positionDiffRecommended;
        }
        // if user is scrolling to the left
        carouselRecommended.scrollLeft -= positionDiffRecommended > firstImgWidth / 3 ? valDifference : -positionDiffRecommended;
    }

    const dragStartRecommended = (e) => {
        // updatating global variables value on mouse down event
        isDragStartRecommended = true;
        prevPageXRecommended = e.pageX || e.touches[0].pageX;
        prevScrollLeftRecommended = carouselRecommended.scrollLeft;
    }

    const draggingRecommended = (e) => {
        // scrolling images/carousel to left according to mouse pointer
        if(!isDragStartRecommended) return;
        e.preventDefault();
        isDraggingRecommended = true;
        carouselRecommended.classList.add("draggingRecommended");
        positionDiffRecommended = (e.pageX || e.touches[0].pageX) - prevPageXRecommended;
        carouselRecommended.scrollLeft = prevScrollLeftRecommended - positionDiffRecommended;
        showHideIcons();
    }

    const dragStopRecommended = () => {
        isDragStartRecommended = false;
        carouselRecommended.classList.remove("draggingRecommended");
        if(!isDraggingRecommended) return;
        isDraggingRecommended = false;
        autoSlide();
    }

    carouselRecommended.addEventListener("mousedown", dragStartRecommended);
    carouselRecommended.addEventListener("touchstart", dragStartRecommended);
    document.addEventListener("mousemove", draggingRecommended);
    carouselRecommended.addEventListener("touchmove", draggingRecommended);
    document.addEventListener("mouseup", dragStopRecommended);
    carouselRecommended.addEventListener("touchend", dragStopRecommended);

/** End Recommended Slider */


</script>
 