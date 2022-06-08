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
		
		<?php get_template_part('parts/banner', 'default');?>
					
		<div class="inner-content">
	
		    <main class="main" role="main">
			    
		        <div class="grid-container">
			        <div class="grid-x grid-padding-x">
			    
					    <?php if ( !is_paged() ):?>
							<?php
							$featured_posts = get_field('featured_article', 73);
							if( $featured_posts ): ?>
							    <?php foreach( $featured_posts as $post ): 
							
							        // Setup this post for WP functions (variable must be named $post).
							        setup_postdata($post); 
							        $terms = get_the_terms( $post->ID, 'news_type' ); 
							        if ( $terms ):
							        $first_term = $terms[0];
							        $link = get_term_link($first_term);
							        $name =  $first_term->name;
							        endif;
							        ;?>
							        							        
									<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 featured'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<div class="inner gray-bg">
															
											<div class="tag-wrap">
												<?php if ( $terms ):?>
												<a class="tag" href="<?php echo $link;?>"><?php echo $name;?></a>
												<?php endif;?>
											</div>
															
											<header class="article-header">	
												<?php get_template_part( 'parts/content', 'news-byline' ); ?>
												<h3 class="entry-title single-title xl-heading" itemprop="headline"><?php the_title(); ?></h3>
										    </header> <!-- end article header -->
																
											<footer class="article-footer">
												<a class="button outline" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
											</footer> <!-- end article footer -->
																
										</div>
									</article> <!-- end article -->
									
							    <?php endforeach; ?>
							    
							    <?php 
							    // Reset the global post object so that the rest of the page works correctly.
							    wp_reset_postdata(); ?>
							<?php endif; ?>
					    <?php endif;?>
					    
				    
					    <?php if (have_posts()) : $counter = 1; while (have_posts()) : the_post(); ?>
					 
							<!-- To see additional archive styles, visit the /parts directory -->
							
							<?php if ( !is_paged() ):?>
												
								<?php if ( $counter <= 4 ) :?>						
								
									<?php get_template_part( 'parts/loop', 'news-grid' ); ?>
									
								<?php else:?>
								
									<?php get_template_part( 'parts/loop', 'news-row' ); ?>
								
								<?php endif;?>
								
							<?php else:?>
							
								<?php get_template_part( 'parts/loop', 'news-row' ); ?>
							
							<?php endif;?>
						    
						<?php $counter++; endwhile; ?>	
		
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