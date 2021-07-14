(function($) {
	'use strict';
	
// 	Accessibility Hack
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	
	
/*
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	
	     //>=, not <=
	    if (scroll >= 10) {
	        //clearHeader, not clearheader - caps H
	        $("header.header").addClass("scrolled");
	        
	    } else {
	        $("header.header").removeClass("scrolled");
	    }
	});
*/
	
// 	Fixed Header Mobile Hack
	$(document).on('click', 'a#menu-toggle', function(){
		
		if ( $(this).hasClass('clicked') ) {
			$(this).removeClass('clicked');
			$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		
		} else {
		
			$(this).addClass('clicked');
			$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
		
		}
		
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('a#menu-toggle').removeClass('clicked');
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
// 	Block Hacks
	$('.wp-block-button__link').addClass('button');
	
})(jQuery);