<?php include('./layouts/header.php') ?>

    <div class="flex flex-row justify-between text-center mt-4   pt-3 pb-3 text-2xl font-bold w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25 px-3" >  

        <i class="fa fa-angle-left pointer  " aria-hidden="true"></i>
        기본폴더
        <input type="checkbox" />
    </div>  


    <div class=" text-center mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto  " >  
     

        <div class="flex flex-col text-left relative mb-7">
            <textarea  rows="5" cols="50" class="form-control
        block
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
        mb-5
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"placeholder="메모 타이틀 보여지는곳"></textarea>
            <input type="text" placeholder="#태그"  class="form-control
        block
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
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
        </div>
    </div>     
</div>

<div class="text-center bg-white mb-32 w-4/5 p-5 rounded-md hover:bg-blue-600/75 hover:text-white text-black ">저장</div>