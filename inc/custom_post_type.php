<?php 
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

        // client say
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
            'menu_icon' => 'dashicons-schedule',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'show_in_rest' => true
        ));

        // affiliate brands
        register_post_type('brands', array(
            'labels' => array(
                'name' => __('Affiliate Brands'),
                'singular_name' => __('Affiliate Brand')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-share',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'has_archive' => true,
            'show_in_rest' => true, 
            'hierachical' => true
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

        // event
        register_post_type('event', array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'show_in_menu' => 'edit.php',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'show_in_rest' => true, 
            'hierachical' => true, 
            'taxonomies' => array('post_tag')
        ));
        // podcast
        register_post_type('podcast', array(
            'labels' => array(
                'name' => __('Podcasts'),
                'singular_name' => __('Podcast')
            ),
            'public' => true,
            'show_in_menu' => 'edit.php',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'show_in_rest' => true, 
            'hierachical' => true, 
            'taxonomies' => array('post_tag')
        ));
        // paper
        register_post_type('paper', array(
            'labels' => array(
                'name' => __('White Papers'),
                'singular_name' => __('White Paper')
            ),
            'public' => true,
            'show_in_menu' => 'edit.php',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'show_in_rest' => true, 
            'hierachical' => true, 
            'taxonomies' => array('post_tag')
        ));
        // news
        register_post_type('news', array(
            'labels' => array(
                'name' => __('Edera in the News'),
                'singular_name' => __('Edera in the News')
            ),
            'public' => true,
            'show_in_menu' => 'edit.php',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'show_in_rest' => true, 
            'hierachical' => true, 
            'taxonomies' => array('post_tag')
        ));

    }
    add_action('init', 'custom_post_types');
?>