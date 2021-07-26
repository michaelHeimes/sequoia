<div class="utility-slider section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x text-center">
			
			<div class="heading-wrap small-xl cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
				<div class="inner">
			
					<?php if( $small_heading = get_sub_field('small_heading') ):?>
						<h2 class="small-heading text-center"><?php echo $small_heading;?></h2>
					<?php endif;?> 
					
					<?php if( $large_heading = get_sub_field('large_heading') ):?>
						<h3 class="xl-heading text-center"><?php echo $large_heading;?></h3>
					<?php endif;?> 
				
				</div>
			</div>
		</div>
						
		<div class="grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
			
			<?php if( have_rows('slides') ):?>
			<div class="s-slider cell small-12">
				<?php while ( have_rows('slides') ) : the_row();?>	
				
				<?php if( have_rows('single_slide') ):?>
					<?php while ( have_rows('single_slide') ) : the_row();?>	
					
					<div class="single-slide">
						<div class="grid-x grid-padding-x medium-flex-dir-row-reverse">

							<div class="left cell small-12 tablet-6 large-7">
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
							</div>
							
							<div class="right cell small-12 tablet-6 large-5">
								<div class="top" data-equalizer-watch>
									
									<?php if( get_sub_field('tag_type') == "just-text" ) :?>
										<?php if( $tag = get_sub_field('tag_text') ):?>
										<div class="tag"><?php echo $tag;?></div>
										<?php endif;?>									
									<?php endif;?>
									
									<?php if( get_sub_field('tag_type') == "cat-link" ) :?>
									
										<?php if( get_sub_field('category_post_type') == "news" ) :?>
										
											<?php 
												$term = get_sub_field('news_category');
												if( $term ):
												$link = get_term_link($term[0]);?>
												
											
												<a class="tag" href="<?php echo $link;?>"><?php echo esc_html( $term[0]->name ); ?></a>
											
											<?php endif;?>
										
										<?php endif;?>

										<?php if( get_sub_field('category_post_type') == "ad_property" ) :?>
										
											<?php 
												$term = get_sub_field('a&d_property_type');
												if( $term ):
												$link = get_term_link($term[0]);?>
												
											
												<a class="tag" href="<?php echo $link;?>"><?php echo esc_html( $term[0]->name ); ?></a>
											
											<?php endif;?>
										
										<?php endif;?>
									
									<?php endif;?>
									
									<?php if( $heading = get_sub_field('heading') ):?>
									<h2 class="heading"><?php echo $heading;?></h2>
									<?php endif;?>
									<?php if( $subheading = get_sub_field('sub-heading') ):?>
									<h3 class="sub-heading"><?php echo $subheading;?></h3>
									<?php endif;?>
									
								</div>
								
								<?php 
								$link = get_sub_field('link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								<div class="btn-wrap">
								    <a class="button outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</div>
								<?php endif; ?>
															
							</div>
							

														
						</div>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
			
				<?php endwhile;?>
			</div>
			<?php endif;?>	
			
		</div>
		
		<div class="grid-x grid-padding-x align-middle">
			
			<div class="slider-progress cell auto">
				<span></span>
			</div>

			<div class="slider-nav-wrap cell shrink">
				<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.772" height="16.715" viewBox="0 0 9.772 16.715">
					  <path id="Path_132" data-name="Path 132" d="M1815.5,3936.5l7.65,7.65-7.65,7.651" transform="translate(-1814.793 -3935.793)" fill="none" stroke="#fff" stroke-width="2"/>
					</svg>
				</button>
				<button class="slick-next slick-arrow" aria-label="Next" type="button" style="">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.772" height="16.715" viewBox="0 0 9.772 16.715">
					  <path id="Path_132" data-name="Path 132" d="M1815.5,3936.5l7.65,7.65-7.65,7.651" transform="translate(-1814.793 -3935.793)" fill="none" stroke="#fff" stroke-width="2"/>
					</svg>
				</button>	
			</div>
			                
		</div>                                
			
			<?php 
			$link = get_sub_field('link_button_below_slider');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			<div class="bottom-btn-wrap cell small-12">
			    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
			    	<svg xmlns="http://www.w3.org/2000/svg" width="9.772" height="16.715" viewBox="0 0 9.772 16.715">
						<path id="Path_132" data-name="Path 132" d="M1815.5,3936.5l7.65,7.65-7.65,7.651" transform="translate(-1814.793 -3935.793)" fill="none" stroke="#fff" stroke-width="2"/>
					</svg>
			    </a>
			</div>
			<?php endif; ?>					


		</div>
	</div>
</div>