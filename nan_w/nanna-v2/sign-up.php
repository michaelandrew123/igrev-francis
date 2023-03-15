<!-- Header Section --> 
<?php  require_once "./inc/header.php"; ?> 

	    <div class="grow flex flex-col  bg-white rounded-t-[50px]">
			<div class="flex flex-col gap-5  mt-[30px] mb-[20px]">
				<div>
					<img src="https://igrev.kr/assets/images/logo_bottom.png" class="w-24 m-auto" />
				</div> 
				<div class="block px-6 py-[15px] bg-white max-w-sm">
				    <form>
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"   id="id" placeholder="ID">
		        	      <div>
                              <img src="./img/register-icons/remove.png" class="w-5 m-auto" />
                          </div>
					    </div>
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="nickname" placeholder="NICKNAME">
                            <div>
                                <img src="./img/register-icons/loading.png" class="w-5 m-auto loader" />
                            </div>
					    </div> 
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" placeholder="EMAIL">
                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto" />
                            </div>
					    </div>  
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="pw" placeholder="PW">
                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto" />
                            </div>
					    </div> 
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="pw-confirm" placeholder="PASSWORD CONFIRM">

                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto" />
                            </div>
					    </div> 
					    <div class="flex flex-col gap-2">
						    <a href="#" 
                 
                            id="signup-verify-email" 


                            data-te-toggle="modal"
                            data-te-target="#verifyEmail"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            class="cursor-pointer px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs text-center leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">VERIFY EMAIL</a>
						    <a type="submit" class=" cursor-pointer px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs text-center leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-whitefocus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">Sign up</a>
					      </div>
				    </form>
				</div> 
			</div>
	    </div> 
    <!-- from header div element -->
    </div>


<!-- Modal -->  
<div data-te-modal-init style="transform: translate(-50%);" class="m-auto w-[360px] fixed top-0 left-[50%] z-[1055] hidden h-full  overflow-y-auto overflow-x-hidden outline-none" id="verifyEmail"  tabindex="-1"  aria-labelledby="verifyEmailLabel"  aria-hidden="true" >
  <div data-te-modal-dialog-ref class="pointer-events-none flex justify-center items-center h-full relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[360px]:mx-auto  min-[360px]:max-w-[360px] ">
    <div class="min-[360px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex  flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 w-full">
        <div class="flex flex-col flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <div class="flex flex-shrink-0 items-center justify-between p-4  rounded-t-md">
                <img src="./img/register-icons/check.png" class="w-8 m-auto" />
            </div>
            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalLabel"> 
                A verification email has been sent
            </h5> 
        </div>
        <div class="relative flex-auto p-4" data-te-modal-body-ref>
            Can't check your email? <br/>
            Check Spam folder or   
            <button type="button" data-te-ripple-init data-te-ripple-color="light" class="inline-block rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700"> Send again </button>  
        </div>
        <div class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <button type="button" class="inline-block rounded bg-primary-100   text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Close
            </button> 
        </div>
    </div>
  </div>






</div>
  
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
<script type="text/javascript">
  
    $('a#signup-verify-email').on('mousedown', function () {

        /*This message must be display when the email is verified*/
        $(this).text('E-MAIL VERIFIED');
    })
</script>
