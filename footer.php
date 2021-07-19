<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
	
				<?php if( !get_field('hide_mailing_list_signup') ):?>
				<div class="mailing-list has-bg">
					<div class="bg" style="background-image: url(<?php the_field('background_image', 'option');?>)"></div>
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">
								<?php $form_id = get_field('gravity_form_id', 'option');?>
								<?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="" field_values=""]
				');?>
							</div>
						</div>
					</div>
				</div>
				<?php endif;?>
					
				<footer class="footer green-bg" role="contentinfo">
					<div class="grid-container">
						
						<div class="logo-wrap text-center"><a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('footer_logo', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>							
						</a></div>
						
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="left cell small-12 medium-7 tablet-6">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
	
							<div class="right cell small-12 medium-5 tablet-6">
								<nav role="navigation" class="contact-links grid-x grid-padding-x">
									
		    						<div class="ffe-wrap cell small-12 tablet-6">
			    						<div>Phone: <a href="tel:<?php the_field('phone_number', 'option');?>"><?php the_field('phone_number', 'option');?></a></div>
			    						<div>Fax: <?php the_field('fax_number', 'option');?></div>
			    						<div>Email: <a href="mailto:<?php the_field('email_address', 'option');?>"><?php the_field('email_address', 'option');?></a></div>
		    						</div>
		    						
		    						<div class="cell small-12 tablet-6">
			    						<a class="directions-link" href="<?php the_field('directions_url', 'option');?>" target="_blank"><?php the_field('address', 'option');?></a>
		    						</div>
		    						
		    						<div class="social-links cell small-12">
			    						<div class="grid-x grid-padding-x">
				    						<div class="cell shrink"><a href="<?php the_field('facebook_url', 'option');?>" target="_blank">
												<svg xmlns="http://www.w3.org/2000/svg" width="9.373" height="18.744" viewBox="0 0 9.373 18.744">
												  <path id="Path_8" data-name="Path 8" d="M139.65,3.112h1.711V.132A22.1,22.1,0,0,0,138.869,0c-2.467,0-4.157,1.552-4.157,4.4V7.029h-2.722V10.36h2.722v8.383h3.338V10.361h2.612l.415-3.332h-3.028v-2.3c0-.963.26-1.622,1.6-1.622Z" transform="translate(-131.989)" fill="#fff"/>
												</svg>
				    						</a></div>
				    						<div class="cell shrink"><a href="<?php the_field('twitter_url', 'option');?>" target="_blank">
												<svg id="Group_10" data-name="Group 10" xmlns="http://www.w3.org/2000/svg" width="19.957" height="16.215" viewBox="0 0 19.957 16.215">
												  <g id="Group_37" data-name="Group 37" transform="translate(0 0)">
												    <path id="Path_131" data-name="Path 131" d="M19.957,49.92a8.53,8.53,0,0,1-2.357.646A4.068,4.068,0,0,0,19.4,48.3a8.176,8.176,0,0,1-2.594.99,4.091,4.091,0,0,0-7.077,2.8,4.213,4.213,0,0,0,.095.933,11.58,11.58,0,0,1-8.433-4.279,4.092,4.092,0,0,0,1.257,5.468A4.04,4.04,0,0,1,.8,53.71v.045a4.11,4.11,0,0,0,3.278,4.02A4.084,4.084,0,0,1,3,57.91a3.617,3.617,0,0,1-.775-.07,4.13,4.13,0,0,0,3.823,2.85A8.221,8.221,0,0,1,.979,62.435,7.66,7.66,0,0,1,0,62.379a11.518,11.518,0,0,0,6.276,1.836A11.564,11.564,0,0,0,17.921,52.573c0-.181-.006-.355-.015-.529A8.162,8.162,0,0,0,19.957,49.92Z" transform="translate(0 -48)" fill="#fff"/>
												  </g>
												</svg>
				    						</a></div>
				    						<div class="cell shrink"><a href="<?php the_field('linkedin_url', 'option');?>" target="_blank">
												<svg id="Group_20" data-name="Group 20" xmlns="http://www.w3.org/2000/svg" width="18.761" height="17.928" viewBox="0 0 18.761 17.928">
												  <path id="Path_5" data-name="Path 5" d="M19.261,11.5v6.931H15.249V11.965c0-1.616-.573-2.736-2.032-2.736a2.2,2.2,0,0,0-2.059,1.459,2.852,2.852,0,0,0-.13.99v6.749H6.988s.052-10.97,0-12.091H11v1.72c0,.026-.026.026-.026.052H11V8.057A3.988,3.988,0,0,1,14.623,6.05c2.658,0,4.638,1.72,4.638,5.446ZM2.767.5A2.107,2.107,0,0,0,.5,2.585,2.076,2.076,0,0,0,2.715,4.669h.026A2.092,2.092,0,0,0,5.008,2.585,2.07,2.07,0,0,0,2.767.5ZM.735,18.428H4.747V6.337H.735Zm0,0" transform="translate(-0.5 -0.5)" fill="#fff"/>
												</svg>
				    						</a></div>				    										    						
			    						</div>
		    						</div>						
		    					</nav>
		    				</div>
		    				
						</div> <!-- end #inner-footer -->
							
						<div class="bottom-footer grid-x grid-padding-x">
							
							<div class="small-12 medium-12 large-12 cell">
								<div class="source-org copyright cell small-12 text-center">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></div>
							</div>
						
						</div> 
				
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->