<?php
 // ========================Adding services section customizer=======================================================

 function front_services_customizer( $wp_customize ) {
	$wp_customize->add_section( 'devo_services', array(
		'title' => 'Devo Sevices Section+', // The title of section
		'description' => 'Settings for the services section on the front page.', // The description of section
	) );
  

  // Services section header on the front page
  $wp_customize->add_setting( 'front_services_header', array(
    'default' => 'Services',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_services_header', array(
    'label' => 'Services Section Header',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // ++++++++++++++++++++++++Service 1 ++++++++++++++++++++++++++++++++++

  $wp_customize->add_setting( 'front_service1_icon', array(
    'default' => 'fas fa-code',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_service1_icon', array(
    'label' => 'Service 1 Icon',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service1_title', array(
    'default' => 'Clean Code',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service1_title', array(
    'label' => 'Service 1 title',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service1_body', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service1_body', array(
    'label' => 'Service 1 body',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );
  
  $wp_customize->add_setting( 'front_service1_checkbox', array(
    'default' => 0,
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service1_checkbox', array(
    'label' => 'Hide Service 1',
    'type' => 'checkbox',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // ---------------------------------------------------------------
