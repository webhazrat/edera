<?php 
    /*
        Template Name: How We Give
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'how_we_give', array('size' => 'large')); ?>

    <div class="how-we-make-difference">
        <div class="container">
            <h3 class="sub-header my-4"><?php echo get_theme_mod('how_we_make_title'); ?></h3>
        </div>
        <div class="container-fluid px-0">
            <div id="giveCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000000">
                <?php 
                    $difference = new WP_Query(array(
                        'post_type' => 'difference',
                        'posts_per_page' => -1, 
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($difference->have_posts()) :
                ?>
                <div class="carousel-inner">
                    <?php 
                        $bg = ['transparent linear-gradient(180deg, #16679A 0%, #0FF0B3 100%) 0% 0% no-repeat padding-box', 'transparent linear-gradient(180deg, #81D0FF 0%, #0072B6 100%) 0% 0% no-repeat padding-box', '#0072B6', '#002E5F'];
                        $i = -1;
                        while($difference->have_posts()) : $difference->the_post();
                        $size = get_post_meta($post->ID, 'input', true);
                        $btn_text = get_post_meta($post->ID, 'btn_text', true);
                        $btn_link = get_post_meta($post->ID, 'btn_link', true);
                        $i++;
                    ?>
                    <div class="carousel-item <?php if($i == 0){ echo 'active'; } ?>">
                        <div class="<?php if($size){ echo 'full'; } ?>" style="background:<?php echo $bg[$i]; ?>">
                            <div class="row  <?php if($size){ echo 'justify-content-end'; } else{ echo 'justify-content-center'; } ?>  align-items-center">
                                <div class="col-md-6">
                                    <div class="body p-5">
                                        <?php the_content(); ?>
                                        <?php if($btn_text) : ?>
                                            <a href="<?php echo $btn_link; ?>" class="read-more orange default"><?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="<?php if($size){ echo 'col-md-6'; }else{ echo 'col-md-4'; } ?>">
                                    <div class="img">
                                        <?php the_post_thumbnail('large'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#giveCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#giveCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>