<?php 
    /*
        Template Name: Brightest Minds Webinars
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'brightest_minds_webniars', array('size' => '')); ?>

    <?php get_template_part('template_parts/banner-navigation', 'brightest-minds-webinars'); ?>

    <div class="upcoming mt-4 mb-4">
        <div class="container">
            <?php 
                $today = date( 'Y-m-d' );
                $brightest_featured_upcoming = new WP_Query(array(
                    'post_type' => 'event',
                    'posts_per_page' => 1,
                    'orderby' => 'event_date',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'event_date',
                            'compare' => '>',
                            'value' => $today,
                            'type' => 'date'
                        )
                    )
                ));
                while($brightest_featured_upcoming->have_posts()) : $brightest_featured_upcoming->the_post();
                $event_date = date('F d, Y', strtotime(get_post_meta($post->ID, 'event_date', true)));
            ?>
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="upcoming-logo p-5">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="upcoming-text">
                        <span>Upcoming | <?php echo $event_date; ?></span>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 30, ''); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more secondary">Learn More <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="events-area mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <h4 class="mb-4">Recent Events</h4>

                    <?php 
                        $brightest = new WP_Query(array(
                            'post_type' => 'event',
                            'posts_per_page' => 2,
                            'orderby' => 'event_date',
                            'order' => 'DESC',
                            'meta_query' => array(
                                array(
                                    'key' => 'event_date',
                                    'compare' => '<=',
                                    'value' => $today,
                                    'type' => 'date'
                                )
                            )
                        ));
                        while($brightest->have_posts()) : $brightest->the_post();
                        $event_date = date('F d, Y', strtotime(get_post_meta($post->ID, 'event_date', true)));
                    ?>
                    <div class="item">
                        <div class="feature-img">
                            <?php the_post_thumbnail('large'); ?>
                            <span><i class="bi bi-arrow-right"></i></span>
                        </div>
                        <div class="body">
                            <?php if(has_tag()) : ?>
                                <div class="tags d-flex gap-2">
                                    <?php echo get_the_tag_list(); ?>
                                </div>
                            <?php endif; ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="para-content">
                                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>">Continue Reading</a>
                            </div>
                            <span class="date"><?php echo $event_date; ?></span>
                        </div>
                    </div>
                    <?php endwhile; ?>

                </div>

                <div class="col-lg-6">
                    <div class="upcoming-events">

                        <h4 class="mb-4">Upcoming Events</h4>
                        <?php 
                            $brightest_upcoming = new WP_Query(array(
                                'post_type' => 'event',
                                'posts_per_page' => 3,
                                'offset' => 1,
                                'orderby' => 'event_date',
                                'order' => 'ASC',
                                'meta_query' => array(
                                    array(
                                        'key' => 'event_date',
                                        'compare' => '>',
                                        'value' => $today,
                                        'type' => 'date'
                                    )
                                )
                            ));
                            while($brightest_upcoming->have_posts()) : $brightest_upcoming->the_post();
                            $event_date = date('F d, Y', strtotime(get_post_meta($post->ID, 'event_date', true)));
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
                                        <h5><a href="#"><?php the_title(); ?></a></h5>
                                        <div class="para-content">
                                            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                            <a href="<?php the_permalink(); ?>">Continue Reading</a>
                                        </div>
                                        <span class="date"><?php echo $event_date; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>  

                    </div>

                </div>

            </div>

        </div>

        <div class="past-events">
            <div class="container mt-4">
                <h4 class="mb-4">Past Events</h4>
                <div class="row">
                    <?php
                        $current_page = get_query_var('paged');
                        $current_page = max(1, $current_page);

                        $posts_per_page = 3;
                        $offset_start = 2;
                        $offset = ($current_page - 1) * $posts_per_page + $offset_start;
                        $brightest_offset = new WP_Query(array(
                            'posts_per_page' => $posts_per_page,
                            'post_type' => 'event',
                            'offset' => $offset,
                            'orderby' => 'event_date',
                            'order' => 'DESC',
                            'meta_query' => array(
                                array(
                                    'key' => 'event_date',
                                    'compare' => '<=',
                                    'value' => $today,
                                    'type' => 'date'
                                )
                            )
                        ));
                        $total_rows = max(0, $brightest_offset->found_posts - $offset_start);
                        $total_pages = ceil($total_rows / $posts_per_page);

                        while($brightest_offset->have_posts()) : $brightest_offset->the_post();
                        $event_date = date('F d, Y', strtotime(get_post_meta($post->ID, 'event_date', true)));
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
                                <div class="mt-2 date"><?php echo $event_date; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>  

                </div> 
    
                <div class="pagination-area mt-4">
                    <nav>
                        <?php bootstrap_pagination($total_pages, $current_page); ?>
                    </nav>
                </div> 
    
            </div>
        </div>

    </div>

<?php get_footer(); ?>