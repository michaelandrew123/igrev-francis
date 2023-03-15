        <div></div>
        
        </div> 
            <div class="flex justify-evenly items-center mt-2  pt-2 pb-2 w-full bg-white fixed bottom-0 left-0" > 
                <div class="bh-icon text-center flex flex-col justify-center items-center">
                    <div class="hr-icon"></div>
                    <div class="hr-icon"></div>
                    <div class="hr-icon"></div> 
                    <b class="text-base">카테고리 </b>
                </div>
                <div class="p-8 rounded-full bg-blue-600 shadow-lg shadow-blue-500/50 text-white relative  -top-8"  data-tooltip="오늘의 복습 시작" title="오늘의 복습 시작">
                    <i class="fa fa-plus absolute text-2xl"></i> 
                </div>
                <a href="./my-page.php"class="bt-profile-icon flex flex-col justify-center items-center hover:text-blue-500/75  <?php if($_SERVER['REQUEST_URI'] == "/anna_main2/my-page.php" ){ echo 'text-blue-500/75';} ?>"  >
                    <i class="fa fa-user-o text-2xl" aria-hidden="true"></i> 
                    <b class="text-base">마이페이지</b>
                </a> 
            </div> 

            
            <?php 
    //echo $_SERVER['REQUEST_URI'];

    // if($_SERVER['REQUEST_URI'] == "/anna_main2/my-page.php" ){
    //     echo "My Page"; 
    // }
?>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        
    </script>

    <script src="./js/index.js"></script>
    </body>
</html>