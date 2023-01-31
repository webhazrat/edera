<?php
    /*
        Template Name: Digital
    */
    get_header();
?>

    <div class="banner page-banner">
        <div class="banner-item">
            <div class="container" style="height: 100%;">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="section-header">Digital</h2>
                            <p>Edera’s technology team creates value by helping our clients design user-centered solutions and build scalable innovations that drive growth and bring efficiencies. Our team uses its deep industry expertise to build solutions using leading tech platforms such as Salesforce and Amazon Web Services (AWS) to solve our clients’ complex and critical challenges. We leverage the power of our high-caliber partnerships to bring operational efficiency and transformative change to the way our clients do work.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/videos/Edera Header Digital 1440 336.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div class="support-phase-tabs py-5" style="padding-top: 130px!important;">
        <div class="container">
            <h4 class="sub-header mb-4">Services</h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#isas">IT Strategy & Advisory Services <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#ii">IT Innovations <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#sda">Solution Design & Architecture <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="isas">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>Implementation Assessment</li>
                                                <li>Technology Stack Analysis</li>
                                                <li>IT Governance</li>
                                                <li>Technology Capability Planning</li>
                                                <li>IT Optimization</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Digital_IT Strategy and Advisory Services.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ii">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>Rapid Prototyping</li>
                                                <li>Digital Optimization and Automation</li>
                                                <li>Digital Engagement and Performance</li>
                                                <li>Amplified Intelligence and Analytics</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Digital_IT Innovations.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sda">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>User-Centric and Experience-Driven Desi/li>
                                                <li>Integrated Tools</li>
                                                <li>Cloud Enablement</li>
                                                <li>Application Integration</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Digital_SolutionDesignArch.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products py-5" style="background-color: #f2f2f2;">
        <div class="container">
            <h3 class="sub-header mb-4">Products</h3>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="product-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/givebackrx-logo.png" alt="">
                        <ul class="mt-4">
                            <li>Pharmacy Discount Card and Health Store With Charity Organizations Partnership Platform</li>
                            <li>Artificial Intelligence (AI)-Powered Clinical Contact Center</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-img text-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/givebackrx.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>