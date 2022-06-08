<?php $obj = get_queried_object(); //var_dump($obj);?>
<div class="banner default dark-green-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 text-center">
				<h1><?php if( $obj->name == 'news_post' || $obj->post_type == 'news_post' ):?>
						News
					<?php else:
						if ( $title = get_field('alternative_page_title')):
							echo $title;
						else:
							the_title();
						endif;
					endif;?>
				</h1>
			</div>
		</div>
	</div>
</div>