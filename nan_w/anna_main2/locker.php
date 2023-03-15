<?php include('./layouts/header.php') ?>

    <div class="flex flex-row justify-between text-center mt-4 mb-4 pt-3 pb-3 text-2xl font-bold w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25" >  

        <i class="fa fa-angle-left pointer  " aria-hidden="true"></i>
        보관함
        <input type="checkbox" />
    </div>  


    <div class=" text-center mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25" >  
        <div class="flex flex-row items-center justify-between">
            <div class="font-bold">보관한 메모 타이틀</div>
            <i class="fa fa-ellipsis-h text-2xl locker1-ellipsis-h pointer" aria-hidden="true"></i>
        </div>

        <div class="text-left relative mb-7">
            <div class="absolute -right-5 top-0  bg-white py-3 px-8  shadow-lg shadow-gray-500/50 locker1-ellipsis-h-show hidden">
                <div>수정</div>
                <div>삭제</div>
            </div>

            <p class="truncate ... text-base mb-3"> 보관함에 담은 메모 세부내용 보여지...더보기 </p> 
            <small>#메모#내용#타이틀</small> 

        </div>
    </div>  


    <div class=" text-center mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25" >  
        <div class="flex flex-row items-center justify-between">
            <div class="font-bold">보관한 메모 타이틀</div>
            <i class="fa fa-ellipsis-h text-2xl locker2-ellipsis-h pointer" aria-hidden="true"></i>
        </div> 
        <div class="text-left relative mb-7">
            <div class="absolute -right-5 top-0  bg-white py-3 px-8  shadow-lg shadow-gray-500/50 locker2-ellipsis-h-show hidden">
                <div> <a href="./edit_library.php">수정</a></div>
                <div>삭제</div>
                <div>공유</div>
                <div>이동</div>
            </div> 
            <p class=" text-base mb-3  "> 
                보관함에 담은 메모 세부내용 보여지는곳 보관함에
                담은 메모 세부내용 보여지는곳 보관함에 담은 메모 
                세부내용 보여지는곳 보관함에 담은 메모 세부내용 
                보여지는곳 보관함에 담은 메모 세부내용 보여지는곳
            </p>  
            <small>#메모#내용#타이틀</small>  
        </div>
    </div>  


    
    <div class=" text-center mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto " >  
        <div class="flex flex-row items-center justify-between">
            <div class="font-bold">보관한 메모 타이틀</div>
            <i class="fa fa-ellipsis-h text-2xl locker3-ellipsis-h pointer" aria-hidden="true"></i>
        </div> 
        <div class="text-left relative mb-7"> 

            <div class="absolute -right-5 top-0  bg-white py-3 px-8  shadow-lg shadow-gray-500/50 locker3-ellipsis-h-show hidden">
                <div>수정</div>
                <div>삭제</div>
                <div>공유</div>
                <div>이동</div>
            </div> 


            <p class=" truncate ... text-base mb-3  "> 
                보관함에 담은 메모 세부내용 보여지는곳 보관함에
                담은 메모 세부내용 보여지는곳 보관함에 담은 메모 
                세부내용 보여지는곳 보관함에 담은 메모 세부내용 
                보여지는곳 보관함에 담은 메모 세부내용 보여지는곳
            </p>  
            <small>#메모#내용#타이틀</small>  
        </div>
    </div>    
</div> 
<?php include('./layouts/footer.php') ?>