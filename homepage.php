<?php
/*
Template Name: Home
*/
?>

<?php get_template_part('templates/header'); ?>



<div class="hero">
<div class="line"></div><!--line-->
<div class="contentwrap">
<h1>KC Streetcar is here. <br>Ride on!
<a class="play" href="https://vimeo.com/144796790" target="_blank">Play Video</a>
</h1>
<div class="streetcar">
<img src="wp-content/themes/kcsc/images/streetcar.png"/>
</div><!--streetcar-->
</div><!--contentwrap-->
</div><!--hero-->

<?php get_template_part('templates/twitter'); ?>

<div class="welcome">
<div class="contentwrap">
<h1>Welcome to the Streetcar</h1>

<?php

// check if the repeater field has rows of data
if( have_rows('welcome') ):

 	// loop through the rows of data
    while ( have_rows('welcome') ) : the_row(); ?>

	<div class="two">
        <img src="<?php the_sub_field('icon');?>"/>
        <a href="<?php the_sub_field('link');?>"> <h2><?php the_sub_field('headline');?></h2></a>
</div><!--two-->
  <?php   endwhile;

else :

    // no rows found

endif;

?>
</div><!--contentwrap-->
</div><!--welcome-->

<div class="faq-h">
<div class="contentwrap">
<h1>Streetcar FAQs</h1>
      <?php 
$catquery =  new WP_Query(array(
  'post_type' => 'faq',
  'posts_per_page' => 3,
   'order'=>'ASC'
) ); 
?>  
<div class="half">
<?php while ( $catquery->have_posts() ) : $catquery->the_post(); ?>
<div class="question">
	<p><?php the_title(); ?></p>

<div class="answer">
	<?php the_content(); ?>
</div><!--answer-->
</div><!--question-->
                  <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                  </div><!--half-->
      <?php 
$catquery =  new WP_Query(array(
  'post_type' => 'faq',
  'posts_per_page' => 3,
  'offset' => 3,
   'order'=>'ASC'
) ); 
?>  
<div class="half no-margin">
<?php while ( $catquery->have_posts() ) : $catquery->the_post(); ?>
<div class="question">
  <p><?php the_title(); ?></p>

<div class="answer">
  <?php the_content(); ?>
</div><!--answer-->
</div><!--question-->
                  <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
</div><!--half-->
<div class="cta">
                <a href="/faqs" class="btn plus"><p>More FAQs</p></a>
</div><!--cta-->
</div><!--contentwrap-->
</div><!--faq-h-->
	<?php wp_reset_query(); ?>


<div class="social-media">
<h1 class="navy">Follow #KCStreetcar</h1>

<?php 
// require "templates/insta/src/instagram.php"; 
// require "templates/insta/src/instagramException.php"; 
// use MetzWeb\Instagram\Instagram;

// $instagram = new Instagram(array(
//     'apiKey'      => 'ccc2728eef1146a39f1dff24607c34cc',
//     'apiSecret'   => '12809804b4724d79834edfd833d0de56',
//     'apiCallback' => 'http://kcsc.interactivedept.co'
// ));

// // var_dump($instagram);
// // echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
// $code = $_GET['b255b3267cb84127bdff4bafb2be5825'];
// $data = $instagram->getOAuthToken($code);

// echo 'Your username is: ' . $data->user->username;

// var_dump($data);

// call back and get code durh make new module

 ?>
 <?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(111);} ?>

<div class="social-follow">
                <a href="https://twitter.com/KCStreetcar/" class="btn twitter" target="_blank"><p>Twitter</p></a>
                <a href="https://www.facebook.com/KCStreetcar" class="btn facebook" target="_blank"><p>Facebook</p></a>
                <a href="https://instagram.com/kCStreetcar" class="btn insta" target="_blank"><p>Instagram</p></a>
                <a href="https://vimeo.com/user44005323" class="btn vimeo" target="_blank"><p>Vimeo</p></a>
                </div><!--social-follow-->

</div><!--social-media-->
  <?php wp_reset_query(); ?>

<div class="fun-facts">
<h1>Streetcar Fun Facts</h1>


<div class="pop-stops">
<div class="contentwrap">
<?php

// check if the repeater field has rows of data
if( have_rows('popular_stops') ):

  // loop through the rows of data
    while ( have_rows('popular_stops') ) : the_row(); ?>

  <div class="two">
        <img src="<?php the_sub_field('graph_image');?>"/>

</div><!--pop-stops-->
<div class="stop-info mobile">
         <h2><?php the_sub_field('stop_name');?></h2>
</div><!--two-->
 <?php   endwhile;

else :

    // no rows found

endif;

?>
</div>
<div class="contentwrap">
<?php

// check if the repeater field has rows of data
if( have_rows('popular_stops') ):

  // loop through the rows of data
    while ( have_rows('popular_stops') ) : the_row(); ?>

<div class="stop-info">
         <h2><?php the_sub_field('stop_name');?></h2>
</div><!--two-->
  <?php   endwhile;

else :

    // no rows found

endif;

?>
</div>
</div><!--contentwrap-->
   <!--<a href="" class="btn read"><p>Read More</p></a>-->
</div><!--fun-facts-->

<div class="happenings">
<div class="contentwrap">
<h1>Happenings on the Line</h1>
      <?php 
$catquery =  new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 4,
   'order'=>'DESC'
) ); 
?>  
<?php while ( $catquery->have_posts() ) : $catquery->the_post(); ?>
	<div class="blogger">
	<div class="blog-b">
	<div class="date">
	<?php echo get_the_date('n/d'); ?> 
	</div><!--date-->

	<div class="title">
	<p><?php the_title(); ?></p>
	</div><!--title-->
	</div><!--blog-b-->
	<a href="<?php the_permalink();?>">read more »</a>
	</div><!--blogger-->
<?php endwhile; ?>
</div><!--contentwrap-->
</div><!--happenings-->

<?php get_template_part('templates/footer'); ?>