 <?php the_content(); ?>
 <div class="sub-bg-gradient-for sub-bg-gradient-for--hedb">

        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('db_he--header'); ?></h1>
                <p><?php the_field('db_he--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text-wrap--alt">
                <div class="text text--for wow fadeInUp">
                    <h2 class="health for"><?php the_field('db_he_box--header1'); ?></h2>
                    <h5 class="for"><?php the_field('db_he_box--subheader1'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <p><strong>Complexity is Everywhere</strong></p>
                    <hr><br>
                    <p><?php the_field('db_he_box--text1'); ?></p>
                </div>
                <div class="text text--for wow fadeInUp">
                    <h2 class="health for"><?php the_field('db_he_box--header2'); ?></h2>
                    <h5 class="for"><?php the_field('db_he_box--subheader2'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <p><strong>As an additional example we work on the data flow for a personalized cancer vaccine.</strong></p>
                    <p><?php the_field('db_he_box--text2'); ?></p>
                    <div class="inner-gradient--green">
                        <p><?php the_field('db_he_box--inset'); ?></p>
                    </div>
                    <p><?php the_field('db_he_box--subheader2'); ?></p>
                    </div>
                <div class="text text--for wow fadeInUp">
                    <h2 class="health for"><?php the_field('db_he_box--header3'); ?></h2>
                    <h5 class="for"><?php the_field('db_he_box--subheader3'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/health-tilde.png?raw=true">
                    <p><?php the_field('db_he_box--text3'); ?></p>
                </div>
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
                            
                        <a href="/rtech/healthtech">
                        <span class="label-swap">
                              RTech for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6>rtech industries</h6>
                    <div class="label label--fin-rtech wow fadeInUp">
                            
                        <a href="/databridge/fintech">
                        <span class="label-swap">
                              DataBridge for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_db--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-rtech wow fadeInUp">
                    
                        <a href="/databridge/hightech">
                        <span class="label-swap">
                              DataBridge for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_db--text'); ?>
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