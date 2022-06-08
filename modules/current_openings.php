<div class="current-openings">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">

				<?php if( $heading = get_sub_field('heading') ):?>
					<h3 class="text-center"><?php echo $heading;?></h3>
				<?php endif;?>
				<?php if( $intro_copy = get_sub_field('intro_copy') ):?>
					<p><?php echo $intro_copy;?></p>
				<?php endif;?>		
				
			</div>	
			
			<div class="cell small-12 large-10 large-offset-1">
			
				<ul class="accordion" data-accordion>
					<?php
						
			    	$args = array(  
			        	'post_type' => 'job',
			        	'post_status' => 'publish',
			        	'posts_per_page' => -1,
			    	);
				
			    	$loop = new WP_Query( $args );
			        	
			    	while ( $loop->have_posts() ) : $loop->the_post();?>
		
						<li class="accordion-item large-copy job-content" data-accordion-item>
								
							<a href="#" class="accordion-title">
								<h2><?php the_title();?></h2>
								<p><?php the_field('intro_text');?></p>
							</a>
							
							<div class="accordion-content" data-tab-content>
								<div class="list-wrap">
									<h4>Responsibilities</h4>
									<?php the_field('responsibilities');?>
								</div>
								<div class="apply-wrap">
									<h4>Apply</h4>
									<p>Send your resume to <a href="mailto:careers@sequioarg.com?subject=<?php the_title() ?>">careers@sequioarg.com</a></p>
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