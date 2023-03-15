<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen  ">
<!---->
<?php  require_once "./inc/menu-my-page.php"; ?>  
    <!-- thumbnail  --> 
    <div class="flex flex-col"> 
        <div class="flex flex-col gap-2  mx-[15px] mt-[30px] mb-[10px] ">  
            <!-- sort items -->
            <div class=" "> 
                <div class="  flex flex-row justify-between">
                    <div class="flex flex-row items-center gap-2"> 
                        <a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
                            <img src="./img/filter.png" class="w-5 h-4" /> 
                            <ul id="sort-items" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="sort-dropdown" >
                           
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">	
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
                    <div class="flex flex-row items-center gap-2 mine-gl">
                        <a href="#" id="mine-grid">
                            <img src="./img/visualization.png" class="w-5 h-4" />
                        </a> 
                        <a href="#" id="mine-list">
                            <img src="./img/list.png" class="w-5 h-4" />
                        </a>
                    </div>
                </div> 
            </div>  
            <div class="font-bold text-xl">Mine</div> 
        </div>  
        <div class=" ">  
            <div class=" relative  rounded-xl overflow-hidden ">
                <div class="absolute inset-0 " style="background-position: 10px 10px;"> </div>
                <div class="relative rounded-xl   mx-[15px]">
                    <div id="grid-list" class="flex flex-wrap justify-center items-center gap-x-[15px] gap-y-[30px] font-mono text-white text-sm font-bold leading-6 bg-stripes-sky rounded-lg">
                        <div class="w-5/12 grow ">
                            <div class="w-full rounded-lg flex flex-col items-center justify-center shadow-sm"> 
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=""> 
                                <p class="text-gray-500 text-[16px] ">
                                    Quiz
                                </p>
                                <div class="font-bold text-[16px] text-black thumbnail-name">망각곡선...</div>
                            </div> 
                        </div> 
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                        <div class="w-5/12 grow">
                            <div class=" w-full rounded-lg flex flex-col items-center justify-center shadow-sm">
                                <div class="relative h-full">
                                    <img class="rounded-lg grid-img thumbnail-image" src="https://i.pinimg.com/originals/f3/d9/4c/f3d94ce409e91117dde4de2ad697f4d9.jpg" alt="Mountain">
                                    <div  class="pencil-edit absolute bottom-2 right-2 flex flex-rpw w-[35px] flex items-center justify-center">
                                        <a hre="#" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#taking-quiz" >  
                                            <img class="w-5  png-white" src="./img/pencil.png" alt="Mountain">
                                        </a>
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
                </div>
                <div class="absolute inset-0 pointer-events-none "> </div>
            </div>
        </div>
    </div> 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
<script>  
    $('#mine-grid').on('mousedown', function(){  
        $('#grid-list > div').removeClass('w-5/12');
        $('#grid-list > div').addClass('w-full');
        $('#grid-list > div .grid-img').removeClass('thumbnail-image');
    })
    $('#mine-list').on('mousedown', function(){   
        $('#grid-list > div').addClass('w-5/12');
        $('#grid-list > div').removeClass('w-full');
        $('#grid-list > div .grid-img').addClass('thumbnail-image');
    })
</script>