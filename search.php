<?php 
// adds default header or from header.php
get_header();
?>

<?php get_search_form(); ?>
<h2 class="m-2">Search result for: " <?php echo esc_html(get_search_query());?> "</h2>


<div class="row" >
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post()?>
            
            <?php 
           
            if (get_post_type() == 'post') {?>
                <div class="col-sm-3 col-md-6 col-lg-4">
            <!-- <div class="container-fluid"> -->
                <div class="">
                    <div class="site-blog">
                        <div class="card p-3 p-md-4">
                            <h4 class="bold mb-3" id="head2"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                            <p class="card-text"><?php the_excerpt()?></p> 
                            <a href="<?php the_permalink()?>"><button  class="btn text-white btn-sm col-6 col-md-4 p-2 px-0 py-md-2"> Read More</button></a>
                            
                        </div>
                    </div>
                </div>
                <br>
            <!-- </div> -->
            </div>
            <?php }
            ?>
            
            
            <?php }} 
            else { ?>
                <h1 class="container justify-content-center mt-4">No Result Found</h1>
            <?php }
            ?>
    </div>
<?php

get_footer();
?>