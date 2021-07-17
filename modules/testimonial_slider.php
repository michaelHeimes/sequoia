<div class="testimonial-slider section">
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
			<div class="s-slider cell small-12">
				<?php while ( have_rows('slides') ) : the_row();?>	
				
				<?php if( have_rows('single_slide') ):?>
					<?php while ( have_rows('single_slide') ) : the_row();?>	
					
					<div class="single-slide">
						<div class="grid-x">
							<div class="cell small-12">
								<div class="quote-wrap">
									<?php the_sub_field('quote');?>
								</div>
								<div>—<?php the_sub_field('author');?><?php if( $title = get_sub_field('authors_title')):?>, <?php echo $title; endif?></div>
						
							</div>
						</div>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
			
				<?php endwhile;?>
			</div>
			<?php endif;?>	

		</div>
	</div>
</div>