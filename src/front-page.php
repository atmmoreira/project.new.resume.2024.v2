<?php get_header(); ?>

<?php the_content(); ?>

<section class="articles">
  <div class="container py-4">
    <!-- <h2 class="text-uppercase text-center">Recent Articles</h2>
    <div class="divider"></div> 
    <small class="d-flex justify-content-center mt-3"><a href="<?= site_url('/blog'); ?>" class="link">all posts</a></small>
-->
    <div class="row">
      <?php
        $homePosts = new WP_Query(array(
          'posts_per_page' => 4
        ));
        while ($homePosts->have_posts()) {
        $homePosts->the_post(); ?>

        <div class="col-12 col-md-3 my-3">
          <small> <?php echo get_the_date('M j, Y'); ?> in
            <span class="category">
              <?= preg_replace('/<a /', '<a class="text-danger fw-bold text-decoration-none"', get_the_category_list(', ')); ?>
            </span>
          </small>
          <div class="articles__title text-uppercase lh-sm">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <?php the_excerpt(); ?>
        </div>
      <?php } wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>