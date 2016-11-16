<?php
/**
 * Template Name: Handler
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'handler'); ?>
<?php endwhile; ?>
