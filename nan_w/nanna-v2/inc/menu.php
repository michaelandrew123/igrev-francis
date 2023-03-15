<nav class="grow-0 skew-menu flex flex-col items-center gap-4 justify-center">
    <div class="mt-6 "></div>
    <div class="flex flex-row gap-2 items-center">
      <div class="relative flex flex-row items-center w-10/12">   
        <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] left-2"  src="./img/magnifying-glass-solid.svg"  />
        <input type="text" class="border rounded-full w-full py-2 bg-white  px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username"   placeholder="Search"/>
        <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] right-2 hidden"  src="./img/mic.png"  />  
      </div>  
      <div class="flex flex-row gap-1 shrink bg-white rounded-full p-1 " > 
          <div class="p-1">
              <a href="#" > 
                <img class="w-5 h-5 "  src="./img/bell-regular.svg" />
              </a>
          </div>
          <div class="p-1 border rounded-full border-slate-900 dropdown">
            <div href="#" class="relative">

              <img class="w-4 h-4 user-home-icon cursor-pointer"  src="./img/user-solid.svg"  />
                  <div class="user-home-popup absolute right-0 bg-white text-base   py-2  text-left rounded-lg shadow-lg mt-1   m-0 bg-clip-padding border-none hidden"  style="z-index: 20;  ">
                    <div>
                        <a href="./mypage.php" class="  dropdown-item  bg-white text-black   font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 uppercase">
                          mypage 
                        </a>
                    </div>
                    <div>
                        <a class=" dropdown-item  bg-white text-black border-t border-slate-700 font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 uppercase" href="./account.php">
                          account
                        </a>
                    </div>
                    <div>
                        <a href="/login.php" class=" dropdown-item  bg-white text-black border-t border-slate-700 font-medium text-xs  py-2 px-7  block w-full whitespace-nowrap bg-transparent  hover:bg-gray-100 uppercase" href="./singup.php">
                          logout
                        </a>
                    </div>
                  </div>  
              </div>   
          </div>
      </div>  
    </div> 
    <div class="relative flex flex-row items-center w-10/12"> 
      <div class="flex space-x-2 justify-center w-full">
        <div class=" shadow-sm  max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block  w-full" id="static-example" style="background-color: rgb(255, 255, 255, .1);">
          <div class="flex justify-between items-center py-2 px-3 bg-clip-padding   rounded-lg">
            <div class="flex flex-row justify-between w-full">
                <div class="flex flex-col">
                  <p class="rounded-b-lg break-words text-white font-bold"> Static Example</p>
                  <p class="rounded-b-lg break-words text-white font-bold"> Static Example</p>
                </div>
                <div class="flex items-center"> 
                    <div class="text-white">X</div>
                </div>
            </div>
          </div> 
        </div>
      </div>
    </div>  
  <div class=""></div>

</nav>
 