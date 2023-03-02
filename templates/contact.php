<?php 
    /*
        Template Name: Contact
    */
    get_header();
?>


    <div class="contact-us py-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/Kaleidescope\ Pattern.svg');">
        <div class="container">

            <?php while(have_posts()) : the_post(); ?>
                <h2 class="section-header mb-4"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; ?>

        </div>
    </div>

<?php get_footer(); ?>