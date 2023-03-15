<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 

<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!----> 
    <div class="grow-0 flex flex-col  mb-[35px] mt-[15px] gap-2">
		<div class="flex flex-row justify-between mx-[15px] ">
			<div class="flex flex-row items-center justify-between w-full  ">			
				<div class=" text-2xl"> < </div> 	
                <div class="flex flex-row  gap-2"> 
                    <div class="text-gray-400 text-sm">Save Draft</div> 
                    <div class="text-blue-400 text-sm">Submit</div> 
                </div> 
			</div> 
		</div> 
		<hr>
	</div>  
<!--  --> 
<div class="flex flex-col h-screen gap-2 mx-[15px]">  
	<div class="grow flex flex-col justify-start   w-full ">  
        <div class="text-xl font-bold">Open-Ended Quiz</div> 
		<div class="mb-3  mt-[35px]">  
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700 font-bold  text-sm">Quiz Title</label>
            <textarea type="text" style="resize: none;" class="auto-resize-textarea5 form-control  block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  placeholder="ª¨ªª KIIP ©단계 평가문제">2022 KIIP © Step Assessment Problem</textarea>
		</div>   
        <div class="w-full"> 
            <div class="form-check"> 
                <div class="text-center w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500"  >
                    add quiz
                </div> 
            </div>  
        </div>   
    </div> 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>

<script> 
    let textareas = document.getElementsByClassName("auto-resize-textarea5");
    
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