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
	

// Three Column Stats Count Up
	if ($('.three_column_stats').length) {
		
		$('.three_column_stats').each(function(i) {
		
			var $num1 = site_js.stats_parent.stat_1.number;
			var $num2 = site_js.stats_parent.stat_2.number;
			var $num3 = site_js.stats_parent.stat_3.number;
			
			var counter = { var: 0 };
			
			var $value1 = document.getElementById("set-1");
			var $value2 = document.getElementById("set-2");
			var $value3 = document.getElementById("set-3");
			
			
/*
			$('.three_column_stats .number').each(function(index, el) {
				
				gsap.fromTo(this, .5, {y: 100, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: 'back.out(1.7)',
					scrollTrigger: {
					    trigger: '.three_column_stats',
					    start: 'top 75%',
						toggleActions: 'play none play reverse',
					}
				});			
				
			});
*/
						
			gsap.to(counter, 3, {
				var: $num1,
				onUpdate: function() {
				$value1.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.three_column_stats',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
	
			var tal2 = document.getElementById("set-2");
			
			gsap.to(counter, 3, {
				var: $num2,
				onUpdate: function() {
				$value2.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.three_column_stats',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
			
			var tal3 = document.getElementById("set-3");
			
			gsap.to(counter, 3, {
				var: $num3,
				onUpdate: function() {
				$value3.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.three_column_stats',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
	
						
			function numberWithCommas(x) {
				return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			}
		
		});
		
	}
	
// 	Sliders
	if( $('.utility-slider').length ) {
	
		
		$('.utility-slider').each( function(i) {
			
			var sliderTimer = 5000;
			var $imageSlider = $(this).find('.s-slider');
			var sliderProgress = $(this).find('.slider-progress');
			var $navLeft = $(this).find('.slider-nav-wrap').find('.slick-prev');
			var $navRight = $(this).find('.slider-nav-wrap').find('.slick-next');

			$imageSlider.slick({
				autoplay: false,
				autoplaySpeed: sliderTimer,
				speed: 1000,
				arrows: true,
				dots: false,
				adaptiveHeight: false,
				pauseOnFocus: false,
				pauseOnHover: false,
				prevArrow: $navLeft,
				nextArrow: $navRight,
			});
		
			if (($(this).find('.slick-slide').length > 1)) {	
				
				function progressBar(){
					sliderProgress.find('span').removeAttr('style');
					sliderProgress.find('span').removeClass('active');
					setTimeout(function(){
						sliderProgress.find('span').css('transition-duration', (sliderTimer/950)+'s').addClass('active');
					}, 10);
				}
				progressBar();
				$imageSlider.on('beforeChange', function(e, slick) {
					progressBar();
				});
			
			}
			
		});	
	  
	}
	

/*
	if ( $('.fade-in-up').length) {
		
		$('.fade-in-up').each(function(index, el) {
			
			gsap.fromTo(this, .5, {y: 100, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: 'back.out(1.7)',
				scrollTrigger: {
				    trigger: this,
				    start: 'top 75%',
					endTrigger: this,
					end: 'bottom 0%',
					toggleActions: 'play none play reverse',
				}
			});			
			
		});
		
	}	
*/
	
})(jQuery);