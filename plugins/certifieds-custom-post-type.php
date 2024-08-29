<?php

function certifiedsCTP()
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
    'labels' => $labels,
    'menu_icon' => 'dashicons-images-alt',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
  );

  register_post_type('certifieds', $args);
}
add_action('init', 'certifiedsCTP');
