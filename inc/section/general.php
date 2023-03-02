<?php
    $wp_customize->add_section( 'static_front_page', array(
        'title' => __( 'Static Front Page' ),
        'panel' => 'edera_general_panel'
    ) );
    $wp_customize->add_section( 'title_tagline', array(
        'title' => __( 'Site Logo/Title/Tagline' ),
        'panel' => 'edera_general_panel',
    ) );
    
    // Subscribe Popup
    $wp_customize->add_section(
        'subscribe_popup',
        array(
            'title' => __( 'Subscribe Popup' ),
            'panel' => 'edera_general_panel',
        )
    );
    
    $wp_customize->add_setting(
        'subscribe_title',
        array(
            'sanitize_callback' => '',
            'default'           => __( 'Join our mailing list')
        )
    );
    $wp_customize->add_control(
        'subscribe_title',
        array(
            'settings'       => 'subscribe_title',
            'section'       => 'subscribe_popup',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );

    $wp_customize->add_setting(
        'subscribe_description',
        array(
            'sanitize_callback' => '',
            'default'           => __( 'Be the first to know about new arrivals, sales, exclusive offers, and special events.')
        )
    );
    $wp_customize->add_control(
        'subscribe_description',
        array(
            'settings'       => 'subscribe_description',
            'section'       => 'subscribe_popup',
            'type'          => 'textarea',
            'label'         => __( 'Description' )
        )
    );

    $wp_customize->add_setting(
        'subscribe_form',
        array(
            'sanitize_callback' => '',
            'default'           => __( '[contact-form-7 id="487" title="Newsletter Form"]')
        )
    );
    $wp_customize->add_control(
        'subscribe_form',
        array(
            'settings'       => 'subscribe_form',
            'section'       => 'subscribe_popup',
            'type'          => 'textarea',
            'label'         => __( 'Form Shortcode' )
        )
    );
    
    $wp_customize->add_setting(
        'subscribe_note',
        array(
            'sanitize_callback' => '',
            'default'           => __( 'We respect your privacy')
        )
    );
    $wp_customize->add_control(
        'subscribe_note',
        array(
            'settings'       => 'subscribe_note',
            'section'       => 'subscribe_popup',
            'type'          => 'textarea',
            'label'         => __( 'Note' )
        )
    );

    // Footer Copyright
    $wp_customize->add_section(
        'footer_copyright',
        array(
            'title' => __( 'Footer Copyright' ),
            'panel' => 'edera_general_panel',
        )
    );
    
    $wp_customize->add_setting(
        'copyright',
        array(
            'sanitize_callback' => '',
            'default'           => __( '© 2023 | Edera L3C')
        )
    );
    $wp_customize->add_control(
        'copyright',
        array(
            'settings'       => 'copyright',
            'section'       => 'footer_copyright',
            'type'          => 'text',
            'label'         => __( 'Copyright' )
        )
    );



?>