<?php if (has_nav_menu('top-menu')) : ?>

<nav class="navbar navbar-expand-md navbar-dark navi" role="navigation">
  <div class="container navia">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'devo'); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <?php wp_nav_menu(array(
      
      'theme_location'    => 'top-menu',
      'depth'             => 4,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'bs-example-navbar-collapse-1',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    )); ?>

  </div>
</nav>

<?php endif ?>