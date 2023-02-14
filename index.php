<?php 
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'blog', array('size' => '')); ?>

    <?php get_template_part('template_parts/banner-navigation', 'blog'); ?>

    <div class="blog-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="blog-items">
                        <?php 
                            $blog = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            ));

                            while($blog->have_posts()) : $blog->the_post();

                                the_title(); echo ' | '.get_the_date();
                                echo '<br>';
                            endwhile;
                        ?>
                        <div class="item full white p-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/management-consulting.jpeg');">
                            <div class="body">
                                <div class="tags">
                                    <a href="#">Tag</a>
                                </div>
                                <h3>March 28, 2022 Defense Health Agency Awards $1.4B Contract to Transform Health Care </h3>
                                <div class="para-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                                    <a href="#">Continue Reading</a>
                                </div>
                                <span class="date">March 18, 2022</span>
                            </div>
                        </div>
    
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                                            <a href="#">Continue Reading</a>
                                        </div>
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                                            <a href="#">Continue Reading</a>
                                        </div>
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                                            <a href="#">Continue Reading</a>
                                        </div>
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                                            <a href="#">Continue Reading</a>
                                        </div>
                                        <span class="date">March 18, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
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

                <div class="col-md-4">
                    <div class="right-sidebar sticky-top">
                        <h4 class="mb-4">Latest News</h4>
                        <div class="blog-item">
                            <h6><a href="">Defense Health Agency Awards</a></h6>
                            <span class="date">March 28, 2022</span>
                        </div>
                        <div class="blog-item">
                            <h6><a href="">Edera produces a wide range of resources</a></h6>
                            <span class="date">March 28, 2022</span>
                        </div>
                        <div class="blog-item">
                            <h6><a href="">About our initiatives and impact, including</a></h6>
                            <span class="date">March 28, 2022</span>
                        </div>
                        <div class="blog-item">
                            <h6><a href="">Defense Health Agency Awards</a></h6>
                            <span class="date">March 28, 2022</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

 <?php get_footer(); ?>