<div class="overflowing-card-slider section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner">
					<div class="grid-x grid-padding-x">
			
						<?php if( $heading = get_sub_field('heading') ):?>
						<div class="left cell small-12 medium-4 text-right grid-x flex-dir-column align-bottom">
							<h2 class="small-heading"><?php echo $heading;?></h2>
							<div class="slider-nav-wrap green-bg-btn-wrap grid-x align-right">
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
						<?php endif;?>
													
						<div class="slider-wrap cell small-12 medium-8">
							<?php if( have_rows('cards') ):?>
							<div class="oc-slider cell small-12">
								<?php while ( have_rows('cards') ) : the_row();?>	
									
									<div class="single-slide">
										<div class="inner gray-bg">
											<div class="heading-wrap">
												<h3><?php the_sub_field('heading');?></h3>
											</div>
											<p><?php the_sub_field('text');?></p>
										</div>
									</div>
							
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