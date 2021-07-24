<?php

// Disable Gutenberg
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'page') return false;
    return $current_status;
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// ACF Options
add_action( 'after_setup_theme', 'joints_theme_support' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
}


// ACF json
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/my-custom-folder';
    
    
    // return
    return $paths;
    
}

// ACF Blocks
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'large-colored-copy',
            'title'             => __('Large Colored Copy'),
            'description'       => __('A custom Large Colored Copy block.'),
            'render_template'   => 'parts/blocks/large-colored-copy.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'large', 'colored', 'copy', 'text' ),
        ));
    }
}

// CPT Archives Post Per page
function hwl_home_pagesize( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'ad_property' ) ) {
        $query->set( 'posts_per_page', 9999999 );
        return;
    }

    if ( ! is_admin() && $query->is_main_query() && is_tax( 'ad_prop_type' ) ) {
        $query->set( 'posts_per_page', 9999999 );
        return;
    }

    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'news_post' ) ) {
        $query->set( 'posts_per_page', 7 );
        return;
    }

}
add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );


// Exclude Featured News Post from News Archive
function exclude_featured_news_post( $query ) {

    if ( is_admin() || ! $query->is_main_query() && is_post_type_archive( 'news_post' ) )
        return;

    if ( $query->is_archive() ) {
	    $selected_posts = array_merge(
		get_field('featured_article', 73, false));	    
        $query->set( 'post__not_in', array( $selected_posts[0] ) );
    }
}
add_action( 'pre_get_posts', 'exclude_featured_news_post', 1 );


// Add A&D Property nav classes
function add_menu_list_item_class($classes, $item, $args) {
  if (property_exists($args, 'list_item_class')) {
      $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
  if( property_exists($args, 'link_class') ) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );