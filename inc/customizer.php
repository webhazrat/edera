<?php 
    function edera_customizer_register($wp_customize){
        // newsletter popup
        $wp_customize->add_panel('edera_general_panel', array(
            'title' => 'General Configuration',
            'priority' => 18
        ));
        include 'section/general.php';
    }
    add_action( 'customize_register', 'edera_customizer_register' );
?>