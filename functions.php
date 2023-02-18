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

    require 'inc/custom_post_type.php';
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
    
    function my_post_count_queries($query){
        if(!is_admin() && $query->is_main_query()){
            if(is_home()){
                $query->set('posts_per_page', 1);
            }
        }
    }
    add_action('pre_get_posts', 'my_post_count_queries');
?>