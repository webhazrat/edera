<?php 
    /*
        Template Name: Who We Are
    */
    get_header();
?>
    <div class="banner page-banner large">
        <div class="banner-item">
            <?php 
                $page_id = get_queried_object_id();
                $banner = new WP_Query(array(
                    'post_type' => 'section',
                    'posts_per_page' => 1,
                    'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key' => 'page_id',
                            'value' => $page_id
                        ),
                        array(
                            'key' => 'section',
                            'value' => 'Banner'
                        )
                    )
                ));
                while($banner->have_posts()) : $banner->the_post();
                $btn_text = get_post_meta($post->ID, 'btn_text', true);
                $btn_link = get_post_meta($post->ID, 'btn_link', true);
                $attachment_id = get_post_meta($post->ID, 'attachment', true);
                $attachment_url = wp_get_attachment_url($attachment_id);
            ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <h2 class="section-header"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo $attachment_url; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <?php 
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>

    <div class="why-we-exist py-5" style="background-color:#F2F2F2;">
        <div class="container">
            <h3 class="sub-header mb-4">Why We Exist</h3>
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="exist-item">
                        <h4>Our Mission</h4>
                        <p>With a heighted focus on delivery excellence and social impact, Edera partners with clients to ideate, build, implement and sustain innovative, human-centric business solutions.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="exist-item">
                        <h4>Our Purpose</h4>
                        <p>Edera exists to help organizations build better businesses and effect positive change in society.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="what-means py-4" style="background-color:#0072B6;">
        <div class="container">
            <h3 class="sub-header text-white mb-4">What it Means to Be a Low Profit LLC</h3>
            <p class="text-white mb-0">Edera is mission-driven and operates with a purpose-before-profit mindset. Profits beyond the sustainability goals of our organizations are reinvested into our communities (e.g., community improvement initiatives) and/or our clients (e.g., indirect rate reinvestment or alignment).</p>
        </div>
    </div>

    <div class="team-title pt-5">
        <div class="container">
            <h3 class="sub-header text-green">The Edera Team</h3>
        </div>
    </div>

    <div class="team py-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/who-we-are-bg-pattern.svg');">
        <div class="container">
            <h4>At the wheel</h4>

            <div class="row justify-content-center mt-4">
                
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/kevin-carr.svg" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Dr. Kevin Carr, MD</h6>
                                <span>Chief Executive Officer</span>
                                <p>As CEO of NCC and its supporting shared services entity, Edera, Kevin leverages more than 20 years of experience in patient care and health care consulting to develop and execute clear and viable strategies that improve health care practices and processes for patients. His experience includes serving on the Yale School of Medicine faculty and forming a multistakeholder collaborative to implement a charity care network with centralized care management services for uninsured patients.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Dr. Kevin Carr, MD</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/jason-lasalle.svg" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Jason LaSalle, MBA, PMP</h6>
                                <span>Vice President of Business Development and Strategic Partnerships</span>
                                <p>Jason is responsible for creating and executing a diverse set of growth strategies across NCC and its supporting services groups. He also identifies and collaborates with industry experts to help deliver critical solutions to our nation’s health care providers. With more than 20 years of health care-related experience, Jason oversees both the clinical and revenue cycle service offerings at NCC and is a champion of programs that focus on complex problems, equal opportunity innovation, and education.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Jason LaSalle</h4>
                            <span> Vice President of Business Development and Strategic Partnerships</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/larnie-yuson.svg" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Larnie Yuson, Esq.</h6>
                                <span>Vice President of Delivery Excellence</span>
                                <p>Larnie plays an integral role in developing the strategies and leading the development, execution, and delivery quality of all NCC projects. She forges strong, high-performing delivery and business development teams by leveraging her knowledge of best practices in management consulting, strategic communications, and technology implementation. As a health IT consultant and an attorney, Larnie has more than 20 years supporting federal, state, and local clients as well as companies across the payer, provider, and pharmaceutical industries.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Larnie Yuson</h4>
                            <span>Vice President for Delivery Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container mt-5">
            <h4>Team Leads</h4>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/mark-cads.svg" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Mark Cads, OCS, OCA, PMP</h6>
                                <span>Technology Director</span>
                                <p>Mark has spent more than 16 years as a technology delivery lead, program manager, and technical architect of large-scale system implementations across multiple industries in the United States, Asia, and Europe. He is an expert at creating and delivering optimized solutions to complex client challenges. He is an Oracle-Certified Implementation Specialist on WebLogic, Essbase, Hyperion Planning and Budgeting, and Oracle Cloud Infrastructure solutions.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Mark Cads</h4>
                            <span>Technology Director</span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/nina-miranda.svg" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Nina Miranda</h6>
                                <span>Management Consulting Director</span>
                                <p>Nina Miranda is a healthcare strategist and visionary with over 25 years of digital transformation expertise serving enterprise-wide growth and operational excellence objectives. Her client delivery roles have ranged from designing and facilitating strategic workshops for executives to managing large-scale digital transformations. She specializes in end-to-end client delivery service offerings with deep expertise in project management, strategic and capability planning, organizational change management, upskilling, and process improvement initiatives.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Nina Miranda</h4>
                            <span>Management Consulting Director</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/felishia-perry.svg" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Felishia Perry, MHA-IF, BSN, RN-BC, CCMP, PROSCI®</h6>
                                <span>Clinical Lead</span>
                                <p>Felishia is a master’s prepared and board-certified nurse clinical informatics specialist with expertise in clinical and technical electronic health record solution implementations. Her experience includes project management for large, complex environments throughout all system development lifecycle phases. She has extensive experience in process mapping, using data analytics and tools to develop strategies to solve complex health care challenges.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Felishia Perry</h4>
                            <span>Perry Clinical Lead</span>
                        </div>
                    </div> 

                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/joletter-van-vuuren.png" alt="">
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h6>Jolette van Vuuren, PMP</h6>
                                <span>Creative Director</span>
                                <p>Jolette has more than 20 years of experience providing creative design solutions for both corporate clients and government agencies. She serves as a creative resource for eLearning, training, innovation, and communication programs in need of attractive, intuitive illustration and design. She is experienced in creating supporting artwork for many types of programs and is an expert at transforming complex data and business content into digestible, eye-catching infographics.</p>
                                <a href="#" class="read-more">View In Linkedin <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4>Jolette van Vuuren</h4>
                            <span>Creative Director</span>
                        </div>
                    </div> 

                </div>

            </div>
        </div>

    </div>

<?php get_footer(); ?>