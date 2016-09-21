<?php
/*
Template Name: Blog
*/
?>
<?php get_template_part('templates/header'); ?>
<div class="blog">
<div class="contentwrap topper">
<h1>Happenings</h1>

<div class="cat-list">
<ul>
<li>
<a href="/category/events/">Events</a>
</li>
<li>
<a href="/media/">Media</a>
</li>
<li>
<a href="/category/news/">News</a>
</li>
</ul>

</div><!--cat-list-->
</div><!--contentwrap-->

<?php $b1 = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '99999', 'paged' => get_query_var('paged'))); $count = 0; ?>

	<div class="blog-posts">
	<div class="cinco">
	<?php while($b1->have_posts()) : $b1->the_post(); ?>
		<?php if($count == 0){ ?>
				<?php if ( has_post_thumbnail() ) {?>
<a href="<?php the_permalink();?>">
	<div class="featured">
			<div class="image">
	<?php the_post_thumbnail();?>
	</div><!--image-->
				<div class="content">
				<div class="contain">
				<h6><?php the_date('m.d.y'); ?></h6>
				<h2><?php the_title(); ?></h2>
				</div><!--contain-->
				</div><!--content-->
				</div><!--featured-->
				</a>
				<?php }
else {
	
}
?>
				<div class="blog-c">
				<div class="contain">
				<p><?php echo excerpt(55); ?></p>
				<a class="link" href="<?php the_permalink(' ') ?>"><p>Read More »</p></a>
				</div><!--contain-->
				</div><!--blog-c-->
			</div><!--cinco-->

		<?php } else { ?>
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
				</div><!--third-->
				</div><!--contentwrap-->
				</div><!--other quart-->
				<?php } ?>
	<?php $count++; endwhile; ?>
				</div><!--blog-posts-->
				</div><!--contentwrap-->
		
	<?php wp_reset_query(); ?>
	
		</div>
		</div><!--blog-->
					</div>

<?php get_template_part('templates/footer'); ?>
