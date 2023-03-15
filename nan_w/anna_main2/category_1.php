<?php include('./layouts/header.php') ?>

        <div class=" text-center mt-4   pt-3 pb-3 w-11/12 ml-auto mr-auto border-b-2 border-gray-600/25 px-3" >  
    
        <div class=" font-bold text-2xl "> 카테고리 </div>
            <div class="row flex flex-row justify-between items-center mt-5">
                
          
                <select class="browser-default">
                    <option value="" disabled selected>나안나에서 제공해드립니다 :)</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <!-- <span></span>
                <i class="fa fa-angle-down pointer  absolute right-5" aria-hidden="true"></i> -->
            </div>
        </div>  

    
        <div class="  mt-4 mb-4 pt-3 pb-3 w-11/12 ml-auto mr-auto  " >  
            <div class="text-left  text-lg " style="padding: 0 0.75rem;">내 폴더</div>
            <div class="row">

            <form class="col s12"> 
                <div class="row">

                
                    <div class="input-field col s12 flex justify-end ">  
                        <div class=" bg-red-500 text-white   relative ct-i1 "  >  
                            <input  type="text" class="validate bg-transparent absolute top-0 pt-1 text-black" value="기본 폴더"> 
                            <i class="fa fa-times pointer absolute right-5" aria-hidden="true"></i> 
                         </div>
                    </div>

<!-- 
                    <div class="input-field col s12 relative">
                        <input  type="text" class="validate bg-transparent" value="기본 폴더"> 
                        <div class="bg-red-500 text-white ct-i1"  > 
                            <i class="fa fa-times" aria-hidden="true"></i>  
                        </div>
                    </div> -->
                </div>
                
                <div class="row">
                    <div class="input-field col s12">  
                        <div class="bg-red-500 text-white  w-full relative ct-i2 "  >  
                            <input  type="text" class="validate  bg-transparent absolute top-0" value="폴더 2"> 
                            <i class="fa fa-times pointer absolute right-5 pt-1" aria-hidden="true"></i> 
                         </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 "> 
                        <div class="bg-blue-500 text-white  w-full relative ct-i3 "  > 
                            <input  type="text" class="validate   bg-transparent absolute top-0 pt-1" value="폴더 3"> 
                            <i class="fa fa-times pointer absolute right-5" aria-hidden="true"></i>  
                        </div>
                    </div>
                </div>   
            </form>
        </div>
    </div>     
</div> 
<!-- <div class="text-center bg-blue-600 mb-32 w-4/5 text-white p-5 rounded-md ">저장</div> 
 -->

<div class=" text-center bg-blue-600 mb-32 w-4/5 text-white p-5 rounded-md ">
    
    <span class="relative"> 
    <i class="fa fa-plus pointer  absolute -left-5" aria-hidden="true"></i>
        저장
    </span>
</div>


<?php include('./layouts/footer.php') ?>