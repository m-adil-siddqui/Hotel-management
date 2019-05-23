$(document).ready(function() {


    $(".flexslider li.flex-nav-prev").remove();
    

	$('.icon-search').on('click', function(){
		 
		$(".search_form").slideToggle("slow");
	});


    
    
    $(window).resize(function() {
     
    if ($(window).width() < 768) {
    	 
     $('#collapsenavbar').addClass('collapse');
    }
    else {$('#collapsenavbar').removeClass('collapse');}
    });
	// var $window = $(window).width();
	// console.log("hi"+$window);
	// if($window < 768)
	// {
	// 	$("#collapsenavbar").addClass("colps");
	// }
	// else{
	// 	$("#collapsenavbar").removeClass("colps");
	// }
    
   


  


});