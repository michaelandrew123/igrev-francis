/*Library Archived*/
$('#library-archived > button').on('touchstart', function(){   
	var data = $(this).attr('rel');  
	
	$('div.thumbnail-panel.show').removeClass('show');
	$('#library-archived > button.bg-sky-500').removeClass('bg-sky-500') 
	$(this).addClass('bg-sky-500'); 
	$('div.library-archived.show').removeClass('show');
	$('.'+data).addClass('show'); 
}) 

$('#adding-archived > a').on('touchstart', function(){ 
	$(this).addClass('bg-sky-500')   
})


/*Library Panel*/
$('#library-panel > button').on('touchstart', function(){  
	var data = $(this).attr('rel'); 
	$('#library-panel > button.bg-sky-500').removeClass('bg-sky-500') 
	$(this).addClass('bg-sky-500'); 
	$('div.archived > div > div div.show').removeClass('show');
	$('#'+data).addClass('show');
})


/* Archived Grid btn */
$('#library-grid').on('touchstart', function(){  
	$('ul.library-panel-section').removeClass('flex flex-row flex-wrap justify-center');
	$('ul.library-panel-section').addClass('grid grid-rows-2 grid-flow-col'); 
})

/* Archived Grid List */
$('#library-list').on('touchstart', function(){ 
	$('ul.library-panel-section').removeClass('grid grid-rows-2 grid-flow-col');
	$('ul.library-panel-section').addClass('flex flex-row flex-wrap justify-center');
})

/* Archived Sort */
$('ul#sort-items > li > a').on('touchstart', function(){
	var splitSort = $(this).text().split("Sort: ");
	$('p.sort-text').text(splitSort[1]);
})


/*Add Archived Thumbnail*/
$('div#add-archived-thumbnail > ul > li > div > img').on('touchstart', function(){
	var data = $(this).attr('rel');
	$('div.add-archived.show').removeClass('show');
	$('div.thumbnail-panel.show').removeClass('show');
	$('.'+data).addClass('show');  

})


/* Heart Icons */
// const icon = document.querySelector("#heart-icon");
// icon.onclick = () => {
// 	icon.classList.toggle("filled");
// };