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

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Custom Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 400,
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
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

    // 	Carregando Scripts header
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('masonry-js', get_template_directory_uri().'/assets/js/masonry.pkgd.min.js', array('jquery'));
    wp_enqueue_script('imagesloaded-js', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', array('jquery'));
    wp_enqueue_script('masonry-conf-js', get_template_directory_uri().'/assets/js/masonry-conf.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'wp_load_scripts');

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}

add_action('wp_footer', 'add_back_to_top');
function add_back_to_top()
{
    ?>
    <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery('body').append('<a href="#" class="go-top"><span class="dashicons dashicons-arrow-up-alt"></span></a>')
                    // Show or hide the sticky footer button
                    jQuery(window).scroll(function() {
                        if (jQuery(this).scrollTop() > 400) {
                            jQuery('.go-top').fadeIn();
                        } else {
                            jQuery('.go-top').fadeOut();
                        }
                    });
                    // Animate the scroll to top
                    jQuery('.go-top').click(function(event) {
                        event.preventDefault();
                        jQuery('html, body').animate({scrollTop: 0}, 800);
                    })
                });
    </script>
    <?php
}

add_image_size( 'custom-size', 364, 0, true );
