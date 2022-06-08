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
					<div class="list-wrap">
						<h4>Responsibilities</h4>
						<?php the_field('responsibilities');?>
					</div>
					<div class="apply-wrap">
						<h4>Apply</h4>
						<p>Send your resume to <a href="mailto:careers@sequioarg.com?subject=<?php the_title() ?>">careers@sequioarg.com</a></p>
					</div>
				</div>
			
			</div>
	
			</main> <!-- end #main -->
	
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>