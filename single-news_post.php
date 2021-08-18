<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	
<?php get_template_part('parts/banner', 'news');?>
	<div class="grid-container">
		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2" role="main">

				
				<?php 
					$terms = get_the_terms( $post->ID , 'news_type' );
					if ( $terms ):?>
				<div class="post-tag-wrap text-center">
				<?php
					foreach ($terms as $term): 
					$link = get_term_link($term);
					$icon = get_field('icon', $term);
				?>
					<a class="button" aria-label="<?php echo $term->name; ?> Archive Link" href="<?php echo $link;?>">
						<span class="theme-name"><?php echo $term->name; ?></span>
					</a>
					<?php endforeach;?>
				</div>
				<?php endif;?>
				
				<div class="post-date cell small-12 text-center"><?php echo get_the_date( 'F jS Y', $post->ID );?></div>
				
				<h2 class="h1 entry-title single-title text-center" itemprop="headline"><?php the_title();?></h2>
			
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'parts/loop', 'single-news-post' ); ?>
			    	
			    <?php endwhile; else : ?>
			
			   		<?php get_template_part( 'parts/content', 'missing' ); ?>
	
			    <?php endif; ?>
	
			</main> <!-- end #main -->
	
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>