<?php include('./layouts/header.php') ?>


<style>

.vi_t tr{
    border: 0 !important;
}
tr td{ 
     text-align: center;
    
}
</style>
    <div class="flex flex-row justify-center text-center mt-4 mb-4 pt-3 pb-3 text-2xl font-bold w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25" >  
 
        마이페이지
        
    </div>  


    <div class=" mt-4 mb-4 pt-3 pb-3 text-lg  w-11/12 ml-auto mr-auto  " >  
        <div class="row">
            <div class="col s12 ">


                <div>

                
                <div class="text-left text-blue-600/75 mb-5">아이디 찾기</div>
  
                            <div class="font-bold">이메일 아이디를 잊으셧나요?</div>
                      
                            <div  >가입하신 이름과 휴대전화번호를 입력해주세요</div> 
            
                </div>
                <div class="  text-center  mt-5">
                 

                <input type="text" placeholder="이름"  class="form-control
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
        <input type="text" placeholder="휴대전화번호 ('-' 제외)"  class="form-control
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
                <div class=" flex flex-rpw justify-evenly items-center mt-10">
                    <div class="text-blue-600 px-10 py-3 border border-blue-600/75 bg-transparent hover:bg-blue-600/75 hover:text-white text-black w-full text-center">변경하기</div> 
                </div>
            </div> 
        </div>
    </div>   

</div> 
  
 
<?php include('./layouts/footer.php') ?>