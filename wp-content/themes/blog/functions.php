<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>


<?php

function load_stylesheet()
{
    // wp_register_style('style', );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap.js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), false, 'all');

    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}


add_action('wp_enqueue_scripts', 'load_stylesheet');


function add_menu_support() { 
  add_theme_support( 'menus' ); 
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'add_menu_support' );


register_nav_menus (
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);

function codex_custom_init() {
    $labels = array(
      'name' => _x('cars', 'post type general name'),
      'singular_name' => _x('Car', 'post type singular name'),
      'add_new' => _x('Add New', 'car'),
      'add_new_item' => __('Add New car'),
      'edit_item' => __('Edit car'),   
      'new_item' => __('New car'),
      'all_items' => __('All cars'),
      'view_item' => __('View car'),
      'search_items' => __('Search car'),
      'not_found' =>  __('No cars found'),
      'not_found_in_trash' => __('No cars found in Trash'), 
      'parent_item_colon' => '',
      'menu_name' => __('Cars')
    );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true, 
      'show_in_menu' => true, 
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true, 
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array( 'title', 'editor', 'excerpt','custom-fields', 'author', 'thumbnail', 'comments' )
    ); 
    register_post_type('car',$args);

    $labels = array(
        'name' => _x('motocycles', 'post type general name'),
        'singular_name' => _x('<motocycle', 'post type singular name'),
        'add_new' => _x('Add New', 'motocycle'),
        'add_new_item' => __('Add New motocycle'),
        'edit_item' => __('Edit motocycle'),   
        'new_item' => __('New motocycle'),
        'all_items' => __('All motocycles'),
        'view_item' => __('View motocycle'),
        'search_items' => __('Search motocycle'),
        'not_found' =>  __('No motocycle found'),
        'not_found_in_trash' => __('No motocycle found in Trash'), 
        'parent_item_colon' => '',
        'menu_name' => __('Motocycles')
      );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true, 
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments' )
      ); 
      register_post_type('motocycle',$args);


  }
  add_action( 'init', 'codex_custom_init' );
 
      
