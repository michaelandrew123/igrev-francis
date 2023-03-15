<!-- Header Section -->
<?php  require_once "./inc/header.php"; ?> 


	    <div class="grow flex flex-col bg-white rounded-t-[50px]">
			<div class="flex flex-col gap-5  mt-[30px] mb-[20px]">
				<div>
					<img src="https://igrev.kr/assets/images/logo_bottom.png" class="w-24 m-auto" />
				</div> 
				<div class="block px-6 py-[15px]   bg-white max-w-sm">
				  <form>
					    <div class="form-group mb-6"> 
					      <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="ID">
					      <small id="emailHelp" class="block mt-1 text-xs text-gray-600">We'll never share your email with anyone else.</small>
					    </div>
					    <div class="form-group mb-6"> 
					      <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword1" placeholder="PW">
					    </div> 
                        <div class="pb-6">
                            <button type="submit" class=" px-6 py-2.5 w-full bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">LOGIN</button>
                        </div>
                        <div>
                          <div>Don't have an account yet? </div>
                          <a href="/sign-up.php" class="underline underline-offset-4 text-blue-600">Sign up</a>
                        </div>
				  </form>
				</div> 
			</div>
	    </div> 
<!-- from header div element -->
</div>

  
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>