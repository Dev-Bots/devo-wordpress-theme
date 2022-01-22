<?php get_header(); ?>
<?php the_content(); ?>

<div >

    <div class="jumbotron jumbotron-fluid">
  <!-- <div class="container p-5">
    <h1>About this theme</h1>      
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta animi aperiam incidunt sed beatae cumque architecto corrupti veniam alias molestias error totam dolorum odit illo dolore quam, at distinctio nobis.</p>
  </div> -->

 <?php
  if (!get_theme_mod( 'front_about_checkbox' )) { ?>
        <div class="container">
        <div class="row">
        <div>
            <h1 style="color: #777;"><?php echo get_theme_mod( 'front_about_header' ); ?></h1>      
            <p style="color: #777;"><?php echo get_theme_mod( 'front_about_body' ); ?></p>
        </div>
       
        </div>
 <?php }
 ?>



</div>

<?php
  if (!get_theme_mod( 'front_services_checkbox' )) { 
    get_template_part('template-parts/services/service', 'list');
   }
 ?>



<?php get_template_part('template-parts/testimonials/testimonial', 'list'); ?>




</div>



<?php get_footer(); ?>