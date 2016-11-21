 <?php the_content(); ?>
 <div class="job-gradient">
        <div class="wrapper">
            <section class="sub-page-header">
                <h2><?php the_field('job_title--header'); ?></h2>
                <div class="job-subheader">
                    <div class="sub-row">
                        <p><strong>Industry</strong> <?php the_field('job_industry'); ?><br>
                        <strong>Service:</strong> <?php the_field('job_service'); ?><br>
                        <strong>Type:</strong> <?php the_field('job_type'); ?></p>
                    </div>
                    <div class="sub-row">
                        <p><strong>Seniority:</strong> <?php the_field('job_seniority'); ?><br>
                        <strong>Location:</strong> <?php the_field('job_location'); ?></p>
            </section>

            <section class="location-info">
                <div class="job-text text--for wow fadeInUp">
                    <strong>Skills</strong>
                    <hr>
                    <p><?php the_field('job_skills'); ?></p>
                    <strong>Education</strong>
                    <hr>
                    <p><?php the_field('job_education'); ?></p>
                    <strong>Experience</strong>
                    <hr>
                    <p><?php the_field('job_experience'); ?></p>
                    <strong>Description</strong>
                    <hr>
                    <p><?php the_field('job_description'); ?></p>
                    <strong>Essential Duties &amp; Responsibilities</strong>
                    <hr>
                    <p><?php the_field('job_duties'); ?></p>
                </div>
            </section>
        </div>

        <section class="apply-cta">
            <div class="wrapper">
                <h3><?php the_field('job_title--header'); ?></h3>
                <p>Submit CV now.</p>
                <button id="app-toggle" class="app-toggle">Apply Now</button>
                <div id="app-reveal">
                  <?php echo do_shortcode("[ninja_form id=7]"); ?>
                </div>
            </div>
        </section>

        <section class="eeo">
        <div class="wrapper">
            <p><?php the_field('eeo'); ?></p>
        </div>
    </section>
