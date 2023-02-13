
<div class="banner page-banner <?php echo $args['size']; ?>">
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
                        <?php if($btn_text) : ?>
                        <a href="<?php echo get_permalink($btn_link); ?>" class="read-more"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
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