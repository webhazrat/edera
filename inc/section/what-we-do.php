<?php
        
    // What we do
    $wp_customize->add_section( 'what_we_do', array(
            'title' => __( 'What we do Page' ),
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

      
?>