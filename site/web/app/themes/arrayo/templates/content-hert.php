 <?php the_content(); ?>
 <div class="main">
 <div class="sub-bg-gradient-for sub-bg-gradient-for--hert">
        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('rt_he--header'); ?></h1>
                <p><?php the_field('rt_he--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('rt_he_box--subheader'); ?></h5>
                    <img alt="healthtech tilde separator" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/health-tilde.png?raw=true">
                    <p><?php the_field('rt_he_box--text'); ?></p>
                    <div class="inner-gradient--green">
                        <p class="for"><?php the_field('rt_he_box--gradient-text'); ?></p>
                    </div>
                    <p class="for"><?php the_field('rt_he_box--text2'); ?> </p>
                    <img alt="" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/health-tilde.png?raw=true">
                    <h4 class="light"><?php the_field('rt_he_subheader--bottom1'); ?></h4>
                    <h4 class="light"><?php the_field('rt_he_subheader--bottom2'); ?></h4>
                </div>


                <div class="label-wrapper">
                    <h6>other healthtech services</h6>
                    <div class="label label--health-con wow fadeInUp">

                        <a href="/connect/healthtech">
                        <span class="label-swap">
                              Connect for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-agile wow fadeInUp">

                        <a href="/agiledata/healthtech">
                        <span class="label-swap">
                              AgileData for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_ad--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-data wow fadeInUp">

                        <a href="/databridge/healthtech">
                        <span class="label-swap">
                              DataBridge for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_db--text'); ?>
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6>rtech for other domains</h6>
                    <div class="label label--fin-rtech wow fadeInUp">

                        <a href="/rtech/fintech">
                        <span class="label-swap">
                              RTech for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-rtech wow fadeInUp">

                        <a href="/rtech/hightech">
                        <span class="label-swap">
                              RTech for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <hr style="outline:0;border:2px solid white;height:2px;display:block;margin:2em 0;">
                    <div class="label label--resources-health wow fadeInUp">
                        <a href="/resources">
                        <p>
                              Resources
                            </p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <section class="contact-footer wow fadeInUp" id="contact">
    <div class="wrapper">
            <div class="text">
                <h2>Ask Team Arrayo</h2>
                <p>The quest for efficiency has essentially shifted from the manual delivery of services to the design of highly automated and integrated digital systems.
                    <br>
                    <br>What’s your digital ambition? What’s your primary digital focus? What user experience do you envision?</p>
                <h5>Let's talk!</h5>
            </div>
            <div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
        </div>
    </section>
    </div>
    </div>