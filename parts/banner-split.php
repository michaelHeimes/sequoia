<header class="article-header banner has-bg">
	<div class="bg color-bg"></div>
	<div class="grid-container fluid">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner has-bg">
					<div class="grid-x grid-padding-x">
						<div class="left cell small-12 tablet-5 xlarge-4">
							<?php if (is_front_page()):?>
								<div class="pt-wrap grid-x align-bottom">
									<h1 class="page-title"><?php the_field('heading');?></h1>
								</div>
								<?php 
									$service_navigation = get_field('service_navigation');
									if($service_navigation):?>
									<div class="service-nav-dropdown">
										<button class="button">
											<span>How We Can Help</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="10.765" height="6.797" viewBox="0 0 10.765 6.797">
											  <path id="Path_581" data-name="Path 581" d="M1815.5,3936.5l4.675,4.675-4.675,4.676" transform="translate(3946.558 -1814.794) rotate(90)" fill="none" stroke="#fff" stroke-width="2"/>
											</svg>
										</button>
										<ul class="links menu submenu vertical">
										<?php 
											foreach($service_navigation as $serv_nav):
											$page = $serv_nav['page'];
											$permalink = get_permalink( $page->ID );
											//var_dump($page);
										?>
											<li>
												<a class="m-italic text-center" href="<?php echo esc_url( $permalink ); ?>"><?php echo $page->post_title;?></a>
											</li>
											<?php endforeach;?>
										</ul>
									</div>
								<?php endif;?>
							<?php else:?>
							<div class="pt-wrap grid-x align-middle has-bg">
								<h1 class="page-title">
									<?php if ( $title = get_field('alternative_page_title')):?>
										<?php echo $title;?>
									<?php else:?>
										<?php the_title(); ?>
									<?php endif;?>
								</h1>
								<?php if( get_field('color_theme') == 'green'):?>
									<?php 
									$image = get_field('red_theme_icon', 'option');
									if( !empty( $image ) ): ?>
									<div class="banner-icon-wrap text-center">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif;?>
								<?php endif;?>
								
								<?php if( get_field('color_theme') == 'blue'):?>
									<?php 
									$image = get_field('blue_theme_icon', 'option');
									if( !empty( $image ) ): ?>
									<div class="banner-icon-wrap text-center">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif;?>
								<?php endif;?>
								
								<?php if( get_field('color_theme') == 'purple'):?>
									<?php 
									$image = get_field('purple_theme_icon', 'option');
									if( !empty( $image ) ): ?>
									<div class="banner-icon-wrap text-center">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif;?>
								<?php endif;?>
								
								<?php if( get_field('color_theme') == 'red'):?>
									<?php 
									$image = get_field('red_theme_icon', 'option');
									if( !empty( $image ) ): ?>
									<div class="banner-icon-wrap text-center">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif;?>
								<?php endif;?>
							</div>
							<?php endif;?>
							<?php 
							$link = get_field('button_link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
							<div class="btn-wrap text-center">
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</div>
							<?php endif; ?>
						</div>
						<div class="right cell small-12 tablet-7 xlarge-8 has-bg">
							<?php if (is_front_page()):
								$banner_images = get_field('background_images');
								if( $banner_images ):
									$image = $banner_images[array_rand($banner_images)];?>
									<img class="hide-for-tablet" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<div class="bg show-for-tablet" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
								<?php endif;?>
							<?php else:?>
							
								<?php 
								$image = get_field('background_image');
								if( !empty( $image ) ): ?>
									<img class="hide-for-tablet" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								<div class="bg show-for-tablet" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
								</div>
								
							<? endif;?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header> <!-- end article header -->