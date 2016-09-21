<?php get_template_part('templates/header'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() ) {?>

		<div class="featured">
			<div class="image">
	<?php the_post_thumbnail();?>
	</div><!--image-->
	</div><!--featured-->

	<?php }
else {
	
}
?>
			<div class="content-flex no-pad">
				<div class="centered">

					<h1><?php the_title(); ?></h1>	
					
				</div><!--centered-->
			</div><!--full-->

		<div class="content-flex">
				<div class="centered">

					<?php the_content(); ?>
					<?php endwhile; ?>

				</div><!--centered-->
			</div><!--full-->


<?php get_template_part('templates/footer'); ?>