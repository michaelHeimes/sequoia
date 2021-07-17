<div class="services_grid section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x text-center">
			
			<?php if( $small_heading = get_sub_field('small_heading') ):?>
			<div class="cell small-12">
				<h2 class="small-heading"><?php echo $small_heading;?></h2>
			</div>
			<?php endif;?> 
			
			<?php if( $large_heading = get_sub_field('large_heading') ):?>
			<div class="cell small-12">
				<h3 class="large-heading"><?php echo $large_heading;?></h3>
			</div>
			<?php endif;?> 
				
		</div>
		
		<div class="grid-x grid-padding-x small-up-1 medium-up-2">
			
			<?php if( have_rows('services') ):?>
				<?php while ( have_rows('services') ) : the_row();?>	
				
					<?php if( have_rows('single_service') ):?>
						<?php while ( have_rows('single_service') ) : the_row();?>	
						
							<?php $theme = get_sub_field('color_theme');?>
				
							<div class="cell single-service theme-<?php the_sub_field('color_theme');?>">
								<div class="inner text-left">
									
									<div class="top">
										
										<h2><?php the_sub_field('heading');?></h2>
										
										<p><?php the_sub_field('copy');?></p>
										
										
										<div class="icon-wrap">
											
											<?php if ( $theme == 'green' ):?>
											
												<?php 
												$image = get_field('green_theme_icon', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											
											<?php elseif  ( $theme == 'blue' ):?>
											
												<?php 
												$image = get_field('blue_theme_icon', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>											
											
											<?php elseif  ( $theme == 'purple' ):?>
											
												<?php 
												$image = get_field('purple_theme_icon', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>											
											
											<?php elseif  ( $theme == 'red' ):?>
											
												<?php 
												$image = get_field('red_theme_icon', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>											
											
											<?php endif;?>
											
										</div>
										
									</div>
									
									<div class="bottom">
										
										<?php 
										$image = get_sub_field('image');
										if( !empty( $image ) ): ?>
										<div class="img-wrap">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
									
										<?php 
										$link = get_sub_field('link');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="button text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
										
									</div>
									
								</div>
							</div>
						
					
						<?php endwhile;?>
					<?php endif;?>

				<?php endwhile;?>
			<?php endif;?>
			


		</div>
	</div>
</div>