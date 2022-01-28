
<div class="row" >
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post()?>
            

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
            
            <?php }} ?>
    </div>

