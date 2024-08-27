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
            foreach($categories as $category) {
              echo '<li class="nav-item mb-2">
                      <i class="bi bi-folder"></i>
                      <a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="text-muted text-decoration-none">' . $category->name . '</a>
                    </li>';
            } ?>
        </ul>
      </div>
      <div class="col-10">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item text-danger" aria-current="page">
              <?= esc_html( get_the_category()[0]->name ); ?>
            </li>
          </ol>
        </nav>
        <!-- Post preview-->
        <div class="post-preview">
          <h2 class="articles__title text-uppercase lh-sm"> <?= the_title(); ?> </h2>
          <small class="fst-italic">
            Posted by Anderson Martins &middot;
            <a href="#" class="badge bg-primary fw-normal"><?= esc_html( get_the_category()[0]->name ); ?></a> &middot; on
            September 24, 2023.
          </small>
        </div>
        <!-- Post Content-->
        <article class="my-4">
          <?php the_content(); ?> 
        </article>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>