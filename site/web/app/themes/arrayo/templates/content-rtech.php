<?php the_content(); ?>
<div class="main">
    <div class="sub-bg-gradient sub-bg-gradient--rt">
        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('rt_page--header'); ?></h1>
                <p><?php the_field('rt_page--subheader'); ?></p>
            </section>
        </div>
    </div>
    <div class="services-cta services-cta--rtech wow fadeInUp">
        <h2><?php the_field('rt_box--header'); ?></h2>
        <h5><?php the_field('rt_box--subheader'); ?></h5>
        <p><?php the_field('rt_box--text'); ?></p>
    </div>
    <div class="wrapper">
    <div class="industry-box-header">
            <h5>We are Domain Specialists who create Solutions that help FinTech, HealthTech and HighTech Companies Control their Risks and make Regulation work for them.</h5>
        </div>
        <ul class="flexfade-container flexfade-wrapper">
            <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--finserve" data-wow-delay="0.1s">
                <h4><img alt="FinTech Logo" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/fin-agile-icon.png?raw=true"><br><?php the_field('industry_box--header-fintech'); ?></h4>
                    <p><?php the_field('industry_box--text-fintech'); ?></p>
                    <div class="link">
                        <a href="/rtech/fintech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
            </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                    <h4><img alt="HealthTech Logo" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/health-ico-4.png?raw=true"><br><?php the_field('industry_box--header-healthtech'); ?></h4>
                    <p><?php the_field('industry_box--text-healthtech'); ?></p>
                    <div class="link">
                        <a href="/rtech/healthtech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                    <h4><img alt="HighTech Logo" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/high-ico-4.png?raw=true"><br><?php the_field('industry_box--header-hightech'); ?></h4>
                    <p><?php the_field('industry_box--text-hightech'); ?></p>
                    <div class="link">
                        <a href="/rtech/hightech">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
                    </div>
                </li>
            </ul>
        <section class="serv-icon-box wow fadeInUp">
            <h2><?php the_field('rt_midbox--header'); ?></h2>
            <h5><?php the_field('rt_midbox--subheader'); ?></h5>
            <p><?php the_field('rt_midbox--text'); ?></p>
            <div class="icons-wrap">
                <div class="icons wow bounceIn">
                    <img alt="Blue Checkmark" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/blue-check.png">
                    <p><?php the_field('rt_midbox--icon1'); ?></p>
                </div>
                <div class="icons wow bounceIn">
                    <img alt="Blue Checkmark" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/blue-check.png">
                    <p><?php the_field('rt_midbox--icon2'); ?></p>
                </div>
                <div class="icons wow bounceIn">
                    <img alt="Blue Checkmark" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/blue-check.png">
                    <p><?php the_field('rt_midbox--icon3'); ?></p>
                </div>
            </div>
        </section>
            <section class="third-gradient wow fadeInUp">
                <div class="gradient">
                    <img alt="White Checkmark" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/white-checkmark.png">
                    <h5><?php the_field('rt_gradient--header'); ?></h5>
                    <p><?php the_field('rt_gradient--subheader'); ?></p>
                </div>
                <div class="text">
                    <ul>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('rt_gradient--text'); ?></li>
                    </ul>
                </div>
            </section>
        </div>
            <section class="centered-cta centered-cta--rtech wow fadeInUp">
                <h2><?php the_field('rt_animation--header'); ?></h2>
                <h5><?php the_field('rt_animation--subheader'); ?></h5>
                <p><?php the_field('rt_animation--text'); ?></p>
            </section>
        <section class="contact-footer wow fadeInUp" id="contact">
            <div class="wrapper">
                <div class="text">
                    <h2>Ask RTech<br>at Arrayo</h2>
                    <p><?php the_field('rt_footer--text'); ?></p>
                    <h5>Let's talk!</h5>
                </div>
<div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
            </div>
        </section>
        </div>
