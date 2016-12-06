<?php the_content(); ?>
 <div class="sub-bg-gradient-for sub-bg-gradient-for--fincon">

        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('con_fin--header'); ?></h1>
                <p><?php the_field('con_fin--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('con_fin_box--subheader'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/fin-tilde.png?raw=true">
                    <p class="for"><?php the_field('con_fin--text1'); ?></p>
                    <p class="for"><strong><?php the_field('con_fin_box--bold1'); ?></strong></p>
                    <p class="list list--fintech wow slideInLeft"><?php the_field('con_fin_box--list1'); ?><hr></p>
                    <p class="list list--fintech wow slideInLeft"><?php the_field('con_fin_box--list2'); ?><hr></p>
                    <p class="list list--fintech wow slideInLeft"><?php the_field('con_fin_box--list3'); ?><hr></p>
                    <div class="inner-gradient--purple">
                        <p><strong><?php the_field('con_fin_box--gradient-header'); ?></strong></p>
                        <p class="list list--white wow slideInLeft"><?php the_field('con_fin_box--list-white-1'); ?></p>
                        <p class="list list--white wow slideInLeft"><?php the_field('con_fin_box--list-white-2'); ?></p>
                        <p class="list list--white wow slideInLeft"><?php the_field('con_fin_box--list-white-3'); ?></p>
                        <p class="list list--white wow slideInLeft"><?php the_field('con_fin_box--list-white-4'); ?></p>
                    </div>
                    <h4 class="light"><?php the_field('con_fin_subheader--bottom'); ?></h4>
                </div>

                <div class="label-wrapper">
                    <h6>other fintech services</h6>
                    <div class="label label--fin-agile wow fadeInUp">
                            
                        <a href="/agiledata/fintech">
                        <span class="label-swap">
                              AgileData for FinTech
                            </span>
                            <span>
                              <?php the_field('fin_ad--text'); ?>
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
                            
                        <a href="/rtech/fintech">
                        <span class="label-swap">
                              RTech for FinTech
                            </span>
                            <span>
                              <?php the_field('fin_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <br>
                    <h6>connect for other industries</h6>
                    <div class="label label--health-agile wow fadeInUp">
                            
                        <a href="/connect/healthtech">
                        <span class="label-swap">
                              Connect for HealthTech
                            </span>
                            <span>
                              <?php the_field('he_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--high-agile wow fadeInUp">

                            
                        <a href="/connect/hightech">
                        <span class="label-swap">
                              Connect for HighTech
                            </span>
                            <span>
                              <?php the_field('hi_con--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--resources-fin wow fadeInUp">
                        <a href="/resources">
                        <p>
                              Resources
                            </p>
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