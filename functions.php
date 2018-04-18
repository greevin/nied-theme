<?php

// Add Thumbnails
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

// Custom Menu
add_theme_support('menus');
require_once get_template_directory() . '/assets/includes/class-wp-bootstrap-navwalker.php';
register_nav_menus(array(
    'primary' => __('Menu Inicial', 'menu-inicial'),
));

// Custom Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// CSS and Scripts
function wp_load_scripts()
{
    // 	Carregando CSS header
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    // 	Carregando Scripts header
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'));

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

}
add_action('wp_enqueue_scripts', 'wp_load_scripts');
