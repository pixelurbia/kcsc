
<?php get_template_part('templates/header'); ?>
<div class="blog">
<div class="contentwrap">
<h1><?php single_cat_title('', true);?></h1>

<?php 
    $args = array(
	
	'taxonomy'           => 'category',
	'walker'             => null
    );
    wp_list_categories( $args ); 
?>
</div><!--contentwrap-->

	<div class="blog-posts">
	  <?php while (have_posts()): ?>
      <?php the_post(); ?>
	
		<div class="other cinco">
		<div class="contentwrap">
				<?php if ( has_post_thumbnail() ) {?>
					<div class="third">
			<div class="imager">
	<?php the_post_thumbnail();?>
	</div><!--image-->
	</div><!--featured-->
	<?php }
else {
	
}
?>
				<div class="quart">
				<div class="contain-c">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<p><?php echo excerpt(20); ?></p>
				<a class="link" href="<?php the_permalink(' ') ?>"><p>Read More »</p></a>
				</div><!--contain-->
				</div><!--quart-->
				</div><!--contentwrap-->
				</div><!--other quart-->
				 <?php 
          endwhile;
          wp_reset_query(); // resets main query
      ?>
			
				</div><!--blog-posts-->

		</div><!--blog-->
					

<?php get_template_part('templates/footer'); ?>
