<?php
function site_scripts() {
	$theme = wp_get_theme();
	$version = $theme->get('Version');

	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/app.min.js', array( 'jquery' ), $version, true );
	
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.min.css', array(), $version, 'all' );

	if ( is_singular() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

