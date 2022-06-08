<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	
<?php get_template_part('parts/banner', 'default');?>
	<div class="grid-container">
		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2" role="main">

				
			<div class="large-copy job-content">

				<p><?php the_field('intro_text');?></p>
				
				<div class="details">
					<?php get_template_part('parts/loop', 'job-details');?>
				</div>
			
			</div>
	
			</main> <!-- end #main -->
	
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->
<script async src="https://static.addtoany.com/menu/page.js"></script>
<?php get_footer(); ?>