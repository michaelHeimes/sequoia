<div class="services_grid section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x text-center small-up-1 medium-up-2 tablet-up-3">
			
			<?php if( have_rows('stat_1') ):?>
			<div class="cell">
				<?php while ( have_rows('stat_1') ) : the_row();?>	
				
				<div class="number"></div>
			
				<?php if( $text = get_sub_field('text') ):?>
					<div class="text"><?php echo $text;?></div>
				<?endif;?>
			
				<?php endwhile;?>
			</div>
			<?php endif;?>
			
			<?php if( have_rows('stat_2') ):?>
			<div class="cell">
				<?php while ( have_rows('stat_2') ) : the_row();?>	
				
				<div class="number"></div>
			
				<?php if( $text = get_sub_field('text') ):?>
					<div class="text"><?php echo $text;?></div>
				<?endif;?>
			
				<?php endwhile;?>
			</div>
			<?php endif;?>
			
			<?php if( have_rows('stat_3') ):?>
			<div class="cell">
				<?php while ( have_rows('stat_3') ) : the_row();?>	
				
				<div class="number"></div>
			
				<?php if( $text = get_sub_field('text') ):?>
					<div class="text"><?php echo $text;?></div>
				<?endif;?>
			
				<?php endwhile;?>
			</div>
			<?php endif;?>

		</div>
	</div>
</div>