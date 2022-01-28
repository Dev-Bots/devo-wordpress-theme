<?php 
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