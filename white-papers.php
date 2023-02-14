<?php 
    /*
        Template Name: White Papers
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'white_papers', array('size' => '')); ?>

    <?php get_template_part('template_parts/banner-navigation'); ?>

    <div class="blog-area white-papers-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <?php 
                        $white_papers = new WP_Query(array(
                            'post_type' => 'post',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'white-papers',
                                    'include_children' => false
                                )
                            ),
                            'posts_per_page' => 1,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ));

                        while($white_papers->have_posts()) : $white_papers->the_post();
                        $attachment_id = get_post_thumbnail_id($post->ID);
                        $attachment_url = wp_get_attachment_image_src($attachment_id, 'large')[0];
                    ?> 

                    <div class="item full white p-5" style="background-image:url('<?php echo $attachment_url; ?>')">
                        <div class="body">
                            <?php if(has_tag()) : ?>
                                <div class="tags d-flex gap-2">
                                    <?php echo get_the_tag_list(); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <div class="para-content">
                                <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>">Continue Reading</a>
                            </div>
                            <span class="date mt-5"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>

                    <?php endwhile; ?>

                </div>

                <div class="col-md-10">
                    <?php 
                        $current_page = get_query_var('paged');
                        $current_page = max(1, $current_page);

                        $posts_per_page = 5;
                        $offset_start = 1;
                        $offset = ($current_page - 1) * $posts_per_page + $offset_start;
                        $white_papers_offset = new WP_Query(array(
                            'post_type' => 'post',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug', 
                                    'terms' => 'white-papers', 
                                    'include_children' => false
                                )
                            ),
                            'posts_per_page' => $posts_per_page, 
                            'offset' => $offset,
                            'orderby' => 'post_date',
                            'order' => 'DESC' 
                        ));

                        $total_rows = max(0, $white_papers_offset->found_posts - $offset_start);
                        $total_pages = ceil($total_rows / $posts_per_page);
                        while($white_papers_offset->have_posts()) : $white_papers_offset->the_post();
                    ?>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="feature-img">
                                        <?php the_post_thumbnail('medium'); ?>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="body">
                                        <?php if(has_tag()) : ?>
                                            <div class="tags d-flex gap-2">
                                                <?php echo get_the_tag_list(); ?>
                                            </div>
                                        <?php endif; ?>
                                        <h5><?php the_title(); ?></h5>
                                        <div class="para-content">
                                            <?php echo wp_trim_words(get_the_content(), 26, '...'); ?>
                                            <a href="<?php the_permalink(); ?>">Continue Reading</a>
                                        </div>
                                        <span class="date"><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php endwhile; ?>   

                </div>

                <div class="col-md-10">
                    <div class="pagination-area mt-4">
                        <nav>
                            <?php bootstrap_pagination($total_pages, $current_page); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>