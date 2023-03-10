<?php 
    $wp_customize->add_section('who_we_are', array(
        'title' => __('Who We Are'),
        'priority' => 21
    ));

    $wp_customize->add_setting('team_title', array(
        'sanitize_callback' => '',
        'default' => __('The Edera Team')
    ));
    $wp_customize->add_control('team_title', array(
        'settings' => 'team_title',
        'section' => 'who_we_are',
        'type' => 'text', 
        'label' => __('Title')
    ));

    $wp_customize->add_setting('at_the_wheel_title', array(
        'sanitize_callback' => '',
        'default' => __('At the wheel')
    ));
    $wp_customize->add_control('at_the_wheel_title', array(
        'settings' => 'at_the_wheel_title',
        'section' => 'who_we_are',
        'type' => 'text', 
        'label' => __('At the Wheel Title')
    ));

    $wp_customize->add_setting('team_leads_title', array(
        'sanitize_callback' => '',
        'default' => __('Team Leads')
    ));
    $wp_customize->add_control('team_leads_title', array(
        'settings' => 'team_leads_title',
        'section' => 'who_we_are',
        'type' => 'text', 
        'label' => __('Team Leads Title')
    ));

?>