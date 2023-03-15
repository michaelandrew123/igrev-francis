<nav class="grow-0 skew-menu flex flex-col items-center justify-center">
 
    <div class="relative">

      <div class="text-white absolute font-black text-2xl" style="left:50%; top: 20%; transform: translate(-50%, -50%); width: 90%">LIBRARY</div>

      <img src="./img/education-concept-student-studying-brainstorming-campus-concept-close-up-students-discussing-their-subject-books-textbooks-selective-focus.jpg" />
    
   

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
          <li class="p-1 border rounded-full border-slate-900 dropdown ">
              <?php if($get_url == '/login.php' || $get_url == '/signup.php'){ ?>
                  <a href="/login.php" class="" >
                      <img class="w-4 h-4 "  src="./mg/user-solid.svg" />
                  </a>
              <?php } else { ?>
                  <?php  if (isset($_SESSION['ss_mb_id']) && $_SESSION['ss_mb_id']) { ?>
                      <!-- if not logged in -->
                      <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="w-4 h-4 user-home-icon cursor-pointer"  src="./img/user-solid.svg"  />
                      </a>
                      <div class="user-home-popup absolute right-0 bg-white text-base py-2 text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none hidden" style="z-index: 20;  ">
                          <div>
                              <a href="./mypage.php" class="  dropdown-item  bg-white text-black   font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 uppercase">
                                  mypage
                              </a>
                          </div>
                          <div>
                              <a  href="./account.php" class=" dropdown-item  bg-white text-black border-t border-slate-700 font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 uppercase">
                                  account
                              </a>
                          </div>
                          <div>
                              <a href="<?php echo G5_BBS_URL ?>/logout.php" class=" dropdown-item  bg-white text-black border-t border-slate-700 font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent  hover:bg-gray-100 uppercase">
                                  logout
                              </a>
                          </div>
                      </div>
                  <?php } else { ?>
                      <!-- if not logged in -->
                      <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="w-4 h-4 user-home-icon cursor-pointer"  src="./img/user-solid.svg"  />
                      </a>
                      <div class="user-home-popup absolute right-0 bg-white text-base py-2 text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none hidden" style="z-index: 20;  ">
                          <div>
                              <a href="./login.php" class=" dropdown-item  bg-white text-black border-t border-slate-700 font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent  hover:bg-gray-100 uppercase">
                                  login
                              </a>
                          </div>
                      </div>
                  <?php  } ?>
              <?php  } ?>
          </li>
        </ul>


      </div>



      <div class="cursor-pointer flex flex-row absolute bottom-0 w-full h-[70px] " id="archived" style="z-index: 0">
          <div class="  relative w-6/12 flex items-center justify-center rounded-tr-[50px]  font-black archived-1 archive-not-active  archive-active  " rel="archived-1" onclick="view_search('to_view');">
            <!-- <div class="z-0 absolute w-full h-full  rounded-tr-[50px] top-0 left-0 hidden div-overlay" style="background-color: rgb(0, 0, 0, .20);"> </div> -->
            <div class=" ">Archived</div>
          </div>
          <div class="  cursor-pointer relative  w-6/12 flex items-center justify-center rounded-tl-[50px] font-black archived-2 archive-not-active  " rel="archived-2" onclick="view_search('add_new');">
            <!-- <div class="z-0 absolute w-full h-full   rounded-tl-[50px]  top-0 right-0 hidden div-overlay" style="background-color: rgb(0, 0, 0, .20);"> </div> -->
            <div class=" ">Add New</div>
          </div>
      </div> 
    </div>

 


    <div class="mb-[20px]"></div>

</nav>
 