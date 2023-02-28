<?php

function _add_javascript() {
    // force all scripts to load in footer
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    wp_dequeue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/src/js/bootstrap/bootstrap.bundle.min.js', null, null, true );
    wp_enqueue_script('feather', get_template_directory_uri() . '/assets/src/js/feather/feather.min.js', null, null, true );
    wp_enqueue_script('swiper-main', get_template_directory_uri() . '/assets/src/js/swiper-slider/swiper-bundle.min.js', null, null, true );
    wp_enqueue_script('swiper-custom', get_template_directory_uri() . '/assets/src/js/swiper-slider/swiper-custom.min.js', null, null, true );
    //wp_enqueue_script('timer', get_template_directory_uri() . '/assets/dist/js/timer.js', null, null, true );
    wp_enqueue_script('sticky-header', get_template_directory_uri() . '/assets/dist/js/sticky-header.js', null, null, true );
    wp_enqueue_script('active-class', get_template_directory_uri() . '/assets/dist/js/active-class.js', null, null, true );
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/src/js/wow.js', null, null, true );
    wp_enqueue_script('wow-custom', get_template_directory_uri() . '/assets/dist/js/wow-custom.js', array('wow'), null, true );



	wp_enqueue_script('theme', get_template_directory_uri() . '/assets/dist/js/script.js', null, null, true );
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);

function _add_stylesheets() {
    // removing all WP css files enqueued by default
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/src/scss/vendors/swiper-bundle.min.css', null, null, 'all' );
    wp_enqueue_style('wow', get_template_directory_uri() . '/assets/src/scss/vendors/wow-animate.css', null, null, 'all' );
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/dist/css/main.css', null, null, 'all' );
}
add_action('wp_enqueue_scripts', '_add_stylesheets');
