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

// ========================Adding langing cover section customizer=======================================================

function landing_customizer( $wp_customize ) {
	$wp_customize->add_section( 'devo', array(
		'title' => 'Devo Landing+', // The title of section
		'description' => 'Settings of Devo section', // The description of section
	) );
  
  // ============= welcome text ================
	$wp_customize->add_setting( 'devo_welcome_text', array(
    'default' => 'Hello world',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'devo_welcome_text', array(
    'label' => 'Welcome text',
    // 'type' =>, // Default is "text", define the content type of setting rendering.
    'section' => 'devo', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // ============= call to action ================
  $wp_customize->add_setting( 'call_to_action_name', array(
    'default' => 'More',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'call_to_action_name', array(
    'label' => 'Call to action button text',
    // 'type' =>, // Default is "text", define the content type of setting rendering.
    'section' => 'devo', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'call_to_action', array(
    'default' => '/blog',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'call_to_action', array(
    'label' => 'Call to action button link',
    // 'type' =>, // Default is "text", define the content type of setting rendering.
    'section' => 'devo', // id of section to which the setting belongs
    // Let everything else default
  ) );
}

add_action( 'customize_register', 'landing_customizer', 11 );

// ========================Adding front page about section customizer=======================================================

function front_about_customizer( $wp_customize ) {
  $wp_customize->add_section( 'devo_front_about', array(
    'title' => 'Devo Front page About Section+', // The title of section
    'description' => 'Setting for the about section on the front page.', // The description of section
  ) );
  $wp_customize->add_setting( 'front_about_header', array(
    'default' => 'About this Theme',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_about_header', array(
    'label' => 'Front-page about section header',
    // 'type' =>, // Default is "text", define the content type of setting rendering.
    'section' => 'devo_front_about', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_about_body', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta animi aperiam incidunt sed beatae cumque architecto corrupti veniam alias molestias error totam dolorum odit illo dolore quam, at distinctio nobis.',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_about_body', array(
    'label' => 'Front-page about section body',
    'type' => 'textarea', 
    'section' => 'devo_front_about', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // check box whether to display the about section or not
  $wp_customize->add_setting( 'front_about_checkbox', array(
    'default' => 0,
  ) );

  $wp_customize->add_control( 'front_about_checkbox', array(
    'label' => 'Hide About section',
    'type' => 'checkbox',
    'section' => 'devo_front_about',
  ) );
  }

  add_action( 'customize_register', 'front_about_customizer', 11 );

?>

