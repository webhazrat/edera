<?php 
    /*
        Template Name: How We Give
    */
    get_header();
?>

    <?php get_template_part('template_parts/banner-video', 'how_we_give', array('size' => 'large')); ?>

    <div class="how-we-make-difference">
        <div class="container">
            <h3 class="sub-header my-4">How We Make a Difference</h3>
        </div>
        <div class="container-fluid px-0">
            <div id="giveCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000000">
                <div class="carousel-inner">


                    <div class="carousel-item active">
                        <div class="givebackrx-slide">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6">
                                    <div class="body p-5">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/givebackrx-logo.png" alt="">
                                        <p>In an effort to give back in innovative ways, we launched GiveBackRx, a prescription discount program that not only provides savings on prescription drugs but also presents a unique opportunity for consumers to donate to their chosen charity.</p>
                                        <a href="#" class="read-more orange default">Visit GiveBackRx.com <i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/GiveBackRx Mockup with Card.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="hubzone-slide">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-4">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Hubzone Logo Large.svg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="body p-5">
                                        <p>Edera has United States Small Business Administration (SBA) historically underutilized business zone (HUBZone) certification, reflecting our desire to affect change through local economic growth and employment opportunities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="give-slide full">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-7">
                                    <div class="body p-5">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Edera Give Logo White.svg" alt="">
                                        <p>Edera gives its employees one paid volunteering day a year to give back to
                                            their communities. Each month Edera showcases team members and how they have
                                            given back to their community and supported Edera’s overall mission and
                                            vision. Edera’s Community Involvement Committee (CIC) works to identify and
                                            organize local, group non-profit volunteering opportunities and support
                                            employees who volunteer for non-profits within their communities outside of
                                            the Washington, DC area.</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/give.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="leaders-slide full">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="body p-5">
                                        <h3 class="sub-header text-white">Leaders of Tomorrow</h3>
                                        <p>Edera participates in and sponsors events that align with our mission and
                                            commitment to supporting our nation’s Veterans and service members, such as
                                            Honor Flights to welcome Veterans to Washington, DC.</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/HowWeGive_LeadersOfTomorrow.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#giveCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#giveCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

<?php get_footer(); ?>