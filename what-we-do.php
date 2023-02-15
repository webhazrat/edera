<?php 
    /*
    Template Name: What We Do
    */
    get_header();
    $page_id = get_queried_object_id();
?>


    <?php get_template_part('template_parts/banner-video', 'what_we_do', array('size' => 'large')); ?>

    <div class="services-and-capabilities py-5" style="background-color: #F2F2F2;">
        <div class="container">
            <h3 class="sub-header mb-4">Our Services and Capabilities</h3>
            <h4 class="text-center mb-4">Sevice Offerings</h4>

            <div class="row mb-4">
                <?php 
                    $offerings = new WP_Query(array(
                        'post_type' => 'what_we_do',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'what_we_do_categories',
                                'field' => 'slug',
                                'terms' => 'services',
                                'include_children' => false
                            )
                        ),
                        'posts_per_page' => 3,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($offerings->have_posts()) :
                        while($offerings->have_posts()) : $offerings->the_post();
                        $btn_text = get_post_meta($post->ID, 'btn_text', true);
                        $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?>
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="icon text-center">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <h6><?php the_title(); ?></h6>
                        <?php the_content(); ?>
                        <?php if($btn_text) : ?>
                        <a href="<?php echo get_permalink($btn_link); ?>" class="read-more"><?php echo $btn_text; ?><i class="bi bi-arrow-right-short"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                          endwhile;
                    endif;
                    wp_reset_query();
                ?>
                
            </div>

            <h4 class="text-center mb-4">Capabilities</h4>
            <div class="row">
                <?php
                    $capabilities = new WP_Query(array(
                        'post_type' => 'what_we_do',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'what_we_do_categories',
                                'field' => 'slug',
                                'terms' => 'capabilities',
                                'include_children' => false
                            )
                        ),
                        'posts_per_page' => 3,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($capabilities->have_posts()) :
                        while($capabilities->have_posts()) : $capabilities->the_post();
                        $btn_text = get_post_meta($post->ID, 'btn_text', true);
                        $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?>
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="icon text-center">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <h6><?php the_title(); ?></h6>
                        <?php the_content(); ?>
                        <?php if($btn_text): ?>
                            <a href="<?php echo get_permalink($btn_link); ?>" class="read-more"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>
                
            </div>
            
        </div>
    </div> 

    <div class="who-we-serve py-4" style="background-color:#0072B6;">
        <div class="container">
            <?php 
                $who_we_serve = new WP_Query(array(
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
                            'value' => 'Who We Serve'
                        )
                    )
                ));
                while($who_we_serve->have_posts()) : $who_we_serve->the_post();
            ?>
            <h3 class="sub-header text-white mb-3"><?php the_title(); ?></h3>
            <div class="text-white">
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="serve-items py-5" style="background-color: #338EC5;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="item">
                       <h4 class="text-white mb-3">Government</h4> 
                       <p class="text-white mb-0">Our IBPAs serve as trusted partners for the U.S. Department of Veterans Affairs (VA). The IBPAs’ vast clinical and technical experience enables them to guide VA toward best practice decision-making and workflow design, setting the foundation for system configuration and implementation. Our IBPAs also support the Office of Electronic Health Record Modernization (OEHRM) in developing processes for updated policies, standard operating procedures, memoranda, etc., to govern practices post-VA EHRM implementation.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="item">
                       <h4 class="text-white mb-3">Commercial</h4> 
                       <p class="text-white mb-0">Edera has developed the health care and life sciences market strategy for a customer relationship management product of a Top 10 Fortune Future 50 company. We leveraged our team of IBPAs across the provider, payer, and life sciences sectors to craft a comprehensive suite of marketing, functionality, and technology recommendations and roadmaps.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>