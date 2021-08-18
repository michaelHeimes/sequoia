<article id="post-<?php the_ID(); ?>" <?php post_class('article-grid cell small-12 tablet-6'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" data-equalizer-watch>
						
		<header class="article-header">	
			<?php get_template_part( 'parts/content', 'news-byline' ); ?>
			<h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>
	    </header> <!-- end article header -->							
	</a>
</article> <!-- end article -->