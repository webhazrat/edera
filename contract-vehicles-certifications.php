<?php
    /*
        Template Name: Contract Vehicles Certifications
    */
    get_header();
?>
    <?php 
        $page_id = get_queried_object_id();
        $work = new WP_Query(array(
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
                    'value' => 'How to Work with Us'
                )
            )
        ));
        while($work->have_posts()) : $work->the_post();
        $attachment_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
    ?>
    <div class="how-to-work-with-us py-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/Kaleidescope\ Pattern.svg');">
        <div class="container">
           
            <h2 class="section-header mb-5"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </div>


    <div class="how-to-work-with-us-bg" style="background-image:url('<?php echo $attachment_url; ?>')">
    </div>
    
    <?php endwhile; ?>

<?php get_footer(); ?>