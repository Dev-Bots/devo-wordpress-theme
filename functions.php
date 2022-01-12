<?php

// Add Menu Support
add_theme_support('menus');
add_theme_support( 'custom-header' );

// Register Nav Menu 
function devo_theme_menu() {
    register_nav_menus(
      array(
        'top-menu' => __( 'Top Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }



//   Add the hook to make the menu 
add_action( 'init', 'devo_theme_menu' );

// Adding sidebar 
function my_custom_theme_sidebar() {
  register_sidebar( array(
      'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
      'id'   => 'sidebar-1',
       'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="rounded">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

// Adding Style 
function devo_theme_loadStyle()
{
    wp_register_style( 'devo_theme_style', get_template_directory_uri() . '/assets/css/devo_theme_style.css',array(), false, 'all');
    wp_enqueue_style('devo_theme_style');
}
add_action( 'wp_enqueue_scripts', 'devo_theme_loadStyle' );



function devo_custom_header_setup() {
  $defaults = array(
      
      'default-image' => get_template_directory_uri() . '/assets/image/cover.jpg',
      // Display the header text along with the image
      'header-text' => true,
      // Header text color default
      'default-text-color'  => '000',
      // Header image width (in pixels)
      'width' => 1000,
      // Header image height (in pixels)
      'height' => 198,
      // Header image random rotation default
      'random-default'  => false,
      // Enable upload of image file in admin 
      'uploads' => false,
      // function to be called in theme head section
      'wp-head-callback' => 'wphead_cb',
      //  function to be called in preview page head section
      'admin-head-callback'  => 'adminhead_cb',
      // function to produce preview markup in the admin screen
      'admin-preview-callback' => 'adminpreview_cb',
      );
}
add_action( 'after_setup_theme', 'devo_custom_header_setup' );

?>