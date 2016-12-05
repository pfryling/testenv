<?php
/**
 * Template Name: Resource
 */
?>

<?php
 $query = new WP_Query( array('post_type' => 'resource', 'posts_per_page' => 1 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php get_template_part('templates/content', 'resource'); ?>
<?php endwhile; ?>
