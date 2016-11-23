<?php
/**
 * Template Name: Blog
 */
?>

<?php
 $query = new WP_Query( array('post_type' => 'blog', 'posts_per_page' => 1 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php get_template_part('templates/content', 'blog'); ?>
<?php endwhile; ?>
