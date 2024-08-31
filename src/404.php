<?php

/**
 * Template Name: 404 Page
 *
 * @package WordPress
 * @subpackage ATMM.de_Theme
 * @since ATMM.dev Theme
 */
get_header(); ?>

<section class="post-page my-5">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
          <span class="display-1 fw-bold">4</span>
          <i class="bi bi-exclamation-circle-fill text-atmm display-4"></i>
          <span class="display-1 fw-bold bsb-flip-h">4</span>
        </h2>
        <h3 class="h2 mb-2">Oops! You're lost.</h3>
        <p class="mb-5">The page you are looking for was not found.</p>
        <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="<?= site_url(); ?>" role="button">Back to Home</a>
      </div>
    </div>
  </div>
</section>