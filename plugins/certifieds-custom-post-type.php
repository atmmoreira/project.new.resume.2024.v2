<?php

function certifieds_custom_post_type()
{
  $labels = array(
    'name' => 'Certifieds',
    'add_new' => 'Add New Certified',
    'add_new_item' => 'Add New Certified',
    'edit_item' => 'Edit Certified',
    'all_items' => 'All Certifieds',
    'search_items' => 'Search Certified',
    'singular_name' => 'Certified',
    'set_featured_image' => 'Certified Image',
  );

  $args = array(
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'labels' => $labels,
    'menu_icon' => 'dashicons-images-alt',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
  );

  register_post_type('certifieds', $args);
}
add_action('init', 'certifieds_custom_post_type');
