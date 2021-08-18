<article id="post-<?php the_ID(); ?>" <?php post_class('news-row cell small-12'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="grid-x grid-padding-x medium-flex-dir-row-reverse">

		<div class="has-bg right cell small-12 medium-6 large-5">
			<?php if ( has_post_thumbnail() ):?>
				
				<div class="bg show-for-medium" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>)"></div>
			
			<?php else:?>
				
				<?php 
				$image = get_field('post_row_fallback_image', 'option');
				if( !empty( $image ) ): ?>
				<div class="bg show-for-medium" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
				<?php endif; ?>
			
			<?php endif;?>
			
			<div class="thumb-wrap hide-for-medium">
				<?php if ( has_post_thumbnail() ):?>
					
					<?php the_post_thumbnail('full'); ?>
				
				<?php else:?>
				
					<?php 
					$image = get_field('post_row_fallback_image', 'option');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					
				<?php endif;?>
			</div>
		
		</div>
		
		<div class="left cell small-12 medium-6 large-7">
			
			<div class="top">
				<?php
					$terms = get_the_terms( $post->ID, 'news_type' ); 
					if ( $terms ):
			        $first_term = $terms[0];
			        $link = get_term_link($first_term);
			        $name =  $first_term->name;
			        endif;
				?>
				
				<div class="tag-wrap">
					<?php if ( $terms ):?>
					<a class="tag" href="<?php echo $link;?>"><?php echo $name;?></a>
					<?php endif;?>
				</div>
				
				<?php get_template_part( 'parts/content', 'news-byline' ); ?>
				
				<h3 class="heading h3">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					
				</h3>

			</div>

			<div class="rm-wrap">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More
				</a>		
			</div>
										
		</div>
									
	</div>			
</article> <!-- end article -->
