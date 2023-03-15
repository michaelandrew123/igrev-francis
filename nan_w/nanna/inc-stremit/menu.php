<nav class="grow-0 skew-menu flex flex-row items-center gap-2 justify-center mt-6">
  <div class="relative flex flex-row items-center"> 
      <img class="w-5 h-5 absolute top-[50%] translate-y-[-50%] left-2"  src="./nanna/img/magnifying-glass-solid.svg"  />
      <input class="pl-8 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" /> 
  </div> 

  <ul class="flex flex-row gap-2">
    <li class="p-1  ">
      <a href="#" > 
        <img class="w-5 h-5"  src="./nanna/img/bell-regular.svg" />
      </a>
    </li>
    <li class="p-1 border rounded-full border-slate-900 dropdown">



      <!-- if not logged in --> 


    <?php $get_url = $_SERVER['REQUEST_URI'];  ?>


    <?php if($get_url == '/login.php' || $get_url == '/signup.php'){ ?> 
      <a href="/login.php" class="" >
        <img class="w-5 h-5"  src="./nanna/img/user-solid.svg" />
      </a>  
    <?php } else { ?>   
      <!-- if not logged in --> 
        <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="w-5 h-5"  src="./nanna/img/user-solid.svg" />
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
    </li> 
  </ul> 
</nav>
 