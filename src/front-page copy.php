<?php
/**
* Template Name: Home Page
*
* @package WordPress
* @subpackage ATMM.dev_Theme
* @since ATMM.dev Theme 1.0
*/

 get_header(); ?>

<section class="container my-5">
  <?php the_content(); ?>
</section>

<section class="articles">
  <div class="container py-4">
    <h2 class="text-uppercase text-center">Articles</h2>
    <div class="divider"></div>
    <small class="d-flex justify-content-center mt-3"><a href="#" class="link">all posts</a></small>

    <div class="row">
        <?php while (have_posts()) { the_post(); ?> 
          <div class="col-12 col-md-3 my-3">
            <small>Published Apr 29 2024 in <span class="category">CSS3</span></small>            
            <div class="articles__title text-uppercase lh-sm">
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>              
            <?php the_excerpt(); ?>
          </div>         
        <?php } ?>        
    </div>
  </div>
</section>

<?php get_footer(); ?>