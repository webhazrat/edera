<?php 
    /*
        Template Name: Insights and Events
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

    <div class="insights-area py-5">
        <div class="container">
            <h3 class="sub-header text-green mb-4">Featured Insights</h3>
            <div class="row">
                <?php 
                    $featured = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'order' => 'DESC'
                    ));

                    if($featured->have_posts()) :
                        while($featured->have_posts()) : $featured->the_post(); 
                ?>

                <div class="col-md-4">
                    <div class="item">
                        <div class="feature-img">
                            <?php the_post_thumbnail('medium'); ?>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <div class="date my-3"><?php echo get_the_date(); ?></div>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
                
                <?php 
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>

    <div class="upcoming events-area mb-5">
        <div class="container">
            <h3 class="sub-header text-green mb-4">Brightest Minds Events</h3>
            <div class="row g-0 mb-4">
                <div class="col-md-4">
                    <div class="upcoming-logo p-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/upcoming-logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="upcoming-text">
                        <span>Upcoming | March 18, 2022</span>
                        <h3>Featured Upcoming Event</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ab ut nulla provident
                            debitis, possimus facilis officia fugit qui expedita quos non facere tenetur, sapiente
                            voluptatibus commodi soluta quae modi.</p>
                        <a href="#" class="read-more secondary">Learn More <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="item">
                        <div class="feature-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/insight3.jpeg" alt="">
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <div class="tags">
                                <a href="#">Tag</a>
                            </div>
                            <h4><a href="#">Possimus facilis officia fugit qui expedita</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sint accusantium,
                                veritatis, exercitationem ullam provident nisi expedita eos minima quia esse...</p>
                            <span class="date">March 23, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="feature-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/insight1.jpeg" alt="">
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <div class="tags">
                                <a href="#">Tag</a>
                            </div>
                            <h4><a href="#">Possimus facilis officia fugit qui expedita</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sint accusantium,
                                veritatis, exercitationem ullam provident nisi expedita eos minima quia esse...</p>
                            <span class="date">March 23, 2022</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="insights-area mb-5">
        <div class="container">
            <h3 class="sub-header text-green mb-4">Edera In The News</h3>
            <div class="row">

                <?php 
                    $inTheNews = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'order' => 'DESC'
                    ));
                    if($inTheNews->have_posts()) : 
                        while($inTheNews->have_posts()) : $inTheNews->the_post();
                ?>

                <div class="col-md-4">
                    <div class="item">
                        <div class="feature-img">
                            <?php the_post_thumbnail('medium'); ?>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <div class="date my-3"><?php echo get_the_date(); ?></div>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
                
                <?php
                        endwhile;
                    endif;
                ?>
                
            </div>
        </div>
    </div>

    <div class="media-contacts py-4" style="background-color: #f2f2f2;">
        <div class="container">
            <h3 class="sub-header text-green mb-3">Madia Contacts</h3>
            <h4>Edera’s Subject Matter Experts (SMEs) are available to apply their deep industry expertise to provide analysis and opinion on a variety of subjects.</h4>
        </div>
    </div>

    <div class="quiries py-5" style="background-color:#94CC00;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="quiries-item text-center">
                        <h4>Get in Touch with our thought leaders</h4>
                        <a href="contact.html" class="read-more default">Contact Us <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quiries-item text-center">
                        <h4>Media inquiries</h4>
                        <a href="contact.html" class="read-more default">Contact Us <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>