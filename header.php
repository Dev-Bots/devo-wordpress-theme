<!DOCTYPE html>
<html <?php language_attributes(); ?>  lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="<?php echo esc_html( get_template_directory_uri(). '/assets/css/bootstrap.min.css' ) ?>" rel="stylesheet" >    <title><?php bloginfo('name')?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>
<?php wp_body_open(); ?>
<header class="site-header">




</header>
<?php 
    if (is_front_page()) {
        dynamic_sidebar( 'top_bar' );

        
    }
 
?>


<?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>


<?php 
    if (is_front_page()) {
        get_template_part('template-parts/header/header', 'image');
        
    }
 
?>


