
<?php 
// adds default header or from header.php
get_header();
?>
<div class="container mt-2">
<?php
if(have_posts()){
    while(have_posts()){
        the_post()?>
        <h1> <a href="<?php the_permalink()?>"><?php the_title()?></a></h1>
        <?php 
        
        the_content();
        
    }}?>
</div>

<?php

get_footer();
  
?>