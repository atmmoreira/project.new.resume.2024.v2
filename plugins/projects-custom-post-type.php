<?php

function projects_custom_post_type()
{
  $labels = array(
    'name' => 'Projects',
    'add_new' => 'Add New Project',
    'add_new_item' => 'Add New Project',
    'edit_item' => 'Edit Project',
    'all_items' => 'All Projects',
    'search_items' => 'Search Project',
    'singular_name' => 'Project',
    'set_featured_image' => 'Project Image',
  );

  $args = array(
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'labels' => $labels,
    'menu_icon' => 'dashicons-admin-site-alt',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
  );

  register_post_type('projects', $args);
}
add_action('init', 'projects_custom_post_type');
