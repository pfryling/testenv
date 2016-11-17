 <?php the_content(); ?>
 <div class="job-gradient">
        <div class="wrapper">
            <section class="sub-page-header">
                <h2><?php the_field('job_title--header'); ?></h2>
                <div class="job-subheader">
                    <div class="sub-row">
                        <p><strong>Industry</strong> <?php the_field('job_industry'); ?><br>
                        <strong>Service:</strong> <?php the_field('job_service'); ?><br>
                        <strong>Type:</strong> <?php the_field('job_type'); ?></p>
                    </div>
                    <div class="sub-row">
                        <p><strong>Seniority:</strong> <?php the_field('job_seniority'); ?><br>
                        <strong>Location:</strong> <?php the_field('job_location'); ?></p>
            </section>

            <section class="location-info">
                <div class="job-text text--for wow fadeInUp">
                    <strong>Skills</strong>
                    <hr>
                    <?php the_field('job_skills'); ?>
                    <strong>Education</strong>
                    <hr>
                    <?php the_field('job_education'); ?>
                    <strong>Experience</strong>
                    <hr>
                    <p><?php the_field('job_experience'); ?></p>
                    <strong>Description</strong>
                    <hr>
                    <?php the_field('job_description'); ?>
                    <strong>Essential Duties &amp; Responsibilities</strong>
                    <hr>
                    <?php the_field('job_duties'); ?>
                </div>
            </section>
        </div>

        <section class="apply-cta">
            <div class="wrapper">
                <h3><?php the_field('job_title--header'); ?></h3>
                <p>Submit CV now.</p>
                <div class="wrap">
  <button class="btn">Apply now</button>
</div>
<div class="apply-overlay"></div>
<div class="modal">
  <div class="form-wrap">
    <!-- Top tabs-->
    <div class="tabs">
      <h4 class="tabs-header signup-tab"><a href="#signup-tab-content" class="active">Upload</a></h4>
      <h4 class="tabs-header login-tab"><a href="#login-tab-content">Form</a></h4>
    </div>
    <!-- Inside the tabs-->
    <div class="tabs-content">
      <!-- Sign-up form-->
      <div id="signup-tab-content" class="tab-content active">
        <h3 class="apply-head">Apply now&ndash;<br>for Now or Later</h3>
        <h5 class="apply-sub">Join Arrayo, Get on board</h5>
        <form action="" method="post" class="signup-form">
<label for="file-upload" class="custom-file-upload">
  <i class="fa fa-cloud-upload"></i> Upload your Resume
</label>
<input id="file-upload" type="file"/>
         
                      <span class="apply">
    <input class="balloon" id="linkedin" type="text" placeholder="Enter your LinkedIn Link" /><label for="galaxy"><i class="fa fa-linkedin-square" aria-hidden="true"></i></label>
  </span>
      </div>
      </form>
      <!-- Login form-->
      <div id="login-tab-content" class="tab-content">
        <h3 class="apply-head">Apply now&ndash;<br>for Now or Later</h3>
        <h5 class="apply-sub">Join Arrayo, Get on board</h5>
        <form action="" method="post" class="login-form">
          <span class="apply">
    <input class="balloon" id="name" type="text" placeholder="Your name" /><label for="galaxy"><i class="fa fa-user" aria-hidden="true"></i></label>
  </span>
          <span class="apply">
    <input class="balloon" id="email" type="text" placeholder="Your email" /><label for="galaxy"><i class="fa fa-envelope" aria-hidden="true"></i></label>
  </span>
<div class="select">
  <span class="placeholder">Areas of Interest</span>
  <ul>
    <li data-value="fintech">Fintech</li>
    <li data-value="healthtech">HealthTech</li>
    <li data-value="hightech">HighTech</li>
    <li data-value="agiledata">AgileData</li>
    <li data-value="rtech">R-Tech</li>
    <li data-value="connect">Connect</li>
    <li data-value="databridge">DataBridge</li>
  </ul>
  <input type="hidden" name="changeme"/>
</div>

<br>

          <textarea class="apply-text" placeholder="Message / Cover Letter"></textarea>
          <input type="submit" value="Submit" class="apply-submit"/>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>

        <section class="eeo">
        <div class="wrapper">
            <p><?php the_field('eeo'); ?></p>
        </div>
    </section>