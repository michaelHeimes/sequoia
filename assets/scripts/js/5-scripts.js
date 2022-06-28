(function($) {
	'use strict';
	
// 	Accessibility Hack
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});
	
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
	
// 	Utility Sliders
	if( $('.utility-slider').length ) {
	
		
		$('.utility-slider').each( function(i) {
			
			var sliderTimer = 5000;
			var $imageSlider = $(this).find('.s-slider');
			var sliderProgress = $(this).find('.slider-progress');
			var $navLeft = $(this).find('.slider-nav-wrap').find('.slick-prev');
			var $navRight = $(this).find('.slider-nav-wrap').find('.slick-next');

			$imageSlider.slick({
				autoplay: true,
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

// 	Overflowing Card Sliders
	if( $('.overflowing-card-slider').length ) {
	
		
		$('.overflowing-card-slider').each( function(i) {
			
			var sliderTimer = 5000;
			var $imageSlider = $(this).find('.oc-slider');
			var $navLeft = $(this).find('.slider-nav-wrap').find('.slick-prev');
			var $navRight = $(this).find('.slider-nav-wrap').find('.slick-next');
	
			$imageSlider.slick({
				//autoplay: true,
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
			
		});	
	  
	}

// 	Testimonial Sliders
	if( $('.testimonial-slider').length ) {
	
		
		$('.testimonial-slider').each( function(i) {
			
			var sliderTimer = 5000;
			var $testimonialSlider = $(this).find('.t-slider');
			var $navLeft = $(this).find('.slick-prev');
			var $navRight = $(this).find('.slick-next');

			$testimonialSlider.slick({
				autoplay: false,
				autoplaySpeed: sliderTimer,
				speed: 300,
				arrows: true,
				dots: false,
				fade: true,
				adaptiveHeight: false,
				prevArrow: $navLeft,
				nextArrow: $navRight,				
			});
			
		});	
	  
	}
	
//  Job sharing copy link
	if( $('.job-share').length ) {
		
		$('.job-share').each( function(i) {
			
			let $jobShare = $(this);
			let $btn = $($jobShare).find('.button');
			let $icons = $($jobShare).find('.a2a_kit');
			let $copyLink = $($jobShare).find('.copy-link');
			
			$($icons).slideUp(0);
			
			$($btn).click(function() {
				$($jobShare).toggleClass('open');
				$($icons).slideToggle(300);
			});
			
			$($copyLink).click(function(e) {
				e.preventDefault();
				let $link = $(this).attr('data-link');
				navigator.clipboard.writeText($link);
				let $copied = document.createElement("span");
				$copied.innerText = "copied!";
				$(this).append($copied);
				var tl = gsap.timeline();
				tl.to($copied, {y: -5, autoAlpha: 1, duration: .5, ease: "power2.out"});
				tl.to($copied, {y: -10, autoAlpha: 0, duration: .5, ease: "power2.out"});
			});
			
		});
		
	}

})(jQuery);