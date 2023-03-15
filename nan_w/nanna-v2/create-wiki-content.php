<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 

<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!---->


	<!-- Progress Bar -->
    <div class="grow-0 flex flex-col   mb-[35px] mt-[15px] gap-2">
        <div class="flex flex-row justify-between mx-[15px] ">
			<div class="flex flex-row items-center gap-2 justify-between w-full  ">			
				<div class=" text-2xl"> < </div> 	
				<div class="flex flex-row gap-2"> 
                    <div class="text-gray-400 text-sm">Save Draft</div> 
                    <div class="text-blue-400 text-sm">Submit</div> 
                </div> 
			</div> 
		</div> 
		<hr>
	</div>
	<!-- End Progress Bar -->


<!--  --> 
<div class="flex flex-col h-screen  gap-2 mx-[15px]"> 
	<div class="grow flex flex-col justify-start  gap-3  w-full "> 

		<div class=" ">  
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700">WIKI Title</label>
            <textarea  style="resize: none;" class="auto-resize-textarea2 form-control  block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="wiki"  ></textarea>
		</div>  
        <div>

        <label for="wiki" class="form-label inline-block mb-2 text-gray-700">Upload Thumbnail</label>
            <input type="file"  />
        </div>

<!-- 
        <div>
    <label for="user_audio" class="customform-control">Browse Computer</label>
    <input type='file' placeholder="Browse computer" id="user_audio"> <span id='val'></span>
 <span id='button'>Select File</span>
</div> -->
 
		<div class=" ">  
            <label for="wiki" class="form-label inline-block mb-2 text-gray-700" >Summary</label> 
            <textarea  style="resize: none;"  rows="10" cols="50" class="auto-resize-textarea1 form-control  block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  placeholder="ª¨ªª KIIP ©단계 평가문제">
Don't be late.
Stay away from alcohol.
I don't listen like a ten-year-old.
                
From one to ten sounds for you
Obvious nagging to you who don't listen to me
Let's stop, let's stop
I don't have time just to love

Talk with your heart, not your head
A story you can't tell even if you don't like it
Let's stop, let's stop
I can only hear your nagging
                </textarea> 
            <div class="border border-gray-400  hidden ">
                <!-- Textarea -->
                <div class="font-bold text-gray-400">Don't be late.</div>
                <div class="font-bold text-gray-400">Stay away from alcohol.</div>
                <div class="font-bold text-gray-400">I don't listen like a ten-year-old.</div>
                <div class="font-bold text-gray-400">I really just laughed</div>
                
                <br>
                <div>  
                    <img src="https://www.wowkeren.com/display/images/photo/2021/03/02/00354542.jpg" />
                </div> 
            
                <br>
            
                <div class="font-bold text-gray-400">From one to ten sounds for you</div>
                <div class="font-bold text-gray-400">Obvious nagging to you who don't listen to me</div>
                <div class="font-bold text-gray-400">Let's stop, let's stop</div>
                <div class="font-bold text-gray-400">I don't have time just to love</div>

                <br>
                <div class="font-bold text-gray-400">Talk with your heart, not your head</div>
                <div class="font-bold text-gray-400">A story you can't tell even if you don't like it</div>
                <div class="font-bold text-gray-400">Let's stop, let's stop</div>
                <div class="font-bold text-gray-400">I can only hear your nagging</div>
            
            </div>
        </div>
		<div class=" ">  
            <p><strong>Solution with span:</strong> <span class="textarea" role="textbox" contenteditable></span></p> 
            <textarea  style="resize: none;"  class=" auto-resize-textarea form-control  block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="KIIP ©단계 평가문제" ></textarea> 
		</div>
	</div>  

</div>

 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>
<script>

    // arrowIcons.forEach(icon => {
    //     icon.addEventListener("click", () => {
    //         let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value 
    //         // if clicked icon is left, reduce width value from the carousel scroll left else add to it
    //         carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
            
    //         setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    //     });
    // });
    



    let textareas = document.getElementsByClassName("auto-resize-textarea");
    
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



    let textareas1 = document.getElementsByClassName("auto-resize-textarea1");
    
    // Loop through textareas and add event listeners as well as other needed css attributes
    for (const textarea of textareas1) {
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

    let textareas2 = document.getElementsByClassName("auto-resize-textarea2");
    
    // Loop through textareas and add event listeners as well as other needed css attributes
    for (const textarea of textareas2) {
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
    // function resizeTextarea() {
    //     // Textareas have default 2px padding and if not set it returns 0px
    //     let padding = window.getComputedStyle(this).getPropertyValue('padding-bottom');
    //     // getPropertyValue('padding-bottom') returns "px" at the end it needs to be removed to be added to scrollHeight
    //     padding = parseInt(padding.replace('px',''));
    //     this.style.height = "auto";
    //     this.style.height = (this.scrollHeight) + "px";
    // }

</script>