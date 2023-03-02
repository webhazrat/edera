<?php 
    /*
        Template Name: Podcasts
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'podcasts', array('size' => '')); ?>

    <?php get_template_part('template_parts/banner-navigation', 'podcasts'); ?>

    <div class="blog-area white-papers-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <?php 
                        $podcasts = new WP_Query(array(
                            'post_type' => 'podcast',
                            'posts_per_page' => 1,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ));

                        while($podcasts->have_posts()) : $podcasts->the_post();
                        $attachment_id = get_post_thumbnail_id($post->ID);
                        $attachment_url = wp_get_attachment_image_src($attachment_id, 'large')[0];
                        $audio_url = wp_get_attachment_url(get_post_meta($post->ID, 'attachment', true));
                    ?>
                    <div class="item full white p-5" style="background-image:url('<?php echo $attachment_url; ?>')">
                        <div class="body">
                            <?php if(has_tag()) : ?>
                                <div class="tags d-flex gap-2">
                                    <?php echo get_the_tag_list(); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <div class="para-content">
                                <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>">Continue Reading</a>
                            </div>
                            <?php if($audio_url) : ?>
                                <audio controls class="mt-2">
                                    <source src="<?php echo $audio_url; ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            <?php endif; ?>
                            <span class="date"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

                <div class="col-md-10">

                    <?php 
                        $current_page = get_query_var('paged');
                        $current_page = max(1, $current_page);

                        $posts_per_page = 5;
                        $offset_start = 1;
                        $offset = ($current_page - 1) * $posts_per_page + $offset_start;
                        $podcasts_offset = new WP_Query(array(
                            'post_type' => 'podcast',
                            'posts_per_page' => $posts_per_page,
                            'offset' => $offset,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ));

                        $total_rows = max(0, $podcasts_offset->found_posts - $offset_start);
                        $total_pages = ceil($total_rows / $posts_per_page);

                        while($podcasts_offset->have_posts()) : $podcasts_offset->the_post();
                        $audio_url = wp_get_attachment_url(get_post_meta($post->ID, 'attachment', true));
                    ?>
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="feature-img">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="body">
                                    <?php if(has_tag()) : ?>
                                        <div class="tags d-flex gap-2">
                                            <?php echo get_the_tag_list(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <h5><?php the_title(); ?></h5>
                                    <div class="para-content">
                                        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                        <a href="<?php the_permalink(); ?>">Continue Reading</a>
                                    </div>
                                    <?php if($audio_url) : ?>
                                        <audio controls class="mt-2">
                                            <source src="<?php echo $audio_url; ?>" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                        </audio>
                                    <?php endif; ?>
                                    <span class="date"><?php echo get_the_date(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?> 
                
                </div>
                
                <div class="col-md-10">
                    <div class="pagination-area mt-5">
                        <nav>
                            <?php bootstrap_pagination($total_pages, $current_page); ?>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<?php get_footer(); ?>