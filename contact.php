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

            <form action="">

                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-4">
                            <label for="first-name" class="form-label">First Name*</label>
                            <input type="text" name="first-name" id="first-name" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="last-name" class="form-label">Last Name*</label>
                            <input type="text" name="last-name" id="last-name" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="mb-4">
                            <label for="contact-reason" class="form-label">Contact Reason</label>
                            <select class="form-select form-control">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">How can we help you?</label>
                            <textarea name="message" id="message" rows="11" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" id="contactSubmit" class="read-more">Submit </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

<?php get_footer(); ?>