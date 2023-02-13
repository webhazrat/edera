<?php 
    /*
        Template Name: Revenue Cycle
    */
    get_header();
?>

<?php get_template_part('template_parts/banner-video', 'revenue_cycle', array('size' => '')); ?>

    <div class="support-phase-tabs mb-5" style="padding-top: 100px!important;">
        <div class="container">
            <h4 class="text-aqua mb-4">Service Offerings</h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <?php
                            $revenue_cycle = new WP_Query(array(
                                'post_type' => 'what_we_do',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'what_we_do_categories',
                                        'field' => 'slug',
                                        'terms' => 'revenue-cycle',
                                        'include_children' => false
                                    )
                                ),
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));

                            if($revenue_cycle->have_posts()) :
                                $i = 0;
                                while($revenue_cycle->have_posts()) : $revenue_cycle->the_post();
                                $i++;
                        ?>
                            <button class="nav-link <?php if( $i == 1 ){ echo 'active'; } ?>" data-bs-toggle="pill" data-bs-target="#revenueCycle<?php echo $post->ID; ?>"> <?php the_title(); ?><i class="bi bi-arrow-right"></i></button>
                        <?php 
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <?php 
                           if($revenue_cycle->have_posts()) :
                                $i = 0;
                                while($revenue_cycle->have_posts()) : $revenue_cycle->the_post(); 
                                $i++;
                        ?>
                        <div class="tab-pane fade <?php if( $i == 1 ){ echo 'show active'; } ?>" id="revenueCycle<?php echo $post->ID; ?>">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php the_post_thumbnail('large'); ?>
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

    <div class="clients-say py-5">
        <div class="container">
            <h3 class="sub-header mb-5">What Our Clients Say</h3>

            <div id="saysCarousel" class="says-area carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#saysCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#saysCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#saysCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                <div class="carousel-inner">
                    <div class="say-item carousel-item active">
                        <p>The 1 hour I spent was <strong>worth infinitely more</strong> than the several hours of computer-based learning.</p>
                    </div>
                    <div class="say-item carousel-item">
                        <p>If any of you would like to sit next to me the week of 25 September, when we go live, I will have a seat and coffee waiting for you. This was the most thorough, meaningful training.</p>
                    </div>
                    <div class="say-item carousel-item">
                        <p>Enjoyed the open forum and ability to talk to clinicians that have extensive knowledge on how the system works.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>