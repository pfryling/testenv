<?php the_content(); ?>
    <div class="bg-gradient--opp">
    <div class="subpage-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/connect.png" class="sub-sub-logo rotate">
        </div>
        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('con_page--header'); ?></h1>
                <p><?php the_field('con_page--subheader'); ?></p>
            </section>
        </div>
    </div>
    <div class="services-cta services-cta--connect wow fadeInUp">
        <h2><?php the_field('con_box--header'); ?></h2>
        <h5><?php the_field('con_box--subheader'); ?></h5>
        <p><?php the_field('con_box--text'); ?></p>
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
                        <a href="/connect/fintech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
            </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/health-ico-4.png?raw=true"><br><?php the_field('industry_box--header-healthtech'); ?></h4>
                    <p><?php the_field('industry_box--text-healthtech'); ?></p>
                    <div class="link">
                        <a href="/connect/healthtech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/high-ico-4.png?raw=true"><br><?php the_field('industry_box--header-hightech'); ?></h4>
                    <p><?php the_field('industry_box--text-hightech'); ?></p>
                    <div class="link">
                        <a href="/connect/hightech">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
                    </div>
                </li>
            </ul>
        </div>
        <section class="connect-mid-bg">
            <div class="wrapper flex">
                <div class="connect-mid-box wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/connect-mid-ico-1.png?raw=true">
                    <h4><?php the_field('con_half1--header'); ?></h4>
                    <p class="light"><?php the_field('con_half1--subheader') ?></p>
                    <hr>
                    <p><?php the_field('con_half1--paragraph1') ?></p>
                </div>
                <div class="connect-mid-box wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/connect-mid-ico-2.png?raw=true">
                    <h4><?php the_field('con_half2--header'); ?></h4>
                    <p class="light2"><?php the_field('con_half2--subheader') ?></p>
                    <hr>
                    <p><?php the_field('con_half2--paragraph1') ?></p>
                </div>
        </section>
        <div class="wrapper">
        <section class="third-gradient  wow fadeInUp">
            <div class="gradient">
                <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png">
                <h5><?php the_field('con_gradient--header'); ?></h5>
                <p><strong><?php the_field('con_gradient--subheader'); ?></strong></p>
            </div>
            <div class="text">
                <ul>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('con_gradient--paragraph-1'); ?></li>
                        <li><?php the_field('con_gradient--paragraph-2'); ?></li>
                        <li><?php the_field('con_gradient--paragraph-3'); ?></li>
                </ul>
            </div>
        </section>
        <section class="plain-white-box wow fadeInUp">
                <h2><?php the_field('con_benefit--header'); ?></h2>
                <h5><?php the_field('con_benefit--subheader'); ?></h5>
                <p><?php the_field('con_benefit--text'); ?></p>
        </section>
    </div>
        <div class="wrapper">
        </div>
            <section class="icon-grid  wow fadeInUp">
        <div class="wrapper">
            <div class="ico-wrap">
                <h2><?php the_field('con_icon--header'); ?></h2>
                <h5><?php the_field('con_icon--subheader'); ?></h5><br>
                <div class="icons  wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--1'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.2s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--2'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.3s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--3'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.4s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--4'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.5s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--5'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.6s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--6'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.7s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--7'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.8s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--8'); ?></p>
                    </div>
                </div>
                <div class="icons wow fadeInUp" data-wow-delay="0.9s"">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png" class="sm-check">
                    <div class="text-wrap">
                        <p><?php the_field('con_icon--9'); ?></p>
                    </div>
                </div>
            <p class="small wow fadeInUp"><?php the_field('con_icon--bottom'); ?></p>
        </div>
    </div>
    </section>
            <div class="wrapper">
                <section class="centered-cta centered-cta--connect wow fadeInUp">
                        <h2><?php the_field('con_center--header'); ?></h2>
                    <h5><?php the_field('con_center--subheader'); ?></h5>
                    <p><?php the_field('con_center--text'); ?></p>
                </section>
        </div>
        <div class="anim-static--con">&nbsp;</div>
<div class="line-anim-wrapper connect hide-on-mobile">
                    <div class="line-items-wrapper">
                        <img src="http://imgh.us/prim-oval.png" class="wow bounceIn mid-dot first" data-wow-delay=".76s">
                        <img src="http://imgh.us/prim-oval.png" class="wow bounceIn mid-dot second" data-wow-delay="1.8s">
                        <img src="http://imgh.us/con-pop_1.png" class="wow bounceIn top-dot first" data-wow-delay=".6s">
                        <img src="http://imgh.us/con-pop2.png" class="wow bounceIn top-dot second" data-wow-delay=".95s">
                        <img src="http://imgh.us/con-pop_1.png" class="wow bounceIn top-dot third" data-wow-delay="2.3s">
                    </div>
                    <div class="line-graphic-wrapper--connect">
<svg id="zigag" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3004.89 638.95">
  <defs>
    <style>
      .cls-1, .cls-2, .cls-3, .cls-4, .cls-5, .cls-6, .cls-7 {
        fill: none;
        stroke-miterlimit: 10;
        stroke-width: 4px;
      }

      .cls-1 {
        stroke: url(#linear-gradient);
      }

      .cls-2 {
        stroke: url(#linear-gradient-2);
      }

      .cls-3 {
        stroke: url(#linear-gradient-3);
      }

      .cls-4 {
        stroke: #5c70ff;
      }

      .cls-5 {
        stroke: url(#linear-gradient-4);
      }

      .cls-6 {
        stroke: url(#linear-gradient-5);
      }

      .cls-7 {
        stroke: url(#linear-gradient-6);
      }
    </style>
    <linearGradient id="linear-gradient" x1="2110.71" y1="472.52" x2="1951.27" y2="564.58" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#4fd6ff"/>
      <stop offset="1" stop-color="#5c70ff"/>
    </linearGradient>
    <linearGradient id="linear-gradient-2" x1="2694.87" y1="239.91" x2="2512.3" y2="457.49" xlink:href="#linear-gradient"/>
    <linearGradient id="linear-gradient-3" x1="2609.47" y1="0.01" x2="2609.47" y2="207.94" xlink:href="#linear-gradient"/>
    <linearGradient id="linear-gradient-4" x1="833.99" y1="638.95" x2="833.99" y2="203.1" xlink:href="#linear-gradient"/>
    <linearGradient id="linear-gradient-5" x1="0" y1="303.69" x2="834.45" y2="303.69" xlink:href="#linear-gradient"/>
    <linearGradient id="linear-gradient-6" x1="0.22" y1="102.52" x2="834.45" y2="102.52" xlink:href="#linear-gradient"/>
  </defs>
  <title>connect-line</title>
  <g id="bottom_right" data-name="bottom right">
    <line class="cls-1" x1="1868.44" y1="417.59" x2="2193.54" y2="619.51"/>
  </g>
  <g id="mid_right" data-name="mid right">
    <line class="cls-2" x1="2991.97" y1="491.67" x2="2215.2" y2="205.74"/>
  </g>
  <g id="top_right" data-name="top right">
    <line class="cls-3" x1="2214.54" y1="206" x2="3004.39" y2="1.94"/>
  </g>
  <g id="center">
    <polyline class="cls-4" points="2215.2 205.74 1868.44 417.59 1519.93 199.61 1172.98 418.95 833.4 202.84"/>
  </g>
  <g id="bottom_left" data-name="bottom left">
    <line class="cls-5" x1="833.99" y1="203.1" x2="833.99" y2="638.95"/>
  </g>
  <g id="mid-left">
    <line class="cls-6" x1="833.99" y1="203.1" x2="0.47" y2="404.29"/>
  </g>
  <g id="top_left" data-name="top left">
    <line class="cls-7" x1="0.68" y1="1.94" x2="833.99" y2="203.1"/>
  </g>
</svg>

                    </div>
                </div>
        <section class="contact-footer wow fadeInUp" id="contact">
            <div class="wrapper">
                <div class="text">
                    <h2><?php the_field('con_footer--header'); ?></h2>
                    <p><?php the_field('con_footer--text'); ?></p>
                    <h5>Let's talk!</h5>
                </div>
<div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
            </div>
        </section>
