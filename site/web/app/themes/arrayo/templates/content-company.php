<?php the_content(); ?>
<div class="bg-gradient--up">
        <div class="wrapper">
            <section class="page-header">
                <h1 class="inner"><?php the_field('company--header'); ?></h1>
                <p><?php the_field('company--subheader'); ?></p>
            </section>

            <section class="location-info wow fadeInUp"">
                <div class="text">
                    <h4><?php the_field('company_box--header'); ?></h4>
                    <h5><?php the_field('company_box--subheader'); ?></h5>
                    <p><?php the_field('company_box--text'); ?></p>
                </div>
                <div class="card-wrapper">
                    <h6>our locations</h6>
                    <div class="card tab-first wow fadeInUp"">
                        <h4 class="bos">Downtown<br>Boston</h4>
                        <p class="first"><?php the_field('company_box_boston--text'); ?></p>
                        <hr>
                        <a class="notlink"  href="https://www.google.com/maps/place/50+Milk+St,+Boston,+MA+02109/@42.3570037,-71.0597821,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3708476089075:0xbc8dd70d06accf26!8m2!3d42.3569998!4d-71.0575881">
                          <p>50 Milk Street, 18th Floor,<br>Boston, MA 02109</p>
                        </a>
                    </div>
                    <div class="card wow fadeInUp"">
                        <h4 class="cam">Kendall<br>Cambridge</h4>
                        <p class="first"><?php the_field('company_box_cambridge--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1+Broadway,+Cambridge,+MA+02142/@42.3628338,-71.0861121,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370a5bc05760d:0xb016fe9736fea4b!8m2!3d42.3628299!4d-71.0839181">
                          <p>1 Broadway, 5th Floor<br>Cambridge, MA 02142</p>
                        </a>
                    </div>
                    <div class="card wow fadeInUp"">
                        <h4 class="ny">New York<br>Office</h4>
                        <p class="first"><?php the_field('company_box_newyork--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1117+5th+Ave,+New+York,+NY+10036/@40.7554462,-73.9858722,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259aab2cffbed:0x5fb365211f9be982!8m2!3d40.7554422!4d-73.9836782">
                          <p>1177 Avenue of the Americas, 7th Floor<br>New York, NY 10036</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="centered-cta centered-cta--about wow fadeInUp"">
        <div class="wrapper">
            <h2><?php the_field('company_center_cta--header'); ?></h2>
            <p><?php the_field('company_center_cta--text'); ?></p>
            <ul class="flexfade-container flexfade-wrapper">
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--finserve" data-wow-delay="0.1s">
                    <h4><img alt="FinTech Icon" src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/fin-agile-icon.png?raw=true"><br>FinTech</h4>
                        <p class="company-left"><?php the_field('industry_box--text-fintech'); ?></p>
                        <div class="link comlink">
                            <a href="/agiledata/fintech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                        </div>
                </li>
                    <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                        <h4><img alt="HealthTech Icon" src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/health-ico-4.png?raw=true"><br>HealthTech</h4>
                        <p class="company-left"><?php the_field('industry_box--text-healthtech'); ?></p>
                        <div class="link comlink">
                            <a href="/agiledata/healthtech">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                        </div>
                    </li>
                    <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                        <h4><img alt="HighTech Icon" src="https://github.com/gretzky/arrayo-qa/blob/master/assets/img/services/services-icons/high-ico-4.png?raw=true"><br>HighTech</h4>
                        <p class="company-left"><?php the_field('industry_box--text-hightech'); ?></p>
                        <div class="link comlink">
                            <a href="/agiledata/hightech">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
                        </div>
                    </li>
                </ul>
        <section class="about-box wow fadeInUp"">
            <h2><?php the_field('company_box_about--header'); ?></h2>
            <p><?php the_field('company_box_about--text'); ?>
        </section>
        <section class="inner-blue-gradient wow fadeInUp"">
                <h2><?php the_field('company_gradient--header'); ?></h2>
                <p><?php the_field('company_gradient--text'); ?></p>
                <img alt="White Tilde" src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-tilde.png?raw=true">
                 <div class="com-carousel owl-carousel owl-theme cta-carousel">
                 <div class="item">
                       <div class="cta-card">
                        <svg style="width:50px;height:auto;fill:#4fd6ff;padding-top:40px;" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80.69 77.37">
                          <g id="dots" class="grow">
                            <circle cx="67.75" cy="15.65" r="3"/>
                            <circle class="cls-2" cx="14.33" cy="63.07" r="3"/>
                          </g>
                          <g id="lines" class="pullUp">
                            <rect class="cls-3" x="37.35" y="3.96" width="6" height="10.34"/>
                            <rect class="cls-3" x="37.35" y="63.07" width="6" height="11.31"/>
                          </g>
                          <g id="brackets" class="rotate">
                            <path class="cls-4" d="M71.22,32.34H52.39v-3a12,12,0,0,0-24.08,0h-6a18,18,0,0,1,35.83-3H71.22ZM58.39,48h-6a12,12,0,0,1-24.08,0V45H7.72v6H22.56a18,18,0,0,0,35.83-3Z"/>
                          </g>
                          <g id="inner-icon" class="grow">
                            <path class="cls-3" d="M74.95,35.08a5.74,5.74,0,1,1,2-11.13h0a5.74,5.74,0,0,1-2,11.13Zm0-7.47a1.73,1.73,0,1,0,.59.1h0A1.73,1.73,0,0,0,75,27.61ZM5.74,53.18a5.75,5.75,0,1,1,2.42-.54A5.74,5.74,0,0,1,5.74,53.18Zm0-7.47a1.74,1.74,0,1,0,.59.1A1.73,1.73,0,0,0,5.74,45.7Zm44,.44V33.92A9.76,9.76,0,0,0,40.13,24c-6.36,0-9.58,3-9.58,8.81a2.5,2.5,0,0,0,5,0c0-2.37.31-3.81,4.58-3.81a4.76,4.76,0,0,1,4.58,4.9V46.14A3.69,3.69,0,0,1,41.17,50c-4.07,0-4.54-2.18-4.54-3.82V42.72a1.58,1.58,0,0,1,.24-1,.91.91,0,0,1,.55-.11c.5,0,1.13-.1,1.13,1.77a2.5,2.5,0,0,0,5,0c0-4.11-2.37-6.77-6-6.77h0a5.55,5.55,0,0,0-4.19,1.52,6.31,6.31,0,0,0-1.75,4.59v3.42c0,4.26,2.51,8.82,9.54,8.82A8.69,8.69,0,0,0,49.72,46.14Z"/>
                          </g>
                          <g id="outer-shapes" class="rotate">
                            <g>
                              <path class="cls-5" d="M40.28,77.37a38.46,38.46,0,0,1-18.43-4.7l2.87-5.27A32.73,32.73,0,0,0,69.07,54.31a32.38,32.38,0,0,0,3.94-14l6,.29a38.34,38.34,0,0,1-4.67,16.63A38.73,38.73,0,0,1,40.28,77.37Z"/>
                              <path class="cls-6" d="M7.68,37.11l-6-.29A38.32,38.32,0,0,1,6.36,20.19,38.74,38.74,0,0,1,58.84,4.7L56,10A32.73,32.73,0,0,0,11.63,23.06,32.38,32.38,0,0,0,7.68,37.11Z"/>
                            </g>
                          </g>
                        </svg>
                        <p><?php the_field('slider--rt'); ?></p>
                        <div class="link">
                          <a href="/rtech">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <svg style="width:50px;height:auto;fill:#4fd6ff;padding-top:40px;" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 77.41 82.88">
                          <title>agiledata-icon</title>
                          <g id="graph-shape" class="pullRight">
                            <path  d="M62.35,38.44H41.71V17.79H38.63a23.27,23.27,0,0,0-9.61,2,23.74,23.74,0,0,0-13.8,18.62H4v6H21v-3A18,18,0,0,1,31.48,25.28,17,17,0,0,1,35.71,24V44.44H56.12a17.19,17.19,0,0,1-1.89,5.5l5.26,2.89a23.54,23.54,0,0,0,2.87-11.4Z"/>
                          </g>
                          <g id="wedge" class="pullUp">
                            <path class="cls-2" d="M62.65,34.39H45.75V17.49h2.51A14.32,14.32,0,0,1,62.65,31.89Zm-11.9-5h6.55a9.18,9.18,0,0,0-6.55-6.55Z"/>
                          </g>
                          <g id="dotted-line" class="rotate-alt">
                            <g>
                              <path class="cls-3" d="M24.61,59.55a24.27,24.27,0,0,1-6.71-9.12l5.53-2.32a18.24,18.24,0,0,0,5,6.85Z"/>
                              <path class="cls-4" d="M39.7,65.11c-.65,0-1.31,0-2-.08a23.09,23.09,0,0,1-8.6-2.46l2.73-5.34a17.12,17.12,0,0,0,6.38,1.83,17.6,17.6,0,0,0,2.37,0l.32,6C40.53,65.1,40.12,65.11,39.7,65.11Z"/>
                              <path class="cls-5" d="M46.34,64.16,44.65,58.4A18.12,18.12,0,0,0,52,54.16l4.14,4.34A24.15,24.15,0,0,1,46.34,64.16Z"/>
                            </g>
                          </g>
                          <g id="circles" class="grow">
                            <path class="cls-6" d="M38.71,11.48a5.75,5.75,0,1,1,2.42-.54A5.73,5.73,0,0,1,38.71,11.48ZM38.7,4a1.74,1.74,0,1,0,.59.1h0A1.73,1.73,0,0,0,38.7,4Zm0,78.88a5.74,5.74,0,1,1,2-11.13h0a5.74,5.74,0,0,1-2,11.13Zm0-7.47a1.73,1.73,0,1,0,.59.1h0A1.73,1.73,0,0,0,38.71,75.41Z"/>
                          </g>
                          <g id="outer_shapes" class="rotate" data-name="outer shapes">
                            <g>
                              <path class="cls-7" d="M19.16,74.84A38.73,38.73,0,0,1,.74,34,38.44,38.44,0,0,1,17.14,9.32l3.34,5a32.71,32.71,0,0,0,1.71,55.37Z"/>
                              <path class="cls-8" d="M60.27,73.56l-3.34-5a32.71,32.71,0,0,0-1.71-55.37l3-5.18A38.73,38.73,0,0,1,76.67,48.9,38.44,38.44,0,0,1,60.27,73.56Z"/>
                            </g>
                          </g>
                        </svg>
                        <p><?php the_field('slider--agiledata'); ?></p>
                        <div class="link">
                          <a href="/agiledata">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <svg style="width:50px;height:auto;fill:#4fd6ff !important;padding-top:40px;" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 77.39 77.49">
                          <g id="corner_slash" class="pullRight" data-name="corner slash">
                            <path  d="M61.19,23.8a9.21,9.21,0,0,1-.59-1.66l-21.28,13L17.1,21.83A8.86,8.86,0,0,1,14,27L33.56,38.72l5.8,3.48,5.77-3.53,18.77-11.5A9.06,9.06,0,0,1,61.19,23.8Z" transform="translate(0 0)"/>
                          </g>
                          <g id="cube" class="rotate">
                            <path class="cls-2" d="M38.82,59.64l-17.39-10V29.52l17.39-10,17.39,10V49.6ZM27.43,46.14l11.39,6.58,11.39-6.58V33L38.82,26.41,27.43,33Z" transform="translate(0 0)"/>
                          </g>
                          <g id="OuterLines" class="rotate">
                            <path class="cls-3" d="M60.61,55.35,50.75,49.4l3.1-5.14,10,6.06A9.15,9.15,0,0,0,60.61,55.35Zm-43.84-.91a9.1,9.1,0,0,1,.34,1.22l9.79-5.91-3.1-5.14L14,50.52A9,9,0,0,1,16.77,54.44ZM41.82,3.94h-6v19h6Zm0,51.5h-6v19h6Z" transform="translate(0 0)"/>
                          </g>
                          <g id="Circles" class="grow">
                            <path class="cls-4" d="M69.45,25.68a5.74,5.74,0,1,1,2-11.13h0a5.74,5.74,0,0,1-2,11.13Zm0-7.47a1.74,1.74,0,1,0,.59.1A1.73,1.73,0,0,0,69.45,18.2ZM8.17,25.68a5.74,5.74,0,1,1,2-11.13h0a5.74,5.74,0,0,1-2,11.13Zm0-7.47a1.74,1.74,0,1,0,.59.1A1.74,1.74,0,0,0,8.17,18.21ZM7.94,63.28a5.73,5.73,0,0,1-2-.35H6a5.7,5.7,0,1,1,2,.35Zm-.59-4.11a1.73,1.73,0,1,0-1-2.22,1.72,1.72,0,0,0,1,2.22Zm61.87,4.1a5.7,5.7,0,0,1-2-.34h0a5.73,5.73,0,1,1,2,.34Zm-.59-4.1a1.74,1.74,0,1,0-1-2.22,1.74,1.74,0,0,0,1,2.22Z" transform="translate(0 0)"/>
                          </g>
                          <g id="OutsideShapes" class="rotate">
                            <path class="cls-5" d="M58,12.32a32.52,32.52,0,0,0-36.81-1.17q-.7.45-1.38.92l-3.47-4.9q.8-.56,1.63-1.09A38.48,38.48,0,0,1,61.5,7.47ZM59.45,71.4q.83-.53,1.63-1.09l-3.47-4.9q-.67.48-1.38.92a32.52,32.52,0,0,1-36.81-1.17L15.89,70A38.49,38.49,0,0,0,59.45,71.4ZM3,35.74a3,3,0,1,0,3,3A3,3,0,0,0,3,35.74Zm71.39,0a3,3,0,1,0,3,3A3,3,0,0,0,74.39,35.74Z" transform="translate(0 0)"/>
                          </g>
                        </svg>
                        <p><?php the_field('slider--databridge'); ?></p>
                        <div class="link">
                          <a href="/databridge">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                   <div class="item">
                       <div class="cta-card">
                        <svg style="width:50px;height:auto;fill:#4fd6ff;padding-top:40px;" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 77.39 77.37">
                          <g id="plus-hor-line" class="pullRight">
                            <path  d="M63.94,19.17A5.74,5.74,0,1,1,68,17.49,5.7,5.7,0,0,1,63.94,19.17Zm0-7.47a1.73,1.73,0,0,0-1.23,3,1.78,1.78,0,0,0,2.45,0h0a1.73,1.73,0,0,0-1.23-3Z"/>
                            <path class="cls-2" d="M13.47,69.64A5.73,5.73,0,1,1,17.52,68h0A5.72,5.72,0,0,1,13.47,69.64Zm0-7.47a1.73,1.73,0,1,0,1.23.51A1.73,1.73,0,0,0,13.47,62.18Z"/>
                            <path class="cls-3" d="M24.53,54.37"/>
                            <rect class="cls-4" x="14.19" y="52.56" width="15.26" height="6" transform="translate(-32.9 31.71) rotate(-45.01)"/>
                            <path class="cls-5" d="M71.63,24.91"/>
                            <path class="cls-6" d="M5.76,52.45"/>
                            <path class="cls-7" d="M25.14,71.71"/>
                            <path class="cls-8" d="M71.72,52.24"/>
                            <path class="cls-9" d="M52.46,71.62"/>
                            <path class="cls-10" d="M52.25,5.65"/>
                            <path class="cls-11" d="M5.67,25.13"/>
                            <path class="cls-12" d="M24.93,5.76"/>
                            <rect class="cls-13" x="31.23" y="36.18" width="14.88" height="5"/>
                          </g>
                          <g id="plus-vert-line" class="pullUp">
                            <rect class="cls-13" x="36.17" y="31.25" width="5" height="14.88"/>
                          </g>
                          <g id="arrow-lines" class="rotate">
                            <path class="cls-14" d="M37.19,29.12l0-4.18A14,14,0,0,0,26.37,47.16l4,4L18.54,63.07,14.3,58.83l7.62-7.62A20,20,0,0,1,37.28,18.92l0-4.12,7.1,7.1ZM63.11,18.51l-4.24-4.24L47.07,26.06l3.52,3.52a14,14,0,0,1-1,18.74,13.87,13.87,0,0,1-9.44,4.08l0-4.18L33,55.45l7.1,7.1,0-4.13a19.82,19.82,0,0,0,13.73-5.85,20,20,0,0,0,1.62-26.44Z"/>
                          </g>
                          <g id="circles" class="grow">
                            <path class="cls-14" d="M13.47,19.17a5.73,5.73,0,1,1,4.06-9.79h0a5.73,5.73,0,0,1-4.06,9.79Zm0-7.47a1.73,1.73,0,1,0,1.23.51h0A1.73,1.73,0,0,0,13.46,11.7ZM63.94,69.65A5.74,5.74,0,1,1,68,59.86h0a5.73,5.73,0,0,1-4.06,9.79Zm0-7.47a1.74,1.74,0,0,0-1.23,3,1.78,1.78,0,0,0,2.45,0,1.73,1.73,0,0,0,0-2.45h0A1.72,1.72,0,0,0,63.94,62.18ZM13.47,69.64A5.73,5.73,0,1,1,17.52,68h0A5.72,5.72,0,0,1,13.47,69.64Zm0-7.47a1.73,1.73,0,1,0,1.23.51A1.73,1.73,0,0,0,13.47,62.18Zm50.48-43A5.74,5.74,0,1,1,68,17.49,5.7,5.7,0,0,1,63.94,19.17Zm0-7.47a1.73,1.73,0,0,0-1.23,3,1.78,1.78,0,0,0,2.45,0,1.73,1.73,0,0,0-1.23-3ZM55.38,55.37a2.12,2.12,0,1,0,3,0A2.12,2.12,0,0,0,55.38,55.37ZM19.07,19.06a2.12,2.12,0,1,0,3,0A2.12,2.12,0,0,0,19.07,19.06Z"/>
                          </g>
                          <g id="outer-shapes" class="rotate">
                            <path class="cls-15" d="M53.62,74.38a38.61,38.61,0,0,1-29.61.1l2.28-5.55a32.76,32.76,0,0,0,25-.08ZM74.4,23.76l-5.54,2.31a32.75,32.75,0,0,1,.09,25l5.55,2.28a38.75,38.75,0,0,0-.1-29.62Zm-23-21.62A38.83,38.83,0,0,0,23.77,3l2.31,5.54A32.83,32.83,0,0,1,49.46,7.8q.83.29,1.65.63l2.27-5.55Q52.42,2.48,51.43,2.14ZM6,38.68A32.58,32.58,0,0,1,8.44,26.27L2.89,24A38.75,38.75,0,0,0,3,53.61l5.54-2.31A32.56,32.56,0,0,1,6,38.68Z"/>
                          </g>
                        </svg>
                        <p><?php the_field('slider--connect'); ?></p>
                        <div class="link">
                        <a href="/connect">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                   </div>
                </div>
            </div>
        </section>
</div></div>

    <section class="connect-mid-bg connect-mid-bg--about wow fadeInUp"">
        <div class="wrapper">
            <div class="connect-full-box">
                <h4><?php the_field('company_cta_bg--header'); ?></h4>
                <p><?php the_field('company_cta_bg--text'); ?></p>
            </div>
        </div>
    </section>
    </div>
    <section class="about-full-bg wow fadeInUp"">
        <div class="wrapper">
            <div class="about-cta">
                <h2><?php the_field('company_cta_purple--header'); ?></h2>
                <p><?php the_field('company_cta_purple--text'); ?></p>
        <div class="job-modal">
            <div class="job-overlay"></div>
                <a href="#mj-1" class="mj-btn">Apply Now</a></p>
            </div>
            <div id="mj-1" class="mj" tabindex="-1" aria-labelledby="mj1Label" role="dialog">
                <div class="mj-content">
                    <header class="mj-header">
                            <a href="#!" class="mj-close"><i class="fa fa-times-circle"></i></a>
                    </header>
                    <div class="mj-body">
                    <h2>Apply Now-<br>for Now or Later</h2>
                    <h5>Join Arrayo, Get on Board</h5>
                    <?php echo do_shortcode("[ninja_form id=4]"); ?>
                </div>
            </div>
        </div>
  </div>
    </section>
    </div>