<!-- Header Section -->


<?php  require_once "./nanna/inc/header.php";?>
<!-- First slide -->


<div id="account" class="pt-6 flex flex-col items-center justify-center ">


    <!-- account info -->
    <div id="account-info" class="w-full ">
        <div class="uppercase font-bold">
            account info
        </div>

        <div class="w-full">

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full ">
                                <thead class="">
                                </thead>
                                <tbody>
                                    <tr class="text-left ">
                                        <td class="py-2 whitespace-nowrap text-sm  font-medium text-gray-900">ID</td>
                                        <td class="text-sm text-gray-900 font-medium py-2 whitespace-nowrap">
                                            IDIDIDIDIDIDIDID
                                        </td>
                                    </tr>
                                    <tr class="text-left ">
                                        <td class="py-2 whitespace-nowrap text-sm font-medium text-gray-900 uppercase">nickname</td>
                                        <td class="text-sm text-gray-900 font-medium py-2 whitespace-nowrap uppercase">
                                            nickname
                                        </td>
                                    </tr>
                                    <tr class="text-left ">
                                        <td class=" py-2 whitespace-nowrap text-sm  font-medium text-gray-900 uppercase">e-mail</td>
                                        <td class="text-sm text-gray-900 font-medium py-2 whitespace-nowrap uppercase">
                                            email@email.com
                                        </td>
                                    </tr>
                                    <tr class="bg-white ">
                                        <td colspan="2" class="py-2 whitespace-nowrap text-sm font-medium  text-green-500">Verified</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b-2 border-gray-500 mb-6"></div>


            <div class="flex flex-col gap-2">
                <a href="#"
                   id="change-password"
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
                >change password</a>
                <a href="#"
                   id="change-nickname"
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
                >change nickname</a>
                <a href="#"
                   id="change-email"
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
                >change email</a>

            </div>


        </div>

    </div>

    <!-- account change password -->
    <div id="account-change-password" class="w-full hidden">
        <div class="uppercase font-bold">
            change password
        </div>

        <div class="block pt-6  bg-white max-w-sm">
            <form>
                <div class="form-group mb-6 ">

                    <label for="new-password" class="form-label inline-block mb-2 text-gray-700 uppercase">new password</label>
                    <div class="flex flex-row items-center gap-2">
                        <input type="password" class="form-control
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
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="NEW PW"
                           id="new-password"
                        >
                        <div>
                            <img src="./nanna/img/check.png" class="w-5 m-auto " />
                        </div>
                    </div>
                </div>
                <div class="form-group ">

                    <label for="confirm-password" class="form-label inline-block mb-2 text-gray-700 uppercase">confirm password</label>
                    <div class="flex flex-row items-center gap-2">
                        <input type="password" class="form-control
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
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="CONFIRM PASSWORD"
                               id="confirm-password"
                        >
                        <div>
                            <img src="./nanna/img/check.png" class="w-5 m-auto " />
                        </div>
                    </div>
                </div>
                <div class="border-b-2 border-gray-500 my-6 select-none"></div>
                <div class="flex flex-row justify-evenly items-center">

                    <a href="#" class="
                          select-none
					      px-6
					      py-2.5
                          bg-white text-gray-700
                          border border-slate-900
					      font-medium
					      text-xs
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
                        id="save-new-password"
                    >CHANGE</a>


                    <a href="/account.php" class="
                          select-none
					      px-6
					      py-2.5
                          bg-white text-gray-700
                          border border-slate-900
					      font-medium
					      text-xs
					      leading-tight
					      uppercase
					      rounded
					      shadow-md
					      hover:bg-white hover:shadow-lg
					      focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0
					      active:bg-white active:shadow-lg
					      transition
					      duration-150
					      ease-in-out">CANCEL</a>


                </div>
            </form>

        </div>
    </div>


    <!-- account change nickname -->
    <div id="account-change-nickname" class="w-full hidden">
        <div class="uppercase font-bold">
            change nickname
        </div>

        <div class="block pt-6  bg-white max-w-sm">

            <div class="pb-6">Nickname can be exchanged two times a month</div>
            <form>
                <div class="form-group mb-6">

                    <label for="new-nickname" class="form-label inline-block mb-2 text-gray-700 uppercase">new nickname</label>
                    <div class="flex flex-row items-center gap-2">
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
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="NICKNAME"
                           id="new-nickname"
                        >
                        <div>
                            <img src="./nanna/img/check.png" class="w-5 m-auto" />
                        </div>
                    </div>
                </div>

                <div class="border-b-2 border-gray-500 my-6 select-none"></div>
                <div class="flex flex-row justify-evenly items-center">

                    <a href="#" class="
                          select-none
                          px-6
                          py-2.5
                          bg-white text-gray-700
                          border border-slate-900
                          font-medium
                          text-xs
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
                       id="save-new-nickname"
                    >CHANGE</a>


                    <a href="/account.php" class="
                          select-none
                          px-6
                          py-2.5
                          bg-white text-gray-700
                          border border-slate-900
                          font-medium
                          text-xs
                          leading-tight
                          uppercase
                          rounded
                          shadow-md
                          hover:bg-white hover:shadow-lg
                          focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0
                          active:bg-white active:shadow-lg
                          transition
                          duration-150
                          ease-in-out">CANCEL</a>


                </div>
            </form>

        </div>
    </div>


    <!-- account change email -->
    <div id="account-change-email" class="w-full hidden">
        <div class="uppercase font-bold">
            change e-mail
        </div>

        <div class="block pt-6  bg-white max-w-sm">

            <div class="pb-6">E-mail can be exchanged two times a month</div>
            <form>
                <div class="form-group mb-6">

                    <label for="new-nickname" class="form-label inline-block mb-2 text-gray-700 uppercase">new e-mail</label>
                    <div class="flex flex-row items-center gap-2">
                        <input type="email" class="form-control
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
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="enter new email"
                               id="new-email"
                        >

                        <div>
                            <img src="./nanna/img/check.png" class="w-5 m-auto" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-start items-center">
                    <a href="#"
                       data-bs-toggle="modal" data-bs-target="#send-email-verification"
                       id="email-verification"
                       class="
                          px-6
                          py-1
                          bg-white text-gray-700
                          border border-slate-900
                          font-medium
                          text-xs
                          text-center
                          leading-tight
                          rounded
                          shadow-md
                          hover:bg-white hover:shadow-lg
                          focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0
                          active:bg-white active:shadow-lg
                          transition
                          duration-150
                          ease-in-out"
                    >Send E-mail for Verification</a>
                </div>
                <div class="border-b-2 border-gray-500 my-6 select-none"></div>
                <div class="flex flex-row justify-evenly items-center">

                    <a href="#"  class="
                          select-none
					      px-6
					      py-2.5
                          bg-white text-gray-700
                          border border-slate-900
					      font-medium
					      text-xs
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
                       id="save-new-email"
                    >confirm</a>


                    <a href="/account.php" class="
                          select-none
					      px-6
					      py-2.5
                          bg-white text-gray-700
                          border border-slate-900
					      font-medium
					      text-xs
					      leading-tight
					      uppercase
					      rounded
					      shadow-md
					      hover:bg-white hover:shadow-lg
					      focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0
					      active:bg-white active:shadow-lg
					      transition
					      duration-150
					      ease-in-out">CANCEL</a>
                </div>
            </form>

        </div>
    </div>



    <!-- Toasted Popup -->
    <div class="pt-6 w-full hidden" id="change-toasts">
        <div class="flex space-x-2 justify-center">
            <div class="bg-white shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                <div class="py-6 bg-white rounded-b-lg break-words text-gray-700 flex flex-row gap-2 justify-center items-center">

                    <div><img src="./nanna/img/check.png" class="w-5 m-auto" /> </div><div class="uppercase" id="change-toasts-title"></div> <div>successfully changed</div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto "
         id="send-email-verification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
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




</div>


<!-- from header div element -->
</div>



<!-- Fixed Menu -->
<?php require_once "./nanna/inc/fixed-menu.php"; ?>

<!-- Footer Section -->
<?php require_once "./nanna/inc/footer.php"; ?>


<script type="text/javascript">
    /* Change password btn */
    $('#account #change-password').on('touchstart', function () {
        $('div#account-info').addClass('hidden');
        $('div#account-change-password').removeClass('hidden');
        $('div#change-toasts').addClass('hidden');
        $('div#change-toasts-title').text('');
    })
    /* Change nickname btn */
    $('#account #change-nickname').on('touchstart', function () {
        $('div#account-info').addClass('hidden');
        $('div#account-change-nickname').removeClass('hidden');
        $('div#change-toasts').addClass('hidden');
        $('div#change-toasts-title').text('');
    })
    /* Change email btn */
    $('#account #change-email').on('touchstart', function () {
        $('div#account-info').addClass('hidden');
        $('div#account-change-email').removeClass('hidden');
        $('div#change-toasts').addClass('hidden');
        $('div#change-toasts-title').text('');
    })

    /* change new password btn */
    $('a#save-new-password').on('touchstart', function(){
        $('div#account-info').removeClass('hidden');
        $('div#account-change-password').addClass('hidden');

        $('div#change-toasts').removeClass('hidden');
        $('div#change-toasts-title').text('password');

        setTimeout(function(){
            $('div#change-toasts').addClass('hidden');
            $('div#change-toasts-title').text('');
        }, 2000);
    })

    /* change new nickname btn */
    $('a#save-new-nickname').on('touchstart', function () {
        $('div#account-info').removeClass('hidden')
        $('div#account-change-nickname').addClass('hidden');

        $('div#change-toasts').removeClass('hidden');
        $('div#change-toasts-title').text('nickname');

        setTimeout(function(){
            $('div#change-toasts').addClass('hidden');
            $('div#change-toasts-title').text('');
        }, 2000);
    })

    /* save new email btn */
    $('a#save-new-email').on('touchstart', function () {
        $('div#account-info').removeClass('hidden')
        $('div#account-change-email').addClass('hidden');

        $('div#change-toasts').removeClass('hidden');
        $('div#change-toasts-title').text('nickname');

        setTimeout(function(){
            $('div#change-toasts').addClass('hidden');
            $('div#change-toasts-title').text('');
        }, 2000);
    })

    /* add attr or change icon to specific icon: $('#sample').prop('src', './img/check.png');*/
</script>
