<div class="utility-slider section">
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
		
		<div class="grid-x grid-padding-x">
			
			<?php if( have_rows('slides') ):?>
			<div class="s-slider call small-12">
				<?php while ( have_rows('slides') ) : the_row();?>	
				
				<?php if( have_rows('single_slide') ):?>
					<?php while ( have_rows('single_slide') ) : the_row();?>	
					
					<div class="single-slide">
						<div class="grid-x">
							
							<div class="left cell">
								<?php if( $tag = get_sub_field('tag') ):?>
								<div class="tag"><?php echo $tag;?></div>
								<?php endif;?>
								
								<?php if( $heading = get_sub_field('heading') ):?>
								<h2 class="heading"><?php echo $heading;?></h2>
								<?php endif;?>
								<?php if( $subheading = get_sub_field('sub-heading') ):?>
								<h3 class="sub-heading"><?php echo $subheading;?></h3>
								<?php endif;?>
								
								<?php 
								$link = get_field('link');
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
							
							<div class="right cell">
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
														
						</div>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
			
				<?php endwhile;?>
			</div>
			<?php endif;?>	
			
			<?php 
			$link = get_sub_field('link_button_below_slider');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			<div class="btn-wrap">
			    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</div>
			<?php endif; ?>					


		</div>
	</div>
</div>