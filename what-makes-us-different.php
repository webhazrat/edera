<?php
    /*
        Template Name: What Makes Us Different
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'what_makes_us_different', array('size' => '')); ?>
    
    <div class="how-we-work">
        <div class="container">
            <h3 class="sub-header my-4">How We Work</h3>
        </div>
        <div class="container-fluid px-0">
            
            <div class="how-items d-flex">

                <?php 
                    $how_we_work = new WP_Query(array(
                        'post_type' => 'how_we_work',
                        'posts_per_page' => -1, 
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    if($how_we_work->have_posts()) :
                        while($how_we_work->have_posts()) : $how_we_work->the_post();
                ?>
                
                <div class="how-item">
                    <div class="title how-item-title">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="overlay">
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <a href="#"><i class="bi bi-zoom-in"></i></a>
                    </div>
                    <div class="body">
                        <div class="content">
                            <?php the_content(); ?>
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

    <div class="affiliate-brands-title py-4" id="affiliatebrands" style="scroll-margin-top:90px;">
        <div class="container">
            <h3 class="sub-header">Our Affiliate Brands</h3>
        </div>
    </div>

    <div class="affiliate-brands py-5" style="background-color:#F2F2F2;">
        <div class="container">
            <ul class="nav nav-tabs">
                <?php 
                    $brands = new WP_Query(array(
                        'post_type' => 'brands',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    $i = 0;
                    while($brands->have_posts()) : $brands->the_post();
                    $attachment_url = wp_get_attachment_image_src(get_post_meta($post->ID, 'attachment', true), 'medium')[0];
                    $i++;
                ?>
                <li class="nav-item">
                    <button class="nav-link <?php if($i == 1){ echo 'active'; } ?>" data-bs-toggle="tab" data-bs-target="#brands<?php echo $post->ID; ?>">
                        <img src="<?php echo $attachment_url; ?>" alt="">
                    </button>
                </li>
                <?php endwhile; ?>
            </ul>

            <div class="tab-content pt-5">
                <?php 
                    $i = 0;
                    while($brands->have_posts()) : $brands->the_post();
                    $btn_text = get_post_meta($post->ID, 'btn_text', true);
                    $btn_link = get_post_meta($post->ID, 'btn_link', true);
                    $i++;
                ?>
                <div class="tab-pane fade <?php if($i == 1){ echo 'show active'; } ?>" id="brands<?php echo $post->ID; ?>">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="brand-text">
                                <?php the_content(); ?>
                                <?php if($btn_text) : ?>
                                    <a href="<?php echo $btn_link; ?>" class="read-more secondary" target="_blank"> <?php echo $btn_text; ?> <i class="bi bi-arrow-right-short"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="col-lg-6">
                                <div class="img text-end">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="col-lg-7">
                                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/453832046?h=0611ab2e71&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            
            
        </div>
    </div>
    

<?php get_footer(); ?>