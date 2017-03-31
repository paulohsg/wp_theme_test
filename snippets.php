<?php




    //THEME SUPPORT
    function add_suport_theme(){
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'add_support_theme');

    //REGISTER PERSONALIZED MENU
    add_theme_support('menus');

    //SCRIPTS/CSS
    function wp_responsive_scripts(){
        //Carregando css header
        wp_enqueue_style('bootstrap', get_template_derectory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_style('style', get_stylesheet_uri());

        //Carregando scripts header
        wp_enqueue_script('bootstrap-js', get_template_derectory_uri().'/assets/css/bootstrap.min.js', array('jquery'));

        //Carregando no footer
        //wp_enqueue_style('functions-js', get_template_derectory_uri().'/assets/js/functions.js', array('jquery'), '', true);

    }
    add_action('wp_enqueue_scripts', 'wp_responsive_scripts');