<?php

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