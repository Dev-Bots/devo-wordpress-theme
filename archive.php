<?php 
// adds default header or from header.php
get_header();
?>


<div class="row">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post()?>

            <div class="col-3">
            
            <div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="clip-path">
            <img src="<?php the_post_thumbnail()?>" alt="Thumbnail" width="400" height="225">
        </div>
        <div class="content text-center">
        <h4 class="card-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                    <p class="card-text"><?php the_excerpt()?></p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
        </div>
    </div>
</div>
            </div>
            
            <?php }} ?>
    </div>
<?php
// adds default footer or from footer.php
// get_footer();
  
?>




