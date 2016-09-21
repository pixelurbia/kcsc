<?php
/*
Template Name: Careers
*/
?>

<?php get_template_part('templates/header'); ?>

	<div class="content-flex">
	<div class="sub-navi">
        <?php wp_nav_menu(array('menu' => 'sub nav', 'container_class' => 'sidebar')); ?>

</div><!--sub-navi-->
		<div class="centered">
<h1><?php the_title(); ?></h1>


<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
<?php endwhile; ?>


<div class="faqs">

      <?php 
$catquery =  new WP_Query(array(
  'post_type' => 'careers',
  'posts_per_page' => 99999,
   'order'=>'ASC'
) ); 
?>  
<?php while ( $catquery->have_posts() ) : $catquery->the_post(); ?>

<div class="question full">

	<h2><?php the_title(); ?></h2>

<div class="answer">
	<?php the_content(); ?>
<div class="centered">
<a class="btn plus" href="<?php the_field('button_link')?>"><p>Apply Now</p></a>
</div><!--centered-->
</div><!--answer-->
</div><!--question-->
                  <?php endwhile; ?>

</div><!--faq-h-->
	<?php wp_reset_query(); ?>


</div><!--centered-->
</div><!--content-flex-->



<?php get_template_part('templates/footer'); ?>