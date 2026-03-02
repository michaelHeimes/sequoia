/**
 * Required
 */
 
 //@prepros-prepend vendor/foundation/js/plugins/foundation.core.js

/**
 * Optional Plugins
 * Remove * to enable any plugins you want to use
 */
 
 // What Input
 //@*prepros-prepend vendor/whatinput.js
 
 // Foundation Utilities
 // https://get.foundation/sites/docs/javascript-utilities.html
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.box.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.imageLoader.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.keyboard.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.mediaQuery.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.motion.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.nest.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.timer.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.touch.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.triggers.min.js


// JS Form Validation
//@*prepros-prepend vendor/foundation/js/plugins/foundation.abide.js

// Tabs UI
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tabs.js

// Accordian
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordion.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordionMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveAccordionTabs.js

// Menu enhancements
//@prepros-prepend vendor/foundation/js/plugins/foundation.drilldown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdownMenu.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.responsiveMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveToggle.js

// Equalize heights
//@prepros-prepend vendor/foundation/js/plugins/foundation.equalizer.js

// Responsive Images
//@*prepros-prepend vendor/foundation/js/plugins/foundation.interchange.js

// Navigation Widget
//@*prepros-prepend vendor/foundation/js/plugins/foundation.magellan.js

// Offcanvas Naviagtion Option
//@prepros-prepend vendor/foundation/js/plugins/foundation.offcanvas.js

// Carousel (don't ever use)
//@*prepros-prepend vendor/foundation/js/plugins/foundation.orbit.js

// Modals
//@*prepros-prepend vendor/foundation/js/plugins/foundation.reveal.js

// Form UI element
//@*prepros-prepend vendor/foundation/js/plugins/foundation.slider.js

// Anchor Link Scrolling
//@prepros-prepend vendor/foundation/js/plugins/foundation.smoothScroll.js

// Sticky Elements
//@prepros-prepend vendor/foundation/js/plugins/foundation.sticky.js

// On/Off UI Switching
//@*prepros-prepend vendor/foundation/js/plugins/foundation.toggler.js

// Tooltips
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tooltip.js

// What Input
//@prepros-prepend vendor/what-input.js

// GSAP
//@prepros-prepend vendor/gsap/gsap.min.js
//@prepros-prepend vendor/gsap/ScrollTrigger.min.js

// Slick Slider
//@prepros-prepend vendor/slick.min.js

(function($) {
	'use strict';
	
	gsap.registerPlugin(ScrollTrigger);
	
	$(document).foundation();
	
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
		
		$('.three_column_stats').each(function() {
			const $section = $(this);
			const $numbers = $section.find('.number');
		
			// Helper for formatting
			const numberWithCommas = (x) => x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		
			$numbers.each(function() {
				const $el = $(this);
				const $display = $el.find('span'); // Target the span inside
				const targetValue = parseFloat($el.attr('data-number'));
				
				// Proxy object for GSAP to animate
				let counter = { value: 0 };
		
				gsap.to(counter, {
					value: targetValue,
					duration: 3,
					ease: "circ.out",
					scrollTrigger: {
						trigger: $section, // Animates when the parent section hits the viewport
						start: 'top 75%',
						toggleActions: 'play none none reverse'
					},
					onUpdate: function() {
						$display.text(numberWithCommas(Math.ceil(counter.value)));
					}
				});
			});
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