<!-- Header Section -->
<?php  require_once "./inc/header-v1.php"; ?> 

<!-- For footer last div --> 
<div id="body-f-screen" class="flex flex-col h-screen shadow-lg ">
<!----> 
    <div class="grow-0 flex flex-col  mb-[35px] mt-[15px] gap-2  w-full">
        <div class="flex flex-row justify-between mx-[15px]">
            <div class="flex flex-row items-center gap-2 justify-between w-full  ">		  
                <div>현재문제번호/총문제번호</div>
                <div class="flex flex-row gap-2"> 
                    <div class="text-gray-400 text-sm">Save Draft</div> 
                    <div class="text-blue-400 text-sm">Submit</div> 
                </div> 
            </div> 
        </div> 
        <hr>
    </div> 

    <!--  --> 
    <div class="flex flex-col justify-between h-screen  gap-2 mx-[15px]">  
        <div> 
            <div class="  flex flex-col justify-start   w-full ">  
                <div class="text-xl font-bold">Quiz Title - Q#</div> 
                <div class="mb-3  mt-[35px]">  
                    <label for="wiki" class="text-sm font-bold form-label inline-block mb-2">Question</label>  
                    <div class="flex justify-center">
                        <div class="w-full">
                            <div class="dropdown relative cqm-question"  >



                                <button class="dropdown-toggle text-center w-full inline-block w-full  text-gray-500 font-thin  text-4xl leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300" type="button" id="cqm-question" data-bs-toggle="dropdown" aria-expanded="false" >

                                    +   
                                
                                </button>

                                <ul id="cqm-question-drpdwn" class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left bg-transparent list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none" aria-labelledby="cqm-question">
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
                    </div> 
                </div>  

                <div class="w-full "> 
                    <label for="wiki" class="text-sm font-bold form-label inline-block mb-2 ">Choices</label>  


                    <div class="cqm-choices flex flex-col gap-3 mb-3" id="cqm-choices-sort">



                    <!-- <ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
</ul> -->


                        <!-- <div class="form-check flex flex-row justify-between items-center gap-2">  
                            <img class="w-5 h-5 cursor-pointer" src="./img/trash.png"/> 
                            <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500"  >
                 
                                Your Text
                            </div>  
                            <img class="w-5 h-5 cursor-pointer cqm-check" src="./img/check.png"/> 
                        </div>    -->
                        <!-- <div class="form-check mb-3 flex flex-row justify-between items-center gap-2">  
                            <img class="w-5 h-5 cursor-pointer" src="./img/trash.png"/> 
                            <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500"  >
                        
                                Your Text
                            </div>  
                            <img class="w-5 h-5 cursor-pointer" src="./img/negative.png"/> 
                        </div>   
                        <div class="form-check mb-3 flex flex-row justify-between items-center gap-2">  
                            <img class="w-5 h-5 cursor-pointer" src="./img/trash.png"/> 
                            <div class="flex flex-row justify-center items-center gap-2  w-full inline-block px-6 py-4 text-blue-500 font-medium text-xs leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-blue-500"  >
                          
                                Your Text
                            </div>  
                            <img class="w-5 h-5 cursor-pointer" src="./img/negative.png"/> 
                        </div>    -->
                    </div>
 
                    <div class="form-check mb-3 flex flex-row justify-between items-center gap-2 cqm-choices-drpdwn"> 
                        <img class="w-5 h-5 cursor-pointer invisible" src="./img/trash.png"/> 
                        <div class="relative cursor-pointer text-center w-full inline-block px-6  text-gray-500 font-thin  text-4xl leading-tight uppercase rounded  transition duration-150 ease-in-ou border border-gray-300"  id="cqm-choices"  >
                            +
                            
                            <ul id="cqm-choices-drpdwn" style="display: none" class="dropdown-menu   min-w-max left-0 absolute  bg-white text-base z-50 float-left bg-transparent list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-paddingborder-none"  >
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
                        <img class="w-5 h-5 cursor-pointer invisible" src="./img/negative.png"/> 
                    </div>  
                </div>  
            </div>   
        </div>
 
        <div class="flex flex-row justify-between mb-5 h-[100px]" id="arrow" >
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


    $('#cqm-question').on('mousedown', function(){
        $('#cqm-question-drpdwn').css({'display': 'block'})
    })
    $('#cqm-question-drpdwn > li').on('mousedown', function(){
        $('#cqm-question-drpdwn').css({'display': 'none'})
        var data = $(this).attr('rel'); 
        $('#cqm-question').addClass('hidden');
        if(data == 'text'){
            $(".cqm-question").append('<textarea type="text" rows="4" cols="50" class="form-control  block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="" ></textarea>'); 
        }else{ 
            $(".cqm-question").append('<input type="file" />'); 
        }
    })
    $('#cqm-choices').on('mousedown', function(){ 
        $('#cqm-choices-drpdwn').css({'display': 'block'})  
    });  
var i = 0;
    $('ul#cqm-choices-drpdwn > li').on('mousedown', function(e){
        $('#cqm-choices > ul#cqm-choices-drpdwn').css({'display': 'none'}) 

        var data = $(this).attr('rel');   

        if(data == 'text'){
            i++;
            $(".cqm-choices").append('<div class="relative form-check flex flex-row justify-between items-center gap-2 trash-'+i+' "  >   <img class="w-5 h-5 cursor-pointer trash_" rel="trash-'+i+'" src="./img/trash.png"/> <img class="w-5 h-5 cursor-pointer  absolute left-[35px]"   src="./img/drag.png"/>  <input type="text" class="cqm-choices_ form-control block w-full px-3 py-3 pl-[35px] text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-non enter-cqm-choices " />  <img class="w-5 h-5 cursor-pointer hidden show cqm-check cqm-check-'+i+'" rel="'+i+'" src="./img/check.png"/> <img class="w-5 h-5 cursor-pointer cqm-negative hidden cqm-negative-'+i+'" rel="'+i+'" src="./img/negative.png"/> </div>');

            // $('#cqm-choices-drpdwn').removeClass('show')  
            // <input type="text" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-non enter-cqm-choices" placeholder="Example label" />
            //$('.cqm-choices-drpdwn').addClass('hidden')
        }
    }); 


    $(document).on('mousedown', '.cqm-check', function(){
        var data = $(this).attr('rel'); 
        $('.cqm-check-' + data).removeClass('show') 
        $('.cqm-negative-' + data).addClass('show')  
    });


    $(document).on('mousedown', '.cqm-negative', function(){
        var data = $(this).attr('rel');  
        $('.cqm-check-' + data).addClass('show')  
        $('.cqm-negative-' + data).removeClass('show')  
    });

    $(document).on('mousedown', '.trash_', function(){
        
        var data = $(this).attr('rel');  

        console.log(data);
        $('.'+data).remove(); 
    });


    // $( "#sortable" ).sortable();

$( "#cqm-choices-sort" ).on('touchstart mousedown', function(){
    $(this).sortable();
})


// mouseProto._mouseInit = function () {

// var self = this;

// // Delegate the touch handlers to the widget's element
// self.element
//     .bind('taphold', $.proxy(self, '_touchStart'))   // IMPORTANT!MOD FOR TAPHOLD TO START SORTABLE
//     .bind('touchmove', $.proxy(self, '_touchMove'))
//     .bind('touchend', $.proxy(self, '_touchEnd'));

// // Call the original $.ui.mouse init method
// _mouseInit.call(self);
// };  





    // $('.enter-cqm-choices').on('mouseenter mouseleave', function(){
    //     console.log("Hello world");
    // })

    // $('.enter-cqm-choices').on('keypress',function(e){
    //      var p = e.which;
    //      if(p==13){
    //          alert('enter was pressed');
    //      }
    //  });

     
    // $('.enter-cqm-choices').on('click', function (e) {

    //     console.log("console log");
    // //         console.log("Hello world sss");
    // //    // var key = e.which;
    // //     if (e.key === 'Enter' || e.keyCode === 13) {
    // //         // Do something
    // //         console.log("Hello world");
    // //     }
    // });
</script>