<?php get_header(); ?>

    <div class="banner page-banner">
        <div class="banner-item">
            <div class="container" style="height: 100%;">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="section-header">Reliable Resources and Impactful Insight</h2>
                            <p>Edera produces a wide range of resources about our initiatives and impact, including
                                white papers, case studies, news articles, press releases, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/what-makes-us-different.m4v" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <?php get_template_part('template_parts/banner-navigation'); ?>

    <div class="page-content py-5">
        <div class="container">
            <nav class="mb-5">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>

            <div class="single-content">
                <h2 class="section-header"><?php the_title(); ?></h2>
                <span class="date">Published on <?php echo get_the_date(); ?></span>
                <?php the_content(); ?>
                <div class="feature-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/WF3 Website Blast Banner V2.png" alt="">
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>