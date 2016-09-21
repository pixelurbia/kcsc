
<?php get_template_part('templates/header'); ?>
<div class="contentwrap">
<div class="sub-navi">
        <?php wp_nav_menu(array('menu' => 'sub nav', 'container_class' => 'sidebar')); ?>

</div><!--sub-navi-->
</div><!--contentwrap-->

			<div class="content-flex">
				<div class="centered">
					<h1><?php the_title(); ?></h1>	
					
				</div><!--centered-->
			</div><!--full-->

			

<?php get_template_part('templates/custom'); ?>


<?php get_template_part('templates/footer'); ?>