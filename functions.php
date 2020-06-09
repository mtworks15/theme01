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
add_theme_support('post-thumbnails');
add_theme_support('widgets');


/* Navigation Menus */

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);


/* Custom Featured Image Sizes */

add_image_size( 'img-lg', 1140, 600, true );
add_image_size( 'img-sm', 500, 300, true);
add_image_size( 'img-sm-square', 500, 500, false);
add_image_size( 'img-xs-square', 300, 300, false);


/* Register Sidebars */

function my_sidebars() {
    register_sidebar( 
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'my_sidebars');


/* Register Custom Post Types */

function cosmetics_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Cosmetics',
            'singular_name' => 'Cosmetic'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail')
        //'rewrite' => array('slug' => 'my-cosmetics'),
    );

    register_post_type( 'cosmetics', $args );
}

add_action('init', 'cosmetics_post_type');


/* Register Taxonomy */

function cosmetics_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'hierarchical' => true,
        'public' => true
    );

    register_taxonomy( 'brands', array('cosmetics'), $args );
}

add_action('init', 'cosmetics_taxonomy');


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


/* Load More Posts */

function misha_my_load_more_scripts() {
    
    if ( is_category( 'eye' ) ) {

        global $wp_query; 
    
        // register our main script but do not enqueue it yet
        wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/myloadmore.js', array('jquery') );
    
        // now the most interesting part
        // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
        // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
        wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
            'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
            'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
            'max_page' => $wp_query->max_num_pages
        ) );
    
        wp_enqueue_script( 'my_loadmore' );

    }

}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );


function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    if ( $_POST['type'] === 'default' ) {
    
        // it is always better to use WP_Query but not here
        query_posts( $args ); 
        
        get_template_part('template-parts/page/content', 'archive');

        die; // here we exit the script and even no wp_reset_query() required!

    }

    else if ( $_POST['type'] === 'custom' ) {
 
        // it is always better to use WP_Query but not here
        query_posts( $args );

        $arrContentSetup = [
            'gridSetup' => $_POST['grid'],
            'excerptLength' => $_POST['excerpt']
        ];

        set_query_var( 'contentSetupVar', $arrContentSetup );
        
        get_template_part('template-parts/page/content', 'category2');

        die; // here we exit the script and even no wp_reset_query() required!
    
    }

}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


/* Shortcodes */

function latest_cosmetics($attr, $content = null, $tag = '') {
    ob_start();
    $title = '<h3 class="mt-5 mb-4">' . $content . '</h3>';
    print_r($title);
    set_query_var('attributes', $attr);
    get_template_part('template-parts/post/latest', 'cosmetics');
    return ob_get_clean();
}

add_shortcode( 'latest_cosmetics', 'latest_cosmetics' );

function my_phone() {
    $phone = '<a href="">3345 000 8745</a>';
    return $phone;
}

add_shortcode( 'phone', 'my_phone' );