<?php the_content(); ?>
    <div class="sub-bg-gradient sub-bg-gradient--health">

        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('healthtech_page--header'); ?></h1>
                <p><?php the_field('healthtech_page--subheader'); ?></p>
            </section>
        </div>
    </div>
    <div class="services-cta services-cta--healthtech wow fadeInUp">
        <h2><?php the_field('healthtech_main--header'); ?></h2>
        <h5><?php the_field('healthtech_main--subheader'); ?></h5>
        <p><?php the_field('healthtech_main--text'); ?></p>
    </div>
    <div class="fin-center-bg">
        <div class="wrapper">
             <ul class="flexfade-container flexfade-wrapper">
                <li class="flexfade-item flexfade-item--half flexfade-item--healthtech wow fadeInUp" data-wow-delay="0.1s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/health-ico-2.png"><br>
                        <?php the_field('healthtech_box--header-rtech'); ?>
                    </h4>
                    <p class="light"><?php the_field('healthtech_box--subheader-rtech'); ?></p>
                    <p><?php the_field('healthtech_box--text-rtech'); ?></p>
                    <div class="link">
                        <a href="/rtech/healthtech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="flexfade-item flexfade-item--half flexfade-item--healthtech wow fadeInUp" data-wow-delay="0.2s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/health-ico-4.png"><br>
                        <?php the_field('healthtech_box--header-agiledata'); ?>
                    </h4>
                    <p class="light"><?php the_field('healthtech_box--subheader-agiledata'); ?></p>
                    <p><?php the_field('healthtech_box--text-agiledata'); ?></p>
                    <div class="link">
                        <a href="/agiledata/healthtech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="flexfade-item flexfade-item--half flexfade-item--healthtech wow fadeInUp" data-wow-delay="0.3s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/health-ico-3.png"><br>
                        <?php the_field('healthtech_box--header-connect'); ?>
                    </h4>
                    <p class="light"><?php the_field('healthtech_box--subheader-connect'); ?></p>
                    <p><?php the_field('healthtech_box--text-connect'); ?></p>
                    <div class="link">
                        <a href="/connect/healthtech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="flexfade-item flexfade-item--half flexfade-item--healthtech wow fadeInUp" data-wow-delay="0.4s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/health-ico-1.png"><br>
                        <?php the_field('healthtech_box--header-databridge'); ?>
                    </h4>
                    <p class="light"><?php the_field('healthtech_box--subheader-databridge'); ?></p>
                    <p><?php the_field('healthtech_box--text-databridge'); ?></p>
                    <div class="link">
                        <a href="/databridge/healthtech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <div class="centered-cta-bg centered-cta-bg--healthtech wow fadeInUp">
            <h2><?php the_field('healthtech_slider--header'); ?></h2>
            <h5><?php the_field('healthtech_slider--subheader'); ?></h5>
            <p><?php the_field('healthtech_slider--text'); ?></p>
            <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/health-tilde.png">
            <p><strong><?php the_field('healthtech_slider--intro'); ?></strong></p>
            <div class="ind-carousel owl-carousel owl-theme">
                <div class="item"><img alt="Abbvie Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/abbvie-logo-gray.png"></div>
           <div class="item"><img alt="Althea DX Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/althea-dx-logo-gray.png"></div>
           <div class="item"><img alt="AstraZeneca Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/astrazeneca-logo-gray.png"></div>
           <div class="item"><img alt="Boston Children's Hospital Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/boston-childrens-hospital-logo-gray.png"></div>
           <div class="item"><img alt="eClinicalWorks Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/eclinicalworks-logo-gray.png"></div>
           <div class="item"><img alt="Google Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/google-logo-gray.png"></div>
           <div class="item"><img alt="Johns Hopkins University Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/johns-hopkins-university-logo-gray.png"></div>
           <div class="item"><img alt="Lavastorm Analytics Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/lavastorm-analytics-logo-gray.png"></div>
           <div class="item"><img alt="Memorial Sloan Kettering Cancer Center Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/memorial-sloan-kettering-cancer-center-logo-gray.png"></div>
           <div class="item"><img alt="MERCK Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/merck-logo-gray.png"></div>
           <div class="item"><img alt="Massachusetts General Hospital Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/mgh-logo-gray.png"></div>
           <div class="item"><img alt="Novartis Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/novartis-logo-gray.png"></div>
           <div class="item"><img alt="Pfizer Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/pfizer-logo-gray.png"></div>
           <div class="item"><img alt="Sanofi Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/sanofi-logo-gray.png"></div>
           <div class="item"><img alt="Schrödinger Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/schrodinger-logo-gray.png"></div>
           <div class="item"><img alt="Spotify Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/spotify-logo-gray.png"></div>
           <div class="item"><img alt="Thermo Fisher Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-companies/thermo-fisher-scientific-logo-gray.png"></div>
            </div>
        </div>
        <div class="bg-green-wavy wow fadeInUp">
            <h2><?php the_field('healthtech_gradient_slider--header'); ?></h2>
            <h5><?php the_field('healthtech_gradient_slider--subheader'); ?></h5>
            <p><?php the_field('healthtech_gradient_slider--text'); ?></p>
            <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/white-tilde.png">
            <p><strong><?php the_field('healthtech_gradient_slider--intro'); ?></strong></p>
            <div class="item--push item--push-health">
                <img alt="Fullstack Academy Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-other/fullstack-academy-logo-white.png">
                <img alt="General Assembly" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/healthtech-other/general-assembly-logo-white.png">
        </div>
        </div>
    </div>
    <section class="contact-footer wow fadeInUp" id="contact">
        <div class="wrapper">
            <div class="text">
                <h2>Ask HealthTech<br>Team at Arrayo</h2>
                <p><?php the_field('healthtech_footer--text'); ?></p>
                <h5>Let's talk!</h5>
            </div>
<div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
        </div>
    </section>
