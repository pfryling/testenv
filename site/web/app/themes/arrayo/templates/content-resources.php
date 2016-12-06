<?php the_content(); ?>
    <div class="blog">
        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('page_header'); ?></h1>
                <p style="margin-bottom:68px"><?php the_field('page_subheader'); ?></p>
            </section>
            <div id="blogfilters">
              <button data-filter="*">All</button>
              <button data-filter=".c_fintech">FinTech</button>
              <button data-filter=".c_healthtech">HealthTech</button>
              <button data-filter=".c_hightech">HighTech</button>
              <button data-filter=".c_press">Press Releases</button>
            </div>

        <div id="blogcontainer">
            <?php $loop = new WP_Query( array( 'post_type' => 'resource', 'posts_per_page' => -1 ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="blogitem <?php the_field('blog_class'); ?>" data-category="<?php the_field('blog_class'); ?>">
                <div class="blog-drpdwn">
                    <?php the_field('pr_cs'); ?>
                </div>
                <h3 class="blogtitle"><?php the_field('post_title'); ?></h3>
                <?php the_field('post_desc'); ?>
                <div class="link">
                    <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <div style="padding-bottom:68px">&nbsp;</div>
    </div>
</div>
        <section class="contact-footer" id="contact">
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