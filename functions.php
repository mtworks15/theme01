<?php


/* Mobile Detection */

require_once(get_template_directory() . '/inc/mobile-detect/Mobile_Detect.php');

function wp_mobile_detect() {

    $detect = new Mobile_Detect;

    if ( $detect->isMobile() && !$detect->isTablet() ) {
        return true;
    } else {
        return false;
    }

}


/* Load Stylesheets */

function load_stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main_custom', get_template_directory_uri() . '/assets/css/main-custom.css', array(), 1, 'all');
    wp_enqueue_style('main_custom');

    if ( wp_mobile_detect() ) {
        wp_register_style('mobile_style', get_template_directory_uri() . '/template-layout/mobile/css/style.css', array(), 1, 'all');
        wp_enqueue_style('mobile_style');

        wp_register_style('custom', get_template_directory_uri() . '/template-layout/mobile/css/custom.css', array(), 1, 'all');
        wp_enqueue_style('custom');
    } else {
        wp_register_style('desktop_style', get_template_directory_uri() . '/template-layout/desktop/css/style.css', array(), 1, 'all');
        wp_enqueue_style('desktop_style');

        wp_register_style('custom', get_template_directory_uri() . '/template-layout/desktop/css/custom.css', array(), 1, 'all');
        wp_enqueue_style('custom');
    }

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


/* Load Scripts */

function addjs() {

    wp_register_script('jquery', '', array(), '', true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('doubletaptogojs', get_template_directory_uri() . '/assets/js/doubletaptogo.min.js', array(), '', true);
    wp_enqueue_script('doubletaptogojs');

    if ( wp_mobile_detect() ) {
        wp_register_script('mobile_scripts', get_template_directory_uri() . '/template-layout/mobile/js/scripts.js', array(), '', true);
        wp_enqueue_script('mobile_scripts');

        wp_register_script('custom', get_template_directory_uri() . '/template-layout/mobile/js/custom.js', array(), '', true);
        wp_enqueue_script('custom');
    } else {
        wp_register_script('desktop_scripts', get_template_directory_uri() . '/template-layout/desktop/js/scripts.js', array(), '', true);
        wp_enqueue_script('desktop_scripts');

        wp_register_script('custom', get_template_directory_uri() . '/template-layout/desktop/js/custom.js', array(), '', true);
        wp_enqueue_script('custom');
    }

}

add_action('wp_enqueue_scripts', 'addjs');


/* Page stylesheets */

function page_stylesheets() {

    if ( is_page_template( 'page-templates/treatments.php' ) ) {
        wp_register_style('treatments', get_template_directory_uri() . '/assets/css/treatments.css', array(), 1, 'all');
        wp_enqueue_style('treatments');
    }

}

add_action('wp_enqueue_scripts', 'page_stylesheets');


/* Theme Options */

add_theme_support('menus');


/* Navigation Menus */

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);


/* Custom Excerpt Length */

function custom_excerpt($limit) {
    $excerpt = get_the_excerpt(); // need to declare in a variable to avoid uncaught error
    $result = wp_trim_words($excerpt, $limit);
    return $result;
}


/* Posts Per Page */

function set_posts_per_page($cat_name, $limit) {
    $query = new WP_Query(array( 
        'category_name' => $cat_name, 
        'posts_per_page' => $limit 
    ));
    return $query;
}