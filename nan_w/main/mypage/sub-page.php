<!-- Header Section -->
<?php  require_once "./nanna/inc/header.php";?>
<!-- First slide --> 

<div class="mt-6">
 	<div>
		<p id="my-page" class="flex flex-row items-center">  
		  <a href="#" class="w-full inline-flex items-center px-2 py-2.5 text-sm font-medium text-center border border-slate-500   justify-center bg-sky-500">My Paage</a>
		  <a href="#" class="w-full inline-flex items-center px-2 py-2.5 text-sm font-medium text-center border border-slate-500  justify-center ">Help Center</a>
		</p>
	</div>
</div>
<div class="mt-6">
 	<div class="flex flex-row justify-between select-none" id="sub-page-category">
		
		<div class="px-2 text-center " rel="solving">
			<div>4</div>
			<div class="uppercase text-sm">solving</div>
		</div>
		<div class="px-2 text-center" rel="review">
			<div>10</div>
			<div class="uppercase text-sm">review</div>
		</div>
		<div class="px-2 text-center" rel="writing">
			<div>4</div>
			<div class="uppercase text-sm">writing</div>
		</div>
		<div class="px-2 text-center" rel="mine">
			<div>4</div>
			<div class="uppercase text-sm">mine</div>
		</div>
		<div class="px-2 text-center" rel="fav">
			<div>4</div>
			<div class="uppercase text-sm">fav</div>
		</div>
	</div>
</div>

	<div class="hidden show"> 

		<!-- Archived Panel -->  

		<div class=" "> 
			<div class="mt-6 mb-6 flex flex-row justify-between">
				<div class="flex flex-row items-center ">
					<a href="#" class="dropdown-toggle" id="sort-dropdown1" data-bs-toggle="dropdown" aria-expanded="false" >
				 
					<p class="sort-text1 uppercase font-medium cursor-pointer " >Solving</p>
						<ul id="sort-items1" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none font-medium" aria-labelledby="sort-dropdown1" >
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('solving','');">
									solving
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('review','');" href="#">	
									review
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('writing','');" href="#">
									writing
								</a>
					        </li> 
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('mine','');" href="#">
									mine
								</a>
					        </li> 
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('fav','');" href="#">
									fav
								</a>
					        </li> 
				      </ul> 


					</a>  
				</div>
				<div class="flex flex-row items-center gap-2">


                    <div class="flex flex-row items-center">
                        <input
                            type="text"
                            class="
                                  block
                                  w-full
                                  px-2
                                  py-1
                                  text-sm
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border-b border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-b focus:border-blue-600 focus:outline-none
                                "
                                placeholder="search"
                        />
                        <img class="w-4 h-4" src="./nanna/img/magnifying-glass-solid.svg"  />
                    </div>



					<a href="#" class="dropdown-toggle" id="sort-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >

      					
						<img src="./nanna/img/filter.png" class="w-4 h-4" />

						<ul id="sort-items2" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none font-medium" aria-labelledby="sort-dropdown" >
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('','Recent');">
									Recent
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('','Past');" href="#">	
									Past
								</a>
					        </li>
					        <li>
								<a class="dropdown-item text-sm py-2 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 uppercase" onclick="load_page('','popular');" href="#">
									popular
								</a>
					        </li> 
				      </ul> 
					</a>  

					<p class="sort-text2 uppercase font-medium" >Recent</p>
				</div>
			</div>
			<div> 
 
				<!-- Flex wrap to get column layout List: flex flex-row flex-wrap -->
				<!-- Grid to get the layout to Grid: grid grid-rows-4 grid-flow-col --> 
				<div  class="hidden show" id="yetview">

					<ul class="library-panel-section grid grid-rows-4 grid-flow-col gap-2 overflow-x-auto min-[639px]:overflow-x-auto  ">   
					  	<li >
							<img class="w-full" src="https://thumbnail.imgbin.com/9/18/6/imgbin-page-page-eqEzfq0Wp9LUg5dSNaPraVN1v_t.jpg" alt="Mountain">
							<div class="px-0 py-2">
								<div class=" mb-0">Mountain</div>
								<p class="text-gray-700 text-base">
									Wiki1
								</p>
							</div> 
					    </li>

					</ul> 
				</div> 
 

			</div>  
		</div>   



	</div>

 




 <!-- Fixed Menu --> 
<?php require_once "./nanna/inc/fixed-menu.php"; ?>
 
<!-- Footer Section -->
<?php require_once "./nanna/inc/footer.php"; ?>

<script>
    
	window.onload=function(){

		filter_ty ='Recent';
		page_ty ='solving';

		console.log(page_ty);
		console.log(filter_ty);

        $.ajax({
            url: g5_url+"/main/mypage/ajaxProc.php",
            type: "POST",
            data: {
				"type": 'mypage_sub',
				"page_ty": page_ty,
				"filter_ty": filter_ty
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function (data)
            {
				console.log(data);
                if (data.code == "200") //200 코드 성공
                {
					
                    $("#yetview > ul").html(data.content);

					// document.getElementById("solving_cnt").innerHTML = data.solving_cnt;
					// document.getElementById("review_cnt").innerHTML = data.review_cnt;
					// document.getElementById("writing_cnt").innerHTML = data.writing_cnt;
					// document.getElementById("mine_cnt").innerHTML = data.mine_cnt;
					// document.getElementById("fav_cnt").innerHTML = data.fav_cnt;

                }else{ //200 제외 에러
                    alert(data.msg);
                    return false;
                }
            }
        });
	}


	function load_page(type1, type2){

		if(type1 !='')
			page_ty = type1;

		if(type2 !='')
			filter_ty = type2;

		console.log(page_ty);
		console.log(filter_ty);

		$.ajax({
            url: g5_url+"/main/mypage/ajaxProc.php",
            type: "POST",
            data: {
                "type": 'mypage_sub',
				"page_ty": page_ty,
				"filter_ty": filter_ty
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function (data)
            {
				console.log(data.content);
                if (data.code == "200") //200 코드 성공
                {
					
                    $("#yetview > ul").html(data.content);

					// document.getElementById("solving_cnt").innerHTML = data.solving_cnt;
					// document.getElementById("review_cnt").innerHTML = data.review_cnt;
					// document.getElementById("writing_cnt").innerHTML = data.writing_cnt;
					// document.getElementById("mine_cnt").innerHTML = data.mine_cnt;
					// document.getElementById("fav_cnt").innerHTML = data.fav_cnt;

                }else{ //200 제외 에러
                    alert(data.msg);
                    return false;
                }
            }
        });

	}



    $('#sub-page-category > div').on('touchstart click', function () {
        var data = $(this).attr('rel');
        $('#sub-page-category > div').removeClass('bg-sky-500');

        $('p.sort-text1').text(data);


        $(this).addClass('bg-sky-500');
     //   console.log($(this).text());
    })


    /* sub page */
    $('ul#sort-items1 > li > a').on('touchstart', function(){
        $('p.sort-text1').text($(this).text());
    })


    /* sub page */
    $('ul#sort-items2 > li > a').on('touchstart', function(){
        $('p.sort-text2').text($(this).text());
    })




</script>

