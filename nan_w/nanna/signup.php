<!-- Header Section -->


<?php  require_once "./nanna/inc/header.php";?>
<!-- First slide --> 
 

	<div class="grow flex flex-col items-center justify-center">
			<div>
				<div>
					<img src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" class="w-24 m-auto" />
				</div> 
				<div class="block p-6  bg-white max-w-sm">
				  <form>
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="text" class="form-control
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
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"   id="id" placeholder="ID">
		        	      <div>
                              <img src="./nanna/img/remove.png" class="w-5 m-auto" />
                          </div>
					    </div>
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="text" class="form-control block
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
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="nickname"
					        placeholder="NICKNAME">

                            <div>
                                <img src="./nanna/img/loading.png" class="w-5 m-auto loader" />
                            </div>
					    </div> 
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="email" class="form-control block
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
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
					        placeholder="EMAIL">

                            <div>
                                <img src="./nanna/img/check.png" class="w-5 m-auto" />
                            </div>
					    </div>  
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="password" class="form-control block
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
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="pw"
					        placeholder="PW">

                            <div>
                                <img src="./nanna/img/check.png" class="w-5 m-auto" />
                            </div>
					    </div> 
					    <div class="form-group mb-6 flex flex-row items-center gap-2">
					      <input type="password" class="form-control block
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
					        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="pw-confirm"
					        placeholder="PASSWORD CONFIRM">

                            <div>
                                <img src="./nanna/img/check.png" class="w-5 m-auto" />
                            </div>
					    </div> 
					    <div class="flex flex-col gap-2">
						    <a href="#"
                               data-bs-toggle="modal" data-bs-target="#verify-email"
                               id="signup-verify-email"
                               class="
                                  px-6
                                  py-2.5
                                  bg-white text-gray-700
                                  border border-slate-900
                                  font-medium
                                  text-xs
                                  text-center
                                  leading-tight
                                  uppercase
                                  rounded
                                  shadow-md
                                  hover:bg-white hover:shadow-lg
                                  focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0
                                  active:bg-white active:shadow-lg
                                  transition
                                  duration-150
                                  ease-in-out"
                            >VERIFY EMAIL</a>

						    <a type="submit" class="
						      px-6
						      py-2.5
						      bg-white text-gray-700
						      border border-slate-900
						      font-medium
						      text-xs
						      text-center
						      leading-tight
						      uppercase
						      rounded
						      shadow-md
						      hover:bg-white hover:shadow-lg
						      focus:bg-whitefocus:shadow-lg focus:outline-none focus:ring-0
						      active:bg-white active:shadow-lg
						      transition
						      duration-150
						      ease-in-out">Sign up</a>
					      </div>
				  </form>
				</div> 
			</div>
	</div>



<!-- from header div element -->
</div>


<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
     id="verify-email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog relative w-auto pointer-events-none" style="position: absolute;top: 50%;transform: translate(0px, -50%);">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

            <div class="flex flex-shrink-0 items-center justify-between p-4  rounded-t-md">
                <img src="./nanna/img/check.png" class="w-8 m-auto" />
            </div>
            <div class="modal-header flex flex-shrink-0 items-center justify-center pb-4 border-b border-gray-200 rounded-t-md">


                <h5 class=" text-center font-medium leading-normal text-gray-800" id="exampleModalLabel">A verification email has been sent.</h5>
<!--                <button type="button"-->
<!--                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"-->
<!--                        data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body relative p-4">
                <p>Cant check your email? </p>
                <p>Check Spam folder or <a href="#" class="underline underline-offset-4 text-blue-600">Send again</a></p>
            </div>
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button type="button" class="px-6
                      py-2.5
                      bg-white text-gray-700
                      border border-slate-900
                      font-medium
                      text-xs
                      leading-tight
                      uppercase
                      rounded
                      shadow-md
                      hover:bg-purple-700 hover:shadow-lg
                      focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                      active:bg-purple-800 active:shadow-lg
                      transition
                      duration-150
                      ease-in-out" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
 
 <!-- Fixed Menu --> 
<?php require_once "./nanna/inc/fixed-menu.php"; ?>
 
<!-- Footer Section -->
<?php require_once "./nanna/inc/footer.php"; ?>


<script type="text/javascript">
  
    $('a#signup-verify-email').on('touchstart', function () {

        /*This message must be display when the email is verified*/
        $(this).text('E-MAIL VERIFIED');
    })
</script>
