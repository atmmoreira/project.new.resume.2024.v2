<?php

/**
 * Template Name: Projects Page
 *
 * @package WordPress
 * @subpackage ATMM.de_Theme
 * @since ATMM.dev Theme
 */
get_header(); ?>

<section class="projects">
  <div class="container py-4">
    <div class="row">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $projects = new WP_Query(array(
        'paged' => $paged,
        'post_type' => 'projects',
      ));

      while ($projects->have_posts()) {
        $projects->the_post(); ?>
        <div class="col-12 col-md-4 my-3">
          <small class="link_github_project">
            <a href="<?php the_field('project_repository'); ?>" class="text-danger fw-bold text-uppercase" target="_blank">
              <i class="bi bi-git"></i> GitHub Repositoy
            </a>
          </small>
          <div class="projects__title text-uppercase lh-sm">
            <?php the_title(); ?>
          </div>
          <?php the_excerpt(); ?>
        </div>
      <?php }
      wp_reset_postdata(); ?>
    </div>
    <div id="pagination" class="text-center">
      <?= paginate_links(array('prev_text' => '«', 'next_text' => '»', 'total' => $projects->max_num_pages)); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>