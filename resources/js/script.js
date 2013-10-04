var $j  = jQuery.noConflict();

$j(document).ready(function(){
							
	$j("#ei-slider").eislideshow({
					titlespeed	: 1200,
					autoplay	: true,
					//easing		: "easeOutExpo",
					//titleeasing	: "easeOutExpo",
					slideshow_interval	: 4000,
					speed			: 700
});
							
				
				$j("#mainMenu ul li").mouseover(function(){
										
									$j(this).find("#dw").stop(true,false).fadeIn(300);
										
				});
				
				$j("#mainMenu ul li").mouseout(function(){
											  
											 $j(this).find("#dw").stop(true,false).fadeOut(150);
											  
											  
				});
				
				
				function getRandomValue(){
				$jv1 = Math.round(Math.random()*10);
				$jv2 = Math.round(Math.random()*10);
				
				$j("#v1").text($jv1);
				$j("#v2").text($jv2);
				
				$j("#v3").val($jv2 + $jv1);
				
				
				
				
				}
					
				getRandomValue();
				
							
	});// end of jquery//




