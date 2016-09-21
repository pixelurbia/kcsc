<?php get_template_part('templates/header'); ?>

<?php 

    $tag = get_queried_object();

$catquery =  new WP_Query(array(
	'post_type' => 'manufacturer',
	'posts_per_page' => 9999,
	'tag' => $tag->slug,
   'orderby' => 'date', 
   'order'=>'DESC'
) ); 

?>
<div class="manu-listing">
<div class="contentwrap">
<ul>
<?php if ( $catquery->have_posts() ) : while ( $catquery->have_posts() ) : $catquery->the_post(); ?>

<li>
 <a class="manubox" href="#<?php the_field('manufacturer_id'); ?>">
<div class="manu-box">
         <h3><?php the_title(); ?> </h3>
         </div><!--manu-box-->          
 <?php endwhile; ?>
 </a>  

 <?php else: ?>
  <div class="no-results">
  <h2> We're sorry but there doesn't seem to be anything available matching your search.</h2>
  <h3>Contact a sales representative for further inquires.</h3><br>
  <a class="btn" href="/contact"><p>Contact Us</p></a>
  </div>
  <?php endif; ?>

 <div class="hiddenstaff"> 
              <?php wp_reset_query(); ?> 
              <?php 
    $tag = get_queried_object();
$catquery =  new WP_Query(array(
	'post_type' => 'manufacturer',
	'posts_per_page' => 9999,
	'tag' => $tag->slug,
   'orderby' => 'date', 
   'order'=>'DESC'
) ); ?>
<?php while ( $catquery->have_posts() ) : $catquery->the_post();   ?>  

       <div id="<?php the_field('manufacturer_id'); ?>"class="memberbox" >
       <div class="lightbox-content">
		<?php
     	 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) );
            ?>
            <img src="<?php echo $src[0] ?>" alt="<?php the_title(); ?>"/>
            <div class="lb-content-in">
            <?php the_content(); ?>
            <a class="btn" href="http://<?php the_field('manufacturer_link')?>" target="_blank"><p>Learn More</p></a>
           </div><!--lb-content-in-->
           </div><!--lightbox-content-->
</div>
 <?php endwhile; ?>

</li>
</ul>

</div><!--contentwrap-->
</div><!--manu-listing-->

<?php get_template_part('templates/footer'); ?>