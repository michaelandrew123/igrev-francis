<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 

<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg "> 
    

    <div class="grow-0 flex flex-col   mb-[35px] mt-[15px] gap-2">
        <div class="flex flex-row justify-between mx-[15px] ">
            <div class="flex flex-row items-center  justify-between w-full  ">			
                <div class=" text-2xl"> Create Quiz </div> 	 
            </div> 
        </div>  
        <hr>
    </div> 
    <div class=" flex flex-col justify-between  gap-2 mx-[15px]">  
        <div> 
            <div class="  flex flex-col w-full ">    
                <div class="flex flex-col justify-start  w-full">
                    <div class="text-xl font-bold">Quiz Title</div> 
                </div>  
                <div class="w-full mt-[35px]"> 
                    <div class="form-check mb-3 "> 
                        <div class="form-check"> 
                            <div class="flex justify-center">
                                <div class="w-full">
                                    <div class="dropdown relative ">
                                        <textarea  style="resize: none;" class="auto-resize-textarea7 form-control block w-full px-3 py-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0" placeholder="Text Input" ></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div>  
                    </div> 
                    <div class="form-check mb-3 flex flex-col gap-y-6">
                        <div class="form-check "> 
                            <a href="./select-quiz-type.php">
                                <div class="mb-2 flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-out border border-gray-300"  >
                                    Enter problem
                                </div>
                            </a>
                        </div> 
                        <div>
                          <div class="form-check"> 
                              <div class="mb-2 flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300"  >
                                  Save
                              </div>
                          </div> 
                          <div class="form-check"> 
                              <div class="mb-2 flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300"  >
                                  Cancel
                              </div>
                          </div> 
                        </div>
                    </div> 
                </div> 
            </div>  
        </div>
    </div> 

    
    <!-- <div class=" flex flex-row justify-between  mx-[15px] mt-72" id="arrow" >
        <div class="text-[18px] px-4 py-2  flex items-center justify-center font-bold cursor-pointer  border border-gray-300" id="arrow-left"  > 
        Save
        </div>
        <div class="text-[18px] px-4 py-2  flex items-center justify-center font-bold cursor-pointer  border border-gray-300" id="arrow-right" >
        Cancel
        </div>
    </div>   -->


<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
<script>

    let textareas = document.getElementsByClassName("auto-resize-textarea7");
    
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