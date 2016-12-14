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
                  <button class="job-button is-checked" data-filter="">Any</button>
                  <button class="job-button" data-filter=".fintech">Financial Services</button>
                  <button class="job-button" data-filter=".healthtech">Life Sc. &amp; Healthcare</button>
                  <button class="job-button" data-filter=".hightech">Technology</button>
                </div>
              </div>

              <div class="job-ui-group">
                <h3>Domain</h3>
                <div class="job-button-group js-radio-button-group" data-filter-group="size">
                  <button class="job-button is-checked" data-filter="">Any</button>
                  <button class="job-button" data-filter=".agiledata">Data Science</button>
                  <button class="job-button" data-filter=".rtech">Regulatory &amp; Risk</button>
                  <button class="job-button" data-filter=".databridge">Data Gov. &amp; Visual.</button>
                  <button class="job-button" data-filter=".connect">Internet of Things</button>
                </div>
              </div>

            </div>
            <div id="jobresults">
                <?php $loop = new WP_Query( array( 'post_type' => 'job-post', 'posts_per_page' => -1 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="jobitem <?php the_field('job_class'); ?>">
                    <h3><?php the_field('job_title--header'); ?></h3>
                    <ul>
                        <li><strong>Industry:</strong> <?php the_field('job_industry'); ?></li>
                        <li><strong>Type:</strong> <?php the_field('job_type'); ?></li>
                        <li><strong>Seniority:</strong> <?php the_field('job_seniority'); ?></li>
                    </ul>
                    <div class="link">
                        <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

</div>

