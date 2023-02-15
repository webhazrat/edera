<?php 

    // clients_say
    function clients_say_columns( $columns ){
        unset( $columns['date'] );
        $columns['page'] = 'Page';
        $columns['date'] = 'Date';
        return $columns;
    }
    add_filter( 'manage_clients_say_posts_columns', 'clients_say_columns');
    function clients_say_columns_values($column, $post_id){
        switch( $column ) {
            case 'page' : 
                echo get_the_title(get_post_meta($post_id, 'page_id', true));
            break;
        }
    }
    add_action( 'manage_clients_say_posts_custom_column', 'clients_say_columns_values', 10, 2);



    function order_custom_columns( $columns ){
        unset( $columns['date'] );
        $columns['menu_order'] = 'Order';
        $columns['date'] = 'Date';
        return $columns;
    }
    add_filter( 'manage_team_posts_columns', 'order_custom_columns' );
    add_filter( 'manage_consultancy_posts_columns', 'order_custom_columns' );
    add_filter( 'manage_solutions_posts_columns', 'order_custom_columns' );
    add_filter( 'manage_what_we_do_posts_columns', 'order_custom_columns' );
    add_filter( 'manage_how_we_work_posts_columns', 'order_custom_columns' );

    // event
    function event_date_columns($columns){
        unset( $columns['date'] );
        $columns['event_date'] = 'Event Date';
        $columns['date'] = 'Date';
        return $columns;
    }
    add_filter( 'manage_event_posts_columns', 'event_date_columns' );

    function event_date_values($column, $post_id){
        switch( $column ) {
            case 'event_date' : 
                echo date('Y/m/d h:i a', strtotime(get_post_meta($post_id, 'event_date', true)));
            break;
        }
    }
    add_action( 'manage_event_posts_custom_column', 'event_date_values', 10, 2);
    // end event

    function show_order_column($name){
        global $post;
        switch ($name) {
          case 'menu_order':
            $order = $post->menu_order;
            echo $order;
            break;
         default:
            break;
         }
    }
    add_action('manage_team_posts_custom_column','show_order_column');
    add_action('manage_consultancy_posts_custom_column','show_order_column');
    add_action('manage_solutions_posts_custom_column','show_order_column');
    add_action('manage_what_we_do_posts_custom_column','show_order_column');
    add_action('manage_how_we_work_posts_custom_column','show_order_column');

    function section_custom_columns( $columns ){
        unset( $columns['date'] );
        $columns['page'] = 'Page';
        $columns['section'] = 'Section';
        $columns['date'] = 'Date';
        return $columns;
    }
    add_filter( 'manage_section_posts_columns', 'section_custom_columns' );


    function section_custom_columns_value( $column, $post_id){
        switch( $column ) {
            case 'page' :
                echo get_the_title(get_post_meta($post_id, 'page_id', true));
            break;

            case 'section' : 
                echo get_post_meta($post_id, 'section', true);
            break;
        }
    }
    add_action( 'manage_section_posts_custom_column', 'section_custom_columns_value', 10, 2);

    function section_custom_columns_sort( $columns ){
        $columns['page'] = 'page';
        $columns['section'] = 'section';
        return $columns;
    }
    add_filter( 'manage_edit-section_sortable_columns', 'section_custom_columns_sort' );
?>