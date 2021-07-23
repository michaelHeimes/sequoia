<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  
    wp_enqueue_script( 'cr-gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), true );

    wp_enqueue_script( 'cr-gsap-scroll', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array(), true );
    
    wp_enqueue_script( 'bg-slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), true );   
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    

// Localize Three Columns Stats Numbers 
	global $post;
	$id = $post->ID;
	
	if(have_rows('modules', $id)) {
	
		$modules_array = array();
	
		foreach(get_field('modules', $id) as $module) {
		
			if ( $module['acf_fc_layout'] == 'three_column_stats') {
		
				wp_localize_script('site-js', 'site_js', array(  
				'stats_parent' => $module,			
				)); 
				
			}    
		}
	
	}
   
	wp_enqueue_style( 'bg-slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false ); 
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);