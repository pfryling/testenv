<?php the_content(); ?>
    <div class="bg-gradient--opp">
        <div class="subpage-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/agiledata.png" class="sub-sub-logo rotate">
        </div>
        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('ad_page--header'); ?></h1>
                <p><?php the_field('ad_page--subheader'); ?></p>
            </section>
        </div>
    </div>
    <div class="services-cta services-cta--agiledata wow fadeInUp">
        <h2><?php the_field('ad_box--header'); ?></h2>
        <h5><?php the_field('ad_box--subheader'); ?></h5>
        <p><?php the_field('ad_box--text'); ?></p>
    </div>
    <div class="wrapper">
        <div class="industry-box-header">
            <h5>We are domain specialists who create solutions that help FinTech, HealthTech and HiTech companies control their risks and make regulation work for them.</h5>
        </div>
        <ul class="flexfade-container flexfade-wrapper">
            <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--finserve" data-wow-delay="0.1s">
                <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/fin-agile-icon.png?raw=true"><br><?php the_field('industry_box--header-fintech'); ?></h4>
                    <p><?php the_field('industry_box--text-fintech'); ?></p>
                    <div class="link">
                        <a href="/agiledata/fintech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
            </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/health-ico-4.png?raw=true"><br><?php the_field('industry_box--header-healthtech'); ?></h4>
                    <p><?php the_field('industry_box--text-healthtech'); ?></p>
                    <div class="link">
                        <a href="/agiledata/healthtech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/high-ico-4.png?raw=true"><br><?php the_field('industry_box--header-hightech'); ?></h4>
                    <p><?php the_field('industry_box--text-hightech'); ?></p>
                    <div class="link">
                        <a href="/agiledata/hightech">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
                    </div>
                </li>
            </ul>
        </div>
        <div class="wrapper">
            <section class="third-gradient wow fadeInUp">
                <div class="gradient">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png">
                    <h5><?php the_field('ad_gradient--header'); ?></h5>
                    <p><?php the_field('ad_gradient--subheader'); ?></p>
                </div>
                <div class="text">
                    <ul>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('ad_gradient--paragraph-1'); ?></li>
                        <li><?php the_field('ad_gradient--paragraph-2'); ?></li>
                        <li><?php the_field('ad_gradient--paragraph-3'); ?></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="wrapper">
            <section class="centered-cta centered-cta--agiledata wow fadeInUp">
                <h2><?php the_field('ad_animation--header'); ?></h2>
                <h5><?php the_field('ad_animation--subheader'); ?></h5>
                <p><?php the_field('ad_animation--text'); ?></p>
            </section>
        </div>
        <div class="anim-static--ad">&nbsp;</div>
        <div class="line-anim-wrapper hide-on-mobile">
            <div class="line-items-wrapper">
                <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/animation-graphics/line/lineAnim--speech2.png?raw=true" class="dot first wow bounceIn" data-wow-duration="1s" data-wow-delay=".9s">
                <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/animation-graphics/line/lineAnim--speech1.png?raw=true" class="dot second wow bounceIn" data-wow-duration="1s" data-wow-delay="1.2s">
                <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/animation-graphics/line/lineAnim--speech3.png?raw=true" class="dot third wow bounceIn" data-wow-duration="1s" data-wow-delay="2.2s">
            </div>
            <div class="line-graphic-wrapper">
                <svg id="line" width="1421px" height="33px" viewBox="0 0 1421 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="0%" y1="0%" x2="100%" y2="0%" id="linearGradient-1">
                            <stop stop-color="#5E73FF" offset="0%"></stop>
                            <stop stop-color="#50DAFF" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <path d="M3,30.0005105 C3,30.0005105 44.6819436,29.626794 98.5,24.0005112 C170.993043,16.4218955 267.135656,3.00051045 328.5,3.00051045 C426.312477,3.00051045 556.828267,27.158579 685.5,30.0005105 C810.562505,32.762726 942.368023,3.12225401 1056.5,3.00051045 C1143.3404,2.90787857 1220.53855,15.4466917 1281.5,21.0005112 C1365.37885,28.6421934 1418,30.0005105 1418,30.0005105" id="Line" stroke="url(#linearGradient-1)" stroke-width="4"></path>
                    </g>
                </svg>
            </div>
        </div>
        <section class="contact-footer wow fadeInUp" id="contact">
            <div class="wrapper">
                <div class="text">
                    <h2><?php the_field('footer_cta--header'); ?></h2>
                    <p><?php the_field('footer_cta--subheader'); ?></p>
                    <h5>Let's talk!</h5>
                </div>
<div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
            </div>
        </section>
