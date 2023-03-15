<!-- Header Section -->
<?php
require_once "./inc/header-v1.php";
include_once('./_common.php');
include_once('./_head.sub.php');
$quiz_idx = ifilter("quiz_idx", "", "string");
if($quiz_idx != "") {
    $sql = " select *,FN_CODE('quiz_type',a.quiz_type) quiz_type_name from nan_quiz a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.quiz_idx = '" . $quiz_idx . "'  ";
    $row = sql_fetch($sql);

    $sql = " select *,FN_CODE('question_type',a.question_type) question_type_name from nan_question a left join nan_quiz_data_file b on b.file_idx = a.file_id where a.quiz_idx = '".$quiz_idx."'  ";
    $result = sql_query($sql);
    $count = sql_num_rows($result);
}
?>
<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!---->

<!--  --> 
<div class=" flex flex-col h-screen  mx-[15px] ">
 
    <!-- Progress Bar -->
	<div class="grow-0 flex flex-col mt-[35px] mb-[20px] ">
		<div class="flex flex-row justify-between">
			<div class="flex flex-row items-center ">			
				<div class="font-bold text-3xl">Create content</div> 
			</div> 
		</div> 
	</div>
	<!-- End Progress Bar -->

	<div class="grow flex flex-col justify-start items-center  w-full " > 

		<div class="h-5/6 flex flex-col  w-full gap-[15px]  " id="create-quiz-btn">
			<a href="#" >

                <div class="relative flex rounded-lg justify-center h-[200px] bg-[url('https://tse2.mm.bing.net/th?id=OIP.tBXFplk1QJIsLDGreNd-WAHaEo&pid=Api&P=0')] bg-cover" >
                    <div class="absolute w-full h-full bg-slate-900/50 rounded-lg"> </div>
                    <div onclick="location.href='./create-wiki-content.php'" class=" z-10 block p-6 rounded-lg shadow-lg   max-w-sm flex flex-row justify-center items-center text-white h-full w-full font-bold text-2xl">
                        WIKI 
                    </div>
                </div>

	   	 	</a>
            <a href="#">
                <div class="relative flex rounded-lg justify-center h-[200px] bg-[url('https://tse1.mm.bing.net/th?id=OIP.2Zg7KzzQ9IL1PgzFbSsF0AHaE7&pid=Api&P=0')] bg-cover" >
                    <div class="absolute w-full h-full bg-slate-900/50 rounded-lg"> </div> 
                    <div  onclick="location.href='./multiple-choice-quiz.php'" class=" z-10  block p-6 rounded-lg shadow-lg   max-w-sm flex flex-row justify-center items-center text-white h-full w-full font-bold text-2xl">
                        QUIZ
                    </div>
                </div>
            </a>
			<a href="#">
                <div class="relative flex rounded-lg justify-center h-[200px] bg-[url('https://tse1.mm.bing.net/th?id=OIP.LqYVaSpikSGOXO25SyiYTwHaFc&pid=Api&P=0')] bg-cover" >
                    <div class="absolute w-full h-full bg-slate-900/50 rounded-lg"> </div>
                    <div class=" z-10 block p-6 rounded-lg shadow-lg   max-w-sm flex flex-row justify-center items-center text-white h-full w-full font-bold text-2xl">
                    Drafts
                    </div>
                </div>
            </a>
	   	   
		</div>
	</div>  

</div>

 
 
<!-- Footer Section -->
<?php require_once "./inc/footer.php"; ?>