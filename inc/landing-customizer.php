<?php

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

?>