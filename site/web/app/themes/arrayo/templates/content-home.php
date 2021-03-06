<?php the_content(); ?>
<div class="bg-gradient--main">
    <div class="header-logo-container">
        <img alt="rotating circle inner small" src="<?= get_template_directory_uri(); ?>/dist/images/header-logos/circle-icon-inner-01.png?raw=true" class="logo rotate">
        <img alt="rotating circle inner medium" src="<?= get_template_directory_uri(); ?>/dist/images/header-logos/circle-icon-mid-01.png?raw=true" class="logo rotate-reverse">
        <img alt="rotating circle outer large" src="<?= get_template_directory_uri(); ?>/dist/images/header-logos/systems-icon-outer-01.png?raw=true" class="logo rotate">
    </div>
    <div class="wrapper">
        <section class="page-header">
            <h1><?php the_field('home_page--header'); ?></h1>
            <hr>
        </section>
        <section class="services-grid--half">
            <h4><?php the_field('services_grid--main-header'); ?></h4>
            <div class="fade-wrapper">
                <h6><?php the_field('services_grid--small-header-top'); ?></h6>
                <div class="flex-wrapper grid-box">
                    <div class="box two wow fadeInUp" data-wow-delay="0.1s">
                        <h5><?php the_field('services_box--header-rtech'); ?></h5>
                        <p><?php the_field('services_box--text-rtech'); ?></p>
                        <a class="service-btn" href="/rtech">About RTech <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                    <div class="box four wow fadeInUp" data-wow-delay="0.1s">
                        <h5><?php the_field('services_box--header-agiledata'); ?></h5>
                        <p><?php the_field('services_box--text-agiledata'); ?></p>
                        <a class="service-btn" href="/agiledata">About AgileData <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
                <h6><?php the_field('services_grid--small-header-bottom'); ?></h6>
                <div class="flex-wrapper grid-box">
                    <div class="box three wow fadeInUp" data-wow-delay="0.1s">
                        <h5><?php the_field('services_box--header-databridge'); ?></h5>
                        <p><?php the_field('services_box--text-databridge'); ?></p>
                        <a class="service-btn" href="/databridge">About DataBridge <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                    <div class="box one wow fadeInUp" data-wow-delay="0.1s">
                        <h5><?php the_field('services_box--header-connect'); ?></h5>
                        <p><?php the_field('services_box--text-connect'); ?></p>
                        <a class="service-btn" href="/connect">About Connect <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="bg-white">
        <div class="wrapper">
            <section class="overlay--container">
                <div class="overlay wow fadeInUp">
                    <img alt="gray tilde separator" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/gray-tilde.png">
                    <h2>We are<br>
                    <div class="textfade-wrap">
                        <span id="rotate">&nbsp;</span>
                    </div></h2>
                    <p><?php the_field('overlay_text'); ?></p>
                    <div class="flex-wrapper">
                        <div class="inner-box">
                            <a href="/fintech">
                                <svg id="fintech" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.64 77.41">
                                    <title>fintech-icon</title>
                                    <g id="dots">
                                      <circle class="grid-cls-1" cx="74.88" cy="26.6" r="3" transform="translate(-1.17 3.55) rotate(-2.69)"></circle>
                                      <circle class="grid-cls-1" cx="7.72" cy="51.19" r="3" transform="translate(-2.4 0.42) rotate(-2.69)"></circle>
                                    </g>
                                    <g id="lines2">
                                      <rect class="grid-cls-1" x="38.31" y="2.34" width="6" height="11.82"></rect>
                                      <rect class="grid-cls-1" x="38.31" y="63.01" width="6" height="11.82"></rect>
                                    </g>
                                    <g id="circles">
                                      <path class="grid-cls-1" d="M76.9,44.32a5.74,5.74,0,0,1-5.73-5.47h0a5.74,5.74,0,1,1,6,5.46Zm0-7.47h-.08a1.73,1.73,0,0,0-1.65,1.81h0a1.73,1.73,0,1,0,1.73-1.82Z"></path>
                                      <path class="grid-cls-1" d="M5.73,44.32a5.74,5.74,0,1,1,5.73-6h0a5.73,5.73,0,0,1-5.46,6Zm0-7.47H5.65A1.74,1.74,0,1,0,7.47,38.5h0A1.74,1.74,0,0,0,5.74,36.85Z"></path>
                                    </g>
                                    <g id="dolla-dolla">
                                      <path class="grid-cls-1" d="M41.25,38a13.7,13.7,0,1,1,9.68-23.39L46.7,18.88A7.7,7.7,0,1,0,41.25,32Zm10.8-18.77a3,3,0,1,0,3,3A3,3,0,0,0,52.05,19.26ZM41.36,44a7.7,7.7,0,1,1-5.44,13.15l-4.24,4.24A13.7,13.7,0,1,0,41.36,38ZM30.56,56.8a3,3,0,1,0-3-3A3,3,0,0,0,30.56,56.8Z"></path>
                                    </g>
                                    <g id="outershapes">
                                      <g>
                                        <path class="grid-cls-1" d="M13.58,21.37,8.49,18.19A38.72,38.72,0,0,1,49.87,1,38.44,38.44,0,0,1,74,18.09L69,21.29a32.71,32.71,0,0,0-55.39.08Z"></path>
                                        <path class="grid-cls-1" d="M41.38,77.41a39,39,0,0,1-8.65-1A38.44,38.44,0,0,1,8.56,59.32l5.08-3.2A32.71,32.71,0,0,0,69,56l5.09,3.18A38.78,38.78,0,0,1,41.38,77.41Z"></path>
                                      </g>
                                    </g>
                                </svg>
                                <h6>FinTech</h6>
                                <p><?php the_field('overlay_text--fintech'); ?></p>
                            </a>
                        </div>
                        <div class="inner-box">
                            <a href="/healthtech">
                                <svg id="healthtech" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.39 76.19">
                                    <title>healthtech-icon</title>
                                    <g id="circle-bar-right">
                                    <path class="grid-cls-1" d="M72.75,53.66a5.67,5.67,0,0,0-9.07,1.9l-32.61.2v5l32.76-.2a5.69,5.69,0,0,0,1,1.39l.2.19a5.74,5.74,0,0,0,7.72-8.48Zm-2.58,5.41a1.74,1.74,0,0,1-2.45.12,1.77,1.77,0,0,1-.56-1.2,1.73,1.73,0,0,1,2.9-1.36l.06.06a1.73,1.73,0,0,1,.05,2.39Z" transform="translate(0 0)"/>
                                    </g>
                                    <g id="circle-bar-left">
                                  <path class="grid-cls-1" d="M46.4,15.29H13.56a5.6,5.6,0,0,0-1.21-1.59,5.83,5.83,0,1,0,1.35,6.59H46.4ZM9.77,19.11a1.74,1.74,0,1,1-.12-2.45l.06.06a1.74,1.74,0,0,1,.06,2.39Z" transform="translate(0 0)"/>
                                    </g>
                                    <g id="snake">
                                  <path class="grid-cls-1" d="M57.94,44.76a20.13,20.13,0,0,0-17.25-9.84h-4a14,14,0,1,1,0-28.06v-6a20,20,0,1,0,0,40.06h4a14,14,0,1,1,0,28.06v6A20,20,0,0,0,57.94,44.76Z" transform="translate(0 0)"/>
                                    </g>
                                    <g id="middle-bars">
                                     <rect class="grid-cls-1" x="41.69" y="46.28" width="17.03" height="5"/>
                                    <rect class="grid-cls-1" x="20.1" y="24.69" width="17.03" height="5"/>
                                    </g>
                                    <g id="outershape">
                                  <path class="grid-cls-1" d="M28.39,69l-1.89,5.7A38.77,38.77,0,0,1,2,25.74l5.7,1.89c-.34,1-.62,2-.85,3.08A32.74,32.74,0,0,0,28.39,69ZM73.27,20.56A38.44,38.44,0,0,0,50.86,1.19L49,6.89a32.7,32.7,0,0,1,21.6,38.24q-.35,1.55-.86,3.08l5.7,1.89a39.27,39.27,0,0,0,1.28-5A38.39,38.39,0,0,0,73.27,20.56ZM46.32,3.31A3,3,0,1,0,43,6,3,3,0,0,0,46.32,3.31Zm-12,66.89A3,3,0,1,0,37,73.5,3,3,0,0,0,34.34,70.2Z" transform="translate(0 0)"/>
                                    </g>
                                </svg>
                                <h6>HealthTech</h6>
                                <p><?php the_field('overlay_text--healthtech'); ?></p>
                            </a>
                        </div>
                        <div class="inner-box">
                            <a href="/hightech">
                                <svg id="hightech" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.37 82.86">
                                    <title>hightech-icon</title>
                                    <g id="dots">
                                    <path class="grid-cls-1" d="M20.3,8.55a3,3,0,1,0,1.8,3.84A3,3,0,0,0,20.3,8.55Zm39.13,0a3,3,0,1,0,1.8,3.84A3,3,0,0,0,59.43,8.55ZM20.3,68.43a3,3,0,1,0,1.8,3.84A3,3,0,0,0,20.3,68.43Zm39.13,0a3,3,0,1,0,1.8,3.84A3,3,0,0,0,59.43,68.43Z"/>
                                    </g>
                                    <g id="lines">
                                    <rect class="grid-cls-1" x="36.74" y="9.47" width="4" height="15.46"/>
                                    <rect class="grid-cls-1" x="36.74" y="57.93" width="4" height="15.46"/>
                                    </g>
                                    <g id="brackets">
                                     <path class="grid-cls-1" d="M74.64,37.8H58.19V51.86a9.08,9.08,0,0,1-9.07,9.07H29.07v-6H49.12a3.08,3.08,0,0,0,3.07-3.07V37.8h0v-6H74.64ZM28.27,21.93A9.08,9.08,0,0,0,19.19,31V45.05H2.69v6h22.5V31a3.08,3.08,0,0,1,3.07-3.07H48.32v-6Z"/>
                                    </g>
                                    <g id="circles">
                                    <path class="grid-cls-1" d="M38.69,47.93a6.5,6.5,0,1,1,6.5-6.5A6.51,6.51,0,0,1,38.69,47.93Zm0-9a2.5,2.5,0,1,0,2.5,2.5A2.51,2.51,0,0,0,38.69,38.93Zm0-27.45a5.75,5.75,0,1,1,2.42-.54A5.73,5.73,0,0,1,38.74,11.47Zm0-7.47a1.74,1.74,0,0,0-.59,3.37,1.74,1.74,0,0,0,2.22-1h0A1.73,1.73,0,0,0,38.74,4Zm0,78.86a5.74,5.74,0,1,1,5.4-3.78A5.71,5.71,0,0,1,38.73,82.86Zm0-7.47a1.74,1.74,0,1,0,1.63,2.33h0a1.74,1.74,0,0,0-1.63-2.33Z"/>
                                    </g>
                                    <g id="outer-shape">
                                    <g>
                                    <path class="grid-cls-1" d="M66.11,68.73,61.86,64.5a32.73,32.73,0,0,0-.09-46.24L66,14A38.74,38.74,0,0,1,66.11,68.73Z"/>
                                    <path class="grid-cls-1" d="M15.62,64.59a32.69,32.69,0,0,1-.09-46.23l-4.25-4.23a38.69,38.69,0,0,0,.11,54.72Z"/>
                                    </g>
                                    </g>
                                </svg>
                                <h6>HighTech</h6>
                                <p><?php the_field('overlay_text--hightech'); ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="centered-cta centered-cta--home wow fadeInUp">
                <h2><?php the_field('centered_cta--header'); ?></h2>
                <h5><?php the_field('centered_cta--subheader'); ?></h5>
                <p><?php the_field('centered_cta--text'); ?></p>
                <button class="expert"><a href="/services">our expertise</a></button>
            </section>
        </div>
        <section class="tabs wow fadeInUp">
            <div class="tabs--list">
                <div class="wrapper">
                    <h5><?php the_field('tab_list--header'); ?></h5>
                    <p><?php the_field('tab_list--subheader'); ?></p>
                    <ul>
                        <li class="active">
                            <a href="/">
                                <?php the_field('tab_list--item-1'); ?>
                                <hr>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="/">
                                <?php the_field('tab_list--item-2'); ?>
                                <hr>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabs--content">
                <div>
                    <article>
                        <h1><?php the_field('tab_content--header-1'); ?></h1>
                        <h3><?php the_field('tab_content--subheader-1'); ?></h3>
                        <p><?php the_field('tab_content--text-1'); ?></p>
                    </article>
                    <article>
                        <h1><?php the_field('tab_content--header-2'); ?></h1>
                        <h3><?php the_field('tab_content--subheader-2'); ?></h3>
                        <p><?php the_field('tab_content--text-2'); ?></p>
                    </article>
                </div>
            </div>
        </section>
        <div class="wrapper">
                    <section class="progress-bar--wrapper wow fadeInUp">
                        <div class="number-wrapper">
                            <div class="progress-bar-wrapper">
                                <div id="progress-bar" class="thick-bar">
                                  <div class="bar-percentage" data-percentage="94"></div>
                                  <div class="bar-container">
                                    <div class="bar"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="loader" id="numbers">
                                <span class="count fig-number">94</span>%
                                <br>
                                <p class="progress-text">Employee Satisfaction (Butterfly) Index</p>
                            </div>
                        </div>
                        <div class="number-wrapper">
                            <div class="progress-bar-wrapper">
                                <div id="progress-bar" class="thick-bar">
                                      <div class="bar-percentage" data-percentage="100"></div>
                                      <div class="bar-container">
                                        <div class="bar"></div>
                                      </div>
                                    </div>
                            </div>
                            <div class="loader" id="numbers">
                                <span class="count fig-number">170</span>%
                                <br>
                                <p class="progress-text">Yearly Growth Since Inception</p>
                            </div>
                        </div>
                        <div class="number-wrapper">
                            <div class="progress-bar-wrapper">
                                <div id="progress-bar" class="thick-bar">
                                  <div class="bar-percentage" data-percentage="100"></div>
                                  <div class="bar-container">
                                    <div class="bar"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="loader" id="numbers">
                                <span class="count fig-number">100</span>%
                                <br>
                                <p class="progress-text">Domain Specific Expertise</p>
                            </div>
                        </div>
                    </section>
            <section class="centered--bg wow fadeInUp">
                <img alt="green plus icon" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/plus-icon-3.png" class="ico-1 wow bounceIn" data-wow-delay=".8s" class="cb-icon">
                <img alt="dark blue plus icon" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/plus-icon-2.png" class="ico-3 wow bounceIn" data-wow-delay="1s" class="cb-icon">
                <img alt="light blue plus icon" src="<?= get_template_directory_uri(); ?>/dist/images/misc-icons/plus-icon-1.png" class="ico-2 wow bounceIn" data-wow-delay=".9s" class="cb-icon">
                <div class="content">
                    <h2><?php the_field('bottom-cta--header'); ?></h2>
                    <h5><?php the_field('bottom_cta--subheader'); ?></h5>
                    <p><?php the_field('bottom_cta--text'); ?></p>
                </div>
            </section>
        </div>
        <section class="contact-footer wow fadeInUp" id="contact">
            <div class="wrapper">
                <div class="text">
                    <h2>Ask Team Arrayo</h2>
                    <p><?php the_field('ask_footer--text'); ?></p>
                    <h5>Let's Talk!</h5>
                </div>
                <div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
            </div>
        </section>
