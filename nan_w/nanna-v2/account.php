<!-- Header Section -->
<?php  require_once "./inc/header.php"; ?> 


<div id="account" class=" grow flex flex-col  rounded-t-[50px]  bg-white">

    <div class="mx-[15px] ">
            
        <!-- account info -->
        <div id="account-info" class="w-full  mt-[30px] mb-[20px] ">
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
                    <a href="#" id="change-password" class=" px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs text-center leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out" >change password</a>
                    <a href="#" id="change-nickname" class=" px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs text-center leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">change nickname</a>
                    <a href="#" id="change-email" class=" px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs text-center leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">change email</a>
                </div>
            </div>

        </div>

        <!-- account change password -->
        <div id="account-change-password" class="w-full mt-[30px] mb-[20px]  hidden">
            <div class="uppercase font-bold">
                change password
            </div>

            <div class="block pt-6  bg-white max-w-sm">
                <form>
                    <div class="form-group mb-6 ">

                        <label for="new-password" class="form-label inline-block mb-2 text-gray-700 uppercase">new password</label>
                        <div class="flex flex-row items-center gap-2">
                            <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="NEW PW" id="new-password" >
                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto " />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">

                        <label for="confirm-password" class="form-label inline-block mb-2 text-gray-700 uppercase">confirm password</label>
                        <div class="flex flex-row items-center gap-2">
                            <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="CONFIRM PASSWORD" id="confirm-password" >
                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto " />
                            </div>
                        </div>
                    </div>
                    <div class="border-b-2 border-gray-500 my-6 select-none"></div>
                    <div class="flex flex-row justify-evenly items-center"> 
                        <a href="#" class=" select-none px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out" id="save-new-password" >CHANGE</a>
                        <a href="/account.php" class=" select-none px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">CANCEL</a>
                    </div>
                </form>

            </div>
        </div>


        <!-- account change nickname -->
        <div id="account-change-nickname" class="w-full mt-[30px] mb-[20px]  hidden">
            <div class="uppercase font-bold">
                change nickname
            </div>

            <div class="block pt-6  bg-white max-w-sm">

                <div class="pb-6">You can change your nickname for up to twice a month.</div>
                <form>
                    <div class="form-group mb-6">

                        <label for="new-nickname" class="form-label inline-block mb-2 text-gray-700 uppercase">new nickname</label>
                        <div class="flex flex-row items-center gap-2">
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="NICKNAME" id="new-nickname" >
                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto" />
                            </div>
                        </div>
                    </div>

                    <div class="border-b-2 border-gray-500 my-6 select-none"></div>
                    <div class="flex flex-row justify-evenly items-center"> 
                        <a href="#" class=" select-none px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out" id="save-new-nickname" >CHANGE</a>
                        <a href="/account.php" class=" select-none px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">CANCEL</a>
                    </div>
                </form>

            </div>
        </div>


        <!-- account change email -->
        <div id="account-change-email" class="w-full mt-[30px] mb-[20px]  hidden">
            <div class="uppercase font-bold">
                change e-mail
            </div>

            <div class="block pt-6  bg-white max-w-sm">

                <div class="pb-6">E-mail can be exchanged two times a month</div>
                <form>
                    <div class="form-group mb-6">

                        <label for="new-nickname" class="form-label inline-block mb-2 text-gray-700 uppercase">new e-mail</label>
                        <div class="flex flex-row items-center gap-2">
                            <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="enter new email" id="new-email" >

                            <div>
                                <img src="./img/register-icons/check.png" class="w-5 m-auto" />
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row justify-start items-center">
                        <a href="#" id="email-verification"  data-te-toggle="modal" data-te-target="#verifyEmail1" data-te-ripple-init data-te-ripple-color="light"
                        class=" px-6 py-1 bg-white text-gray-700 border border-slate-900 font-medium text-xs text-center leading-tight rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out"
                        >Send E-mail for Verification</a>
                    </div>
                    <div class="border-b-2 border-gray-500 my-6 select-none"></div>
                    <div class="flex flex-row justify-evenly items-center">

                        <a href="#"  class=" select-none px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out"
                        id="save-new-email"
                        >confirm</a>


                        <a href="/account.php" class=" select-none px-6 py-2.5 bg-white text-gray-700 border border-slate-900 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg transition duration-150 ease-in-out">CANCEL</a>
                    </div>
                </form>

            </div>
        </div> 

        <!-- Toasted Popup -->
        <div class="pt-6 w-full hidden" id="change-toasts">
            <div class="flex space-x-2 justify-center">
                <div class="bg-white shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                    <div class="py-6 bg-white rounded-b-lg break-words text-gray-700 flex flex-row gap-2 justify-center items-center">

                        <div><img src="./img/register-icons/check.png" class="w-5 m-auto" /> </div><div class="uppercase" id="change-toasts-title"></div> <div>successfully changed</div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Modal --> 
        <div data-te-modal-init style="transform: translate(-50%);" class="m-auto w-[360px] fixed top-0 left-[50%] z-[1055] hidden h-full  overflow-y-auto overflow-x-hidden outline-none" id="verifyEmail1"  tabindex="-1"  aria-labelledby="verifyEmailLabel1"  aria-hidden="true" >
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

</div>


<!-- from header div element -->
</div>
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>


<script type="text/javascript">
    /* Change password btn */
    $('#account #change-password').on('mousedown', function () {
        $('div#account-info').addClass('hidden');
        $('div#account-change-password').removeClass('hidden');
        $('div#change-toasts').addClass('hidden');
        $('div#change-toasts-title').text('');
    })
    /* Change nickname btn */
    $('#account #change-nickname').on('mousedown', function () {
        $('div#account-info').addClass('hidden');
        $('div#account-change-nickname').removeClass('hidden');
        $('div#change-toasts').addClass('hidden');
        $('div#change-toasts-title').text('');
    })
    /* Change email btn */
    $('#account #change-email').on('mousedown', function () {
        $('div#account-info').addClass('hidden');
        $('div#account-change-email').removeClass('hidden');
        $('div#change-toasts').addClass('hidden');
        $('div#change-toasts-title').text('');
    })

    /* change new password btn */
    $('a#save-new-password').on('mousedown', function(){
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
    $('a#save-new-nickname').on('mousedown', function () {
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
    $('a#save-new-email').on('mousedown', function () {
        $('div#account-info').removeClass('hidden')
        $('div#account-change-email').addClass('hidden');

        $('div#change-toasts').removeClass('hidden');
        $('div#change-toasts-title').text('email');

        setTimeout(function(){
            $('div#change-toasts').addClass('hidden');
            $('div#change-toasts-title').text('');
        }, 2000);
    })

    /* add attr or change icon to specific icon: $('#sample').prop('src', './img/check.png');*/
</script>
