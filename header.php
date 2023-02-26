<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="header-top-nav">
        <div class="container">
            <div class="top-nav-content">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#topnavbar">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="topnavbar">
                        <?php 
                            wp_nav_menu(array(
                                'menu_class' => 'navbar-nav',
                                'container' => 'ul',
                                'theme_location' => 'menu1'
                            ));
                        ?>
                    </div>
                </nav>
                <div class="search-form-area">
                    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="control-icon">
                            <input type="search" name="s" id="search">
                            <button type="submit" id="searchBtn"><i class="bi bi-search"></i></button>
                            <button type="button" id="searchClose"><i class="bi bi-x"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <?php 
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        echo '<a class="navbar-brand" href="' . get_bloginfo('home') . '">' . get_bloginfo('name') . '</a>';
                    }
                ?>


                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <?php 
                        wp_nav_menu(array(
                            'menu_class' => 'navbar-nav ms-auto gap-4',
                            'container' => 'ul',
                            'theme_location' => 'menu2',
                            'fallback_cb' => '__return_false',
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                </div>
            </div>
        </nav>
    </div>