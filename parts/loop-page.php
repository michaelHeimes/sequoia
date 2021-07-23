<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header banner has-bg">
		<div class="bg" style="background-image: url(<?php the_field('background_image');?>)"></div>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					
					<?php if (is_front_page()):?>
					
						<h1 class="page-title text-center">
							<?php the_field('heading');?>
						</h1>
					
					<?php else:?>
					
					<h1 class="page-title text-center">
						<?php if ( $title = get_field('alternative_page_title')):?>
						
							<?php echo $title;?>
						
						<?php else:?>
						
							<?php the_title(); ?>
						
						<?php endif;?>
					</h1>
					
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
			</div>
		</div>
	</header> <!-- end article header -->	
	
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
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    					
</article> <!-- end article -->