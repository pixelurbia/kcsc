<?php
/*
Template Name: Sponsors
*/
?>

<?php get_template_part('templates/header'); ?>
<div class="contentwrap">
<div class="sub-navi">
        <?php wp_nav_menu(array('menu' => 'sub nav', 'container_class' => 'sidebar')); ?>
 
</div><!--sub-navi-->
</div><!--contentwrap-->
<div class="content-flex logoers">
<div class="centered">
<h1>Sponsors</h1>
<?php

if( have_rows('sponsors') ):

    while ( have_rows('sponsors') ) : the_row();?>
<div class="logo-c">

    <img src="<?php the_sub_field('sponsor_logo'); ?>"/>
  </div><!--logo-c-->

    <?php endwhile;

else :


endif;

?>
</div><!--centered-->
</div><!--contentwrap-->



	<div class="content-flex">
		<div class="centered">
<h1><?php the_title();?></h1>

<?php get_template_part('templates/custom'); ?>

</div><!--centered-->
</div><!--content-flex-->




<?php get_template_part('templates/footer'); ?>