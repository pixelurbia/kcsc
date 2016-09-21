<?php
/*
Template Name: Route Map
*/
?>

<?php get_template_part('templates/header'); ?>
		<div class="content-flex map-content">
				<div class="centered">
					<br><br>
					<h1><?php the_title(); ?></h1>	
					<br>
					<?php the_content(); ?>
					
				</div>
			</div>  

<div class="map-page">

<div class="mobile-key-btn left">
	<p>Key</p> <i></i>
</div>
<div class="mobile-loc-btn">
<p>All Locations<i></i></p>
	<div class="active-info"></div>
</div>

<?php echo do_shortcode("[codespacing_progress_map]"); ?>

<?php get_template_part('templates/custom'); ?>

</div>
<?php get_template_part('templates/footer'); ?>