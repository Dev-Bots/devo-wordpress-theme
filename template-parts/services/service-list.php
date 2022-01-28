<div class="services pd">
    <div class="container">
        <h3 class="title"><?php echo get_theme_mod( 'front_services_header' ); ?></h3>
        <div class="row text-center">
        <?php
            if (!get_theme_mod( 'front_service1_checkbox' )) { ?>
            <div class="col-sm-12 col-md">
                <div class="square"><i class="<?php echo get_theme_mod( 'front_service1_icon' ) ?>"></i></div>
                <div class="serv">
                    <h5><?php echo get_theme_mod( 'front_service1_title' ) ?></h5>
                    <p><?php echo get_theme_mod( 'front_service1_body' ) ?></p>
                </div>
            </div>
            <?php }
        ?>
        <?php
            if (!get_theme_mod( 'front_service2_checkbox' )) { ?>
            <div class="col-sm-12 col-md">
                <div class="square"><i class="<?php echo get_theme_mod( 'front_service2_icon' ) ?>"></i></div>
                <div class="serv">
                    <h5><?php echo get_theme_mod( 'front_service2_title' ) ?></h5>
                    <p><?php echo get_theme_mod( 'front_service2_body' ) ?></p>
                </div>
            </div>
            <?php }
        ?>
        <?php
            if (!get_theme_mod( 'front_service3_checkbox' )) { ?>
            <div class="col-sm-12 col-md">
                <div class="square"><i class="<?php echo get_theme_mod( 'front_service3_icon' ) ?>"></i></div>
                <div class="serv">
                    <h5><?php echo get_theme_mod( 'front_service3_title' ) ?></h5>
                    <p><?php echo get_theme_mod( 'front_service3_body' ) ?></p>
                </div>
            </div>
            <?php }
        ?>
        <?php
            if (!get_theme_mod( 'front_service4_checkbox' )) { ?>
            <div class="col-sm-12 col-md">
                <div class="square"><i class="<?php echo get_theme_mod( 'front_service4_icon' ) ?>"></i></div>
                <div class="serv">
                    <h5><?php echo get_theme_mod( 'front_service4_title' ) ?></h5>
                    <p><?php echo get_theme_mod( 'front_service4_body' ) ?></p>
                </div>
            </div>
            <?php }
        ?>
        </div>
    </div>
</div>