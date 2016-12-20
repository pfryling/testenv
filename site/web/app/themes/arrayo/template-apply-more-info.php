<?php
/**
 * Template Name: Apply- More Info
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'apply-more-info'); ?>
<?php endwhile; ?>
