<div class="testimonial-slider section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x text-center">
			<div class="cell small-12">
				<div class="inner gray-bg">
					<div class="grid-x grid-padding-x text-center">
			
						<?php if( $small_heading = get_sub_field('small_heading') ):?>
						<div class="cell small-12">
							<h2 class="small-heading"><?php echo $small_heading;?></h2>
						</div>
						<?php endif;?> 
						
						<?php if( $large_heading = get_sub_field('large_heading') ):?>
						<div class="cell small-12">
							<h3 class="xl-heading"><?php echo $large_heading;?></h3>
						</div>
						<?php endif;?> 
							
					</div>
					
					<div class="grid-x grid-padding-x">
						<div class="cell small-12">
							<div class="slider-wrap">
								<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">
									<svg xmlns="http://www.w3.org/2000/svg" width="9.772" height="16.715" viewBox="0 0 9.772 16.715">
									  <path id="Path_361" data-name="Path 361" d="M1815.5,3936.5l7.65,7.65-7.65,7.651" transform="translate(1824.565 3952.509) rotate(180)" fill="none" stroke="#fff" stroke-width="2"/>
									</svg>
								</button>
								<button class="slick-next slick-arrow" aria-label="Next" type="button" style="">
									<svg xmlns="http://www.w3.org/2000/svg" width="9.772" height="16.715" viewBox="0 0 9.772 16.715">
	  <path id="Path_359" data-name="Path 359" d="M1815.5,3936.5l7.65,7.65-7.65,7.651" transform="translate(-1814.793 -3935.793)" fill="none" stroke="#fff" stroke-width="2"/>
									</svg>						
								</button>
								<?php if( have_rows('slides') ):?>
								<div class="t-slider cell small-12">
									<?php while ( have_rows('slides') ) : the_row();?>	
									
									<?php if( have_rows('single_slide') ):?>
										<?php while ( have_rows('single_slide') ) : the_row();?>	
										
										<div class="single-slide">
											<div class="grid-x">
												<div class="cell small-12">
													<div class="quote-wrap">
														"<?php the_sub_field('quote');?>"
													</div class="author-wrap">
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
					
				</div>
			</div>
		</div>
	</div>
</div>