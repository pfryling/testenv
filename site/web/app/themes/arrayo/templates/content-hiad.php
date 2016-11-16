 <div class="for-gradient--blue">
        <div class="subpage-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/fin-agiledata.png" class="sub-logo rotate">
        </div>
        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('ad_hi--header'); ?></h1>
                <p><?php the_field('ad_hi--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('ad_hi_box--subheader'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <p class="for"><?php the_field('ad_hi--text1'); ?></p>
                    <img src="http://imgh.us/quote-hightech.png" class="quote-img">
                    <h4 class="quote quote--hightech"><?php the_field('ad_hi--quote'); ?></h4>
                    <p class="for"><?php the_field('ad_hi--text2'); ?></p>
                    <div class="inner-gradient--blue">
                        <p><?php the_field('ad_hi_box--gradient-text1'); ?></p>
                    </div>
                    <p class="for"><?php the_field('ad_hi--text3'); ?></p>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <h4 class="light"><?php the_field('ad_hi_subheader--bottom'); ?></h4>
                </div>

               <div class="label-wrapper fadeInUp">
                    <h6>other hightech services</h6>
                    <div class="label label--high-rtech">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/r-tech/hightechwrapper">
                        <span class="label-swap">
                              R-Tech for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-data">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/databridge/hightechwrapper">
                        <span class="label-swap">
                              DataBridge for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_db--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-con">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/connect/hightech">
                        <span class="label-swap">
                              Connect for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6>agiledata industries</h6>
                    <div class="label label--fin-agile">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/agiledata/fintech">
                        <span class="label-swap">
                              AgileData for FinTech
                            </span>
                            <span>
                              <?php the_field('fin_ad--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-agile">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        <a href="/agiledata/healthtech">
                        <span class="label-swap">
                              AgileData for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_ad--text'); ?>
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