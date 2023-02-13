<?php 
    /*
        Template Name: Clinical
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'clinical', array('size' => '')); ?>

    <div class="support-phase-area">
        <div class="container">
            <div class="support-phase-text text-center py-4">
                <p class="mb-0">Our clinical IBPAs bring expertise that supports clients at every phase of the system-design lifecycle for EHR implementations and beyond, including:</p>
            </div>
        </div>
        <div class="phases py-3" style="background: rgba(0, 114, 182, 0.25);">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center gap-2 nav">
                    <?php 
                        $clinical = new WP_Query(array(
                            'post_type' => 'what_we_do',
                            'posts_per_page' => -1,
                            'taxonomy' => 'what_we_do_categories',
                            'term' => 'clinical',
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        ));
                        if($clinical->have_posts()) :
                            $count = $clinical->found_posts; 
                            $i=0;
                            while($clinical->have_posts()) : $clinical->the_post();
                            $i++;
                            if($i != 1 && $i != $count) :
                    ?>

                    <button class="nav-link item" data-bs-toggle="pill" data-bs-target="#clinical<?php echo $post->ID; ?>"> <?php the_title(); ?> </button>
                    <span><i class="bi bi-arrow-right"></i></span>

                    <?php 
                            endif;
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="section-title-area py-3 text-center" style="background: rgba(0, 114, 182, 0.5);">
            <div class="container">
                <h6 class="mb-0">Clinical Driven Revenue Cycle (CDRC)</h6>
            </div>
        </div>
    </div>

    <div class="support-phase-tabs pt-5" style="padding-top: 130px!important;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <div class="nav flex-column nav-pills">

                        <?php 
                            if($clinical->have_posts()) : 
                                $i = 0;
                                while($clinical->have_posts()) : $clinical->the_post();
                                $i++;

                        ?>
                        <button class="nav-link <?php if($i == 1) {echo 'active'; }?>" data-bs-toggle="pill" data-bs-target="#clinical<?php echo $post->ID; ?>"><?php the_title(); ?><i class="bi bi-arrow-right"></i></button>
                        <?php 
                                endwhile;
                            endif;
                        ?>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="tab-content clinical-tabs">

                        <?php 
                            if($clinical->have_posts()) :
                                $i = 0;
                                while($clinical->have_posts()) : $clinical->the_post();
                                $i++;
                        ?>
                        <div class="tab-pane fade <?php if($i == 1) {echo 'show active';} ?>" id="clinical<?php echo $post->ID; ?>">
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
        <?php 
            $say = new WP_Query(array(
                'post_type' => 'section',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'page_id',
                        'value' => $page_id
                    ),
                    array(
                        'key' => 'section',
                        'value' => 'What Our Clients Say'
                    )
                )
            ));
            while($say->have_posts()) : $say->the_post();

        ?>
        <div class="container">
            <h3 class="sub-header mb-5"><?php the_title(); ?></h3>

            <?php        
                
                $dom = new DOMDocument;
                $dom->loadHTML(get_the_content()); 
                $lis = $dom->getElementsByTagName("li");
                foreach($lis as $li){
                    echo $li->textContent;
                    echo '<br>';
                }
            ?>

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
        <?php 
            endwhile;
            wp_reset_query();
        ?>
    </div>
    
<?php get_footer(); ?>