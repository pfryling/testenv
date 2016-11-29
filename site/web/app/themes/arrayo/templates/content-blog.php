<?php while(have_posts()) : the_post(); ?>
<div class="blog">
    <div class="wrapper">
        <section class="page-header">
            <h1>Resources</h1>
            <p style="margin-bottom:68px">Subheader text</p>
        </section>
        <div id="blogfilters">
          <button data-filter="*">All</button>
          <button data-filter=".fin">FinTech</button>
          <button data-filter=".health">HealthTech</button>
          <button data-filter=".high">HighTech</button>
          <button data-filter=".press">Press Releases</button>
        </div>
        <div id="blogcontainer" class="wow fadeInUp">
          <?php $blogfilter = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => -1 ) ); ?>
          <?php while ( $blogfilter->have_posts() ) : $blogfilter->the_post(); ?>
            <div class="blogitem <?php the_field('blog_class'); ?>">
              <div class="blog-drpdwn">
                <p>Case Study</p>
              </div>
              <h3 class="blogtitle"><?php the_field('post_title'); ?></h3>
              <p class="blogdesc"><?php the_field('post_excerpt'); ?></p>
              <div class="link">
                    <a href="<?php the_permalink(); ?>">Learn more</a><i class="fa fa-arrow-circle-right"></i><br>
              </div>
            </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
<?php endwhile; ?>