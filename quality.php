<?php 
    /*
        Template Name: Quality
    */
    get_header(); 
?>

    <div class="banner page-banner">
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
                $attachment_id = get_post_meta($post->ID, 'attachment', true);
                $attachment_url = wp_get_attachment_url($attachment_id);
            ?>
            <div class="container" style="height: 100%;">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-md-6">
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

    <div class="support-phase-tabs mb-5" style="padding-top: 100px!important;">
        <div class="container">
            <h4 class="text-aqua mb-4">Service Offerings</h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#cc">Communications & Collaboration <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#qfpm">Quality-Focused Project Management <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#qdm">Quality Data Management <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="cc">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <p>We bring FedRAMP-certified collaboration and communication tools to make sure a broad stakeholder group is engaged, while at the same time managing data or information securely across collaborators, including:</p>
                                            <ul>
                                                <li>Event registration and management</li>
                                                <li>Parking lot (idea) management</li>
                                                <li>Graphics and creative design</li>
                                                <li>Communication planning and execution</li>
                                                <li>Subject matter expert (SME) contracting support</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Quality_Comms and Collab.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="qfpm">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <p>We leverage our Fusion Methodology to bring project delivery best practices across both the commercial and public sectors. Alternatively, Edera can execute and manage projects using client-specific methodologies and tools.</p>
                                            <ul>
                                                <li>Project management</li>
                                                <li>Deliverable expectation management</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Quality_QF PM.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="qdm">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <p>We bring knowledge and relationships from key vendors and health care organizations that often become the source of data required for quality measure development. In addition, we have technology assets from multiple vendors that allow us to rapidly respond to client needs.</p>
                                            <ul>
                                                <li>Data transformation</li>
                                                <li>Data mapping</li>
                                                <li>Analytics (including Natural Language Processing [NLP], AI, and voice analysis)</li>
                                                <li>Reporting</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Quality_QD Management.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>