<?php the_content(); ?>
    <div class="apply-page-bg">
        <div class="wrapper">
            <section class="page-header">
                <h1>Apply Now</h1>
                <p>for Now or Later</p>
            </section>
            <button class="form-toggle">
                Press here
            </button>
            <div class="show-form">
                <div class="close">
                    <i class="fa fa-times"></i>
                </div>
                <div class="sf-form">
                    <?php echo do_shortcode("[ninja_form id=11]"); ?>
                </div>
            </div>
        </div>
        <section class="eeo">
            <div class="wrapper">
                <p><?php the_field('eeo'); ?></p>
            </div>
        </section>
    </div>