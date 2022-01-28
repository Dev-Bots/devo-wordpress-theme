<div class="blog-single gray-bg" style="font-family: <?php echo get_theme_mod( 'devo_text_color' ); ?>>
        <div class="container">
            <!-- <div class="row align-items-start"> -->
            <div class="row">
                <!-- <div class="col-lg-8 m-15px-tb"> -->
                <!-- <div class="col-lg-10 m-15px-tb"> -->
                    <article class="article">
                        <div class="article-img">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            <?php } ?>
                        </div>
                        <div class="article-title"">
                            <h6><?php the_category()?></h6>
                            <h2><?php the_title()?> </h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="https://www.pinclipart.com/picdir/big/78-780477_about-us-avatar-icon-red-png-clipart.png" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label><?php the_author()?></label>
                                    <span><?php the_date()?></span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <?php the_content()?>
                        </div>
                        <div class="nav tag-cloud">
                            <!-- <a href="#">Design</a> -->
                            <?php the_tags()?>
                        </div>
                    </article>
<!-- comments add -->
<?php comments_template()?>
                </div>
<!-- sidebar add -->
            </div>
        </div>
    </div>