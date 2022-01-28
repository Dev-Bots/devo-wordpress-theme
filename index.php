<?php 
// adds default header or from header.php
get_header();
?>

<?php get_search_form(); ?>
<?php get_template_part('template-parts/blog/blog', 'design'); ?>

<h1><?php echo 'A'.get_theme_mod( 'devo_button_color' ); ?></h1>

<?php

get_footer();
?>