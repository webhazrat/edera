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
                        <?php 
                            $quality = new WP_Query(array(
                                'post_type' => 'what_we_do',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'what_we_do_categories', 
                                        'field' => 'slug', 
                                        'terms' => 'quality', 
                                        'include_children' => false
                                    )
                                ),
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));
                            if($quality->have_posts()) : 
                                $i = 0;
                                while($quality->have_posts()) : $quality->the_post();
                                $i++;
                        ?>
                        <button class="nav-link <?php if($i == 1){ echo 'active'; } ?>" data-bs-toggle="pill" data-bs-target="#quality<?php echo $post->ID; ?>"><?php the_title(); ?> <i class="bi bi-arrow-right"></i></button>
                        <?php 
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <?php 
                            if($quality->have_posts()) :
                                $i = 0;
                                while($quality->have_posts()) : $quality->the_post();
                                $i++;
                        ?>
                        <div class="tab-pane fade <?php if($i == 1){ echo 'show active'; } ?>" id="quality<?php echo $post->ID; ?>">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
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
        </div>
    </div>

<?php get_footer(); ?>