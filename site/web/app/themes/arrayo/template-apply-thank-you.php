<?php
/**
 * Template Name: Apply- Thank You
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'apply-thank-you'); ?>
<?php endwhile; ?>
