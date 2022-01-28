<?php
function devo_font_customizer($wp_customize) {

    $url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDwe8tl4YMbg8asbjzbXDDFuxzR1Wm9EQ0';
    $response = wp_remote_get( 'http://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDwe8tl4YMbg8asbjzbXDDFuxzR1Wm9EQ0', array( 'sslverify' => true ) );
    $response = wp_remote_retrieve_body( wp_remote_get($url, array('sslverify' => false )));

    if( is_wp_error( $response ) ) {
    echo 'Devo Fonts Customizer: Error';
    } else {

        $json_a = json_decode($response,  true);
        $font_items = $json_a['items'];
        $choices = array();

        foreach ($font_items as $font_value => $font_item) {
            $choices[$font_item['family']] = $font_item['family'].' (Google)';
        }

        $font_args = array(
            'label'     => 'Fonts Section',
            'section'   => 'devo_fonts_section',
            'settings'  => 'devo_fonts_display',
            'type'      => 'select',
            'choices'   => $choices
        );
    } 

    $wp_customize->add_section( 'devo_fonts_section', array(
        'title' => 'Fonts'
    ));

    $wp_customize->add_setting( 'devo_fonts_display', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'devo_fonts_display_control', $font_args));

}
add_action( 'customize_register','devo_font_customizer' );

function devo_customize_font_css() { ?>

    <style type="text/css">
html, body {
            font-family: <?php echo get_theme_mod('devo_fonts_display'); ?> !important;
        }
    </style>

<?php }
add_action('wp_head', 'devo_customize_font_css');
?>