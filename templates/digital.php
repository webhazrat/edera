<?php
    /*
        Template Name: Digital
    */
    get_header();
    $page_id = get_queried_object_id();
?>

    <?php get_template_part('template_parts/banner-video', 'digital', array('size' => '')); ?>

    <div class="support-phase-tabs py-5" style="padding-top: 130px!important;">
        <div class="container">
            <h4 class="text-aqua mb-4"><?php echo get_theme_mod('d_service_title'); ?></h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <?php 
                            $digital = new WP_Query(array(
                                'post_type' => 'what_we_do',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'what_we_do_categories', 
                                        'field' => 'slug',
                                        'terms' => 'digital',
                                        'include_children' => false
                                    )
                                ),
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));
                            if($digital->have_posts()) :
                                $i = 0; 
                                while($digital->have_posts()) : $digital->the_post();
                                $i++;
                        ?>
                        <button class="nav-link <?php if($i == 1){ echo 'active'; } ?>" data-bs-toggle="pill" data-bs-target="#digital<?php echo $post->ID; ?>"><?php the_title(); ?> <i class="bi bi-arrow-right"></i></button>
                        <?php 
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <?php 
                            if($digital->have_posts()) : 
                                $i = 0;
                                while($digital->have_posts()) : $digital->the_post();
                                $i++;
                        ?>
                        <div class="tab-pane fade <?php if($i == 1){ echo 'show active'; } ?>" id="digital<?php echo $post->ID; ?>">
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

    <div class="products py-5" style="background-color: #f2f2f2;">
        <div class="container">
            <?php 
                $products = new WP_Query(array(
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
                            'value' => 'Products'
                        )
                    )
                ));
                while($products->have_posts()) : $products->the_post();
            ?>
            <h3 class="sub-header mb-4"><?php the_title(); ?></h3>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="product-text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-img text-end">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer(); ?>