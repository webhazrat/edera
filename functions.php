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

    function custom_post_types(){
        // for page section
        register_post_type('section', array(
            'labels' => array(
                'name' => __('Sections'),
                'singular_name' => __('Section')
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=page',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'show_in_rest' => true, 
            'hierachical' => true
        ));
        register_post_type('consultancy', array(
            'labels' => array(
                'name' => __('Consultancy'),
                'singular_name' => __('Consultancy')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-share-alt',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'has_archive'  => true,
            'show_in_rest' => true,
            'taxonomies'   => array( 'solutions_categories' )
        ));
        register_post_type('solutions', array(
            'labels' => array(
                'name' => __('Solutions'),
                'singular_name' => __('Solution')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-buddicons-groups',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'has_archive'  => true,
            'show_in_rest' => true,
            'taxonomies'   => array( 'solutions_categories' )
        ));
        register_taxonomy( 'solutions_categories', array('solutions'), array(
            'hierarchical' => true, 
            'label' => 'Categories', 
            'singular_label' => 'Category', 
            'rewrite' => array( 'slug' => 'categories', 'with_front'=> false ),
            'show_in_rest' => true,
            'show_admin_column' => true, 
            'sort' => true
            )
        );
        register_post_type('what_we_do', array(
            'labels' => array(
                'name' => __('What We Do'),
                'singular_name' => __('What We Do')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-editor-ul',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'has_archive' => true,
            'show_in_rest' => true,
            'taxonomies' => array('what_we_do_categories')
        ));
        register_taxonomy( 'what_we_do_categories', array('what_we_do'), array(
            'hierarchical' => true,
            'label' => 'Categories',
            'singular_label' => 'Category',
            'show_in_rest' => true,
            'show_admin_column' => true,
            'sort' => true
        ));

        register_post_type('clients_say', array(
            'labels' => array(
                'name' => __('Clients Say'),
                'singular_name' => __('Client Say')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-quote',
            'supports' => array('title', 'editor', 'page-attributes'),
            'has_archive' => true,
            'show_in_rest' => true,
        ));

        // how we work
        register_post_type('how_we_work', array(
            'labels' => array(
                'name' => __('How We Work'),
                'singular_name' => __('How We Work'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-rest-api',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'show_in_rest' => true
        ));

        // for team
        register_post_type('team', array(
            'labels' => array(
                'name' => __('Teams'),
                'singular_name' => __('Team')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'has_archive' => true,
            'show_in_rest' => true
        ));
        register_taxonomy('team_categories', array('team'), array(
            'hierarchical' => true,
            'label' => 'Categories',
            'singular_label' => 'Category',
            'show_in_rest' => true,
            'show_admin_column' => true,
            'sort' => true
        ));

    }
    add_action('init', 'custom_post_types');

    require 'inc/custom_meta_boxes.php';
    require 'inc/custom_columns.php';

    function edera_widgets(){
        register_sidebar(array(
            'name' => 'Footer First Column',
            'id' => 'footer_first_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
            'name' => 'Footer Second Column',
            'id' => 'footer_second_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
            'name' => 'Footer Third Column',
            'id' => 'footer_third_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
            'name' => 'Footer Fourth Column',
            'id' => 'footer_fourth_column',
            'before_widget' => '<div class="footer-item">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));
    }
    add_action('widgets_init', 'edera_widgets');

    function bootstrap_pagination($total_pages, $current_page){
        $paginate = paginate_links(array(
            'type' => 'list',
            'total' => $total_pages,
            'current' => $current_page, 
            'prev_text'    => __('<i class="bi bi-chevron-left"></i> Previous'),
            'next_text'    => __('Next  <i class="bi bi-chevron-right"></i>')
        ));
        $paginate = str_replace("<ul class='page-numbers'>", '<ul class="pagination justify-content-center">', $paginate);
        $paginate = str_replace('page-numbers', 'page-link', $paginate);
        $paginate = str_replace('<li>', '<li class="page-item">', $paginate);
        $paginate = str_replace('<li class="page-item"><span aria-current="page" class="page-link current">',
        '<li class="page-item"><span aria-current="page" class="page-link active">', $paginate);
        echo $paginate;
    }

?>