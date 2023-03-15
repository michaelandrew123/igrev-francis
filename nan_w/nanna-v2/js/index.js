
var wis = window.innerHeight;
var dh = $(document).height();
var bodyH = $('body').height();


// /*Library Archived*/
// $('#library-archived > button').on('touchstart', function(){   
// 	var data = $(this).attr('rel');
// 	$('div.thumbnail-panel.show').removeClass('show');
// 	$('#library-archived > button.bg-sky-500').removeClass('bg-sky-500') 
// 	$(this).addClass('bg-sky-500'); 
// 	$('div.library-archived.show').removeClass('show');
// 	$('.'+data).addClass('show'); 
// }) 

// $('#adding-archived > a').on('touchstart', function(){ 
// 	$(this).addClass('bg-sky-500')   
// })


// /*Library Panel*/
// $('#library-panel > button').on('touchstart', function(){
// 	var data = $(this).attr('rel'); 
// 	$('#library-panel > button.bg-sky-500').removeClass('bg-sky-500') 
// 	$(this).addClass('bg-sky-500'); 
// 	$('div.archived > div > div div.show').removeClass('show');
// 	$('#'+data).addClass('show');
// })


// /* Archived Grid btn */
// $('#library-grid').on('touchstart', function(){  
// 	$('ul.library-panel-section').removeClass('flex flex-row flex-wrap justify-center');
// 	$('ul.library-panel-section').addClass('grid grid-rows-2 grid-flow-col'); 
// })

// /* Archived Grid List */
// $('#library-list').on('touchstart', function(){ 
// 	$('ul.library-panel-section').removeClass('grid grid-rows-2 grid-flow-col');
// 	$('ul.library-panel-section').addClass('flex flex-row flex-wrap justify-center');
// })

// /* Archived Sort */
// $('ul#sort-items > li > a').on('touchstart', function(){
// 	var splitSort = $(this).text().split("Sort: ");
// 	$('p.sort-text').text(splitSort[1]);
// })


// /*Add Archived Thumbnail*/
// $('div#add-archived-thumbnail > ul > li > div > img').on('touchstart', function(){
//     var data = $(this).attr('rel');
// 	$('div.add-archived.show').removeClass('show');
// 	$('div.thumbnail-panel.show').removeClass('show');
// 	$('.'+data).addClass('show');  

// })



// $('p#my-page > a').on('touchstart click', function(){
// 	console.log('my page')
// 	$('p#my-page > a.bg-sky-500'). removeClass('bg-sky-500');
// 	$(this).addClass('bg-sky-500');
// })

//
//
// $('body').on('touchmove', function() {
//
//     var wis = window.innerHeight + window.scrollY;
//     var dh = $(document).height();
//
//     //
//     // console.log('inner height: '+ (window.innerHeight - window.scrollY) );
//     // console.log('inner scrolly: '+window.scrollY );
//     // console.log('body: '+ $('body').height());
//     if ((window.innerHeight - window.scrollY) >= $('body').height()) {
//         $('#footer-menu').addClass('footer-fixed');
//     }else{
//         $('#footer-menu').removeClass('footer-fixed');
//
//     }
// });

//
// console.log("window height : " + $( window ).height());
//
// console.log("body height : " + $('body').height());




$('#archived-1').addClass('show');
$('.archived-2 > div').addClass('show');
$('#archived > div').on('mousedown', function(){
	var data = $(this).attr('rel');
 
	$('#archived-1, #archived-2').removeClass('show');
	$('#'+data).addClass('show');
	$('.archive-active').removeClass('archive-active');
	$('.'+data).addClass('archive-active');
	


	// $('.archive-not-active > div.hidden').addClass('show');


	if(data == 'archived-1'){ 
		$('.archived-2 > div').addClass('show');
		$('.archived-1 > div').removeClass('show');
	}else{ 
		$('.archived-2 > div').removeClass('show');
		$('.archived-1 > div').addClass('show');
	} 



	// if($('.page').height() > 0){
    //     dh = $('.page').height() + $('nav').height();
	// }

});

$('.user-library-icon').on('mousedown', function(){ 
	$('.user-library-popup').toggleClass('show')
})

$('.user-home-icon').on('mousedown', function(){ 
	$('.user-home-popup').toggleClass('show')
})

$('.user-mypage-icon').on('mousedown', function(){ 
	$('.user-mypage-popup').toggleClass('show')
})

var footerFixedH = $('#footer-menu').height(); //not used
 
$( window ).scroll(function() {
     wisT = wis + window.scrollY; 
	if($('.page').height() > 0){
        dh = $('.page').height() + $('nav').height();
	} 
    if ((wisT + 1) < dh) {
        $('#footer-menu').addClass('footer-fixed');
    }else{
        $('#footer-menu').removeClass('footer-fixed'); 
    }
});

