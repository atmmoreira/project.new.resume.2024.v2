<?php

// Adding styles on our Theme
function atmmdev_files()
{
  // Adding CSS Styles in our Theme
  wp_enqueue_style('atmmdev_bootstrap', ('//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'));
  wp_enqueue_style('atmmdev_bootstrap_icons', ('//cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'));
  wp_enqueue_style('atmmdev_main_styles', get_theme_file_uri('/assets/css/style.css'));
  // Adding script in our Theme
}
add_action('wp_enqueue_scripts', 'atmmdev_files');

// Adding features on our Theme
function atmmdev_features(){
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'atmmdev_features');