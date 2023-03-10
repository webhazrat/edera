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
        $wp_customize->add_panel('edera_what_we_do_panel', array(
            'title' => 'What We Do',
            'priority' => 19
        ));
        include 'section/what-we-do.php';

        // what makes us different
        include 'section/what-makes-us-different.php';

        // how we give
        include 'section/how-we-give.php';

        // Who we are
        include 'section/who-we-are.php';

    }
    add_action( 'customize_register', 'edera_customizer_register' );
?>