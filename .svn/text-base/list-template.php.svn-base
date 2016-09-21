<?php
/*
Template Name: Listing
*/
?>

<?php get_template_part('templates/header'); ?>
<div class="contentwrap">
<div class="sub-navi">
<?php if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
  <ul>
    <?php echo $children; ?>
  </ul>
<?php } ?>
</div><!--sub-navi-->
</div><!--contentwrap-->


<?php get_template_part('templates/custom'); ?>



<?php get_template_part('templates/footer'); ?>