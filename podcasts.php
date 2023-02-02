<?php 
    /*
        Template Name: Podcasts
    */
    get_header();
?>

    <div class="banner page-banner">
        <div class="banner-item">
            <div class="container" style="height: 100%;">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="section-header">Reliable Resources and Impactful Insight</h2>
                            <p>Edera produces a wide range of resources about our initiatives and impact, including
                                white papers, case studies, news articles, press releases, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/what-makes-us-different.m4v" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div class="banner-navigation py-2" style="background-color: #f2f2f2;">
        <div class="container">
            <div class="banner-navigation-content">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar2">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar2">
                        <?php 
                            wp_nav_menu(array(
                                'menu_class' => 'navbar-nav gap-4',
                                'container' => 'ul',
                                'theme_location' => 'menu3',
                                'fallback_cb' => '__return_false',
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    </div>
                </nav>
                <div class="insight-search-area">
                    <form action="">
                        <div class="control-icon">
                            <input type="search" name="searchText" id="searchText">
                            <button type="submit" id="insightSearchBtn"><i class="bi bi-search"></i></button>
                            <button type="button" id="insightSearchClose"><i class="bi bi-x"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area white-papers-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="item full white p-5" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/attachment/management-consulting.jpeg')">
                        <div class="body">
                            <div class="tags">
                                <a href="#">Tag</a>
                            </div>
                            <h3>March 28, 2022 Defense Health Agency Awards $1.4B Contract to Transform Health Care </h3>
                            <div class="para-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi...</p>
                                <a href="#">Continue Reading</a>
                            </div>
                            <audio controls class="mt-2">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/audio.mp3" type="audio/mpeg">
                              Your browser does not support the audio element.
                            </audio>
                            <span class="date">March 18, 2022</span>
                        </div>
                    </div>

                </div>

                <div class="col-md-10">
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/insight2.jpeg" alt="">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="body">
                                    <div class="tags">
                                        <a href="#">Tag</a>
                                    </div>
                                    <h5>March 28, 2022 Defense Health Agency Awards</h5>
                                    <div class="para-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi...</p>
                                        <a href="#">Continue Reading</a>
                                    </div>
                                    <audio controls class="mt-2">
                                        <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/audio.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <span class="date">March 18, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="item align-items-center">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/insight2.jpeg" alt="">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="body">
                                    <div class="tags">
                                        <a href="#">Tag</a>
                                    </div>
                                    <h5>March 28, 2022 Defense Health Agency Awards</h5>
                                    <div class="para-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi...</p>
                                        <a href="#">Continue Reading</a>
                                    </div>
                                    <audio controls class="mt-2">
                                        <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/audio.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <span class="date">March 18, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item align-items-center">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/insight2.jpeg" alt="">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="body">
                                    <div class="tags">
                                        <a href="#">Tag</a>
                                    </div>
                                    <h5>March 28, 2022 Defense Health Agency Awards</h5>
                                    <div class="para-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi...</p>
                                        <a href="#">Continue Reading</a>
                                    </div>
                                    <audio controls class="mt-2">
                                        <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/audio.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <span class="date">March 18, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item align-items-center">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/insight2.jpeg" alt="">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="body">
                                    <div class="tags">
                                        <a href="#">Tag</a>
                                    </div>
                                    <h5>March 28, 2022 Defense Health Agency Awards</h5>
                                    <div class="para-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi...</p>
                                        <a href="#">Continue Reading</a>
                                    </div>
                                    <audio controls class="mt-2">
                                        <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/audio.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <span class="date">March 18, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="pagination-area mt-4">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link"> <i class="bi bi-chevron-left"></i> Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next <i class="bi bi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>