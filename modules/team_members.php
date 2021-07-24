<div class="team_members gray-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1">
				
			<?php if( $small_heading = get_sub_field('small_heading') ):?>
				<h2 class="small-heading font-alt text-center"><?php echo $small_heading;?></h2>
			<?php endif;?>

			<?php if( $large_heading = get_sub_field('large_heading') ):?>
				<h3 class="xl-heading text-center"><?php echo $large_heading;?></h3>
			<?php endif;?>
			
			<ul class="accordion" data-accordion>
				<?php
					
			    $args = array(  
			        'post_type' => 'team_member',
			        'post_status' => 'publish',
			        'posts_per_page' => -1,
			    );
			
			    $loop = new WP_Query( $args );
			        
			    while ( $loop->have_posts() ) : $loop->the_post();?>
	
					<li class="accordion-item" data-accordion-item>
							
						<a href="#" class="accordion-title">
							<div class="grid-x grid-padding-x align-middle">
								<div class="left cell small-12 medium-shrink">
									<?php 
									$image = get_field('photo');
									if( !empty( $image ) ): ?>
									<div class="img-wrap">
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif; ?>
								</div>
								<div class="right cell auto">
									<h2 class="h3"><?php the_title();?></h2>
									<h3><?php the_field('title');?></h3>
								</div>
							</div>
						</a>
						
						<div class="accordion-content" data-tab-content>
							<div class="top grid-x grid-padding-x">
								<div class="left cell small-12 medium-shrink"></div>
								<div class="right cell auto">
									<div class="numbers">
										<?php if( $d_number = get_field('direct_phone_number') ):?>
											<span>direct:</span> <a href="tel:<?php echo $d_number;?>"><?php echo $d_number;?></a>
										<?php endif;?>
										<?php if( $o_number = get_field('office_phone_number') ):?>
											| <span>direct:</span> <a href="tel:<?php echo $o_number;?>"><?php echo $o_number;?></a>
										<?php endif;?>										
									</div>
									<?php if ($email = get_field('email_address')):?>
										<div class="email">
											<span>email: </span>
											<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
										</div>
									<?php endif;?>
								</div>
							</div>	
							<div class="bottom grid-x grid-padding-x">
								<div class="cell small-12 large-copy">
									<?php the_field('bio');?>
								</div>
							</div>			
						</div>
										    						
					</li>
	
			    <?php endwhile;
			
			    wp_reset_postdata(); 
			    ?>
			</ul>
			
			</div>
		</div>
	</div>
</div>