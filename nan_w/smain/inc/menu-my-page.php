<nav class="grow-0 skew-menu flex flex-col items-center justify-center">
 
    <div class="relative">

      <div class="text-white absolute font-black text-2xl" style="left:50%; top: 20%; transform: translate(-50%, -50%); width: 90%">MY PAGE</div>

      <img src="https://3.bp.blogspot.com/-mI-H6Pgards/VWtr6zHrNoI/AAAAAAAAfoA/IswHjpDIf10/s1600/22.jpg" />
    
   

      <div class="flex flex-row gap-2 items-center absolute " style="left:50%; top: 50%; transform: translate(-50%, -50%); width: 90%">
    
        <div class="relative flex flex-row items-center w-10/12">   
          <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] left-2"  src="./img/magnifying-glass-solid.svg"  />
          <input type="text" class="   border rounded-full w-full py-2 bg-white  px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username"   placeholder="Search"/> 

          <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] right-2 hidden"  src="./img/mic.png"  />  
        </div> 
          
        <ul class="flex flex-row gap-2 shrink bg-white rounded-full p-1 ">
          <li class="p-1  ">
            <a href="#" > 
              <img class="w-5 h-5"  src="./img/bell-regular.svg" />
            </a>
          </li>
          <li class="p-1 border rounded-full border-slate-900 dropdown"> 

            <!-- if not logged in -->  
          <?php $get_url = $_SERVER['REQUEST_URI'];  ?>


          <?php if($get_url == '/login.php' || $get_url == '/signup.php'){ ?> 
            <a href="/login.php" class="" >
              <img class="w-4 h-4 "  src="./mg/user-solid.svg" />
            </a>  
          <?php } else { ?>   
            <!-- if not logged in --> 
              <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="w-4 h-4 "  src="./img/user-solid.svg"  />
              </a>
                  <ul
                    class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1" >
                    <li>
                        <a class="dropdown-item  bg-white text-black
                                border border-slate-700
                                font-medium
                                text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 uppercase" href="/mypage.php">
                          mypage
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item  bg-white text-black
                                border border-slate-700
                                font-medium
                                text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 uppercase" href="/account.php">
                          account
                        </a>
                    </li>
                    <li>
                        <a href="/login.php" class="dropdown-item  bg-white text-black
                                border border-slate-700
                                font-medium
                                text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent  hover:bg-gray-100 uppercase" href="/singup.php">
                          logout
                        </a>
                    </li>
                </ul>
        <?php  } ?>



      </div>



      <div class="flex flex-row absolute bottom-0 w-full h-[70px]"  >
          <div class="cursor-pointer relative w-6/12 flex items-center justify-center rounded-tr-[50px]  font-black   archive-not-active  archive-active  "  >
            <div class="absolute w-full h-full  rounded-tr-[50px] top-0 left-0 hidden div-overlay" style="background-color: rgb(0, 0, 0, .20);"> </div>
            <div class="z-10">My Page</div>
          </div>
          <div class="cursor-pointer relative  w-6/12 flex items-center justify-center rounded-tl-[50px] font-black  archive-not-active  " >
            <div class="absolute w-full h-full   rounded-tl-[50px]  top-0 right-0 hidden div-overlay  " style="background-color: rgb(0, 0, 0, .20);"> </div>
            <div class="z-10">Help Center</div>
          </div>
      </div>


    </div>

 
 
</nav>
 