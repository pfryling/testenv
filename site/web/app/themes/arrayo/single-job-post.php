<?php
/**
 * Template Name: Jobs
 */
?>

<?php
 $query = new WP_Query( array('post_type' => 'job-post', 'posts_per_page' => 1 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php get_template_part('templates/content', 'job'); ?>
<?php endwhile; ?>
