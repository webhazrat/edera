<?php get_header(); ?>

    <div class="banner">
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-text py-5">
                            <h2 class="section-header"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php if($btn_text) : ?>
                            <a href="<?php echo get_permalink($btn_link); ?>" class="read-more"><?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                            <?php endif; ?>
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

    <div class="consultancy py-5">
        <div class="container">
            <h2 class="section-header">A Different Kind of Consultancy</h2>
            <div class="row">
                <?php 
                    $consultancy = new WP_Query(array(
                        'post_type' => 'consultancy',
                        'posts_per_page' => 2,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    while($consultancy->have_posts()) : $consultancy->the_post();
                    $btn_text = get_post_meta($post->ID, 'btn_text', true);
                    $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?>
                <div class="col-md-6">
                    <div class="consultancy-item">
                        <div class="body">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <h3 class="sub-header"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                        <div>
                            <?php if($btn_text) : ?>
                            <a href="<?php echo get_permalink($btn_link); ?>" class="read-more secondary"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>

    <div class="solution pb-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/home-bg-pattern.svg');">
        <div class="container">
            <h2 class="section-header">Solution and Service</h2>
            <h3 class="sub-header">Our Offerings</h3>
            <div class="row">

                <?php 
                    $offerings = new WP_Query(array(
                        'post_type' => 'solutions',
                        'posts_per_page' => 3,
                        'taxonomy' => 'solutions_categories',
                        'term' => 'offerings',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($offerings->have_posts()) : 
                        while($offerings->have_posts()) : $offerings->the_post(); 
                        $attachment_id = get_post_thumbnail_id( $post->ID );
                        $background_url = wp_get_attachment_image_src($attachment_id, 'large')[0];
                        $btn_text = get_post_meta($post->ID, 'btn_text', true);
                        $btn_link = get_post_meta($post->ID, 'btn_link', true);

                        $icon_id = get_post_meta($post->ID, 'attachment', true);
                        $icon_url = wp_get_attachment_image_src($icon_id, 'thumbnail')[0];
                    ?>
                
                <div class="col-md-4">
                    <div class="offer-item" style="background-image:url('<?php echo $background_url; ?>')">
                        <div class="overlay">
                            <div class="body">
                                <img src="<?php echo $icon_url; ?>" alt="">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                            <div>
                                <?php if($btn_text) : ?>
                                <a href="<?php echo get_permalink($btn_link); ?>" class="read-more default"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>

            </div>

            <h3 class="sub-header">Our Capabilities</h3>
            <div class="row">

                <?php 
                    $capabilities = new WP_Query(array(
                        'post_type' => 'solutions',
                        'posts_per_page' => 3,
                        'taxonomy' => 'solutions_categories',
                        'term' => 'capabilities',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));

                    if($capabilities->have_posts()) : 
                        while($capabilities->have_posts()) : $capabilities->the_post();
                        $attachment_id = get_post_thumbnail_id($post->ID);
                        $image_url = wp_get_attachment_image_src($attachment_id, 'large')[0];
                        $icon_id = get_post_meta($post->ID, 'attachment', true);
                        $icon_url = wp_get_attachment_image_src($icon_id, 'thumbnail')[0]; 
                        $btn_text =  get_post_meta($post->ID, 'btn_text', true);                      
                        $btn_link =  get_post_meta($post->ID, 'btn_link', true);                      
                ?>
                <div class="col-md-4">
                    <div class="capabilities-item"
                        style="background-image:url('<?php echo $image_url; ?>')">
                        <div class="overlay">
                            <div class="body">
                                <img src="<?php echo $icon_url; ?>" alt="">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                            <div>
                                <?php if($btn_text) : ?>
                                <a href="<?php echo get_permalink($btn_link); ?>" class="read-more default"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>

            </div>
        </div>
    </div>

    <div class="vehicles py-5" style="background-color: #0072B6;">
        <div class="container">
            <?php 
                $cvc = new WP_Query(array(
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
                            'value' => 'Our Contact Vehicles & Certifications'
                        )
                    )
                )); 
                while($cvc->have_posts()) : $cvc->the_post();
                $btn_text = get_post_meta($post->ID, 'btn_text', true);
                $btn_link = get_post_meta($post->ID, 'btn_link', true);
            ?>
            <h2 class="section-header"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php if($btn_text) : ?>
                <a href="<?php echo get_permalink($btn_link); ?>" class="read-more default"><?php echo $btn_text; ?><i class="bi bi-arrow-right-short"></i></a>
            <?php endif; ?>
            <?php 
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>

    <div class="insights-area py-5">
        <div class="container">
            <h2 class="section-header mb-4">Insights & Events</h2>
            <div class="row">

                <?php 
                    $posts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'order' => 'DESC'
                    ));

                    if($posts->have_posts()) :
                        while($posts->have_posts()) : $posts->the_post(); 
                ?>

                <div class="col-md-4">
                    <div class="item">
                        <div class="feature-img">
                            <?php the_post_thumbnail('large'); ?>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <strong><?php echo get_the_date(); ?></strong>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                    </div>
                </div>

                <?php 
                        endwhile; 
                    endif;
                    wp_reset_query();
                ?>
               
            </div>
            <div class="text-end mt-4">
                <a href="insights-and-events.html" class="read-more">Read More <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </div>

    <div class="upcoming mb-5">
        <div class="container">
            <div class="row g-0">
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
            <div class="text-end mt-4">
                <a href="brightest-minds-webinars.html" class="read-more">See All Brightest Minds Events <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>