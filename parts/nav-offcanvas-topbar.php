<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
 
 $banner_style = get_field('banner_style');
 
?>

	<div class="top-bar-util">
		<div class="grid-container fluid">
			<div class="grid-x grid-padding-x align-middle">				
				<div class="left cell small-12 medium-shrink">
					<ul class="menu hide-for-tablet">
						
						<li class="logo mobile"><a href="<?php echo home_url(); ?>">
								
							<?php 
							$image = get_field('header_logo', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
											
						</a></li>
			
						
						<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
					
					</ul>			
				</div>
				<div class="right cell small-12 medium-auto text-right">
					<?php joints_utility_nav(); ?>
				</div>
			</div>
		</div>
	</div>

<div class="top-bar" id="top-bar-menu">

	<div class="top-bar-left float-left">
		<ul class="menu show-for-tablet">
			
			<li class="logo desktop"><a href="<?php echo home_url(); ?>">
					
				<?php 
				$image = get_field('header_logo', 'option');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
								
			</a></li>

			
			<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		
		</ul>
	</div>
	<div class="top-bar-right show-for-large">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="menu-toggle-wrap top-bar-right float-right hide-for-large">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a id="menu-toggle" data-toggle="off-canvas">MENU<span></span><span></span><span></span></a></li>
		</ul>
	</div>
</div>