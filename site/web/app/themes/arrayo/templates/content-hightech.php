<?php the_content(); ?>
<div class="main">
    <div class="sub-bg-gradient sub-bg-gradient--high">

        <div class="wrapper">
            <section class="page-header">
                <h1><?php the_field('hightech_page--header'); ?></h1>
                <p><?php the_field('hightech_page--subheader'); ?></p>
            </section>
        </div>
    </div>
    <div class="services-cta services-cta--hightech wow fadeInUp">
        <h2><?php the_field('hightech_main--header'); ?></h2>
        <h5><?php the_field('hightech_main--subheader'); ?></h5>
        <p><?php the_field('hightech_main--text'); ?></p>
    </div>
    <div class="fin-center-bg">
        <div class="wrapper">
             <ul class="flexfade-container flexfade-wrapper">
                <li class="flexfade-item flexfade-item--half flexfade-item--hightech wow fadeInUp" data-wow-delay="0.1s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/high-ico-2.png"><br>
                        <?php the_field('hightech_box--header-rtech'); ?>
                    </h4>
                    <p class="light"><?php the_field('hightech_box--subheader-rtech'); ?></p>
                    <p><?php the_field('hightech_box--text-rtech'); ?></p>
                    <div class="link">
                        <a href="/rtech/hightech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="flexfade-item flexfade-item--half flexfade-item--hightech wow fadeInUp" data-wow-delay="0.2s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/high-ico-4.png"><br>
                        <?php the_field('hightech_box--header-agiledata'); ?>
                    </h4>
                    <p class="light"><?php the_field('hightech_box--subheader-agiledata'); ?></p>
                    <p><?php the_field('hightech_box--text-agiledata'); ?></p>
                    <div class="link">
                        <a href="/agiledata/hightech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="flexfade-item flexfade-item--half flexfade-item--hightech wow fadeInUp" data-wow-delay="0.3s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/high-ico-3.png"><br>
                        <?php the_field('hightech_box--header-connect'); ?>
                    </h4>
                    <p class="light"><?php the_field('hightech_box--subheader-connect'); ?></p>
                    <p><?php the_field('hightech_box--text-connect'); ?></p>
                    <div class="link">
                        <a href="/connect/hightech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="flexfade-item flexfade-item--half flexfade-item--hightech wow fadeInUp" data-wow-delay="0.4s">
                    <h4>
                        <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/services/services-icons/high-ico-1.png"><br>
                        <?php the_field('hightech_box--header-databridge'); ?>
                    </h4>
                    <p class="light"><?php the_field('hightech_box--subheader-databridge'); ?></p>
                    <p><?php the_field('hightech_box--text-databridge'); ?></p>
                    <div class="link">
                        <a href="/databridge/hightech" class="link-arrow">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <div class="centered-cta-bg centered-cta-bg--hightech wow fadeInUp">
            <p><strong><?php the_field('hightech_slider--intro'); ?></strong></p>
             <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/high-tilde.png">
            <div class="ind-carousel owl-carousel owl-theme">
            <div class="items">
                <img alt="Angular JS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/angular-js-logo-gray.png">
            </div>
            <div class="items">
                <img alt=" Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/ansible-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Apache Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/apache-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Apache Tomcat Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/apache-tomcat-logo-gray.png">
            </div>
            <div class="items">
                <img alt="AWS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/aws-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Cognos Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/cognos-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Docker Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/docker-logo-gray.png">
            </div>
            <div class="items">
                <img alt="EmberJS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/ember-js-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Express JS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/express-js-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Git Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/git-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Hadoop Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/hadoop-logo-gray.png">
            </div>
            <div class="items">
                <img alt="IBM SPSS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/ibm-spss-logo-gray.png">
            </div>
            <div class="items">
                <img alt="IBM Websphere Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/ibm-websphere-logo-gray.png">
            </div>
            <div class="items">
                <img alt="JMP Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/jmp-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Kubernetes Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/kubernetes-logo-gray.png">
            </div>
            <div class="items">
                <img alt="MeanJS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/mean-js-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Microsoft Azure Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/microsoft-azure-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Microstrategy Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/microstrategy-logo-gray.png">
            </div>
            <div class="items">
                <img alt="MongoDB Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/mongo-db-logo-gray.png">
            </div>
            <div class="items">
                <img alt="MySQL Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/mysql-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Nagios Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/nagios-logo-gray.png">
            </div>
            <div class="items">
                <img alt="NodeJS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/node-js-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Oracle Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/oracle-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Oracle Weblogic Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/oracle-weblogic-logo-gray.png">
            </div>
            <div class="items">
                <img alt="PHP Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/php-logo.png">
            </div>
            <div class="items">
                <img alt="Pipeline Pilot Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/pipeline-pilot-gray.png">
            </div>
            <div class="items">
                <img alt="PostgreSQL Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/postgresql-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Python Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/python-logo-gray.png">
            </div>
            <div class="items">
                <img alt="R Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/r-logo-gray.png">
            </div>
            <div class="items">
                <img alt="ReactJS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/react-js-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Red Hat Linux Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/red-hat-linus-logo-gray.png">
            </div>
            <div class="items">
                <img alt="SAP HANA Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/sap-hana-logo-gray.png">
            </div>
            <div class="items">
                <img alt="SAS Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/sas-logo-gray.png">
            </div>
            <div class="items">
                <img alt="SAS Visual Analytics Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/sas-visual-analytics-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Tableau Software Logo" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/tableau-software-logo-gray.png">
            </div>
            <div class="items">
                <img alt="Tibco Software" src="<?= get_template_directory_uri(); ?>/dist/images/industry-icons/hightech-software/tibco-spotfire-logo-gray.png">
            </div>
            </div>
        </div>
    </div>
    <section class="contact-footer wow fadeInUp" id="contact">
        <div class="wrapper">
            <div class="text">
                <h2>Ask HighTech<br>Team at Arrayo</h2>
                <p><?php the_field('hightech_footer--text'); ?></p>
                <h5>Let's talk!</h5>
            </div>
<div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
        </div>
    </section>
    </div>
