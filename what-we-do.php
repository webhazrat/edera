<?php 
    /*
    Template Name: What We Do
    */
    get_header();
?>


    <div class="banner page-banner large">
        <div class="banner-item">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <h2 class="section-header">Peerless Performance</h2>
                            <p>Edera was created to be a different kind of health care consulting firm. We were founded to bring best practices from private sector health care to the public sector and vice versa. Edera forms customized, multidisciplinary teams comprised of industry and health care experts to deliver integrated solutions. Add leading-edge technology services and a creative team that excels at communicating content in a compelling way, and you have a winning formula that successfully delivers innovative solutions in clinical and business operations to your organization.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/videos/Edera Header Whatwedo 1440 530.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div class="services-and-capabilities py-5" style="background-color: #F2F2F2;">
        <div class="container">
            <h3 class="sub-header mb-4">Our Services and Capabilities</h3>
            <h4 class="text-center mb-4">Sevice Offerings</h4>

            <div class="row mb-4">
                <?php 
                    $offerings = new WP_Query(array(
                        'post_type' => 'what_we_do',
                        'posts_per_page' => 3,
                        'taxonomy' => 'what_we_do_categories',
                        'term' => 'offerings',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($offerings->have_posts()) :
                        while($offerings->have_posts()) : $offerings->the_post();
                        $btn_text = get_post_meta($post->ID, 'btn_text', true);
                        $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?>
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="icon text-center">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <h6><?php the_title(); ?></h6>
                        <?php the_content(); ?>
                        <?php if($btn_text) : ?>
                        <a href="<?php echo get_permalink($btn_link); ?>" class="read-more"><?php echo $btn_text; ?><i class="bi bi-arrow-right-short"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                          endwhile;
                    endif;
                    wp_reset_query();
                ?>
                
            </div>

            <h4 class="text-center mb-4">Capabilities</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="icon text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Management Consulting Icon.png" alt="">
                        </div>
                        <h6>Management Consulting</h6>
                        <p>Our certified, dedicated team will make an immediate impact within Patient Access, Health Information Management (HIM) Coding, Patient Billing, and Account Management Services.</p>
                        <a href="management-consulting.html" class="read-more">Learn More <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="icon text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Digital Icon.svg" alt="">
                        </div>
                        <h6>Digital</h6>
                        <p>Our Technology Specialists bring our clinical ideations to life, with the patient at the center. Our scalable innovations drive growth and continuous improvement for health delivery organizations.</p>
                        <a href="digital.html" class="read-more">Learn More <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="icon text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Creative Icon.svg" alt="">
                        </div>
                        <h6>Creative</h6>
                        <p>Our Creative Team partners with clients to break down complex information, clearly communicate impact, and drive action through compelling narratives and visuals.</p>
                        <a href="creative.html" class="read-more">Learn More <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div> 

    <div class="who-we-serve py-4" style="background-color:#0072B6;">
        <div class="container">
            <h3 class="sub-header text-white mb-3">Who We Serve</h3>
            <p class="text-white mb-0">Edera’s team of delivery-focused consulting professionals has extensive experience and expertise that spans the public and private sectors. Edera operates the <a href="">National Coordination Center (NCC)</a>. NCC’s IBPAs often partner with Edera’s consulting professionals to create a unique, bilateral repository of best practices and expertise, accelerating solutions for both government and commercial clients.</p>
        </div>
    </div>

    <div class="serve-items py-5" style="background-color: #338EC5;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="item">
                       <h4 class="text-white mb-3">Government</h4> 
                       <p class="text-white mb-0">Our IBPAs serve as trusted partners for the U.S. Department of Veterans Affairs (VA). The IBPAs’ vast clinical and technical experience enables them to guide VA toward best practice decision-making and workflow design, setting the foundation for system configuration and implementation. Our IBPAs also support the Office of Electronic Health Record Modernization (OEHRM) in developing processes for updated policies, standard operating procedures, memoranda, etc., to govern practices post-VA EHRM implementation.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="item">
                       <h4 class="text-white mb-3">Commercial</h4> 
                       <p class="text-white mb-0">Edera has developed the health care and life sciences market strategy for a customer relationship management product of a Top 10 Fortune Future 50 company. We leveraged our team of IBPAs across the provider, payer, and life sciences sectors to craft a comprehensive suite of marketing, functionality, and technology recommendations and roadmaps.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>