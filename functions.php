<?php

function add_tailwind() {
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/css/style.css' );
}
add_action('wp_enqueue_scripts', 'add_tailwind');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu1' => __('Footer Menu 1'),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 /* https://developer.wordpress.org/themes/functionality/custom-logo/ */
 function vee2design_custom_logo_setup() {
   /* TODO: Correct Size for logo */
   $defaults = array(
     'height' => 200,
     'width' => 300,
     'flex-width' => true,
     'flex-height' => true,
     'header-text' => array('site-title', 'site-description'),
   );
   add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'vee2design_custom_logo_setup' );

 function vee2design_woocommerce_setup() {
   add_theme_support(
     'woocommerce', apply_filters(
       'storefront_woocommerce_args', array(
         'single_image_width'    => 416,
         'thumbnail_image_width' => 324,
         'product_grid'          => array(
           'default_columns' => 3,
           'default_rows'    => 4,
           'min_columns'     => 1,
           'max_columns'     => 6,
           'min_rows'        => 1,
         ),
       )
     )
   );
 }

 add_theme_support( 'wc-product-gallery-zoom' );
 add_theme_support( 'wc-product-gallery-lightbox' );
 add_theme_support( 'wc-product-gallery-slider' );
 add_action( 'after_setup_theme', 'vee2design_woocommerce_setup' );
