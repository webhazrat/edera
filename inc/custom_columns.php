<?php 
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