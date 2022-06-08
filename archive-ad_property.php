<?php
/**
 * The A&D Property Archive
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
			
	<div class="content">
		
		<?php get_template_part('parts/banner', 'ad-property');?>

		<div class="articles-container grid-container">
			<?php joints_ad_tax_nav();?>
		</div>
	
		<div class="inner-content">
	
		    <main class="main" role="main">
		    	<div class="articles-container grid-container">
			    	<div class="articles-grid grid-x grid-padding-x small-up-2 medium-up-3 tablet-up-4 large-up-4" data-equalizer data-equalize-on="small">
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'ad-archive-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>		
			    	</div>
		    	</div>																
		    </main> <!-- end #main -->
		    

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>