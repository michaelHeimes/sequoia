<?php
/**
 * Template part for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org">

	<?php 
		// Define $obj so the template knows what it is
		$obj = get_queried_object(); 
	
		// Check for ACF field OR if this is a 'news_post' type
		if( get_field('solid_green_bg_banner') == 'true' || 
			(isset($obj->name) && $obj->name == 'news_post') || 
			(isset($obj->post_type) && $obj->post_type == 'news_post') ) {
			get_template_part('parts/banner-default');
		} else {
			get_template_part('parts/banner-split');
		}	
	?>

	
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->

</article> <!-- end article -->