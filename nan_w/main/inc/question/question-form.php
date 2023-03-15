<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!---->

<!--  --> 
<div class="pt-6 flex flex-col h-screen  gap-2 px-5 ">
	<!-- Progress Bar -->
	<div class="grow-0 flex flex-col gap-2">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center gap-2">			
				<div class="font-bold text-3xl">문제형식</div> 
			</div> 
		</div>
		<hr>
	</div>
    
    <div class="pt-10"></div>
	<!-- End Progress Bar -->

	<div class="grow flex flex-col justify-start items-center  w-full " > 

		<div class="h-5/6 flex flex-col justify-evenly w-full gap-4" id="create-quiz-btn">
			<a href="./create-quiz-multiple.php?quiz_idx=<?=$quiz_idx?>">

                <div class="rounded-lg relative flex justify-center h-[200px] bg-[url('https://tse2.mm.bing.net/th?id=OIP.tBXFplk1QJIsLDGreNd-WAHaEo&pid=Api&P=0')] bg-cover" >
                    <div class="absolute w-full h-full bg-slate-900/50 rounded-lg">

                    </div>
                    <div class="z-10 block p-6 rounded-lg shadow-lg   max-w-sm flex flex-row justify-center items-center text-white h-full w-full font-bold text-2xl">
                        객관식
                    </div>
                </div>

	   	 	</a>

            <a href="./create-quiz-open.php?quiz_idx=<?=$quiz_idx?>">
                <div class="rounded-lg relative flex justify-center h-[200px] bg-[url('https://tse1.mm.bing.net/th?id=OIP.2Zg7KzzQ9IL1PgzFbSsF0AHaE7&pid=Api&P=0')] bg-cover" >
                    <div class="absolute w-full h-full bg-slate-900/50 rounded-lg">

                    </div>
                    <div class=" z-10 block p-6 rounded-lg shadow-lg   max-w-sm flex flex-row justify-center items-center text-white h-full w-full font-bold text-2xl">
                        주관식
                    </div>

                </div>
            </a> 
	   	   
		</div>
	</div>  

</div>

 
 