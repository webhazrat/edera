<?php 
    /*
        Template Name: Revenue Cycle
    */
    get_header();
    $page_id = get_queried_object_id();
?>

<?php get_template_part('template_parts/banner-video', 'revenue_cycle', array('size' => '')); ?>

    <div class="support-phase-tabs mb-5" style="padding-top: 100px!important;">
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
        ?>
        <div class="container">
            <h4 class="text-aqua mb-4"><?php echo get_theme_mod('r_service_title'); ?></h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <?php
                            $i = 0;
                            while($revenue_cycle->have_posts()) : $revenue_cycle->the_post();
                            $i++;
                        ?>
                            <button class="nav-link <?php if( $i == 1 ){ echo 'active'; } ?>" data-bs-toggle="pill" data-bs-target="#revenueCycle<?php echo $post->ID; ?>"> <?php the_title(); ?><i class="bi bi-arrow-right"></i></button>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <?php 
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
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            endif; 
            wp_reset_query();
        ?>
    </div>

    <div class="clients-say py-5">
        <?php 
            $say = new WP_Query(array(
                'post_type' => 'clients_say',
                'meta_key' => 'page_id',
                'meta_value' => $page_id,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));
            if($say->have_posts()) : 
        ?>
        <div class="container">
            <h3 class="sub-header mb-5"><?php echo get_theme_mod('rc_client_say_title'); ?></h3>
            
            <div id="saysCarousel" class="says-area carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php 
                        $i = -1;
                        while($say->have_posts()) : $say->the_post();
                        $i++;
                    ?>
                        <button type="button" data-bs-target="#saysCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></button>
                    <?php endwhile; ?>
                  </div>
                <div class="carousel-inner">
                    <?php 
                        $i = 0;
                        while($say->have_posts()) : $say->the_post();
                        $i++;
                    ?>
                    <div class="say-item carousel-item <?php if($i == 1){ echo 'active'; } ?>">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php 
            endif;
            wp_reset_query();
        ?>
    </div>

<?php get_footer(); ?>