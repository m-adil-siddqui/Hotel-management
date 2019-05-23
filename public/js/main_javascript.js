;(function(){
	var animation = function(){
		$(".animate").mouseenter(function(){
			var $this = $(this);
			    $this
			         .addClass('animated pulse');
		}).mouseleave(function(){
			var $this = $(this);
			    $this
			         .removeClass('animated pulse');
		});
	}

	//go to top
	
	let goToTop = function(){

		$(".go-to-top").on('click', function(){
		
			$('html, body').animate({
				scrollTop:0},1000);
			return false;
		});

		$(window).scroll(function(){
			if( $(this).scrollTop() > 200 ){
				
				$('.gotop').css('display', 'block');
			}else{
				$('.gotop').css('display', 'none');
			}
		})
	}

	$(function(){
		animation();
		goToTop();
	})
}());

var tabImgs = document.querySelectorAll('#our-team .resp-tabs-list img');
var tabPanel = document.querySelectorAll('#our-team .team-content');
// console.log(tabImgs);
// alert(tabPanel);
function showPanel(panelIndex){

   tabImgs.forEach(function(node){
       node.style.opacity = "";
   });
   tabImgs[panelIndex].style.opacity ="0.7"; 

   tabPanel.forEach(function(node){
       node.style.display = "none";
   });
   tabPanel[panelIndex].style.display = "inline-block"; 
}

 showPanel(0);
