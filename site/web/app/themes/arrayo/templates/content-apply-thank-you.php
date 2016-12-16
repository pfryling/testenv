<?php the_content(); ?>
    <div class="apply-page-bg">
        <div class="wrapper">
            <section class="page-header">
                <h1>Apply Now</h1>
                <p style="margin-bottom:68px !important">for Now or Later</p>
            </section>
            <section class="apply-form-padding">
                <p style="color:#ffffff">Thank you for your application.<br>
                Please provide additional information (optional).</p>
                <button class="app-toggle">Additional Info</button>
                <div class="app-reveal">
                    <?php echo do_shortcode("[ninja_form id=11]"); ?>
                </div>
                <div style="margin-bottom: 68px">&nbsp;</div>
            </section>
        </div>
        <section class="eeo">
            <div class="wrapper">
                <p>Arrayo is an Equal Employment Opportunity employer and as such does not discriminate against any applicant for employment or employee on the basis of race, color, religious creed, gender, age, marital status, sexual orientation, national origin, disability, veteran status or any other classification protected by applicable discrimination laws.</p>
            </div>
        </section>
    </div>