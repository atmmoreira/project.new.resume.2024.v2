<?php get_header(); ?>

<section class="post-page my-5">
  <div class="container">
    <div class="row">
      <div class="col-2 d-none d-md-block">
        <!-- Post preview-->
        <h5 class="text-uppercase">Categories</h5>
        <ul class="nav flex-column">
          <?php
            $categories = get_categories();
            foreach ($categories as $category) {
              $category_link = sprintf(
                '<a class="text-muted text-decoration-none mx-2" href="%1$s" alt="%2$s">%3$s</a>',
                esc_url(get_category_link($category->term_id)),
                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                esc_html($category->name)
              );
              echo '<li class="nav-item mb-2"> <i class="bi bi-folder"></i>' . sprintf($category_link) . '</li>';
            }
          ?>
        </ul>
      </div>
      <div class="col-10">
        <!-- Post preview-->
        <div class="post-preview">
          <h2 class="articles__title text-uppercase lh-sm"> <?= the_title(); ?> </h2>
          <small class="fst-italic">
            By <?php $user_info = get_userdata(1);
                echo $user_info->display_name; ?> &middot;
            <?php echo get_the_date('M j, Y'); ?>.
          </small>
        </div>
        <!-- Post Content-->
        <article class="my-4">
          <div class="d-flex justify-content-between my-3">
            <small><?php the_field('certified_date'); ?></small>
            <small class="text-danger fw-bold"><?php the_field('certified_school'); ?></small>
          </div>
          <?php the_content(); ?>
        </article>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>