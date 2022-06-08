<section class="two-column-list">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<?php if( $heading = get_sub_field('heading') ):?>
			<div class="heading-wrap cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 text-center">
				<h2><?php echo $heading;?></h2>
			</div>
			<?php endif;?>
			
			<?php if( $copy = get_sub_field('copy') ):?>
			<div class="copy-wrap large-copy cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 text-center">
				<?php echo $copy;?>
			</div>
			<?php endif;?>
			
		</div>
		
		<?php $style = get_sub_field('style');?>
			
		<?php if( have_rows('list') ):?>
		<div class="list <?php echo $style;?> grid-x grid-margin-x">
			<div class="cell small-12">
				<div class="inner">
					<div class="grid-x grid-margin-x">
					
					<?php while ( have_rows('list') ) : the_row();?>	
					
					<?php if( have_rows('single_row') ):?>
						<?php while ( have_rows('single_row') ) : the_row();?>	
							
								<?php
									$link = get_sub_field('link');
									
									if( $link ):
									$link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								?>
							
								<a class="single-row cell small-12 medium-6" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<div class="grid-x grid-padding-x align-middle">
										
										<?php 
										$image = get_sub_field('icon');
										if( !empty( $image ) ): ?>
										<div class="icon-wrap cell shrink">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
										
										<div class="cell auto">
											<?php the_sub_field('text');?>
										</div>
								
									</div>
								</a>
							
							<?php else:?>
							
								<div class="single-row cell small-12 medium-6">				
									<div class="grid-x grid-padding-x align-middle">
										
										<?php 
										$image = get_sub_field('icon');
										if( !empty( $image ) ): ?>
										<div class="icon-wrap cell shrink">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
										
										<div class="cell auto">
											<?php the_sub_field('text');?>
										</div>
								
									</div>
								</div>
							
							<?php endif;?>
						
						<?php endwhile;?>
					<?php endif;?>
					
					<?php endwhile;?>
					
					</div>
				</div>
			</div>
		</div>
		<?php endif;?>
			
		</div>
	</div>
</section>