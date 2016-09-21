
<?php while(the_flexible_field("flex_field")):  ?>
 
	<?php if(get_row_layout() == "content_only"):  ?>


			<div class="content-flex">
				<div class="centered">
			<?php the_sub_field('content') ?>
				</div><!--centered-->
			</div><!--full-->
	
 
	<?php elseif(get_row_layout() == "half_content_half_image"):  ?>

		<div class="content-flex other-h">
		<div class="content-half">
				<?php the_sub_field('content') ?>
	</div><!--cont-->

<div class="image-flex">
		<img src="<?php the_sub_field('image') ?>"/>
</div>
	</div><!--content-flex-->

	


	<?php elseif(get_row_layout() == "full_width_image"): ?>

		 <div class="full">
			<img src="<?php the_sub_field('image') ?>"/>
			</div><!--half-->

	

	<?php endif; ?>
 
<?php endwhile; ?>