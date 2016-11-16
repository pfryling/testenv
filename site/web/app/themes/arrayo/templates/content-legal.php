 <?php the_content(); ?>
 <div class="bg-gradient--main">
    <div class="wrapper">
    <div class="terms-wrapper">
        <h1><?php the_field('legal--header'); ?></h1>
        <hr>
        <div class="terms-white-box">
            <?php the_field('legal--text'); ?>
            <h3><?php the_field('disclaimer--header'); ?></h3>
            <?php the_field('legal--disclaimer'); ?>
        </div>
    </div>
</div>
</div>