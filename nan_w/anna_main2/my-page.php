<?php include('./layouts/header.php') ?>

    <div class="flex flex-row justify-center text-center mt-4 mb-4 pt-3 pb-3 text-2xl font-bold w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25" > 
        마이페이지 
    </div>  


    <div class=" mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto  " >  
        <div class="row">
            <div class="col s12  ">
         
                    <img src="./img/avatar.png" class="avatar m-auto" > 
                 
                <div class="  text-center">
                    <p>로그인이 필요한 서비스입니다 :)</p>
                </div>
                <div class=" flex flex-rpw justify-evenly items-center mt-10">
                    <div class="text-blue-600 px-10 py-3 border border-blue-500/75 hover:bg-blue-500/75 hover:text-white">로그인</div>
                    <div class="text-blue-600 px-10 py-3 border border-blue-500/75 hover:bg-blue-500/75 hover:text-white">회원가입</div>  
                </div>
            </div> 
        </div>
    </div>   

</div> 
<?php // echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>



<!-- <div class="w-full flex justify-center h-full relative">
    <div class=" text-center bg-blue-600  h-auto  w-4/5 text-white p-5 rounded-md absolute top-20 ">
        
        <span class="relative">  
        이동하기
        </span>
    </div>
</div> -->


<?php include('./layouts/footer.php') ?>