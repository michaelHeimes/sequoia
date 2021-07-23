<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>
	
	<?php if ( get_row_layout() == 'contact_form' ) : 
	
		get_template_part('modules/contact_form');
	
	endif;?>

	<?php if ( get_row_layout() == 'copy_with_dual_heading_styles' ) : 
	
		get_template_part('modules/copy_with_dual_heading_styles');
	
	endif;?>

	<?php if ( get_row_layout() == 'recent_news' ) : 
	
		get_template_part('modules/recent_news');
	
	endif;?>

	<?php if ( get_row_layout() == 'location_and_contact_info' ) : 
	
		get_template_part('modules/location_and_contact_info');
	
	endif;?>

	<?php if ( get_row_layout() == 'services_grid' ) : 
	
		get_template_part('modules/services_grid');
	
	endif;?>

	<?php if ( get_row_layout() == 'slider' ) : 
	
		get_template_part('modules/utility-slider');
	
	endif;?>

	<?php if ( get_row_layout() == 'team_members' ) : 
	
		get_template_part('modules/team_members');
	
	endif;?>

	<?php if ( get_row_layout() == 'testimonial_slider' ) : 
	
		get_template_part('modules/testimonial_slider');
	
	endif;?>

	<?php if ( get_row_layout() == 'three_column_stats' ) : 
	
		get_template_part('modules/three_column_stats');
	
	endif;?>

	<?php if ( get_row_layout() == 'two_column_list' ) : 
	
		get_template_part('modules/two_column_list');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>

