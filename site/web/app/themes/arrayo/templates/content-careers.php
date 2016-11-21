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
                  <input type="checkbox" value=".triangle"/>
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
                  <input type="checkbox" value=".blue"/>
                  <label>Blue</label>
                </div>
              </fieldset>

              <fieldset class="filter-group search">
                <h4>Search</h4>
                <input type="text" placeholder="Search ..."/>
              </fieldset>

              <button id="Reset">Clear Filters</button>
            </form>

            <div id="Container" class="filter-results wow fadeInUp">
                <div class="fail-message">
                    <span>No jobs were found matching the selected filters.</span>
                </div>
                <div class="mix tag_fintech">
                    <h4>test</h4>
                </div>
                <?php $loop = new get_posts( array( 'post_type' => 'job-post', 'posts_per_page' => -1 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="mix
                  <?php
                    $tags = get_tags();
                    foreach($tags as $tag) {
                        echo "$tag->slug ";
                    }
                ?>">
                    <h4><?php the_field('job_title--header'); ?></h4>
                    <ul>
                        <li><strong>Industry:</strong> <?php the_field('job_industry'); ?></li>
                        <li><strong>Type:</strong> <?php the_field('job_type'); ?></li>
                        <li><strong>Seniority:</strong> <?php the_field('job_seniority'); ?></li>
                    </ul>
                    <hr>
                    <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
                <?php endwhile; ?>
        </div>
    </section>

    <section class="apply-cta">
        <div class="wrapper">
            <h3><?php the_field('careers_apply--header'); ?></h3>
            <p><?php the_field('careers_apply--text'); ?></p>
            <button class="toggle-overlay">Apply Now</button>

<aside>
  <div class="outer-close toggle-overlay">
    <a class="close"><span></span></a>
    </div>
      <div class="apply-form-wrap">
      <div class="apply-form">
        <h2>Apply Now-<br>for Now or Later</h2>
        <h5>Join Arrayo, Get on Board</h5>
        <div class='cb-input'>
            <?php echo do_shortcode("[ninja_form id=4]"); ?>
      </div>
</aside>
</section>

    <section class="eeo">
        <div class="wrapper">
            <p><?php the_field('eeo'); ?></p>
        </div>
    </section>