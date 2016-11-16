 <?php the_content(); ?>
 <div class="for-gradient--green">
    <div class="subpage-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/health-agiledata.png" class="sub-logo rotate">
        </div>
        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('ad_he--header'); ?></h1>
                <?php the_field('ad_he--subheader'); ?>
            </section>

            <section class="location-info">
                <div class="text-wrap--alt">
                <div class="text text--for wow fadeInUp">
                    <h2 class="health for"><?php the_field('ad_he_box--header1'); ?></h2>
                    <h5 class="for"><?php the_field('ad_he_box--subheader1'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <?php the_field('ad_he_box--text'); ?>
                </div>
                <div class="text text--for wow fadeInUp">
                    <h2 class="health for"><?php the_field('ad_he_box--header2'); ?></h2>
                    <h5 class="for"><?php the_field('ad_he_box--subheader2'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <?php the_field('ad_he_box--text2'); ?>
                    <p class="for"><strong>Operations</strong></p>
                    <hr>
                    <br>
                    <?php the_field('ad_he_box--text3'); ?>
                    <div class="inner-gradient--green">
                        <p class="list list--white wow slideInLeft"><strong>Analytics</strong></p>
                        <?php the_field('ad_he_box--text4'); ?>
                    </div>
                </div>
                <div class="text text--for wow fadeInUp">
                    <h2 class="health for"><?php the_field('ad_he_box--header3'); ?></h2>
                    <h5 class="for"><?php the_field('ad_he_box--subheader3'); ?></h5>
                </div>
                </div>

                <div class="label-wrapper">
                    <h6>other healthtech services</h6>
                    <div class="label label--health-con wow fadeInUp">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/connect/healthtechwrapper">
                        <span class="label-swap">
                              Connect for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-agile wow fadeInUp">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/rtech/healthtechwrapper">
                        <span class="label-swap">
                              RTech for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-data wow fadeInUp">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/databridge/healthtechwrapper">
                        <span class="label-swap">
                              DataBridge for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_db--text'); ?>
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6>r-tech industries</h6>
                    <div class="label label--fin-rtech wow fadeInUp">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/agiledata/fintechwrapper">
                        <span class="label-swap">
                              AgileData for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-rtech wow fadeInUp">
                    <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/agiledata/hightechwrapper">
                        <span class="label-swap">
                              AgileData for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_ad--text'); ?>
                            </span>
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