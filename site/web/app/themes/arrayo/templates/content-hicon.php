<?php the_content(); ?>
 <div class="sub-bg-gradient-for sub-bg-gradient-for--hicon">

        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('con_hi--header'); ?></h1>
                <p><?php the_field('con_hi--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('con_hi_box--header'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <p><?php the_field('con_hi_box--text1'); ?></p>
                    <p class="for"><strong><?php the_field('con_hi--intro'); ?></strong></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('con_hi--list1'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('con_hi--list2'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('con_hi--list3'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('con_hi--list4'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('con_hi--list5'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('con_hi--list6'); ?><hr></p>
                    <p><?php the_field('con_hi_box--text2'); ?></p>
                    <h4 class="light"><?php the_field('con_hi_subheader--bottom'); ?></h4>
                </div>

               <div class="label-wrapper wow fadeInUp">
                    <h6>other hightech services</h6>
                    <div class="label label--high-rtech">
                            
                        <a href="/rtech/hightech">
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
                    <br>
                    <h6>connect for other industries</h6>
                    <div class="label label--fin-con">
                            
                        <a href="/connect/fintech">
                        <span class="label-swap">
                              Connect for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-con">
                            
                        <a href="/connect/healthtech">
                        <span class="label-swap">
                              Connect for HealthTech
                            </span>
                            <span>
                             <?php the_field('he_con--text'); ?>
                            </span>
                        </a>
                    </div>
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