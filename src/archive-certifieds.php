<?php

/**
 * Template Name: Certifieds Page
 *
 * @package WordPress
 * @subpackage ATMM.de_Theme
 * @since ATMM.dev Theme
 */
get_header(); ?>

<section class="certifieds">
  <div class="container py-4">
    <div class="row">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $certifieds = new WP_Query(array(
        'paged' => $paged,
        'post_type' => 'certifieds',
      ));

      while ($certifieds->have_posts()) { $certifieds->the_post(); ?>
        <div class="col-12 col-md-4 my-3">
          <?php the_content(); ?>
          <div class="d-flex justify-content-between my-3">
            <small><?php the_field('certified_date'); ?></small>
            <small class="text-danger fw-bold"><?php the_field('certified_school'); ?></small>
          </div>
          <div class="certifieds__title text-uppercase lh-sm">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        </div>
      <?php } wp_reset_postdata(); ?>
      <!-- debbug -> <pre> <?php var_dump($certifieds); ?> </pre> -->
    </div>
    <div id="pagination" class="text-center">
      <?= paginate_links(array('prev_text' => '«', 'next_text' => '»', 'total' => $certifieds->max_num_pages)); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>