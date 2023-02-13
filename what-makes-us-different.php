<?php
    /*
        Template Name: What Makes Us Different
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'what_makes_us_different', array('size' => '')); ?>
    
    <div class="how-we-work">
        <div class="container">
            <h3 class="sub-header my-4">How We Work</h3>
        </div>
        <div class="container-fluid px-0">

            
            <div class="how-items d-flex">

                <?php 
                    $how_we_work = new WP_Query(array(
                        'post_type' => 'how_we_work',
                        'posts_per_page' => -1, 
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($how_we_work->have_posts()) :
                        while($how_we_work->have_posts()) : $how_we_work->the_post();
                ?>
                
                <div class="how-item">
                    <div class="title how-item-title">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="overlay">
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <a href="#"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="body">
                        <div class="content">
                            <?php the_content(); ?>
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

    <div class="affiliate-brands-title py-4" id="affiliatebrands">
        <div class="container">
            <h3 class="sub-header">Our Affiliate Brands</h3>
        </div>
    </div>

    <div class="affiliate-brands py-5" style="background-color:#F2F2F2;">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#ncc">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/ncc-logo.png" alt="">
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#trusted-medical">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/trusted-medical-logo.png" alt="">
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#givebackrx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/givebackrx-logo.png" alt="">
                    </button>
                </li>
            </ul>

            <div class="tab-content pt-5">
                <div class="tab-pane fade show active" id="ncc">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="brand-text">
                                <p>Federal operates the National Coordination Center (NCC) has a nationwide network of Industry Best Practice Advisers (IB PAs) that bring expertise in clinical operations and patient care, clinical informatics, interoperability, revenue cycle, and quality</p>
                                <p> NCC's IBPAs have years of experience and deep health care expertise. Many are one-of-a-kind experts in specific areas ranging from clinical informatics to organizational effectiveness to process improvement. Our IBPAs have served many of the nation's leading health care organizations, from academic and health systems to solution vendors and integrated delivery networks. Based on client need, they join our team to bring industry best practices that support even the most complex projects.</p>
                                <a href="http://nationalcoordinationcenter.com" class="read-more secondary" target="_blank"> Visit NationalCoordinationCenter.com <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/453832046?h=0611ab2e71&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="trusted-medical">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="brand-text">
                                <p>Pioneered by Federal, Trusted Medical is proud to be one of the few Veteran-focused non-VA clinics in the nation. In this Federal affiliate, Veterans are seen in state-of-the-art facilities by a team of licensed providers consists of physicians and advanced practice providers who are respectful, caring, and sincerely committed to their patients. To best support the Veteran community, each provider receives specific orientation on military culture and receives comprehensive training and certification related to Compensation & Pension (C&P) exams. Trusted Medical is deeply dedicated in its service to those who have served.</p>
                                <a href="http://trusted-medical.com" class="read-more secondary" target="_blank"> Visit Trusted-Medical.com <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img text-end">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/trusted-medical.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="givebackrx">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="brand-text">
                                <p>A key NCC initiative is our launch of a pharmacy discount program called GiveBackRx, which exemplifies how we put our drive to give back to the communities we serve into practice.</p>
                                <p> The GiveBackRx card provides discounts to individuals on out-of-pocket medication costs and automatically donates a portion of the proceeds to a charity from a growing list of nonprofits and community organizations.</p>
                                <a href="http://givebackrx.com" class="read-more secondary" target="_blank"> Visit GiveBackRx.com <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img text-end">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/givebackrx.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    

<?php get_footer(); ?>