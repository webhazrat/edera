<?php
        
    // What we do
    $wp_customize->add_section( 'what_makes_us_different', array(
            'title' => __( 'What Makes Us Different' ),
            'priority' => 20
        )
    );

    $wp_customize->add_setting( 'how_we_work_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'How We Work' )
        )
    );
    $wp_customize->add_control( 'how_we_work_title', array(
            'settings'       => 'how_we_work_title',
            'section'       => 'what_makes_us_different',
            'type'          => 'text',
            'label'         => __( 'How We Work Title' )
        )
    );
    
    $wp_customize->add_setting( 'affiliate_title', array(
            'sanitize_callback' => '',
            'default'           => __( 'Our Affiliate Brands')
        )
    );
    $wp_customize->add_control( 'affiliate_title', array(
            'settings'       => 'affiliate_title',
            'section'       => 'what_makes_us_different',
            'type'          => 'text',
            'label'         => __( 'Affiliate Title' )
        )
    );
      
?>