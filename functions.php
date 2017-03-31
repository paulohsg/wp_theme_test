<?php 

/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');
register_nav_menus( array(
    'primary' => __( 'Menu header', 'menu-header' ),
) );

/**************************************
 *  SCRIPTS / CSS
 **************************************/
function wp_responsivo_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'slick-carousel', get_template_directory_uri() . '/assets/css/slick.css' );
  wp_enqueue_style( 'slick-carousel-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true );
  wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/js/jquery-3.1.1.js', array('jquery'), '', true );
  wp_enqueue_script('slick-carousel-js', get_template_directory_uri().'/assets/js/slick.js');


  

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );

/**************************************
 * Registro Custom Post type Sale
 **************************************/
add_action('init', 'sales_register');
function sales_register(){
     $labels = array(
        'name' => _x('Sales', 'post type general name'),
        'singular_name' => _x('Sale', 'post type singular name'),
        'add_new' => _x('Add sale', 'sale'),
        'add_new_item' => __('Add sale'),
        'edit_item' => __('Edit sale'),
        'new_item' => __('New sale'),
        'view_item' => __('View sale'),
        'search_items' => __('Search for sale'),
        'not_found' =>  __('No results'),
        'not_found_in_trash' => __('Nothing found in garbage'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'sales'), 
        'menu_position' => 6,
        'supports' => array('title', 'thumbnail'),
      );
    register_post_type('sales',$args);
}


/**************************************
 * Registro Custom Post type Most Selled
 **************************************/
add_action('init', 'most_selled_register');
function most_selled_register(){
     $labels = array(
        'name' => _x('Most Selled', 'post type general name'),
        'singular_name' => _x('Most Selled', 'post type singular name'),
        'add_new' => _x('Add most selled item', 'sale'),
        'add_new_item' => __('Add most selled item'),
        'edit_item' => __('Edit most selled item'),
        'new_item' => __('New most selled item'),
        'view_item' => __('View most selled item'),
        'search_items' => __('Search for most selled item'),
        'not_found' =>  __('No results'),
        'not_found_in_trash' => __('Nothing found in garbage'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'most_selled'), 
        'menu_position' => 6,
        'supports' => array('title', 'thumbnail'),
      );
    register_post_type('most_selled',$args);
}

/**************************************
 * Registro Custom Post type Slider
 **************************************/
add_action('init', 'slider_register');
function slider_register(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Add slider', 'slider'),
        'add_new_item' => __('Add slider'),
        'edit_item' => __('Edit slider'),
        'new_item' => __('New slider'),
        'view_item' => __('View slider'),
        'search_items' => __('Search for slider'),
        'not_found' =>  __('No results'),
        'not_found_in_trash' => __('Nothing found in the garbage'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('slider',$args);
}
