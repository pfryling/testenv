<?php the_content(); ?>
<div class="bg-gradient--up">
        <div class="wrapper">
            <section class="page-header">
                <h1 class="inner"><?php the_field('company--header'); ?></h1>
                <?php the_field('company--subheader'); ?>
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
                        <h4 class="ny">Manhattan<br>New York</h4>
                        <p class="first"><?php the_field('company_box_newyork--text'); ?></p>
                        <hr>
                        <a  class="notlink" href="https://www.google.com/maps/place/1117+5th+Ave,+New+York,+NY+10036/@40.7554462,-73.9858722,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259aab2cffbed:0x5fb365211f9be982!8m2!3d40.7554422!4d-73.9836782">
                          <p>1117 Avenue of the Americas, 7th Floor<br>New York, NY 10036</p>
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
                <h4>
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
                                </svg><br>&nbsp;FinTech</h4>
                    <?php the_field('industry_box--text-fintech'); ?>
                    <div class="link">
                      <a href="#">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
            </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--healthserve" data-wow-delay="0.2s">
                    <h4>
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
                    <br>&nbsp;HealthTech</h4>
                    <?php the_field('industry_box--text-healthtech'); ?>
                    <div class="link">
                      <a href="#">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>&nbsp;
                    </div>
                </li>
                <li class="wow fadeInUp flexfade-item flexfade-item--third flexfade-item--highserve" data-wow-delay="0.3s">
                    <h4>
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
                    <br>&nbsp;HighTech</h4>
                    <?php the_field('industry_box--text-hightech'); ?>
                    <div class="link">
                      <a href="#">Learn more</a><i class="fa fa-arrow-circle-o-right"></i><br>&nbsp;
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
                <img src="https://raw.githubusercontent.com/gretzky/arrayo-qa/master/assets/img/misc-icons/white-tilde.png?raw=true">
                 <div class="com-carousel owl-carousel owl-theme cta-carousel">
                 <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/r-tech-icon_1.svg" class="cta-icon">
                        <p><?php the_field('company_slider--rtech'); ?></p>
                        <div class="link">
                          <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/agiledata-icon_1.svg" class="cta-icon">
                        <p><?php the_field('company_slider--agiledata'); ?></p>
                        <div class="link">
                          <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                    <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/databridge-icon-solidblue.svg" class="cta-icon">
                        <p><?php the_field('company_slider--databridge'); ?></p>
                        <div class="link">
                          <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                   </div>
                   <div class="item">
                       <div class="cta-card">
                        <img src="http://imgh.us/connect-icon-solidblue.svg" class="cta-icon">
                        <p><?php the_field('company_slider--connect'); ?></p>
                        <div class="link">
                        <a href="#">Learn more <i class="fa fa-arrow-circle-o-right"></i></a>
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
                <button class="tbtn trigger" href="javascript:;">Apply Now</button>
<div class="seahorse-wrapper">
  <div class="seahorse">
    <div class="content">
      <div class="turtle">
  <div class="turtle-toggle"></div>
  <div class="turtle-panel one">
    <a class="btn-close trigger"></a>
    <div class="turtle-header">
      <h1>Apply Now-<br>for Now or Later</h1>
      <h5>Join Arrayo, Get on Board</h5>
    </div>
    <div class="turtle-content">
      <turtle>
        <div class="turtle-group">
          <label for="file-upload" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Upload your Resume
          </label>
          <input id="file-upload" type="file"/>
        </div>
        <div class="turtle-group">
          <input type="url" name="linkedin" required="required" placeholder="&#xf0e1;&nbsp;&nbsp; Add your LinkedIn Profile" style="font-family:Poppins, FontAwesome;font-size:12px;" />
        </div>
        <div class="turtle-group">
          <button type="submit">Apply</button>
        </div>
      </turtle>
    </div>
  </div>
  <div class="turtle-panel two">
    <div class="turtle-header">
      <h1>Apply Now-<br>for Now or Later</h1>
      <h5>Join Arrayo, Get on Board</h5>
    </div>
    <div class="turtle-content">
    <?php echo do_shortcode("[ninja_form id=3]"); ?>
            </div>
        </div>
    </section>
    <section class="contact-footer wow fadeInUp" id="contact">
    <div class="wrapper">
            <div class="text">
                <h2><?php the_field('company_footer--header'); ?></h2>
                <p><?php the_field('company_footer--text'); ?></p>
                <h5>Let's talk!</h5>
            </div>
            <div class="form">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?>
                </div>
        </div>
    </section>
    </div>