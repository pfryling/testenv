<?php the_content(); ?>
    <div class="bg-gradient--vert">
        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('careers--header'); ?></h1>
                <p><?php the_field('careers--subheader'); ?></p>
            </section>

            <section class="location-info  wow fadeInUp">
                <div class="text text--for">
                    <h5 class="for"><?php the_field('careers_box--header'); ?></h5>
                    <?php the_field('careers_box--text'); ?>
                    <div class="link">
                        <a href="/company" class="link-arrow">Why Arrayo
                            <i class="fa fa-arrow-circle-o-right"></i>
                        </a>
                    </div>
                    <div class="link">
                        <a href="#openings" class="link-arrow">Openings
                            <i class="fa fa-arrow-circle-o-right"></i>
                        </a>
                    </div>
                </div>
                <div class="card card--careers">
    <?php
        $recent_args = array(
            "post_type" => "job-post",
            "posts_per_page" => 1,
            "orderby" => "date",
            "order" => "DESC"
        ); ?>
        <?php $recent_posts = new WP_Query( $recent_args ); ?>
        <?php if ($recent_posts -> have_posts() ) : ?>
            <?php while ( $recent_posts -> have_posts() ) :
                $recent_posts -> the_post(); ?>
                 <h4 class="career"><?php the_title(); ?></h4>
                    <p class="first">
                            Industry: <?php the_field('job_industry'); ?><br>
                            Service: <?php the_field('job_service'); ?><br>
                            Type: <?php the_field('job_type'); ?><br>
                            Seniority: <?php the_field('job_seniority'); ?>
                        </p>
                        <hr>
                        <a class="link-arrow" href="<?php the_permalink(); ?>">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </section>
        </div>
    </div>
    <div class="wrapper">
        <section class="centered-bg--vert  wow fadeInUp">
            <div class="text-wrap">
                <h3><?php the_field('careers_bg--header'); ?></h3>
                <h5><?php the_field('careers_bg--subheader'); ?></h5>
                <p><?php the_field('careers_center--text'); ?></p>
                <button><a href="/fintech">Fintech</a></button>
                <button><a href="/healthtech">HealthTech</a></button>
                <button><a href="/hightech">HighTech</a></button>
            </div>
        </section>
    </div>
    <section class="careers-center-bg  wow fadeInUp">
        <div class="wrapper">
            <div class="careers-mid-box">
                <h3><?php the_field('careers_center--header'); ?></h3>
                <p class="light"><?php the_field('careers_center--subheader'); ?></p>
                <p class="small"><?php the_field('careers_center--intro'); ?><br>&nbsp;</p>
                <div class="icons-wrap">
                    <div class="sm-icon">
                        <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/blue-check.png" class=" wow bounceIn" data-wow-delay="0.1s">
                        <p class="small"><?php the_field('careers_center--icon1'); ?></p>
                    </div>
                    <div class="sm-icon">
                        <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/blue-check.png" class="wow bounceIn" data-wow-delay="0.2s">
                        <p class="small"><?php the_field('careers_center--icon2'); ?></p>
                    </div>
                    <div class="sm-icon">
                         <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/blue-check.png" class="wow bounceIn" data-wow-delay="0.3s">
                         <p class="small"><?php the_field('careers_center--icon3'); ?><br>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="wrapper">
    <section class="careers-testimonial wow fadeInUp">
            <div class="ct-left">
                <h5><?php the_field('testimonial_quote'); ?></h5>
                <p><strong><?php the_field('testimonial_author'); ?></strong><br><em><?php the_field('testimonial_business'); ?></em></p>
            </div>
            <div class="ct-right">
                <p><?php the_field('testimonial_right'); ?></p>
            </div>
    </section>
</div>

    <section class="office-slider">
        <div class="wrapper">
            <h4>Our offices</h4>
            <div id="location-slider" class="com-carousel owl-carousel owl-theme">
                 <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/r-tech-icon_1.svg" class="cta-icon">
                        <p><?php the_field('company_slider--rtech'); ?></p>
                        <div class="link">
                          <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/agiledata-icon_1.svg" class="cta-icon">
                        <p><?php the_field('company_slider--agiledata'); ?></p>
                        <div class="link">
                          <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/databridge-icon-solidblue.svg" class="cta-icon">
                        <p><?php the_field('company_slider--databridge'); ?></p>
                        <div class="link">
                          <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                   <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/connect-icon-solidblue.svg" class="cta-icon">
                        <p><?php the_field('company_slider--connect'); ?></p>
                        <div class="link">
                        <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                   </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="openings" id="openings">
        <div class="wrapper">
            <h3>Current Openings</h3>
            <h6>Filter | View all</h6>
                <form class="controls" id="Filters">
                  <fieldset class="filter-group checkboxes">
                    <h4>Shapes</h4>
                    <div class="checkbox">
                      <input type="checkbox" value=".square"/>
                      <label>Square</label>
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" value=".circle"/>
                      <label>Circle</label>
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" value=".tag_fintech"/>
                      <label>Triangle</label>
                    </div>
                  </fieldset>

                  <fieldset class="filter-group checkboxes">
                    <h4>Colours</h4>
                    <div class="checkbox">
                      <input type="checkbox" value=".white"/>
                      <label>White</label>
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" value=".green"/>
                      <label>Green</label>
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" value=".fintech"/>
                      <label>Blue</label>
                    </div>
                  </fieldset>

                  <fieldset class="filter-group search">
                    <h4>Search</h4>
                    <input type="text" placeholder="Search ..."/>
                  </fieldset>

                  <button id="Reset">Clear Filters</button>
                </form>

                <div id="Container" class="results">
                  <div class="fail-message"><span>No items were found matching the selected filters</span></div>

                  <div class="mix fintech"></div>

                  <div class="gap"></div>
                  <div class="gap"></div>
                  <div class="gap"></div>
                  <div class="gap"></div>
                </div>

        </div>
    </section>

    <section class="apply-cta">
        <div class="wrapper">
            <h3><?php the_field('careers_apply--header'); ?></h3>
            <p><?php the_field('careers_apply--text'); ?></p>
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