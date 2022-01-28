
<?php
add_theme_support( 'automatic-feed-links' );
// ===================common functions=========================
 require get_template_directory().'/inc/common-function.php'; 

// ========================Adding Custom Header=======================================================

require get_template_directory().'/inc/header-image-customizer.php';

// ========================Adding langing cover section customizer=======================================================

require get_template_directory().'/inc/landing-customizer.php';


// ========================Adding front page about section customizer=======================================================

require get_template_directory().'/inc/front-about.php';
// ========================Adding services customizer=======================================================

require get_template_directory().'/inc/service-customizer.php';


// ========================Adding color customizer=======================================================

require get_template_directory().'/inc/color-customizer.php';

// ========================Adding color customizer=======================================================

require get_template_directory().'/inc/font-customizer.php';

// ========================Adding widgets=======================================================

require get_template_directory().'/inc/widgets.php';




// creating default home page
if(get_page_by_title("Home") == null)
{
    $post = array(
        "post_title" => "Home",
        "post_status" => "publish",
        "post_type" => "page",
        "menu_order" => "-100",
        "page_template" => "front-default.php"
    );

    wp_insert_post($post);

    $home_page = get_page_by_title("Home");
    update_option("page_on_front",$home_page->ID);
    update_option("show_on_front","page");

}
if(get_page_by_title("Contact") == null)
{
    $post = array(
        "post_title" => "Contact",
        "post_status" => "publish",
        "post_type" => "page",
        "menu_order" => "-100",
        "page_template" => "single-contact.php"
    );

    wp_insert_post($post);

}

?>
