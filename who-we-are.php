<?php 
    /*
        Template Name: Who We Are
    */
    get_header();
    $page_id = get_queried_object_id();
?>

    <?php get_template_part('template_parts/banner-video', 'who_we_are', array('size' => 'large')); ?>

    <div class="why-we-exist py-5" style="background-color:#F2F2F2;">
        <div class="container">
            <?php 
                $exist = new WP_Query(array(
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
                            'value' => 'Why We Exist'
                        )
                    )
                ));
                while($exist->have_posts()) : $exist->the_post();
            ?>
            <h3 class="sub-header mb-4"><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="what-means py-4" style="background-color:#0072B6;">
        <?php 
            $means = new WP_Query(array(
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
                        'value' => 'What it Means to Be a Low Profit LLC'
                    )
                )
            ));
            while($means->have_posts()) : $means->the_post();
        ?>
        <div class="container text-white">
            <h3 class="sub-header text-white mb-4"><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="team-title pt-5">
        <div class="container">
            <h3 class="sub-header text-green">The Edera Team</h3>
        </div>
    </div>

    <div class="team py-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/who-we-are-bg-pattern.svg');">
        <div class="container">
            <h4>At the wheel</h4>

            <div class="row justify-content-center mt-4">
                <?php 
                    $at_the_wheel = new WP_Query(array(
                        'post_type' => 'team',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team_categories', 
                                'field' => 'slug',
                                'terms' => 'at-the-wheel',
                                'include_children' => false
                            )
                        ),
                        'posts_per_page' => -1, 
                        'orderby' => 'menu_order',
                        'order' => 'ASC' 
                    ));
                    while($at_the_wheel->have_posts()) : $at_the_wheel->the_post();
                    $full_name = get_post_meta($post->ID, 'full_name', true);
                    $designation = get_post_meta($post->ID, 'designation', true);
                    $btn_text = get_post_meta($post->ID, 'btn_text', true);
                    $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?> 
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <?php the_post_thumbnail('medium'); ?>
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h5>
                                    <?php if($full_name){ 
                                            echo $full_name;
                                        }else{
                                            the_title();
                                        } ?>
                                </h5>
                                <span><?php echo $designation; ?></span>
                                <?php the_content(); ?>
                                <?php if($btn_text) : ?>
                                    <a href="<?php echo $btn_link; ?>" class="read-more"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo $designation; ?></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
        
        <div class="container mt-5">
            <h4>Team Leads</h4>

            <div class="row justify-content-center mt-4">
                <?php 
                    $team_leads = new WP_Query(array(
                        'post_type' => 'team',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team_categories',
                                'field' => 'slug',
                                'terms' => 'team-leads',
                                'include_children' => false
                            )
                        ),
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    while($team_leads->have_posts()) : $team_leads->the_post();
                    $full_name = get_post_meta($post->ID, 'full_name', true);
                    $designation = get_post_meta($post->ID, 'designation', true);
                    $btn_text = get_post_meta($post->ID, 'btn_text', true);
                    $btn_link = get_post_meta($post->ID, 'btn_link', true);
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <?php the_post_thumbnail('medium'); ?>
                            <div class="overlay-pop">
                                <a href="#" class="close"><i class="bi bi-x"></i></a>
                                <h5><?php 
                                    if($full_name){
                                        echo $full_name;
                                    }else{
                                        the_title();
                                    }
                                ?></h5>
                                <span><?php echo $designation; ?></span>
                                <?php the_content(); ?>

                                <?php if($btn_text) : ?>
                                    <a href="<?php echo $btn_link; ?>" class="read-more"><?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="body text-center mt-3">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo $designation; ?></span>
                        </div>
                    </div>
                </div>  
                <?php 
                    endwhile;
                ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>