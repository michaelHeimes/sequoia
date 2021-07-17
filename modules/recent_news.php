<div class="recent-news section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-up-1 medium-up-2">
			
			<div class="cell gray-bg">
				<div class="inner">
					<h2><?php the_sub_field('small_heading');?></h2>
					<h3><?php the_sub_field('large_heading');?>
						<svg xmlns="http://www.w3.org/2000/svg" class="arrow-right" width="39.317" height="39.317" viewBox="0 0 39.317 39.317">
						  <g id="Group_584" data-name="Group 584" transform="translate(-0.456 0.622)">
						    <circle id="Ellipse_10" data-name="Ellipse 10" cx="19.659" cy="19.659" r="19.659" transform="translate(0.456 -0.621)" fill="#00733c"/>
						    <path id="Path_132" data-name="Path 132" d="M1815.5,3936.5l7.65,7.65-7.65,7.651" transform="translate(-1798.962 -3925.099)" fill="none" stroke="#fff" stroke-width="2"/>
						  </g>
						</svg>
					</h3>
				</div>
			</div>
			
			<?php			
			$args = array(  
		        'post_type' => 'news_post',
		        'post_status' => 'publish',
		        'posts_per_page' => 3, 
			    'order' => 'ASC'
			);
			
			$loop = new WP_Query( $args ); 
			
			    while ( $loop->have_posts() ) : $loop->the_post();
					get_template_part('parts/loop', 'news');
			    endwhile;
			
			    wp_reset_postdata();?>
		</div>
	</div>
</div>





