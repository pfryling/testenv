<?php while(have_posts()) : the_post(); ?>
<div class="<?php the_field('industry'); ?>">
    <div class="wrapper">
        <section class="page-header">
            <p class="drpdwn">
              <?php the_field('pr_cs'); ?> |
              <?php the_field('pr_date--abbr'); ?>
            </p>
            <h1><?php the_field('post_title'); ?></h1>
        </section>
          <?php if( have_rows('cs') ): ?>
            <section class="blog_section">
            <?php while( have_rows('cs') ): the_row(); ?>
              <h2><?php the_sub_field('cs_context_header'); ?></h2>
              <p><?php the_sub_field('cs_context'); ?></p>
              <hr>
              <h2><?php the_sub_field('cs_phases_header'); ?></h2>
              <p><?php the_sub_field('cs_phases'); ?></p>
              <hr>
              <h2><?php the_sub_field('cs_challenges_header'); ?></h2>
              <p><?php the_sub_field('cs_challenges'); ?></p>
              <hr>
              <h2><?php the_sub_field('cs_outcome_header'); ?></h2>
              <p><?php the_sub_field('cs_outcome'); ?></p>
            <?php endwhile; ?>
          </section>
          <?php endif; ?>
          <?php if( have_rows('pr') ): ?>
          <section class="blog_section">
            <?php while( have_rows('pr') ): the_row(); ?>
              <h2><?php the_sub_field('pr_date'); ?></h2>
              <p><?php the_sub_field('pr_content'); ?></p>
              <hr>
              <h2><?php the_sub_field('pr_about_div--header'); ?></h2>
              <p><?php the_sub_field('pr_about_div'); ?></p>
              <hr>
              <h2><?php the_sub_field('pr_about--header'); ?></h2>
              <p><?php the_sub_field('pr_about'); ?></p>
            <?php endwhile; ?>
          </section>
          <?php endif; ?>
    </div>
</div>