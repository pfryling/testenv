 <?php the_content(); ?>
 <div class="for-gradient--green">
    <div class="subpage-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/health-rtech.png" class="sub-logo rotate">
        </div>
        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('rt_he--header'); ?></h1>
                <?php the_field('rt_he--subheader'); ?>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('rt_he_box--subheader'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <?php the_field('rt_he_box--text'); ?>
                    <div class="inner-gradient--green">
                        <p class="for"><?php the_field('rt_he_box--gradient-text'); ?></p>
                    </div>
                    <p class="for"><?php the_field('rt_he_box--text2'); ?> </p>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <h4 class="light"><?php the_field('rt_he_subheader--bottom1'); ?></h4>
                    <h4 class="light"><?php the_field('rt_he_subheader--bottom2'); ?></h4>
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
                        <a href="/agiledata/healthtechwrapper">
                        <span class="label-swap">
                              AgileData for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_ad--text'); ?>
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
                        <a href="/rtech/fintechwrapper">
                        <span class="label-swap">
                              RTech for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-rtech wow fadeInUp">
                    <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/rtech/hightechwrapper">
                        <span class="label-swap">
                              RTech for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_rt--text'); ?>
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