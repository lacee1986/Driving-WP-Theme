<?php

// Change image url to relative
add_filter('image_send_to_editor','image_to_relative',5,8);
function image_to_relative($html, $id, $caption, $title, $align, $url, $size, $alt){
    $sp = strpos($html,"src=") + 5;
    $ep = strpos($html,"\"",$sp);
    $imageurl = substr($html,$sp,$ep-$sp);
    $relativeurl = str_replace("http://","",$imageurl);
    $sp = strpos($relativeurl,"/");
    $relativeurl = substr($relativeurl,$sp);
    $html = str_replace($imageurl,$relativeurl,$html);
    return $html;
}


/* Theme Support */
add_theme_support('post-thumbnails');

/* Advanced Custom Fields - Options Pages */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'icon_url'              => 'dashicons-admin-tools',
        'redirect'	=> false
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Homepage Settings',
        'menu_title'	=> 'Homepage',
        'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));
}

/* Show Page Template */
add_action('wp_head', 'show_template');
function show_template() {
    global $template;
    $template = '<div id="page_template"><span>Template URL:</span> '.$template.'</div>';
    if ( is_super_admin() ) { print_r($template); }
}

/* Load Google Fonts - Optional */
// add_action( 'wp_enqueue_scripts', 'custom_enqueue_google_font' );
function custom_enqueue_google_font() {
    $query_args = array('family' => 'Libre+Baskerville:400italic');
     wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
     wp_enqueue_style( 'google-fonts' );
}
 


/* Load the theme stylesheets */
add_action('wp_enqueue_scripts', 'theme_styles');
function theme_styles() { 
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' ); // Slider stylesheet
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' ); // Main stylesheet 
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' ); // Responsive stylesheet 
}

/* Load the theme scripts */
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() { 
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js' ); // jQuery
    wp_register_script( 'jqueryvalidate', get_template_directory_uri() . '/js/jquery.validate.js' ); // jQuery validation
    // wp_register_script( 'gmapsapi', 'https://maps.googleapis.com/maps/api/js?key=GENERATEAPIKEY', array(), '1.0.0', true ); // Optional for Google Maps API
    // wp_register_script( 'acfmap', get_template_directory_uri() . '/js/acfmap.js' ); // Advanced Custom Fields map
    wp_register_script( 'modernizer', get_template_directory_uri() . '/js/modernizr.js' ); // Modernizr for old browsers
    wp_register_script( 'respond', get_template_directory_uri() . '/js/respond.js' ); // Respond for css selectors
    wp_register_script( 'slick', get_template_directory_uri() . '/js/slick.js' ); // Slider plugin
    wp_register_script( 'ajax', get_template_directory_uri() . '/js/ajax.js' ); // Main ajax file
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js' ); // Main jQuery file
    wp_enqueue_script('jquery');
    wp_enqueue_script('jqueryvalidate');
    // wp_enqueue_script('gmapsapi'); // Optional for Google Maps API
    //wp_enqueue_script('acfmap');
    wp_enqueue_script('modernizer');
    wp_enqueue_script('respond');
    wp_enqueue_script('slick');
    wp_enqueue_script('ajax');
    wp_enqueue_script('main');
}

/* Custom Login Page */
add_action("login_head", "my_login_head");
function my_login_head() {
     echo "<link rel='stylesheet' href='" . get_template_directory_uri() . "/css/login.css' />";
}

/* Custom Post Image Sizes */
add_image_size( 'custom-image-name', 651, 362, true ); // Hard cropped

/* Menu - Registering */
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'main_menu' => __( 'Main Menu Place' ),
            'footer_menu_01' => __( 'Footer Menu Place 01' ),
            'footer_menu_02' => __( 'Footer Menu Place 02' )
        )
    );
}

/* Add Woocommerce support */
// add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>