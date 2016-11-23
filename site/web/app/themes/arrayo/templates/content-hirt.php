<?php the_content(); ?>
 <div class="for-gradient--blue">
        <div class="sub-header-logo-container">
            <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/header-logos/high-rtech.png" class="sub-logo rotate">
        </div>
        <div class="wrapper">
            <section class="sub-page-header">
                <h1><?php the_field('rt_hi--header'); ?></h1>
                <p><?php the_field('rt_hi--subheader'); ?></p>
            </section>

            <section class="location-info">
                <div class="text text--for wow fadeInUp">
                    <h5 class="for"><?php the_field('rt_hi_box--subheader'); ?></h5>
                    <img src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/misc-icons/high-tilde.png?raw=true">
                    <p><?php the_field('rt_hi_box--text1'); ?></p>
                    <img src="http://imgh.us/quote-hightech.png" class="quote-img wow slideInLeft">
                    <h4 class="quote quote--hightech wow slideInLeft"><?php the_field('rt_hi_quote'); ?></h4>
                    <p class="for"><?php the_field('rt_hi_box--text2'); ?></p>
                    <p class="for"><strong><?php the_field('rt_hi_box--text3'); ?></strong></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list1'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list2'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list3'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list4'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list5'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list6'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list7'); ?><hr></p>
                    <p class="list list--hightech wow slideInLeft"><?php the_field('rt_hi_box--list8'); ?><hr></p>
                    <div class="inner-gradient--blue">
                        <p><?php the_field('rt_hi_box--inset'); ?></p>
                    </div>
                    <p class="for"><?php the_field('rt_hi_box--text4'); ?></p>
                    <h4 class="light"><?php the_field('rt_hi_subheader--bottom'); ?></h4>
                </div>

               <div class="label-wrapper wow fadeInUp">
                    <h6>other healthtech services</h6>
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
                    <h6>r-tech industries</h6>
                    <div class="label label--fin-rtech">
                            
                        <a href="/r-tech/fintech">
                         <span class="label-swap">
                              R-Tech for FinTech
                            </span>
                            <span>
                             <?php the_field('fin_rt--text'); ?>
                            </span>
                        </a>
                    </div>
                    <div class="label label--health-rtech">
                            
                        <a href="/r-tech/healthtech">
                         <span class="label-swap">
                              R-Tech for HealthTech
                            </span>
                            <span>
                             <?php the_field('he_rt--text'); ?>
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