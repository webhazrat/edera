<?php 
    /*
        Template Name: Creative
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'creative', array('size' => '')); ?>

    <div class="support-phase-tabs py-5" style="padding-top: 130px!important;">
        <div class="container">
            <h4 class="text-aqua mb-4"><?php echo get_theme_mod('creative_service_title'); ?></h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <?php 
                            $creative = new WP_Query(array(
                                'post_type' => 'what_we_do',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'what_we_do_categories',
                                        'field' => 'slug',
                                        'terms' => 'creative',
                                        'include_children' => false
                                    )
                                ),
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));
                            if($creative->have_posts()) :
                                $i = 0;
                                while($creative->have_posts()) : $creative->the_post();
                                $i++;
                        ?>
                        <button class="nav-link <?php if($i == 1){ echo 'active'; } ?>" data-bs-toggle="pill" data-bs-target="#creative<?php echo $post->ID; ?>"><?php the_title(); ?> <i class="bi bi-arrow-right"></i></button>

                        <?php 
                                endwhile;
                            endif;
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">

                        <?php 
                            if($creative->have_posts()) : 
                                $i = 0;
                                while($creative->have_posts()) : $creative->the_post();
                                $i++;
                        ?>

                        <div class="tab-pane fade <?php if($i == 1){ echo 'show active'; }?>" id="creative<?php echo $post->ID; ?>">
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
<?php get_footer(); ?>