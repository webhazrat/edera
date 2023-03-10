<?php
    $wp_customize->add_section( 'static_front_page', array(
        'title' => __( 'Static Front Page' ),
        'panel' => 'edera_general_panel'
    ) );
    $wp_customize->add_section( 'title_tagline', array(
        'title' => __( 'Site Logo/Title/Tagline' ),
        'panel' => 'edera_general_panel',
    ) );

    // Footer Copyright
    $wp_customize->add_section( 'footer_copyright', array(
            'title' => __( 'Footer Copyright' ),
            'panel' => 'edera_general_panel',
        )
    );
    
    $wp_customize->add_setting( 'copyright', array(
            'sanitize_callback' => '',
            'default'           => __( '© 2023 | Edera L3C')
        )
    );
    $wp_customize->add_control( 'copyright', array(
            'settings'       => 'copyright',
            'section'       => 'footer_copyright',
            'type'          => 'text',
            'label'         => __( 'Copyright' )
        )
    );



?>