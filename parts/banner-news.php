<div class="banner has-bg">
	<div class="bg" style="background-image: url(<?php the_field('na_background_image', 'option');?>)"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 text-center">
				<h1><?php the_field('na_heading', 'option');?></h1>
			</div>
		</div>
	</div>
	
	<?php 
	$image = get_field('red_theme_icon', 'option');
	if( !empty( $image ) ): ?>
	<div class="icon-wrap text-center">
	    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	</div>
	<?php endif; ?>

</div>