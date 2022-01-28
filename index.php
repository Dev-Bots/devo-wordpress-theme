<?php 
// adds default header or from header.php
get_header();
?>

<?php get_search_form(); ?>
<?php get_template_part('template-parts/blog/blog', 'design'); ?>

<p><?php echo 'A'.get_theme_mod( 'devo_button_color' ); ?><p>
<p><?php echo 'A'.get_theme_mod( 'devo_fonts_display' ); ?><p>

<?php

get_footer();
?>