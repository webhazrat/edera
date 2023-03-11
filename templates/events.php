<?php 
    /*
        Template Name: Events
    */
    get_header();

    $page_id = get_queried_object_id();
?>

    <?php get_template_part('template_parts/banner-video', 'events', array('size' => '')); ?>
    
    <div class="upcoming events-area mb-5">
        <div class="container">
            <h3 class="sub-header text-green mb-4">Brightest Minds Events</h3>
            
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
            <div class="row g-0 mb-4">
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

            <div class="row">
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
                <div class="col-md-6">
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
                            <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
                            <span class="date"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>

        </div>
    </div>

    <div class="event-schedule py-5" style="background-color:#F2F2F2">
        <div class="container">
            <h3 class="sub-header text-green mb-4">Event Schedule</h3>
        </div>
    </div>
    

    <div class="media-contacts py-4" style="background-color: #f2f2f2;">
        <div class="container">
            <?php 
                $media_contacts = new WP_Query(array(
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
                            'value' => 'Media Contacts'
                        )
                    )
                ));
                while($media_contacts->have_posts()) : $media_contacts->the_post();
            ?>
            <h3 class="sub-header text-green mb-3"><?php the_title(); ?></h3>
            <h4><?php echo wp_trim_words(get_the_content(), 99999, '..')?></h4>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="queries py-5" style="background-color:#94CC00;">
        <div class="container">
            <?php 
                $queries = new WP_Query(array(
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
                            'value' => 'Media Queries'
                        )
                    )
                ));
                while($queries->have_posts()) : $queries->the_post();
                the_content();
            ?>

            <?php endwhile; ?>
            
        </div>
    </div>

<?php get_footer(); ?>