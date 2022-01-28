<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" >
    <title><?php bloginfo('name')?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>
<header class="site-header">




</header>

<?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>


<?php 
    if (is_front_page()) {
        get_template_part('template-parts/header/header', 'image');
        get_template_part('template-parts/header/header', 'callToAction');
    }
 
?>

<!-- <h1>   <a href="<?php echo home_url()?>"><?php bloginfo('name')?></a>  </h1>
<h4><?php bloginfo('description')?></h4> -->
