<?php the_content(); ?>

<div id="careerstest" class="main">

    <section class="openings" id="openings">
        <div class="wrapper">
            <h3>Current Openings</h3>
            <h6>Filter</h6>
            <div id="jobfilters">

              <div class="job-ui-group">
                <h3>Industry</h3>
                <div class="job-button-group js-radio-button-group" data-filter-group="color">
                  <button class="job-button is-checked" data-filter="">any</button>
                  <button class="job-button" data-filter=".fintech">fintech</button>
                  <button class="job-button" data-filter=".healthtech">healthtech</button>
                  <button class="job-button" data-filter=".hightech">hightech</button>
                </div>
              </div>

              <div class="job-ui-group">
                <h3>Service</h3>
                <div class="job-button-group js-radio-button-group" data-filter-group="size">
                  <button class="job-button is-checked" data-filter="">any</button>
                  <button class="job-button" data-filter=".agiledata">agiledata</button>
                  <button class="job-button" data-filter=".rtech">rtech</button>
                  <button class="job-button" data-filter=".databridge">databridge</button>
                  <button class="job-button" data-filter=".connect">connect</button>
                </div>
              </div>

            </div>
            <div id="jobresults">
                <?php $loop = new WP_Query( array( 'post_type' => 'job-post', 'posts_per_page' => -1 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="jobitem <?php the_field('job_class'); ?>">
                    <h4><?php the_field('job_title--header'); ?></h4>
                    <ul>
                        <li><strong>Industry:</strong> <?php the_field('job_industry'); ?></li>
                        <li><strong>Type:</strong> <?php the_field('job_type'); ?></li>
                        <li><strong>Seniority:</strong> <?php the_field('job_seniority'); ?></li>
                    </ul>
                    <hr style="margin: 0 auto;width:95%;display:block;outline:0;height:1px;border:0;border-top:1px solid rgba(0,0,0,0.1)">
                    <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

</div>

