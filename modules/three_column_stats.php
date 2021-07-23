<div class="three_column_stats section">
	<div class="grid-container">
		<div class="cell small-12">
			<div class="inner">
				
				<div class="grid-x grid-padding-x text-center small-up-1 medium-up-2 tablet-up-3">
					
					<?php if( have_rows('stat_1') ):?>
					<div class="single-col cell">
						<?php while ( have_rows('stat_1') ) : the_row();?>	
						
						<div class="number fade-in-up"><span id="set-1">0</span></div>
					
						<?php if( $text = get_sub_field('text') ):?>
							<div class="text"><?php echo $text;?></div>
						<?endif;?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>
					
					<?php if( have_rows('stat_2') ):?>
					<div class="single-col cell">
						<?php while ( have_rows('stat_2') ) : the_row();?>	
						
						<div class="number fade-in-up"><span id="set-2">0</span></div>
					
						<?php if( $text = get_sub_field('text') ):?>
							<div class="text"><?php echo $text;?></div>
						<?endif;?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>
					
					<?php if( have_rows('stat_3') ):?>
					<div class="single-col cell">
						<?php while ( have_rows('stat_3') ) : the_row();?>	
						
						<div class="number fade-in-up"><span id="set-3">0</span></div>
					
						<?php if( $text = get_sub_field('text') ):?>
							<div class="text"><?php echo $text;?></div>
						<?endif;?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>

				</div>
			</div>
		</div>
	</div>
</div>