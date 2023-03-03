<?php 
    function edera_customizer_register($wp_customize){
        // general panel
        $wp_customize->add_panel('edera_general_panel', array(
            'title' => 'General Configuration',
            'priority' => 18
        ));
        include 'section/general.php';

        // home section
        include 'section/home.php';
        // what we do
        include 'section/what-we-do.php';
    }
    add_action( 'customize_register', 'edera_customizer_register' );
?>