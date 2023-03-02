<?php 
    /*
        Template Name: Management Consulting
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'management_consulting', array('size' => '')); ?>

    <div class="support-phase-tabs py-5" style="padding-top: 130px!important;">
        <div class="container">
            <h4 class="text-aqua mb-4">Service Offerings</h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <?php 
                            $mc = new WP_Query(array(
                                'post_type' => 'what_we_do',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'what_we_do_categories',
                                        'field' => 'slug',
                                        'terms' => 'management-consulting',
                                        'include_children' => false
                                    )
                                ),
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));
                            $i = 0;
                            while($mc->have_posts()) : $mc->the_post();
                            $i++;
                        ?>
                        <button class="nav-link <?php if($i == 1){ echo 'active'; }?>" data-bs-toggle="pill" data-bs-target="#mc<?php echo $post->ID; ?>"><?php the_title(); ?> <i class="bi bi-arrow-right"></i></button>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <?php 
                            $i = 0;
                            while($mc->have_posts()) : $mc->the_post();
                            $i++;
                        ?>
                        <div class="tab-pane fade <?php if($i == 1){ echo 'show active'; }?>" id="mc<?php echo $post->ID; ?>">
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
                            wp_reset_query();
                        ?>   

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>