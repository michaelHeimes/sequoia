<div class="location_and_contact_info section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
				
				<div class="grid-x grid-padding-x large-copy">
					<div class="left cell small-12 medium-6">
						<h2><?php the_sub_field('location_heading');?></h2>
						<div><a href="<?php the_field('directions_url', 'option');?>" target="_blank"><?php the_field('address', 'option');?></a></div>			
					</div>
					<div class="right cell small-12 medium-6">
						<h2><?php the_sub_field('contact_heading');?></h2>
						<div>Phone: <a href="tel:"<?php the_field('phone_number', 'option');?>><?php the_field('phone_number', 'option');?></a></div>
						<div>Fax: <?php the_field('fax_number', 'option');?></div>
						<div>Email: <a href="mailto:<?php the_field('email_address', 'option');?>"><?php the_field('email_address', 'option');?></a></div>						
					</div>					
				</div>
				
			<?php if( $small_heading = get_sub_field('small_heading') ):?>
				<h2 class="small-heading font-alt text-center"><?php echo $small_heading;?></h2>
			<?php endif;?>

			<?php if( $large_heading = get_sub_field('large_heading') ):?>
				<h3 class="large-heading text-center"><?php echo $large_heading;?></h3>
			<?php endif;?>
			
			<?php if( $copy = get_sub_field('copy') ):?>
				<div class="copy-wrap"><?php echo $copy;?></div>
			<?php endif;?>			
			
			<?php 
			$link = get_sub_field('link_button');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			<div class="btn-wrap text-center">
			    <a class="button outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</div>
			<?php endif; ?>
			
			</div>
		</div>
	</div>
</div>