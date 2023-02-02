<?php 

    if(!function_exists('edera_theme_setup')){
        function edera_theme_setup(){
            add_theme_support('title-tag');

            add_theme_support('post-thumbnails');

            add_theme_support('custom-logo', array(
                'height' => 32,
                'width' => 180,
                'flex-height' => true,
                'flex-width' => true
            ));

            register_nav_menus(
                array(
                    'menu1' => 'Top Navigation',
                    'menu2' => 'Main Navigation',
                    'menu3' => 'Banner Navigation',
                    'menu4' => 'Footer Navigation'
                )
            );

            require 'inc/bootstrap_wp_navwalker.php';
        }
        add_action('after_setup_theme', 'edera_theme_setup');
    }


    function edera_theme_scripts(){
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');
        wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css', array(), '1.10.0', 'all');
        wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('main'), '1.0', 'all');

        wp_enqueue_style('main', get_stylesheet_uri(), array(), '1.0');

        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '5.2.3', true);
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'edera_theme_scripts');

    function edera_widgets(){
        register_sidebar(array(
            'name' => 'Footer First Column',
            'id' => 'footer_first_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Footer Second Column',
            'id' => 'footer_second_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Footer Third Column',
            'id' => 'footer_third_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Footer Fourth Column',
            'id' => 'footer_fourth_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
    }
    add_action('widgets_init', 'edera_widgets');



?>