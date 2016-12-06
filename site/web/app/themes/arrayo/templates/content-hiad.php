 <?php the_content(); ?>
 <div class="sub-bg-gradient-for sub-bg-gradient-for--hiad">

        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('ad_hi--header'); ?></h1>
                <p><?php the_field('ad_hi--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('ad_hi_box--subheader'); ?></h5>
                    <img alt="" src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <p class="for"><?php the_field('ad_hi--text1'); ?></p>
                    <img alt="" src="http://imgh.us/quote-hightech.png" class="quote-img">
                    <h4 class="quote quote--hightech"><?php the_field('ad_hi--quote'); ?></h4>
                    <p class="for"><?php the_field('ad_hi--text2'); ?></p>
                    <div class="inner-gradient--blue">
                        <p><?php the_field('ad_hi_box--gradient-text1'); ?></p>
                    </div>
                    <p class="for"><?php the_field('ad_hi--text3'); ?></p>
                    <img alt="" src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <h4 class="light"><?php the_field('ad_hi_subheader--bottom'); ?></h4>
                </div>

               <div class="label-wrapper fadeInUp">
                    <h6>other hightech services</h6>
                    <div class="label label--high-rtech">
                            
                        <a href="/rtech/hightech">
                        <span class="label-swap">
                              RTechfor HighTech
                            </span>
                            <span>
                              <?php the_field('hi_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-data">
                            
                        <a href="/databridge/hightech">
                        <span class="label-swap">
                              DataBridge for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_db--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-con">
                            
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
                    <h6>agiledata for other industries</h6>
                    <div class="label label--fin-agile">
                            
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
                            
                        <a href="/agiledata/healthtech">
                        <span class="label-swap">
                              AgileData for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_ad--text'); ?>
                            </span>
                        </a>
                    </div>
                    <hr style="outline:0;border:2px solid white;height:2px;display:block;margin:2em 0;">
                    <div class="label label--resources-high wow fadeInUp">
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