<?php
/*
Template Name: FAQs
*/
?>

<?php get_template_part('templates/header'); ?>

	<div class="content-flex">
		<div class="sub-navi">
        <?php wp_nav_menu(array('menu' => 'sub nav', 'container_class' => 'sidebar')); ?>

</div><!--sub-navi-->
		<div class="centered">
<h1><?php the_title(); ?></h1>

<div class="filtering">
<input type="text" name="faq-search" id="faqSearch" class="faq-search" placeholder="Search" />

<select name="faq_filter" id="faq_filter">
<option value="0" selected="selected">Category</option> 
<option value="1">Streetcar Operations</option>
<option value="2">Streetcar Vehicle</option>
<option value="3">Streetcar Conduct</option>
</select>
</div><!--filtering-->

<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
<?php endwhile; ?>


<div class="faqs">

      <?php 
$catquery =  new WP_Query(array(
  'post_type' => 'faq',
  'posts_per_page' => 99999,
   'order'=>'ASC'
) ); 
?>  
<?php while ( $catquery->have_posts() ) : $catquery->the_post(); ?>
 <?php  $terms = get_the_terms($post->ID, 'faqs'); ?>

 <?php foreach ( $terms as $term ) {
?>
<div class="question <?php echo $term->slug ?> full">
<?php } ?>
	<h2><?php the_title(); ?></h2>

<div class="answer">
	<?php the_content(); ?>
</div><!--answer-->
</div><!--question-->
                  <?php endwhile; ?>

</div><!--faq-h-->
	<?php wp_reset_query(); ?>


</div><!--centered-->
</div><!--content-flex-->



<?php get_template_part('templates/footer'); ?>