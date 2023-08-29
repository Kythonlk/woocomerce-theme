<?php

function enqueue_bootstrap() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array('popper'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');


function enqueue_slick_scripts() {
    // Slick Styles
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('app-css', get_template_directory_uri() . '/inc/css/app.css', true);

    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/inc/js/main.js', true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_scripts');

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );