<?php get_header(); ?>

<section class="post-page my-5">
  <div class="container">
    <div class="row">
      <div class="col-2 d-none d-md-block">
        <!-- Post preview-->
        <h5 class="text-uppercase">Categories</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">CSS3</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">Vanilla JS</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">jQuery</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">React</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">PHP</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">WordPress</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">MySQL</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">SASS</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">TailwindCSS</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">Vite</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">Node</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">Laravel</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">TDD</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">OOP</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">GraphQL</a>
          </li>
          <li class="nav-item mb-2">
            <i class="bi bi-folder"></i>
            <a href="#" class="text-muted text-decoration-none">Jest / Cypress</a>
          </li>
        </ul>
      </div> <!-- List of Categories -->
      <div class="col-10">
        <div class="row">
          <?php while(have_posts()) { the_post();  ?>          
            <div class="col-12 col-md-4 my-3">
              <small>Published Apr 29 2024 in 
                <span class="category">
                  <a href="#" class="text-danger fw-bold text-decoration-none">
                    <?= esc_html( get_the_category()[0]->name ); ?>
                  </a>
                </span>
              </small>
              <div class="articles__title text-uppercase lh-sm">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              <?php the_excerpt(); ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>