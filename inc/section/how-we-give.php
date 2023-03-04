<?php
        
    // How we give
    $wp_customize->add_section( 'how_we_give', array(
            'title' => __( 'How We Give' ),
            'priority' => 20
        )
    );

    $wp_customize->add_setting( 'how_we_make_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'How We Make a Difference' )
        )
    );
    $wp_customize->add_control( 'how_we_make_title', array(
            'settings'       => 'how_we_make_title',
            'section'       => 'how_we_give',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );
      
?>