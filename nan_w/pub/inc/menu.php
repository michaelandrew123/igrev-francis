<nav class="skew-menu flex flex-row items-center gap-2 justify-center mt-6">
  <div class="relative flex flex-row items-center"> 
      <img class="w-5 h-5 absolute top-[50%] translate-y-[-50%] left-2"  src="./img/magnifying-glass-solid.svg"  /> 
      <input class="pl-8 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" /> 
  </div> 

  <ul class="flex flex-row gap-2">
    <li class="p-1  ">
      <a href="#" > 
        <img class="w-5 h-5"  src="./img/bell-regular.svg" /> 
      </a>
    </li>
    <li class="p-1 border rounded-full border-slate-900 dropdown">
      <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="w-5 h-5"  src="./img/user-solid.svg" />  
        </a>
          <ul
          class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1" >
          <li>
            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
              Action
            </a>
          </li>
          <li>
            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
              Another action
            </a>
          </li>
          <li>
            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
              Something else here
            </a>
          </li>
        </ul>
    </li> 
  </ul> 
</nav>
 