<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	
<?php get_template_part('parts/banner', 'ad-property');?>
	<div class="grid-container">
		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2" role="main">
				

				
				<div class="tag-wrap text-center">
					<?php 
						$ad_prop_terms = get_the_terms( $post->ID , 'ad_prop_type' );
						
						foreach ($ad_prop_terms as $term): 
						$link = get_term_link($term);
						$icon = get_field('icon', $term);
					?>
					<a class="button" aria-label="<?php echo $term->name; ?> Archive Link" href="<?php echo $link;?>">
						<span class="theme-name"><?php echo $term->name; ?></span>
					</a>
					<?php endforeach;?>
				</div>
			
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'parts/loop', 'single-property' ); ?>
			    	
			    <?php endwhile; else : ?>
			
			   		<?php get_template_part( 'parts/content', 'missing' ); ?>
	
			    <?php endif; ?>
	
			</main> <!-- end #main -->
	
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>