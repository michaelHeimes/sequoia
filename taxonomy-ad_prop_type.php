<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
			
	<div class="content">
		
		<div class="banner has-bg">
			<div class="bg" style="background-image: url(<?php the_field('ad_background_image', 'option');?>)"></div>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell small-12 text-center">
						<h1><?php the_field('ad_heading', 'option');?></h1>
					</div>
				</div>
			</div>
			
			<?php 
			$image = get_field('red_theme_icon', 'option');
			if( !empty( $image ) ): ?>
			<div class="icon-wrap text-center">
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			</div>
			<?php endif; ?>

		</div>
		
		<?php joints_ad_tax_nav();?>
	
		<div class="inner-content grid-x grid-padding-x">
	
		    <main class="main cell small-12" role="main">
		    
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'ad-archive-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
		    

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>