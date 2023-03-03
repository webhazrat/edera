<?php
        
    // Home page
    $wp_customize->add_section( 'home', array(
            'title' => __( 'Home Page' ),
            'priority' => 18
        )
    );
    
    $wp_customize->add_setting( 'consultancy_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'A Different Kind of Consultancy')
        )
    );
    $wp_customize->add_control( 'consultancy_title', array(
            'settings'       => 'consultancy_title',
            'section'       => 'home',
            'type'          => 'text',
            'label'         => __( 'Consultancy Title' )
        )
    );

    $wp_customize->add_setting( 'sc_title', array(
        'sanitize_callback' => '',
        'default'           => __( 'Solution and Service')
    )
    );
    $wp_customize->add_control( 'sc_title', array(
            'settings'       => 'sc_title',
            'section'       => 'home',
            'type'          => 'text',
            'label'         => __( 'Services and Capabilities Title' )
        )
    );

    $wp_customize->add_setting( 's_title', array(
        'sanitize_callback' => '',
        'default'           => __( 'Our Offerings')
    )
    );
    $wp_customize->add_control( 's_title', array(
            'settings'       => 's_title',
            'section'       => 'home',
            'type'          => 'text',
            'label'         => __( 'Services Title' )
        )
    );

    $wp_customize->add_setting( 'c_title', array(
        'sanitize_callback' => '',
        'default'           => __( 'Our Capabilities')
    )
    );
    $wp_customize->add_control( 'c_title', array(
            'settings'       => 'c_title',
            'section'       => 'home',
            'type'          => 'text',
            'label'         => __( 'Capabilities Title' )
        )
    );

    $wp_customize->add_setting( 'ie_title', array(
        'sanitize_callback' => '',
        'default'           => __( 'Insights & Events')
    )
    );
    $wp_customize->add_control( 'ie_title', array(
            'settings'       => 'ie_title',
            'section'       => 'home',
            'type'          => 'text',
            'label'         => __( 'Insights & Events Title' )
        )
    );

   
?>