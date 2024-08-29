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
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="<?= site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="<?= site_url('/blog'); ?>">Blog</a></li>
            <li class="breadcrumb-item text-danger" aria-current="page"><?= esc_html(get_the_category()[0]->name); ?></li>
          </ol>
        </nav>
        <!-- Post preview-->
        <div class="post-preview">
          <h2 class="articles__title text-uppercase lh-sm"> <?= the_title(); ?> </h2>
          <small class="fst-italic">
            By <?php $user_info = get_userdata(1); echo $user_info->display_name; ?> &middot;
            <?= preg_replace('/<a /', '<a class="text-danger fw-bold text-decoration-none"', get_the_category_list( ', ' )); ?> &middot;
            <?php echo get_the_date('M j, Y'); ?>.
          </small>
        </div>
        <!-- Post Content-->
        <article class="my-4">
        <?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?>
          <?php the_content(); ?>
        </article>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>