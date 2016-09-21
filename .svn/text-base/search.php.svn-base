

<?php get_template_part('templates/header'); ?>

	<div class="content-flex searching">
				<div class="centered">


<?php if ( have_posts() ): ?>
			<h1>Search results for: "<?php echo get_search_query(); ?>"</h1>



		<ul class="feed">
		<?php while ( have_posts() ) : the_post(); ?>
			<li class="search clearfix">
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

					<?php the_excerpt(); ?>
				</article>
			</li>
		<?php endwhile; ?>
		</ol>
		<?php else: ?>
		<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
		<?php endif; ?>


</div><!-- /content -->
</div><!--contentwrap-->

</div><!--single-e-->

<?php get_template_part('templates/footer'); ?>
