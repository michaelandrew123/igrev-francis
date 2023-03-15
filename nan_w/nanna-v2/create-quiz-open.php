<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 

<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!----> 
    <div class="grow-0 flex flex-col   mb-[35px] mt-[15px] gap-2">
        <div class="flex flex-row justify-between mx-[15px] ">
            <div class="flex flex-row items-center  justify-between w-full  ">	 
                <div>현재문제번호/총문제번호</div>
                <div class="flex flex-row  gap-2">  
                    <div class="text-gray-400 text-sm">Save Draft</div> 
                    <div class="text-blue-400 text-sm">Submit</div> 
                </div> 
            </div> 
        </div>  
        <hr>
    </div> 
    <!--  --> 
    <div class=" flex flex-col justify-between h-screen  gap-2 mx-[15px]">  
        <div> 
            <div class="  flex flex-col justify-start  w-full ">   
                <!-- <div class="text-xl font-bold">2022 KIIP © step</div> -->
                <div class="text-xl font-bold">Quiz Title - Q#</div> 
                <div class="w-full mt-[35px]"> 
                    <div class="form-check mb-3 "> 
                        <div class="form-check"> 
                            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">Question</label>  
                            <div class="cqo-question mb-2 flex flex-col gap-2 hidden" ></div> 
                            <button class="btn-cqo-add-question dropdown-toggle text-center w-full inline-block w-full  text-gray-500 font-thin  text-4xl leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                +    
                            </button>
                            <ul id="cqo-add-question" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left bg-transparent list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-paddingborder-none" aria-labelledby="dropdownMenuButton1">
                                <li rel="text">
                                    <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-700 hover:bg-blue-300 bg-blue-500  text-white rounded-xl  px-5 mb-2 font-bold " href="#" >
                                        TEXT
                                    </a>
                                </li>        
                                <li rel="image">
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-700 hover:bg-blue-300 bg-blue-500 text-white rounded-xl  px-5 font-bold" href="#" >IMAGE</a>
                                </li>  

                            </ul>  
                        
                        </div>  
                    </div> 
                    <div class="form-check mb-3 ">
                        <div class="form-check">
                            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">Response</label>
                            <textarea  style="resize: none;" class="auto-resize-textarea6 form-control  block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="ft" value="" placeholder="Enter Response"></textarea>
                        </div> 
                    </div>  
                </div> 
            </div>   
        </div>
 
        <div class=" flex flex-row justify-between  mb-5 h-[100px]" id="arrow" >
            <div class="text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer rotate-180" id="arrow-left"  > 
                <img class="w-5 h-5"  src="./img/fast-forward-double-right-arrows-symbol.png" />
            </div>
            <div class="  text-4xl w-10 h-10 flex items-center justify-center font-bold cursor-pointer" id="arrow-right" > 
                <img class="w-5 h-5"  src="./img/fast-forward-double-right-arrows-symbol.png" />
            </div>
        </div> 
    </div>
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

<script>
 
    $('.btn-cqo-add-question').on('mousedown', function(){
        $('#cqo-add-question').css({'display': 'block'})
    }) 
    $('#cqo-add-question > li').on('click', function(){
        var data = $(this).attr('rel'); 
        $('#cqo-add-question').css({'display': 'none'});
        $('.cqo-question').addClass('show');
        // $('.btn-cqo-add-question').addClass('hidden');
        if(data == 'text'){ 
            $(".cqo-question").append('<textarea type="text"  style="resize: none;"  rows="4" cols="50" class="mb-2 form-control  block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="" >  </textarea>'); 
        }else{  
            $(".cqo-question").append('<input type="file" class="mb-2"/>'); 
        }
    })


    let textareas = document.getElementsByClassName("auto-resize-textarea6");
    
    // Loop through textareas and add event listeners as well as other needed css attributes
    for (const textarea of textareas) {
        // Initially set height as otherwise the textarea is not high enough on load
        textarea.style.height = textarea.scrollHeight.toString();
        // Hide scrollbar
        textarea.style.overflowY = 'hidden';
        // Call resize function with "this" context once during initialisation as it's too high otherwise
        resizeTextarea.call(textarea);
        // Add event listener to resize textarea on input
        textarea.addEventListener('input', resizeTextarea, false);
        // Also resize textarea on window resize event binding textarea to be "this"
        window.addEventListener('resize', resizeTextarea.bind(textarea), false);
    }
    function resizeTextarea() {
        // Textareas have default 2px padding and if not set it returns 0px
        let padding = window.getComputedStyle(this).getPropertyValue('padding-bottom');
        // getPropertyValue('padding-bottom') returns "px" at the end it needs to be removed to be added to scrollHeight
        padding = parseInt(padding.replace('px',''));
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    }



</script>