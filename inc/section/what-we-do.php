<?php
        
    // What we do
    $wp_customize->add_section( 'what_we_do', array(
            'title' => __( 'What we do' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    
    $wp_customize->add_setting( 'services_capabilities', array(
            'sanitize_callback' => '',
            'default'           => __( 'Our Services and Capabilities')
        )
    );
    $wp_customize->add_control( 'services_capabilities', array(
            'settings'       => 'services_capabilities',
            'section'       => 'what_we_do',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );

    $wp_customize->add_setting( 'service_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Service Offerings')
        )
    );
    $wp_customize->add_control( 'service_title', array(
            'settings'       => 'service_title',
            'section'       => 'what_we_do',
            'type'          => 'text',
            'label'         => __( 'Service Title' )
        )
    );

    $wp_customize->add_setting( 'capabilities_title', array(
        'sanitize_callback' => '',
        'default'           => __( 'Capabilities')
    )
    );
    $wp_customize->add_control( 'capabilities_title', array(
            'settings'       => 'capabilities_title',
            'section'       => 'what_we_do',
            'type'          => 'text',
            'label'         => __( 'Capabilities Title' )
        )
    );


    // Clinical
    $wp_customize->add_section( 'clinical', array(
            'title' => __( 'Clinical' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    $wp_customize->add_setting( 'banner_bottom_description', array(
            'sanitize_callback' => '',
            'default'           => __( 'Our clinical IBPAs bring expertise that supports clients at every phase of the system-design lifecycle for EHR implementations and beyond, including:')
        )
    );
    $wp_customize->add_control( 'banner_bottom_description', array(
            'settings'       => 'banner_bottom_description',
            'section'       => 'clinical',
            'type'          => 'textarea',
            'label'         => __( 'Description' )
        )
    );
    $wp_customize->add_setting( 'tab_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Clinical Driven Revenue Cycle (CDRC)')
        )
    );
    $wp_customize->add_control( 'tab_title', array(
            'settings'       => 'tab_title',
            'section'       => 'clinical',
            'type'          => 'text',
            'label'         => __( 'Tab Title' )
        )
    );

    $wp_customize->add_setting( 'c_client_say_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'What Our Clients Say')
        )
    );
    $wp_customize->add_control( 'c_client_say_title', array(
            'settings'       => 'c_client_say_title',
            'section'       => 'clinical',
            'type'          => 'text',
            'label'         => __( 'Clients Say Title' )
        )
    );

    // Revenye Cycle
    $wp_customize->add_section( 'revenue_cycle', array(
            'title' => __( 'Revenue Cycle' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    $wp_customize->add_setting( 'r_service_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Service Offerings')
        )
    );
    $wp_customize->add_control( 'r_service_title', array(
            'settings'       => 'r_service_title',
            'section'       => 'revenue_cycle',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );
    

    $wp_customize->add_setting( 'rc_client_say_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'What Our Clients Say')
        )
    );
    $wp_customize->add_control( 'rc_client_say_title', array(
            'settings'       => 'rc_client_say_title',
            'section'       => 'revenue_cycle',
            'type'          => 'text',
            'label'         => __( 'Clients Say Title' )
        )
    );

    // Quality
    $wp_customize->add_section( 'quality', array(
            'title' => __( 'Quality' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    $wp_customize->add_setting( 'q_service_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Service Offerings')
        )
    );
    $wp_customize->add_control( 'q_service_title', array(
            'settings'       => 'q_service_title',
            'section'       => 'quality',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );
    
    // Management Consulting
    $wp_customize->add_section( 'management', array(
            'title' => __( 'Management Consulting' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    $wp_customize->add_setting( 'm_service_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Service Offerings')
        )
    );
    $wp_customize->add_control( 'm_service_title', array(
            'settings'       => 'm_service_title',
            'section'       => 'management',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );
        
    // Digital
    $wp_customize->add_section( 'digital', array(
            'title' => __( 'Digital' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    $wp_customize->add_setting( 'd_service_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Services' )
        )
    );
    $wp_customize->add_control( 'd_service_title', array(
            'settings'       => 'd_service_title',
            'section'       => 'digital',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );
        
    // Creative
    $wp_customize->add_section( 'creative', array(
            'title' => __( 'Creative' ),
            'panel' => 'edera_what_we_do_panel',
            'priority' => 18
        )
    );
    $wp_customize->add_setting( 'creative_service_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Service Offerings' )
        )
    );
    $wp_customize->add_control( 'creative_service_title', array(
            'settings'       => 'creative_service_title',
            'section'       => 'creative',
            'type'          => 'text',
            'label'         => __( 'Title' )
        )
    );
      
?>