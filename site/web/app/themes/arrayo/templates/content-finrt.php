<?php the_content(); ?>
 <div class="sub-bg-gradient-for sub-bg-gradient-for--finrt">

        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('rt_fin--header'); ?></h1>
                <p><?php the_field('rt_fin--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('rt_fin_box--subheader'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/fin-tilde.png?raw=true">
                    <p><?php the_field('rt_fin_box--text1'); ?></p>
                    <img class="quote-img wow slideInLeft" src="http://imgh.us/quote--fintech.png">
                    <h4 class="quote quote--fintech wow slideInLeft"><?php the_field('rt_fin--quote'); ?></h4>
                    <p><?php the_field('rt_fin--text2'); ?></p>
                    <div class="inner-gradient--purple">
                        <p><?php the_field('rt_fin_box--gradient-text'); ?></p>
                    </div>
                    <p><?php the_field('rt_fin_box--text3'); ?></p>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/fin-tilde.png?raw=true">
                    <h4 class="light"><?php the_field('rt_fin_subheader--bottom'); ?></h4>
                </div>

                <div class="label-wrapper">
                    <h6>other fintech services</h6>
                    <div class="label label--fin-con wow fadeInUp">
                    
                        <a href="/connect/fintech">
                        <span class="label-swap">
                              Connect for FinTech
                            </span>
                            <span>
                              <?php the_field('fin_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--fin-data wow fadeInUp">
                            
                        <a href="/databridge/fintech">
                        <span class="label-swap">
                              DataBridge for FinTech
                            </span>
                            <span>
                              <?php the_field('fin_db--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--fin-rtech wow fadeInUp">
                            
                        <a href="/agiledata/fintech">
                        <span class="label-swap">
                              AgileData for FinTech
                            </span>
                            <span>
                              <?php the_field('fin_ad--text'); ?>
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6>connect industries</h6>
                    <div class="label label--health-agile wow fadeInUp">
                            
                        <a href="/rtech/healthtech">
                        <span class="label-swap">
                              RTech for HealthTech
                            </span>
                            <span>
                              <?php the_field('health_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-agile wow fadeInUp">

                            
                        <a href="/rtech/hightech">
                        <span class="label-swap">
                              RTech for HighTech
                            </span>
                            <span>
                              <?php the_field('high_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
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