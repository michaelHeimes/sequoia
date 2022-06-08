<header class="article-header banner has-bg">
	<div class="bg color-bg"></div>
	<div class="grid-container fluid">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner has-bg">
					<div class="grid-x grid-padding-x">
						<div class="left cell small-12 tablet-5 xlarge-4">
							<div class="pt-wrap grid-x align-middle has-bg">
								<h1 class="page-title"><?php the_field('ad_heading', 'option');?></h1>
								<?php 
								$image = get_field('red_theme_icon', 'option');
								if( !empty( $image ) ): ?>
								<div class="banner-icon-wrap text-center">
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif;?>
							</div>
						</div>
						<div class="right cell small-12 tablet-7 xlarge-8 has-bg">
							<?php 
							$image = get_field('ad_background_image', 'option');
							if( !empty( $image ) ): ?>
								<img class="hide-for-tablet" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<div class="bg show-for-tablet" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header> <!-- end article header -->