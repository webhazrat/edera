<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <?php wp_head(); ?>
</head>

<body>

    <div class="header-top-nav">
        <div class="container">
            <div class="top-nav-content">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#topnavbar">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="topnavbar">
                        <ul class="navbar-nav">
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contract-vehicles-certifications.html">Contract Vehicles & Certifications</a></li>
                            <li><a href="what-makes-us-different.html#affiliatebrands">Affiliate Brands</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="search-form-area">
                    <form action="">
                        <div class="control-icon">
                            <input type="search" name="search" id="search">
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
                <a href="<?php bloginfo('home'); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/logo.svg" alt=""></a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <?php 
                        wp_nav_menu(array(
                            'menu_class' => 'navbar-nav ms-auto gap-4',
                            'container' => 'ul',
                            'theme_location' => 'primary',
                            'fallback_cb' => '__return_false',
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                    <!-- <ul class="navbar-nav ms-auto gap-4">
                        <li class="nav-item dropdown">
                            <a href="what-we-do.html" class="nav-link"> What We Do </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="clinical.html">Clinical</a></li>
                                <li><a class="dropdown-item" href="revenue-cycle.html">Revenue Cycle</a></li>
                                <li><a class="dropdown-item" href="quality.html">Quality</a></li>
                                <li><a class="dropdown-item" href="management-consulting.html">Management Consulting</a></li>
                                <li><a class="dropdown-item" href="digital.html">Digital</a></li>
                                <li><a class="dropdown-item" href="creative.html">Creative</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="what-makes-us-different.html" class="nav-link">What Makes Us Different</a>
                        </li>
                        <li class="nav-item">
                            <a href="how-we-give.html" class="nav-link">How We Give</a>
                        </li>
                        <li class="nav-item">
                            <a href="who-we-are.html" class="nav-link">Who We Are</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="insights-and-events.html" class="nav-link">Insights & Events</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="brightest-minds-webinars.html">Brightest Minds</a></li>
                                <li><a class="dropdown-item" href="podcasts.html">Podcasts</a></li>
                                <li><a class="dropdown-item" href="white-papers.html">White Papers</a></li>
                                <li><a class="dropdown-item" href="in-the-news.html">Edera in the News</a></li>
                            </ul>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </div>