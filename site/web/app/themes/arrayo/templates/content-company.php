<?php the_content(); ?>
<div class="bg-gradient--up">
        <div class="wrapper">
            <section class="page-header">
                <h1 class="inner"><?php the_field('company--header'); ?></h1>
                <p><?php the_field('company--subheader'); ?></p>
            </section>

            <section class="location-info wow fadeInUp"">
                <div class="text">
                    <h4><?php the_field('company_box--header'); ?></h4>
                    <h5><?php the_field('company_box--subheader'); ?></h5>
                    <p><?php the_field('company_box--text'); ?></p>
                </div>
                <div class="card-wrapper">
                    <h6>our locations</h6>
                    <div class="card tab-first wow fadeInUp"">
                        <h4 class="bos">Downtown<br>Boston</h4>
                        <p class="first"><?php the_field('company_box_boston--text'); ?></p>
                        <hr>
                        <a class="notlink"  href="https://www.google.com/maps/place/50+Milk+St,+Boston,+MA+02109/@42.3570037,-71.0597821,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3708476089075:0xbc8dd70d06accf26!8m2!3d42.3569998!4d-71.0575881">
                          <p>50 Milk Street, 18th Floor,<br>Boston, MA 02109</p>
                        </a>
                    </div>
                    <div class="card wow fadeInUp"">
                        <h4 class="cam">Kendall<br>Cambridge</h4>
                        <p class="first"><?php the_field('company_box_cambridge--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1+Broadway,+Cambridge,+MA+02142/@42.3628338,-71.0861121,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370a5bc05760d:0xb016fe9736fea4b!8m2!3d42.3628299!4d-71.0839181">
                          <p>1 Broadway, 5th Floor<br>Cambridge, MA 02142</p>
                        </a>
                    </div>
                    <div class="card wow fadeInUp"">
                        <h4 class="ny">Manhattan<br>New York</h4>
                        <p class="first"><?php the_field('company_box_newyork--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1117+5th+Ave,+New+York,+NY+10036/@40.7554462,-73.9858722,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259aab2cffbed:0x5fb365211f9be982!8m2!3d40.7554422!4d-73.9836782">
                          <p>1117 Avenue of the Americas, 7th Floor<br>New York, NY 10036</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="centered-cta centered-cta--about wow fadeInUp"">
        <div class="wrapper">
            <h2><?php the_field('company_center_cta--header'); ?></h2>
            <p><?php the_field('company_center_cta--text'); ?></p>
            <ul class="flexfade-container flexfade-wrapper">
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--finserve" data-wow-delay="0.1s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/fin-agile-icon.png?raw=true"><br>FinTech</h4>
                        <p class="company-left"><?php the_field('industry_box--text-fintech'); ?></p>
                        <div class="link comlink">
                            <a href="/agiledata/fintech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                        </div>
                </li>
                    <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                        <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/health-ico-4.png?raw=true"><br>HealthTech</h4>
                        <p class="company-left"><?php the_field('industry_box--text-healthtech'); ?></p>
                        <div class="link comlink">
                            <a href="/agiledata/healthtech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                        </div>
                    </li>
                    <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                        <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/high-ico-4.png?raw=true"><br>HighTech</h4>
                        <p class="company-left"><?php the_field('industry_box--text-hightech'); ?></p>
                        <div class="link comlink">
                            <a href="/agiledata/hightech">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
                        </div>
                    </li>
                </ul>
        <section class="about-box wow fadeInUp"">
            <h2><?php the_field('company_box_about--header'); ?></h2>
            <p><?php the_field('company_box_about--text'); ?>
        </section>
        <section class="inner-blue-gradient wow fadeInUp"">
                <h2><?php the_field('company_gradient--header'); ?></h2>
                <p><?php the_field('company_gradient--text'); ?></p>
                <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-tilde.png?raw=true">
                 <div class="com-carousel owl-carousel owl-theme cta-carousel">
                 <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/r-tech-icon_1.svg" class="cta-icon">
                        <p><?php the_field('slider--rt'); ?></p>
                        <div class="link">
                          <a href="/rtech">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/agiledata-icon_1.svg" class="cta-icon">
                        <p><?php the_field('slider--agiledata'); ?></p>
                        <div class="link">
                          <a href="/agiledata">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/databridge-icon-solidblue.svg" class="cta-icon">
                        <p><?php the_field('slider--databridge'); ?></p>
                        <div class="link">
                          <a href="/databridge">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                   <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/connect-icon-solidblue.svg" class="cta-icon">
                        <p><?php the_field('slider--connect'); ?></p>
                        <div class="link">
                        <a href="/connect">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                   </div>
                </div>
            </div>
        </section>
</div></div>

    <section class="connect-mid-bg connect-mid-bg--about wow fadeInUp"">
        <div class="wrapper">
            <div class="connect-full-box">
                <h4><?php the_field('company_cta_bg--header'); ?></h4>
                <p><?php the_field('company_cta_bg--text'); ?></p>
            </div>
        </div>
    </section>
    </div>
    <section class="about-full-bg wow fadeInUp"">
        <div class="wrapper">
            <div class="about-cta">
                <h2><?php the_field('company_cta_purple--header'); ?></h2>
                <p><?php the_field('company_cta_purple--text'); ?></p>
                <button class="toggle-overlay">Apply Now</button>

<aside>
  <div class="outer-close toggle-overlay">
    <a class="close"><span></span></a>
    </div>
      <div class="apply-form-wrap">
      <div class="apply-form">
        <h2>Apply Now-<br>for Now or Later</h2>
        <h5>Join Arrayo, Get on Board</h5>
          <a href="#mj-1" class="mj-btn">Apply Now</a></p>
        </div>

            <div id="mj-1" class="mj" tabindex="-1" aria-labelledby="mj1Label" role="dialog">
                  <div class="mj-content">
                        <header class="mj-header">
                            <a href="#!" class="mj-close"><i class="fa fa-times-circle"></i></a>
                        </header>

                        <div class="mj-body">
                        <h2>Apply Now-<br>for Now or Later</h2>
                        <h5>Join Arrayo, Get on Board</h5>
                        <?php echo do_shortcode("[ninja_form id=4]"); ?>
                        </div>
                </div>
            </div>
    </section>
    </div>