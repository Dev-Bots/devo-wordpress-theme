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
 // ++++++++++++++++++++++++Service 2 ++++++++++++++++++++++++++++++++++

 $wp_customize->add_setting( 'front_service2_icon', array(
    'default' => 'fas fa-cogs',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_service2_icon', array(
    'label' => 'Service 2 Icon',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service2_title', array(
    'default' => 'Problem Solving',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service2_title', array(
    'label' => 'Service 2 title',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service2_body', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service2_body', array(
    'label' => 'Service 2 body',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );
  
  $wp_customize->add_setting( 'front_service2_checkbox', array(
    'default' => 0,
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service2_checkbox', array(
    'label' => 'Hide Service 2',
    'type' => 'checkbox',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // ---------------------------------------------------------------
  // ++++++++++++++++++++++++Service 3 ++++++++++++++++++++++++++++++++++

  $wp_customize->add_setting( 'front_service3_icon', array(
    'default' => 'fas fa-cogs',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_service3_icon', array(
    'label' => 'Service 3 Icon',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service3_title', array(
    'default' => 'Problem Solving',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service3_title', array(
    'label' => 'Service 3 title',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service3_body', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service3_body', array(
    'label' => 'Service 3 body',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );
  
  $wp_customize->add_setting( 'front_service3_checkbox', array(
    'default' => 0,
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service3_checkbox', array(
    'label' => 'Hide Service 3',
    'type' => 'checkbox',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // ---------------------------------------------------------------

  // ++++++++++++++++++++++++Service 4 ++++++++++++++++++++++++++++++++++

  $wp_customize->add_setting( 'front_service4_icon', array(
    'default' => 'fas fa-cogs',
    // Let everything else default
  ) );

  $wp_customize->add_control( 'front_service4_icon', array(
    'label' => 'Service 4 Icon',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service4_title', array(
    'default' => 'Problem Solving',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service4_title', array(
    'label' => 'Service 4 title',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  $wp_customize->add_setting( 'front_service4_body', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service4_body', array(
    'label' => 'Service 4 body',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );
  
  $wp_customize->add_setting( 'front_service4_checkbox', array(
    'default' => 0,
    // Let everything else default
  ) );  

  $wp_customize->add_control( 'front_service4_checkbox', array(
    'label' => 'Hide Service 4',
    'type' => 'checkbox',
    'section' => 'devo_services', // id of section to which the setting belongs
    // Let everything else default
  ) );

  // ---------------------------------------------------------------

 // Services section header on the front page
 $wp_customize->add_setting( 'front_services_checkbox', array(
  'default' => 0,
  // Let everything else default
) );

$wp_customize->add_control( 'front_services_checkbox', array(
  'label' => 'Hide the whole Services Section',
  'type' => 'checkbox',
  'section' => 'devo_services', // id of section to which the setting belongs
  // Let everything else default
) );





}

add_action( 'customize_register', 'front_services_customizer', 11 );
?>