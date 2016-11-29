<?php the_content(); ?>
    <div class="sub-bg-gradient sub-bg-gradient--ad">
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
            <h5>We are Domain Specialists who create Solutions that help FinTech, HealthTech and HiTech Companies Harness their Data and shift towards an Agile Mindset.</h5>
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
                        <li><?php the_field('ad_gradient--paragraph-1'); ?></li>
                        <li><?php the_field('ad_gradient--paragraph-2'); ?></li>
                        <li><?php the_field('ad_gradient--paragraph-3'); ?></li>
                    </ul>
                </div>
            </section>
        </div>
            <section class="centered-cta centered-cta--agiledata wow fadeInUp">
                <h2><?php the_field('ad_animation--header'); ?></h2>
                <h5><?php the_field('ad_animation--subheader'); ?></h5>
                <p><?php the_field('ad_animation--text'); ?></p>
            </section>
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
