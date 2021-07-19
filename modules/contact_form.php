<div class="contact_form section">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
				
				<h2><?php the_sub_field('heading');?></h2>

				<?php $form_id = get_sub_field('gravity_form_id');?>
				<?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="" field_values=""]');?>
			
			</div>
		</div>
	</div>
</div>