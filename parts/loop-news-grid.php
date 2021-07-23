<article id="post-<?php the_ID(); ?>" <?php post_class('article-grid cell small-12 tablet-6'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" data-equalizer-watch>
						
		<header class="article-header">	
			<?php get_template_part( 'parts/content', 'news-byline' ); ?>
			<h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>
	    </header> <!-- end article header -->
						
	    <section class="entry-content" itemprop="text">
			<?php the_post_thumbnail('full'); ?>
			<?php the_content(); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
			<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
		</footer> <!-- end article footer -->
							
	</a>
</article> <!-- end article -->