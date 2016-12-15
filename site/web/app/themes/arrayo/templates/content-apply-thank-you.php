<?php the_content(); ?>
    <div class="apply-page-bg">
        <div class="wrapper">
            <section class="page-header">
                <h1>Apply Now</h1>
                <p>for Now or Later</p>
            </section>
        <?php echo do_shortcode("[ninja_form id=11]"); ?>
        </div>
        <section class="eeo">
            <div class="wrapper">
                <p><?php the_field('eeo'); ?></p>
            </div>
        </section>
    </div>