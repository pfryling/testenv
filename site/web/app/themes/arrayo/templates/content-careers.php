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
                    <?php the_field('careers_box--text1'); ?>
                    <?php the_field('careers_box--text2'); ?>
                    <?php the_field('careers_box--text3'); ?>
                    <?php the_field('careers_box--text4'); ?>
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
                <div class="card-wrapper  wow fadeInUp">
                    <h6 class="careers">recent jobs</h6>
                    <div class="card card--careers">
                        <h4 class="career">Risk &amp; Regulatory Business Analyst / Project Manager</h4>
                        <p class="first">
                            Industry: FinTech<br>
                            Service: R-Tech, DataBridge<br>
                            Type: Full Time<br>
                            Seniority: Mid senior level
                        </p>
                        <hr>
                        <a class="link-arrow" href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="wrapper">
        <section class="centered-bg--vert  wow fadeInUp">
            <div class="text-wrap">
                <h3><?php the_field('careers_bg--header'); ?></h3>
                <h5><?php the_field('careers_bg--subheader'); ?></h5>
                <?php the_field('careers_center--text'); ?>
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
                <div class="sm-icon">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/blue-check.png" class=" wow bounceIn" data-wow-delay="0.1s">
                    <p class="small"><?php the_field('careers_center--icon1'); ?>/p>
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
    </section>

<div class="wrapper">
    <section class="careers-testimonial wow fadeInUp">
            <div class="ct-left">
                <h5><?php the_field('testimonial_quote'); ?></h5>
                <p><strong><?php the_field('testimonial_author'); ?></strong><br><em><?php the_field('testimonial_business'); ?></em></p>
            </div>
            <div class="ct-right">
                <?php the_field('testimonial_right'); ?>
            </div>
    </section>
</div>

    <section class="office-slider">
        <div class="wrapper">
            <h4>Our offices</h4>
            <div id="location-slider" class="com-carousel owl-carousel owl-theme">
                <div class="item item-pad">
                    <h4 class="bos">Downtown<br>Boston</h4>
                    <p>Access to all MBTA, Commuter Rail and Ferry locations. Close to sailing, golf, beach and mountain getaways.</p>
                    <hr>
                    <p>50 Milk St, 18th Floor<br>Boston, MA 02109</p>
                </div>
                <div class="item item-pad">
                    <h4 class="cam">Kendall<br>Cambridge</h4>
                    <p>Access to Red Line, Hubway Stations. Close to MIT and Genetown</p>
                    <hr>
                    <p>1 Broadway, 5th Floor,<br>Cambridge, MA 02142</p>
                </div>
                <div class="item item-pad">
                    <h4 class="ny">Manhattan<br>New York</h4>
                    <p>Access to all MTA, Commuter Rail and Ferry locations. Close to sailing, golf, beach and mountain getaways.</p>
                    <hr>
                    <p>1117 Avenue of the Americas, 7th Floor<br>New York, NY 10036</p>
                </div>
            </div>
        </div>
    </section>

    <section class="openings">
        <div class="wrapper">
            <h3>Current Openings</h3>
            <h6>Filter | View all</h6>
            <div class="filter-wrap wow fadeInUp"">
                <form class="controls wow"" id="job-filters">
                    <fieldset>
                        <p><strong>Industry</strong></p>
                        <div class="checkbox">
                          <input type="checkbox" value=".fin"/>
                          <label>FinTech</label>
                        </div>
                        <div class="checkbox">
                          <input type="checkbox" value=".health"/>
                          <label>HealthTech</label>
                        </div>
                        <div class="checkbox">
                          <input type="checkbox" value=".high"/>
                          <label>HighTech</label>
                        </div>
                        <p><strong>Location</strong></p>
                        <div class="checkbox">
                          <input type="checkbox" value=".boston"/>
                          <label>Boston</label>
                        </div>
                        <div class="checkbox">
                          <input type="checkbox" value=".cambridge"/>
                          <label>Cambridge</label>
                        </div>
                        <div class="checkbox">
                          <input type="checkbox" value=".newyork"/>
                          <label>New York</label>
                        </div>
                      </fieldset>
                    </form>
            </div>
            <div class="filter-results wow fadeInUp"" id="results-wrapper">
                <?php

                $post_object = get_field('post_object');

                if( $post_object ): 

                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 

                    ?>
                    <div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="apply-cta">
        <div class="wrapper">
            <h3><?php the_field('careers_apply--header'); ?></h3>
            <?php the_field('careers_apply--text'); ?>
<button class="tbtn trigger" href="javascript:;">Apply Now</button>
<div class="seahorse-wrapper">
  <div class="seahorse">
    <div class="content">
      <div class="turtle">
  <div class="turtle-toggle"></div>
  <div class="turtle-panel one">
    <a class="btn-close trigger"></a>
    <div class="turtle-header">
      <h1>Apply Now-<br>for Now or Later</h1>
      <h5>Join Arrayo, Get on Board</h5>
    </div>
    <div class="turtle-content">
      <turtle>
        <div class="turtle-group">
          <label for="file-upload" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Upload your Resume
          </label>
          <input id="file-upload" type="file"/>
        </div>
        <div class="turtle-group">
          <input type="url" name="linkedin" required="required" placeholder="&#xf0e1;&nbsp;&nbsp; Add your LinkedIn Profile" style="font-family:Poppins, FontAwesome;font-size:12px;" />
        </div>
        <div class="turtle-group">
          <button type="submit">Apply</button>
        </div>
      </turtle>
    </div>
  </div>
  <div class="turtle-panel two">
    <div class="turtle-header">
      <h1>Apply Now-<br>for Now or Later</h1>
      <h5>Join Arrayo, Get on Board</h5>
    </div>
    <div class="turtle-content">
    <?php echo do_shortcode("[ninja_form id=3]"); ?>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</div>
</section>

    <section class="eeo">
        <div class="wrapper">
            <?php the_field('eeo'); ?>
        </div>
    </section>