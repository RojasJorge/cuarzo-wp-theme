<div class="site--header">
  <div class="container">
    <div class="row">
      <div class="col logo">
        <img class="animate__animated animate__fadeIn" src="<?php echo get_template_directory_uri(); ?>/dist/images/cuarzo-logo.png"/>
      </div>
      <?php wp_nav_menu([
        'menu' => 'Menu Principal',
        'menu_class' => '',
        'theme_location' => 'site-header-menu',
        'container_class' => 'col-md-9 site--menu__header'
      ]); ?>
    </div>
  </div>
</div>