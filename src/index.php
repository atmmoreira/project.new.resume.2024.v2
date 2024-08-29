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
      </div> <!-- List of Categories -->
      <div class="col-10">
        <div class="row">
          <?php while(have_posts()) { the_post();  ?>          
            <div class="col-12 col-md-4 my-3">
              <small>By <?php the_author_posts_link(); ?> &middot; <?php echo get_the_date('M j, Y'); ?> in 
                <span class="category">                  
                  <?= preg_replace('/<a /', '<a class="text-danger fw-bold text-decoration-none"', get_the_category_list( ', ' )); ?>
                </span>
              </small>
              <div class="articles__title text-uppercase lh-sm">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              <?php the_excerpt(); ?>
            </div>
          <?php } ?>
        </div>
        <div id="pagination" class="text-center">
          <?= paginate_links(array('prev_text' => '«', 'next_text' => '»')); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>