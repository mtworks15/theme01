<?php

require_once(get_template_directory() . '/inc/mobile-detect/Mobile_Detect.php');

function wp_mobile_detect() {

    $detect = new Mobile_Detect;

    if ( $detect->isMobile() && !$detect->isTablet() ) {
        return true;
    } else {
        return false;
    }

}


function load_stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

    if ( wp_mobile_detect() ) {
        wp_register_style('mobile_style', get_template_directory_uri() . '/template-layout/mobile/css/style.css', array(), 1, 'all');
        wp_enqueue_style('mobile_style');
    } else {
        wp_register_style('desktop_style', get_template_directory_uri() . '/template-layout/desktop/css/style.css', array(), 1, 'all');
        wp_enqueue_style('desktop_style');
    }

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs() {

    wp_register_script('jquery', '', array(), '', true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '', true);
    wp_enqueue_script('custom');

    if ( wp_mobile_detect() ) {
        wp_register_script('mobile_scripts', get_template_directory_uri() . '/template-layout/mobile/js/scripts.js', array(), '', true);
        wp_enqueue_script('mobile_scripts');
    } else {
        wp_register_script('desktop_scripts', get_template_directory_uri() . '/template-layout/desktop/js/scripts.js', array(), '', true);
        wp_enqueue_script('desktop_scripts');
    }

}

add_action('wp_enqueue_scripts', 'addjs');
