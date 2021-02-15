<?php
function load_assets()
{
  /** Register styles */
  wp_register_style('vendor', get_template_directory_uri() . '/dist/css/vendor.css', [], false, 'all');
  wp_register_style('site', get_template_directory_uri() . '/dist/css/site.css', [], false, 'all');
  wp_register_style('ionicons', 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', [], false, 'all');
  wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', [], false, 'all');

  /** Enqueue styles */
  wp_enqueue_style('vendor');
  wp_enqueue_style('site');
  wp_enqueue_style('ionicons');
  wp_enqueue_style('animate');

  wp_deregister_script('jquery');
  // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], 1, true);
  wp_register_script('vendor', get_template_directory_uri() . '/dist/js/vendor.js', [], 1, true);
  wp_register_script('manifest', get_template_directory_uri() . '/dist/js/manifest.js', [], 1, true);
  wp_register_script('app', get_template_directory_uri() . '/dist/js/site.js', ['vendor'], 1, true);
  // wp_register_script('contact', get_template_directory_uri() . '/dist/js/contact.js', ['vendor'], 1, true);

  wp_enqueue_script('manifest');
  wp_enqueue_script('vendor');
  wp_enqueue_script('app');
  // wp_enqueue_script('contact');

  return;

}

add_action('wp_enqueue_scripts', 'load_assets');

/** Enable menus */
function register_site_menus() {
  register_nav_menus(
    array(
      'site-header-menu' => __( 'Site header menu' ),
      'site-footer-menu' => __( 'Site footer menu' )
    )
  );
}
add_action( 'init', 'register_site_menus' );
