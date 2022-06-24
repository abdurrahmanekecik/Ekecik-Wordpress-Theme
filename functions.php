<?php
function theme_setup() {
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
register_nav_menu( 'primary', __( 'Main Menu', 'theme' ) );
register_nav_menu( 'footer1', __( 'Footer1 Menu', 'theme' ) );
register_nav_menu( 'footer2', __( 'Footer2 Menu', 'theme' ) );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 604, 270, true );
add_filter( 'use_default_gallery_style', '__return_false' ); 
}
add_action( 'after_setup_theme', 'theme_setup' );
 
function theme_style_scripts() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array() );
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array() ); 	
wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css', array() ); 	
wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array() );
	


wp_enqueue_script( 'animation', get_template_directory_uri() . '/assets/js/animation.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl-carousel.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array( 'jquery' ), '', true );

wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/js/bootstrap.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'jquery-slim', get_template_directory_uri() . '/vendor/jquery/jquery.slim.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'jquery-slim-min', get_template_directory_uri() . '/vendor/jquery/jquery.slim.min.js', array( 'jquery' ), '', true );


	
add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_style_scripts' );

//Classic Editor
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/*ACF*/
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/plugins/acf/';
    return $path;
    
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 
    $dir = get_stylesheet_directory_uri() . '/plugins/acf/';
    return $dir;
    
}
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'publish_posts',
		'redirect'		=> false,
		'update_button'		=> __('Update', 'acf'),
		'updated_message'	=> __("Updated Settings", 'acf'),
	));
}






