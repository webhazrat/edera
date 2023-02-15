<?php 
    /*
        Template Name: In the News
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'in_the_news', array('size' => '')); ?>

    <?php get_template_part('template_parts/banner-navigation'); ?>

    <div class="events-area my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <h4 class="mb-4">Latest News</h4>

                    <?php 
                        $latest_news = new WP_Query(array(
                            'post_type' => 'news',
                            'posts_per_page' => 2,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                       )); 
                       while($latest_news->have_posts()) : $latest_news->the_post();
                    ?>
                    <div class="item">
                        <div class="feature-img">
                            <?php the_post_thumbnail('large'); ?>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <?php if( has_tag() ) : ?>
                                <div class="tags d-flex gap-2">
                                    <?php echo get_the_tag_list();?>
                                </div>
                            <?php endif; ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="para-content">
                                <p><?php echo wp_trim_words(get_the_content(), 26, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>">Continue Reading</a>
                            </div>
                            <span class="date"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>

                </div>

                <div class="col-lg-6">
                    <div class="upcoming-events">
                        <h4 class="mb-4">Recent Articles</h4>
                        <?php 
                            $recent_news = new WP_Query(array(
                                'post_type' => 'news',
                                'posts_per_page' => 3,
                                'orderby' => 'post_date',
                                'offset' => 2,
                                'order' => 'DESC'
                            )); 
                            while($recent_news->have_posts()) : $recent_news->the_post();
                        ?>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature-img">
                                        <?php the_post_thumbnail('medium'); ?>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="body">
                                        <?php if(has_tag()) : ?>
                                        <div class="tags d-flex gap-2">
                                            <?php echo get_the_tag_list(); ?>
                                        </div>
                                        <?php endif; ?>
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <div class="para-content">
                                            <?php echo wp_trim_words(get_the_content(), 18, '...'); ?>
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

                    </div>

                </div>

            </div>

        </div>

        <div class="past-events">
            <div class="container mt-4">
                <h4 class="mb-4">Past Articles</h4>
                <div class="row">
                    <?php 
                        $current_page = get_query_var('paged');
                        $current_page = max(1, $current_page);

                        $posts_per_page = 3;
                        $offset_start = 5;
                        $offset = ($current_page - 1) * $posts_per_page + $offset_start;

                        $past_news = new WP_Query(array(
                            'post_type' => 'news',
                            'posts_per_page' => $posts_per_page,
                            'orderby' => 'post_date',
                            'offset' => $offset,
                            'order' => 'DESC'
                        )); 

                        $total_rows = max(0, $past_news->found_posts - $offset_start);
                        $total_pages = ceil($total_rows / $posts_per_page);

                        while($past_news->have_posts()) : $past_news->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="feature-img">
                                <?php the_post_thumbnail('medium'); ?>
                                <span><i class="bi bi-arrow-right"></i></span>
                            </div>
                            <div class="body">
                                <?php if(has_tag()) : ?>
                                    <div class="tags d-flex gap-2">
                                        <?php echo get_the_tag_list(); ?>
                                    </div>
                                <?php endif; ?>
                                <h4 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="bi bi-arrow-right-short"></i></a>
                                <div class="mt-2 date"><?php echo get_the_date(); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                
                </div> 
    
                <div class="pagination-area mt-4">
                    <nav>
                        <?php
                            bootstrap_pagination($total_pages, $current_page);
                        ?>
                    </nav>
                </div> 
    
            </div>
        </div>

    </div>

<?php get_footer(); ?>