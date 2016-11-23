 <?php the_content(); ?>
 <div class="job-gradient">
        <div class="wrapper">
            <section class="sub-page-header">
                <h2><?php the_field('job_title--header'); ?></h2>
                <div class="job-subheader">
                    <?php if( have_rows('job_info_header') ): ?>
                        <div class="sub-row">
                        <?php while( have_rows('job_info_header') ): the_row();

                            $industry = get_sub_field('job_industry');
                            $service = get_sub_field('job_service');
                            $type = get_sub_field('job_type');
                        ?>
                        <p><strong>Industry:</strong>
                            <?php if( $industry ): ?>
                                <?php echo $industry; ?>
                            <?php endif; ?>
                            <br>
                        <strong>Service:</strong>
                            <?php if( $service ): ?>
                                <?php echo $service; ?>
                            <?php endif; ?>
                            <br>
                        <strong>Type:</strong>
                            <?php if( $type ): ?>
                                <?php echo $type; ?>
                            <?php endif; ?>
                        </p>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if( have_rows('job_info_header_2') ): ?>
                        <div class="sub-row">
                        <?php while( have_rows('job_info_header_2') ): the_row();

                            $seniority = get_sub_field('job_seniority');
                            $location = get_sub_field('job_location');
                        ?>
                        <p><strong>Seniority:</strong>
                            <?php if( $seniority ): ?>
                                <?php echo $seniority; ?>
                            <?php endif; ?>
                            <br>
                            <strong>Location:</strong>
                            <?php if( $location ): ?>
                                <?php echo $location; ?>
                            <?php endif; ?>
                        </p>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
            </section>

            <section class="location-info">
                <?php if( have_rows('job_info') ): ?>
                <div class="job-text text--for wow fadeInUp">
                    <?php while( have_rows('job_info') ): the_row();

                        $skills = get_sub_field('job_skills');
                        $education = get_sub_field('job_education');
                        $experience = get_sub_field('job_experience');
                        $description = get_sub_field('job_description');
                        $duties = get_sub_field('job_duties');
                    ?>
                    <strong>Skills</strong>
                    <hr>
                    <?php if( $skills ): ?>
                        <p><?php echo $skills; ?></p>
                    <?php endif; ?>
                    <strong>Education</strong>
                    <hr>
                    <?php if( $education ): ?>
                        <p><?php echo $education; ?></p>
                    <?php endif; ?>
                    <strong>Experience</strong>
                    <hr>
                    <?php if( $experience ): ?>
                        <p><?php echo $experience; ?></p>
                    <?php endif; ?>
                    <strong>Description</strong>
                    <hr>
                    <?php if( $description ): ?>
                        <p><?php echo $description; ?></p>
                    <?php endif; ?>
                    <strong>Essential Duties &amp; Responsibilities</strong>
                    <hr>
                    <?php if( $duties ): ?>
                        <p><?php echo $duties; ?></p>
                    <?php endif; ?>
                <?php endwhile; ?>
                </div>
                <?php endif; ?>
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







