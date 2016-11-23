<?php the_content(); ?>
 <div class="for-gradient--blue-full">
        <div class="sub-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/high-databridge.png" class="sub-logo rotate">
        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('db_hi--header'); ?></h1>
                <p><?php the_field('db_hi--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('db_hi_box--subheader'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <br>&nbsp;
                    <p><?php the_field('db_hi_box--text'); ?></p>
                </div>

               <div class="label-wrapper wow fadeInUp">
                    <h6>other hightech services</h6>
                    <div class="label label--high-rtech">
                            
                        <a href="/r-tech/hightech">
                         <span class="label-swap">
                              RTech for HighTech
                            </span>
                            <span>
                             <?php the_field('hi_rt--text'); ?>
                            </span> 
                        </a>
                    </div>
                    <div class="label label--high-agile">
                            
                        <a href="/agiledata/hightech">
                         <span class="label-swap">
                              AgileData for HighTech
                            </span>
                            <span>
                             <?php the_field('hi_ad--text'); ?>
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
                    <h6>r-tech industries</h6>
                    <div class="label label--fin-data">
                            
                        <a href="/databridge/fintech">
                         <span class="label-swap">
                              DataBridge for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_db--text'); ?>
                            </span> 
                        </a>
                    </div>
                    <div class="label label--health-data">
                            
                        <a href="/databridge/healthtech">
                         <span class="label-swap">
                              DataBridge for HealthTech
                            </span>
                            <span>
                             <?php the_field('he_db--text'); ?>
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