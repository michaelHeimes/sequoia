<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class('cell'); ?> role="article">
		<div class="inner" data-equalizer-watch>
		
			<div class="top">
		
				<section class="featured-image" itemprop="text">
					<?php the_post_thumbnail('ad-grid'); ?>
				</section> <!-- end article section -->
				
				<div class="post-tag-wrap text-center">
					<?php 
						$ad_prop_terms = get_the_terms( $post->ID , 'ad_prop_type' );
						
						foreach ($ad_prop_terms as $term): 
						$link = get_term_link($term);
						$icon = get_field('icon', $term);
					?>
					<a class="button tag tax" aria-label="<?php echo $term->name; ?> Archive Link" href="<?php echo $link;?>">
						<span class="theme-name"><?php echo $term->name; ?></span>
					</a>
					<?php endforeach;?>
				</div>
			
				<header class="article-header">
					<h2 class="h3 title"><?php the_field('street_address');?></h2>	
					<h3><?php the_field('city_state');?></h3>				
				</header> <!-- end article header -->	
				
			</div>
							
			<div class="bottom">
				<a class="button outline tag" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Learn More</a>
			</div>
						
		</div>    							
	</article> <!-- end article -->
	




