<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<!---->
<?php  require_once "./inc/menu-v1.php"; ?> 
<div class="page">
    <div class="w-full hidden" id="archived-1">
        <div class="bg-white  mx-[15px]  ">

            <div class="flex flex-row gap-2">
                <div class=" rounded-[50px] px-2 py-1 bg-blue-600/100 text-white font-bold cursor-pointer">To View</div>

                <div class=" rounded-[50px] px-2 py-1 bg-gray-100/100 text-black font-bold cursor-pointer">Viewing</div>

                <div class=" rounded-[50px] px-2 py-1 bg-gray-100/100 text-black font-bold cursor-pointer">Viewed</div>
            </div> 
            <!-- sort items -->
            <div class=" "> 
                <div class=" mt-[30px] mb-[20px] flex flex-row justify-between">
                    <div class="flex flex-row items-center gap-2">
                        
                        <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                            <img src="./img/filter.png" class="w-5 h-4" />

                            <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                        Sort: Recent
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">	
                                        Sort: View
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sort: Title
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sort: Reply
                                    </a>
                                </li>
                        </ul> 
                        </a>  

                        <p class="sort-text" >Recent</p>
                    </div>
                    <div class="flex flex-row items-center gap-2 library-gl">
                        <a href="#" id="library-grid">
                            <img src="./img/visualization.png" class="w-5 h-4" />
                        </a>

                        <a href="#" id="library-list">
                            <img src="./img/list.png" class="w-5 h-4" />
                        </a>
                    </div>
                </div> 
            </div> 
    
            <div class="hidden show" id="yetview">  
                <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                    <div class="relative rounded-xl   ">
                        <div id="grid-list" class="flex flex-wrap justify-center items-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
                            <div class="w-5/12 grow ">
                                <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                                    <div class="relative h-full">   
                                        <a href="./wiki-content.php" class="cursor-pointer" >   
                                            <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        
                                        Wiki
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Aiden님의...</div>
                                </div> 
                            </div>
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <a href="./before-quiz.php" class="cursor-pointer" >   
                                            <img class="w-4 h-4 absolute right-2 top-2 " src="./img/bookmark-yellow.png" alt="Mountain">
                                            <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </a>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                                </div> 
                            </div>
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative"> 
                                        <img class="w-4 h-4 absolute right-2 top-2 png-white" src="./img/bookmark.png" alt="Mountain"> 
                                        <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
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
                </div>
            </div>
    

        </div>
    </div>
 
    <div class="w-full hidden relative" id="archived-2">
        <div class="bg-white mr-[15px] ml-[15px] m-auto">

        
            <!-- sort items -->
            <div class=" "> 
                <div class="mt-6 mb-6 flex flex-row justify-between">
                    <div class="flex flex-row items-center gap-2">
                        
                        <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                            <img src="./img/filter.png" class="w-5 h-4" />

                            <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                        Sort: Recent
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">	
                                        Sort: View
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sort: Title
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sort: Reply
                                    </a>
                                </li>
                        </ul> 
                        </a>  

                        <p class="sort-text" >Recent</p>
                    </div>
    
                </div> 
            </div> 
    




            <div class="hidden show relative" id="yetview">  
                <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                    <div class="relative rounded-xl  ">
                        <div class="flex flex-wrap justify-center items-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
        
 
                            <div class="w-5/12 grow ">
                                <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                                    <div class="relative h-full">
                                        <!-- <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#archived-2-quiz-1" >  
                                            <img class="rounded-lg  thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </a> --> 
                                        <a href="./before-quiz.php" class="cursor-pointer" >  
                                            <img class="rounded-lg  thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                        </a>    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Aiden님의...</div>
                                </div> 

                            </div>
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                        <div class="relative">  
                                            <!-- <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#archived-2-wiki-1" >  
                                                <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                            </a> -->
                                            
                                            <a href="./wiki-content.php" class="cursor-pointer" >   
                                                <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                            </a> 
                                            <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                                <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                            </div>
                                        </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Wiki
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                                </div> 
                            </div>
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div> 
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>  
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>  

                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>   
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class=""> 
                                    <p class="text-gray-500 text-[16px] py-1">
                                        Quiz
                                    </p>
                                    <div class="font-bold text-[16px] text-black thumbnail-name">Yesmin님...</div>
                                </div>
                            </div>   
                            <div class="w-5/12 grow ">
                                <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                    <div class="relative">  
                                        <img class="rounded-lg thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    
                                        <div class="absolute bottom-2 right-2 bg-gray-400 p-5 rounded-full ">
                                            <img class="png-white w-5 h-6 "  src="./img/add.png" />
                                        </div>
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
                        <div class="fixed bottom-20 flex flex-row justify-between cursor-pointer">   
                            <div class="w-full relative left-64" >
                                <div class="bg-blue-400 p-5 rounded-full " id="create-content"> 
                                    <img class="png-white w-5 h-6 "  src="./img/add.png" /> 
                                </div>
                            </div>
                        </div> 
                           
                    </div> 
                </div>
            </div> 
        </div> 
    </div>  
</div>

<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
 

<script> 
    $('#create-content').on('mousedown', function(){ 
        window.location.href="./create-content.php";
    })
    $('#library-grid').on('mousedown', function(){ 
        $('#grid-list > div').removeClass('w-5/12');
        $('#grid-list > div').addClass('w-full');
        $('#grid-list > div .grid-img').removeClass('thumbnail-image');
    })
    $('#library-list').on('mousedown', function(){  
        $('#grid-list > div').addClass('w-5/12');
        $('#grid-list > div').removeClass('w-full');
        $('#grid-list > div .grid-img').addClass('thumbnail-image');
    })
</script>