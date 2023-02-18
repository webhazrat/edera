<?php 
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'blog', array('size' => '')); ?>

    <?php get_template_part('template_parts/banner-navigation', 'blog'); ?>

    <div class="blog-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="blog-items">
                        <?php 
                            $blog = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            ));

                            while($blog->have_posts()) : $blog->the_post();
                            $attachment_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0];
                        ?>
                        <div class="item full white p-5" style="background-image: url('<?php echo $attachment_url; ?>');">
                            <div class="body">
                                <?php if(has_tag()) : ?>
                                    <div class="tags d-flex gap-2">
                                        <?php echo get_the_tag_list(); ?>
                                    </div>
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <div class="para-content">
                                    <p><?php echo wp_trim_words(get_the_content(), 26, '...'); ?></p>
                                    <a href="<?php the_permalink(); ?>">Continue Reading</a>
                                </div>
                                <span class="date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>

                        <?php 
                            endwhile;
                            wp_reset_query();
                        ?>

                        <?php 
                            $current_page = get_query_var('paged');
                            $current_page = max(1, $current_page);

                            $posts_per_page = 5;
                            $offset_start = 1;
                            $offset = ($current_page - 1) * $posts_per_page + $offset_start;
                            $blog_offset = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => $posts_per_page,
                                'offset' => $offset,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            ));

                            $total_rows = max(0, $blog_offset->found_posts - $offset_start);
                            $total_pages = ceil($total_rows / $posts_per_page);

                            while($blog_offset->have_posts()) : $blog_offset->the_post();
                        ?>
    
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="feature-img">
                                        <?php the_post_thumbnail(); ?>
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
                                            <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                                            <a href="<?php the_permalink(); ?>">Continue Reading</a>
                                        </div>
                                        <span class="date"><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <?php 
                            endwhile;
                        ?> 
                        
                        <div class="pagination-area mt-4">
                            <nav>
                                <?php 
                                    bootstrap_pagination($total_pages, $current_page);
                                    wp_reset_query();
                                ?>
                            </nav>
                        </div>
                        
                    </div>
                    

                </div>

                <div class="col-md-4">
                    <div class="right-sidebar sticky-top">
                        <h4 class="mb-4">Latest News</h4>
                        <?php 
                            $news = new WP_Query(array(
                                'post_type' => 'news',
                                'posts_per_page' => 5,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            ));

                            while($news->have_posts()) : $news->the_post();
                        ?>
                        <div class="blog-item">
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <span class="date"><?php echo get_the_date(); ?></span>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>

 <?php get_footer(); ?>