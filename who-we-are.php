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
                <?php 
                    $at_the_wheel = new WP_Query(array(
                        'post_type' => 'team',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team_categories', 
                                'field' => 'slug',
                                'terms' => 'at-the-wheel',
                                'include_children' => false
                            )
                        ),
                        'posts_per_page' => -1, 
                        'orderby' => 'menu_order',
                        'order' => 'ASC' 
                    ));
                    while($at_the_wheel->have_posts()) : $at_the_wheel->the_post();
                    $full_name = get_post_meta($post->ID, 'full_name', true);
                    $designation = get_post_meta($post->ID, 'designation', true);
                    $btn_text = get_post_meta($post->ID, 'btn_text', true);
                    $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?> 
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <?php the_post_thumbnail('medium'); ?>
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h5>
                                    <?php if($full_name){ 
                                            echo $full_name;
                                        }else{
                                            the_title();
                                        } ?>
                                </h5>
                                <span><?php echo $designation; ?></span>
                                <?php the_content(); ?>
                                <?php if($btn_text) : ?>
                                    <a href="<?php echo $btn_link; ?>" class="read-more"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo $designation; ?></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
        
        <div class="container mt-5">
            <h4>Team Leads</h4>

            <div class="row justify-content-center mt-4">
                <?php 
                    $team_leads = new WP_Query(array(
                        'post_type' => 'team',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team_categories',
                                'field' => 'slug',
                                'terms' => 'team-leads',
                                'include_children' => false
                            )
                        ),
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    while($team_leads->have_posts()) : $team_leads->the_post();
                    $full_name = get_post_meta($post->ID, 'full_name', true);
                    $designation = get_post_meta($post->ID, 'designation', true);
                    $btn_text = get_post_meta($post->ID, 'btn_text', true);
                    $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <?php the_post_thumbnail('medium'); ?>
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h5><?php 
                                    if($full_name){
                                        echo $full_name;
                                    }else{
                                        the_title();
                                    }
                                ?></h5>
                                <span><?php echo $designation; ?></span>
                                <?php the_content(); ?>

                                <?php if($btn_text) : ?>
                                    <a href="<?php echo $btn_link; ?>" class="read-more"><?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo $designation; ?></span>
                        </div>
                    </div>
                </div>  
                <?php 
                    endwhile;
                ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>