<?php the_content(); ?>
    <div class="sub-bg-gradient sub-bg-gradient--db">
        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('db_page--header'); ?></h1>
                <p><?php the_field('db_page--subheader'); ?></p>
            </section>
        </div>
    </div>
    <div class="services-cta services-cta--databridge wow fadeInUp">
        <h2><?php the_field('db_box--header'); ?></h2>
        <h5><?php the_field('db_box--subheader'); ?></h5>
        <p><?php the_field('db_box--text'); ?></p>
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
                        <a href="/databridge/fintech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
            </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/health-ico-4.png?raw=true"><br><?php the_field('industry_box--header-healthtech'); ?></h4>
                    <p><?php the_field('industry_box--text-healthtech'); ?></p>
                    <div class="link">
                        <a href="/databridge/healthtech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                    <h4><img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/high-ico-4.png?raw=true"><br><?php the_field('industry_box--header-hightech'); ?></h4>
                    <p><?php the_field('industry_box--text-hightech'); ?></p>
                    <div class="link">
                        <a href="/databridge/hightech">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
                    </div>
                </li>
            </ul>
        </div>
    <section class="connect-mid-bg">
            <div class="wrapper">
                <div class="connect-full-box wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/connect-mid-ico-1.png?raw=true">
                    <h4><?php the_field('db_full--header'); ?></h4>
                    <p class="light"><?php the_field('db_full--subheader') ?></p>
                    <p><?php the_field('db_full--text') ?></p>
                </div>
        </section>
        <div class="wrapper">
            <section class="third-gradient wow fadeInUp">
                <div class="gradient">
                    <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-checkmark.png">
                    <h5><?php the_field('db_gradient--header'); ?></h5>
                    <p><?php the_field('db_gradient--subheader'); ?></p>
                </div>
                <div class="text">
                    <ul>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('db_gradient--text'); ?></li>
                    </ul>
                </div>
            </section>
            <section class="centered-cta centered-cta--databridge wow fadeInUp">
                <h2><?php the_field('db_animation--header'); ?></h2>
                <h5><?php the_field('db_animation--subheader'); ?></h5>
                <p><?php the_field('db_animation--text'); ?></p>
                <div class="anim-static--db">&nbsp;</div>
            </section>
        </div>
        <section class="contact-footer wow fadeInUp" id="contact">
            <div class="wrapper">
                <div class="text">
                    <h2>Ask DataBridge<br>at Arrayo</h2>
                    <p><?php the_field('db_footer--text'); ?></p>
                    <h5>Let's talk!</h5>
                </div>
<div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
            </div>
        </section>
