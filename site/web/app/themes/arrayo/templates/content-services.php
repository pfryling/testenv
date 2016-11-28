<?php the_content(); ?>
<div class="bg-radial-gradient">
        <div class="wrapper">
            <section class="page-header">
                <h1 class="inner"><?php the_field('services_page--header'); ?></h1>
                <p class="inner"><?php the_field('services_page--subheader'); ?></p>
                <h6 class="services-box-desc"><i class="fa fa-arrow-circle-o-down"></i>&nbsp;&nbsp;Use your Data to Describe, Predict and Prescribe</h6>
            </section>
        </div>
    </div>
    <div class="wrapper">
        <section class="services-largebox services-largebox--rtech wow fadeInUp">
            <div class="text-wrap">
                <h4>RTech</h4>
                <p class="light"><?php the_field('services_rtech--header'); ?></p>
                <p><?php the_field('services_rtech--text'); ?></p>
                <button><a href="/rtech">Explore Arrayo rtech</a></button>
            </div>
        </section>
        <section class="services-largebox services-largebox--agiledata wow fadeInUp">
            <div class="text-wrap">
                <h4>AgileData</h4>
                <p class="light"><?php the_field('services_agiledata--header'); ?></p>
                <p><?php the_field('services_agiledata--text'); ?></p>
                <button><a href="/agiledata">Explore Arrayo AgileData</a></button>
            </div>
        </section>
        <h6 class="services-box-desc services-box-desc--second"><i class="fa fa-arrow-circle-o-down"></i>&nbsp;&nbsp;Connect to Your Systems and Trusted Data</h6>
        <section class="services-largebox services-largebox--databridge wow fadeInUp">
             <div class="text-wrap">
                <h4>DataBridge</h4>
                <p class="light"><?php the_field('services_databridge--header'); ?></p>
                <p><?php the_field('services_databridge--text'); ?></p>
                <button><a href="/databridge">Explore Arrayo DataBridge</a></button>
            </div>
        </section>
        <section class="services-largebox services-largebox--connect wow fadeInUp">
            <div class="text-wrap">
                <h4>Connect</h4>
                <p class="light"><?php the_field('services_connect--header'); ?></p>
                <p><?php the_field('services_connect--text'); ?></p>
                <button><a href="/connect">Explore Arrayo Connect</a></button>
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