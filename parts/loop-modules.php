<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'copy_with_dual_heading_styles' ) : 
	
		get_template_part('modules/copy_with_dual_heading_styles');
	
	endif;?>

	<?php if ( get_row_layout() == 'mailing_list_signup' ) : 
	
		get_template_part('modules/mailing_list_signup');
	
	endif;?>

	<?php if ( get_row_layout() == 'recent_news' ) : 
	
		get_template_part('modules/recent_news');
	
	endif;?>

	<?php if ( get_row_layout() == 'services_grid' ) : 
	
		get_template_part('modules/services_grid');
	
	endif;?>

	<?php if ( get_row_layout() == 'slider' ) : 
	
		get_template_part('modules/slider');
	
	endif;?>

	<?php if ( get_row_layout() == 'three_column_stats' ) : 
	
		get_template_part('modules/three_column_stats');
	
	endif;?>

	<?php if ( get_row_layout() == 'two_column_list' ) : 
	
		get_template_part('modules/three_column_stats');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>

