<?php while (have_posts()) : the_post(); ?>
<div class="blog-bg <?php the_field('industry'); ?>">
    <div class="wrapper">
        <section class="blog-header">
            <p class="drpdwn">
                <?php the_field('pr_cs'); ?> |
                <?php the_field('date'); ?>
            </p>
            <h1><?php the_field('post_title'); ?></h1>
        </section>
        <section class="blog-content">
            <p><?php the_field('content'); ?></p>
        </section>
    </div>
</div>
<section class="contact-footer wow fadeInUp" id="contact">
    <div class="wrapper">
        <div class="text">
            <h2>Ask Team Arrayo</h2>
            <p>The quest for efficiency has essentially shifted from the manual delivery of services to the design of highly automated and integrated digital systems. What’s your digital ambition? What’s your primary digital focus? What user experience do you envision?</p>
            <h5>Let's talk!</h5>
        </div>
        <div class="form">
            <?php echo do_shortcode("[ninja_form id=1]"); ?>
        </div>
    </div>
</section>
<?php endwhile; ?>