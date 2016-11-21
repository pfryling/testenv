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
            <div class="card-wrapper">
                    <?php $recent = new WP_Query( array( 'post_type' => 'job-post', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC') ); ?>
                    <?php while ( $recent->have_posts() ) : $recent->the_post(); ?>
                        <div class="card card--careers">
                            <h4 class="career"><?php the_title(); ?></h4>
                            <p class="first">
                                <strong>Industry: </strong> <?php the_field('job_industry'); ?><br>
                                <strong>Service: </strong> <?php the_field('job_service'); ?><br>
                                <strong>Type: </strong> <?php the_field('job_type'); ?><br>
                                <strong>Seniority: </strong> <?php the_field('job_seniority'); ?>
                            </p>
                            <hr>
                            <a class="link-arrow" href="<?php the_permalink(); ?>">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
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
            <div class="loc-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="card tab-first wow fadeInUp"">
                        <h4 class="bos">Downtown<br>Boston</h4>
                        <p class="first"><?php the_field('company_box_boston--text'); ?></p>
                        <hr>
                        <a class="notlink"  href="https://www.google.com/maps/place/50+Milk+St,+Boston,+MA+02109/@42.3570037,-71.0597821,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3708476089075:0xbc8dd70d06accf26!8m2!3d42.3569998!4d-71.0575881">
                          <p>50 Milk Street, 18th Floor,<br>Boston, MA 02109</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card wow fadeInUp"">
                        <h4 class="cam">Kendall<br>Cambridge</h4>
                        <p class="first"><?php the_field('company_box_cambridge--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1+Broadway,+Cambridge,+MA+02142/@42.3628338,-71.0861121,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370a5bc05760d:0xb016fe9736fea4b!8m2!3d42.3628299!4d-71.0839181">
                          <p>1 Broadway, 5th Floor<br>Cambridge, MA 02142</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card wow fadeInUp"">
                        <h4 class="ny">Manhattan<br>New York</h4>
                        <p class="first"><?php the_field('company_box_newyork--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1117+5th+Ave,+New+York,+NY+10036/@40.7554462,-73.9858722,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259aab2cffbed:0x5fb365211f9be982!8m2!3d40.7554422!4d-73.9836782">
                          <p>1117 Avenue of the Americas, 7th Floor<br>New York, NY 10036</p>
                        </a>
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