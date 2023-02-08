<?php 
    /*
        Template Name: Careers
    */
    get_header();
?>

    <div class="banner page-banner">
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
        <div class="banner-item">
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
        </div>
        <?php 
            endwhile;
            wp_reset_query();
        ?>
    </div>
    
    <div class="careers-area py-5">
        <div class="container">

        </div>
    </div>

<?php get_footer(); ?>