<?php
/**
 * @package unityrepair
 * @since 1.0
 */

 // SLIDESHOW

add_action( 'init', 'register_cpt_slide' );

function register_cpt_slide() {

  $labels = array( 
    'name' => _x( 'Slides', 'truvae' ),
    'singular_name' => _x( 'Slide', 'truvae' ),
    'add_new' => _x( 'Add New', 'truvae' ),
    'add_new_item' => _x( 'Add New Slide', 'truvae' ),
    'edit_item' => _x( 'Edit Slide', 'truvae' ),
    'new_item' => _x( 'New Slide', 'truvae' ),
    'view_item' => _x( 'View Slide', 'truvae' ),
    'search_items' => _x( 'Search Slides', 'truvae' ),
    'not_found' => _x( 'No slides found', 'truvae' ),
    'not_found_in_trash' => _x( 'No slides found in Trash', 'truvae' ),
    'parent_item_colon' => _x( 'Parent Slide:', 'truvae' ),
    'menu_name' => _x( 'Slides', 'truvae' ),
  );

  $args = array( 
    'labels' => $labels,
    'hierarchical' => false,

    'supports' => array( 'title' ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-images-alt2',

    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'slide', $args );
}

// PRODUCTS

add_action( 'init', 'register_cpt_product' );

  function register_cpt_product() {

    $labels = array( 
      'name' => _x( 'Products', 'truvae' ),
      'singular_name' => _x( 'Product', 'truvae' ),
      'add_new' => _x( 'Add New', 'truvae' ),
      'add_new_item' => _x( 'Add New Product', 'truvae' ),
      'edit_item' => _x( 'Edit Product', 'truvae' ),
      'new_item' => _x( 'New Product', 'truvae' ),
      'view_item' => _x( 'View Product', 'truvae' ),
      'search_items' => _x( 'Search Products', 'truvae' ),
      'not_found' => _x( 'No products found', 'truvae' ),
      'not_found_in_trash' => _x( 'No products found in Trash', 'truvae' ),
      'parent_item_colon' => _x( 'Parent Product:', 'truvae' ),
      'menu_name' => _x( 'Products', 'truvae' ),
    );

    $args = array( 
      'labels' => $labels,
      'hierarchical' => true,

      'supports' => array( 'title', 'editor', 'thumbnail' ),

      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-list-view',
      'show_in_nav_menus' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'has_archive' => true,
      'query_var' => true,
      'can_export' => true,
      'rewrite' => true,
      'capability_type' => 'post'
    );

    register_post_type( 'product', $args );
  }
  
// SERVICES
  
add_action( 'init', 'register_cpt_service' );

  function register_cpt_service() {

    $labels = array( 
      'name' => _x( 'Services', 'truvae' ),
      'singular_name' => _x( 'Service', 'truvae' ),
      'add_new' => _x( 'Add New', 'truvae' ),
      'add_new_item' => _x( 'Add New Service', 'truvae' ),
      'edit_item' => _x( 'Edit Service', 'truvae' ),
      'new_item' => _x( 'New Service', 'truvae' ),
      'view_item' => _x( 'View Service', 'truvae' ),
      'search_items' => _x( 'Search Services', 'truvae' ),
      'not_found' => _x( 'No services found', 'truvae' ),
      'not_found_in_trash' => _x( 'No services found in Trash', 'truvae' ),
      'parent_item_colon' => _x( 'Parent Service:', 'truvae' ),
      'menu_name' => _x( 'Services', 'truvae' ),
    );

    $args = array( 
      'labels' => $labels,
      'hierarchical' => true,

      'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),

      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-sos',
      'show_in_nav_menus' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'has_archive' => true,
      'query_var' => true,
      'can_export' => true,
      'rewrite' => true,
      'capability_type' => 'post'
    );

    register_post_type( 'service', $args );
  }
  
// PROJECTS

add_action( 'init', 'register_cpt_project' );

function register_cpt_project() {

  $labels = array( 
    'name' => _x( 'Projects', 'truvae' ),
    'singular_name' => _x( 'Project', 'truvae' ),
    'add_new' => _x( 'Add New', 'truvae' ),
    'add_new_item' => _x( 'Add New Project', 'truvae' ),
    'edit_item' => _x( 'Edit Project', 'truvae' ),
    'new_item' => _x( 'New Project', 'truvae' ),
    'view_item' => _x( 'View Project', 'truvae' ),
    'search_items' => _x( 'Search Projects', 'truvae' ),
    'not_found' => _x( 'No projects found', 'truvae' ),
    'not_found_in_trash' => _x( 'No projects found in Trash', 'truvae' ),
    'parent_item_colon' => _x( 'Parent Project:', 'truvae' ),
    'menu_name' => _x( 'Projects', 'truvae' ),
  );

  $args = array( 
    'labels' => $labels,
    'hierarchical' => true,

    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-clipboard',

    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'project', $args );
}
