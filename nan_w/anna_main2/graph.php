<?php include('./layouts/header.php') ?>
            <div>
                <div class="text-center mt-4 mb-4 pt-3 pb-3 " >  
                    기억 단계 진행표
                </div>  
                <div class="flex flex-row justify-evenly items-end  mb-10 mt-10 h-32">
                    <div class="bar1 rounded-tl-3xl rounded-tr-3xl bg-gray-500/50"> </div>
                    <div class="bar2 rounded-tl-3xl rounded-tr-3xl bg-blue-600 shadow-lg shadow-blue-500/50"> </div>
                    <div class="bar3 rounded-tl-3xl rounded-tr-3xl bg-gray-500/50"> </div>
                    <div class="bar4 rounded-tl-3xl rounded-tr-3xl bg-gray-500/50"> </div>
                    <div class="bar5 rounded-tl-3xl rounded-tr-3xl bg-blue-600 shadow-lg shadow-blue-500/50"> </div>
                    <div class="bar6 rounded-tl-3xl rounded-tr-3xl bg-gray-500/50"> </div>
                    <div class="bar7 rounded-tl-3xl rounded-tr-3xl bg-gray-500/50"> </div> 

                    
                </div>  
                
                <div class="mt-20 mb-20">
                    <div class="timeline right-arrow">
                        <div class="container container-1"><span>감각기억</span></div>
                        <div class="container container-2"><span>감각기억</span></div>
                        <div class="container container-3"><span>감각기억</span></div>
                    </div> 
                </div>
            </div>

            
        </div> 

        <div class="flex flex-col items-center justify-evenly w-4/5">
 
            <div class="flex flex-row items-center justify-evenly w-full">
                <div class="text-center">
                    <div>오늘의 복습목표</div>
                    <div><strong> <span class="text-red-500 text-2xl">2</span> / 16</strong></div>
                </div>
                <div class="h-full" style="border: 1px solid gray;"></div>
                <div class="text-center">
                    <div>예상 학습 완료일</div>
                    <div><strong>2022.12.12</strong></div>
                </div>

            </div>  
            <div class="text-center bg-white  p-5 pointer w-full mt-10 " title="지금 복습하면 잊어버리지 않아요!">오늘의 복습시작</div> 
        </div>
        
        

<?php include('./layouts/footer.php') ?>