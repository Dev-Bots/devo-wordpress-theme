<?php
 // ========================Adding color customizer=======================================================
 function devo_color_customizer( $wp_customize ) {
    $wp_customize->add_section( 'colors', array(
        'title' => __( 'Colors', 'devo' ),
        'priority' => 30,
    ) );
	
        
        // Text color
        $wp_customize->add_setting( 'devo_text_color', array(
            'default'   => '',
            'transport' => 'refresh',
          ) );
      
          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'devo_text_color', array(
            
            'label'   => esc_html__( 'Text color', 'theme' ),
            'section' => 'colors',
            'settings'   => 'devo_text_color'
          ) ) );

        //   ==================================Button Color===================================================

          //Button color

            $wp_customize->add_setting( 'devo_button_color', array(
                'default'   => '#F5F5F5',
                'transport' => 'refresh',
            ) );

            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'devo_button_color', array(
                'label'   => esc_html__( 'Button color', 'theme' ),
                'section' => 'colors',
                'settings'   => 'devo_button_color'
            ) ) );

        //   ==================================Link Color===================================================

          //Link color

          $wp_customize->add_setting( 'devo_link_color', array(
            'default'   => '#F5F5F5',
            'transport' => 'refresh',
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'devo_link_color', array(
            'label'   => esc_html__( 'Link color', 'theme' ),
            'section' => 'colors',
            'settings'   => 'devo_link_color'
        ) ) );

        //   ==================================Border Color===================================================

          //Border color

          $wp_customize->add_setting( 'devo_border_color', array(
            'default'   => '#F5F5F5',
            'transport' => 'refresh',
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'devo_border_color', array(
            'label'   => esc_html__( 'Border color', 'theme' ),
            'section' => 'colors',
            'settings'   => 'devo_border_color'
        ) ) );


}

  add_action( 'customize_register', 'devo_color_customizer' );


// Output the custom CSS

function devo_customize_color_css(){
    ?>
    <style type="text/css">


        html .body{
            color: <?php echo get_theme_mod( 'devo_text_color' ); ?> !important;
        }




        html .btn{
            background-color: <?php echo get_theme_mod( 'devo_button_color' ); ?> !important;
        }

        html .border{
            color: <?php echo get_theme_mod( 'devo_border_color' ); ?> !important;
        }

        html .a{
            color: <?php echo get_theme_mod( 'devo_link_color' ); ?> !important;
        }

    </style>


    <?php


add_action( 'wp_head', 'devo_customize_color_css' );
    }

?>