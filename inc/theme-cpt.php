<?php
/**
 * @package unityrepair
 * @since 1.0
 */

 // SLIDESHOW

add_action( 'init', 'truvae_slide', 0 );

  function truvae_slide() {

    $labels = array(
      'name'                  => _x( 'Slides', 'Post Type General Name', 'truvae' ),
      'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'truvae' ),
      'menu_name'             => __( 'Slide', 'truvae' ),
      'name_admin_bar'        => __( 'Slide', 'truvae' ),
      'archives'              => __( 'Slide Archives', 'truvae' ),
      'parent_item_colon'     => __( 'Parent Slide:', 'truvae' ),
      'all_items'             => __( 'All Slides', 'truvae' ),
      'add_new_item'          => __( 'Add New Slide', 'truvae' ),
      'add_new'               => __( 'Add New', 'truvae' ),
      'new_item'              => __( 'New Slide', 'truvae' ),
      'edit_item'             => __( 'Edit Slide', 'truvae' ),
      'update_item'           => __( 'Update Slide', 'truvae' ),
      'view_item'             => __( 'View Slide', 'truvae' ),
      'search_items'          => __( 'Search Slide', 'truvae' ),
      'not_found'             => __( 'Not found', 'truvae' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'truvae' ),
      'featured_image'        => __( 'Featured Image', 'truvae' ),
      'set_featured_image'    => __( 'Set featured image', 'truvae' ),
      'remove_featured_image' => __( 'Remove featured image', 'truvae' ),
      'use_featured_image'    => __( 'Use as featured image', 'truvae' ),
      'insert_into_item'      => __( 'Insert into Slide', 'truvae' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Slide', 'truvae' ),
      'items_list'            => __( 'Slides list', 'truvae' ),
      'items_list_navigation' => __( 'Slides list navigation', 'truvae' ),
      'filter_items_list'     => __( 'Filter Slides list', 'truvae' ),
    );
    $args = array(
      'label'                 => __( 'Slide', 'truvae' ),
      'description'           => __( 'Truvae Offshore Slides', 'truvae' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', ),
      'taxonomies'            => array( 'Slide_category' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-images-alt2',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
    );
    
    register_post_type( 'slide', $args );

  }
  
// SERVICES
  
add_action( 'init', 'truvae_service', 0 );

  function truvae_service() {

    $labels = array(
      'name'                  => _x( 'Services', 'Post Type General Name', 'truvae' ),
      'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'truvae' ),
      'menu_name'             => __( 'Service', 'truvae' ),
      'name_admin_bar'        => __( 'Service', 'truvae' ),
      'archives'              => __( 'Service Archives', 'truvae' ),
      'parent_item_colon'     => __( 'Parent Service:', 'truvae' ),
      'all_items'             => __( 'All Services', 'truvae' ),
      'add_new_item'          => __( 'Add New Service', 'truvae' ),
      'add_new'               => __( 'Add New', 'truvae' ),
      'new_item'              => __( 'New Service', 'truvae' ),
      'edit_item'             => __( 'Edit Service', 'truvae' ),
      'update_item'           => __( 'Update Service', 'truvae' ),
      'view_item'             => __( 'View Service', 'truvae' ),
      'search_items'          => __( 'Search Service', 'truvae' ),
      'not_found'             => __( 'Not found', 'truvae' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'truvae' ),
      'featured_image'        => __( 'Featured Image', 'truvae' ),
      'set_featured_image'    => __( 'Set featured image', 'truvae' ),
      'remove_featured_image' => __( 'Remove featured image', 'truvae' ),
      'use_featured_image'    => __( 'Use as featured image', 'truvae' ),
      'insert_into_item'      => __( 'Insert into service', 'truvae' ),
      'uploaded_to_this_item' => __( 'Uploaded to this service', 'truvae' ),
      'items_list'            => __( 'Services list', 'truvae' ),
      'items_list_navigation' => __( 'Services list navigation', 'truvae' ),
      'filter_items_list'     => __( 'Filter services list', 'truvae' ),
    );
    $args = array(
      'label'                 => __( 'Service', 'truvae' ),
      'description'           => __( 'Truvae Offshore services', 'truvae' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', ),
      'taxonomies'            => array( 'service_category' ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-sos',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
    );
    register_post_type( 'service', $args );

  }
  
add_action( 'init', 'truvae_service_taxonomy', 0 );

  function truvae_service_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'truvae' ),
      'singular_name'              => _x( 'Service Categoty', 'Taxonomy Singular Name', 'truvae' ),
      'menu_name'                  => __( 'Category', 'truvae' ),
      'all_items'                  => __( 'All Categories', 'truvae' ),
      'parent_item'                => __( 'Parent Category', 'truvae' ),
      'parent_item_colon'          => __( 'Parent Category:', 'truvae' ),
      'new_item_name'              => __( 'New Category Name', 'truvae' ),
      'add_new_item'               => __( 'Add New Category', 'truvae' ),
      'edit_item'                  => __( 'Edit Category', 'truvae' ),
      'update_item'                => __( 'Update Category', 'truvae' ),
      'view_item'                  => __( 'View Category', 'truvae' ),
      'separate_items_with_commas' => __( 'Separate categories with commas', 'truvae' ),
      'add_or_remove_items'        => __( 'Add or remove categories', 'truvae' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'truvae' ),
      'popular_items'              => __( 'Popular Categories', 'truvae' ),
      'search_items'               => __( 'Search Categories', 'truvae' ),
      'not_found'                  => __( 'Not Found', 'truvae' ),
      'no_terms'                   => __( 'No categories', 'truvae' ),
      'items_list'                 => __( 'Categories list', 'truvae' ),
      'items_list_navigation'      => __( 'Categories list navigation', 'truvae' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
    );
    register_taxonomy( 'service_category', array( 'service' ), $args );

  }