<div class="team_members faqs gray-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1">
				
			<?php if( $small_heading = get_sub_field('small_heading') ):?>
				<h2 class="small-heading font-alt text-center"><?php echo $small_heading;?></h2>
			<?php endif;?>

			<?php if( $large_heading = get_sub_field('large_heading') ):?>
				<h3 class="xl-heading text-center"><?php echo $large_heading;?></h3>
			<?php endif;?>
			
			<ul class="accordion" data-accordion>

				<?php 
					$faqs = get_sub_field('faqs');
					foreach($faqs as $faq):
					$question = $faq['question'];
					$answer = $faq['question'];
				?>
					<li class="accordion-item" data-accordion-item>
							
						<a href="#" class="accordion-title">
							<h2 class="h3"><?php echo $question;?></h2>
						</a>
						
						<div class="accordion-content large-copy" data-tab-content>
							<p><?php echo $answer;?></p>
						</div>

					</li>
				
				<?php endforeach;?>

			</ul>
			
			</div>
		</div>
	</div>
</div>