<?php 
    /*
        Template Name: Management Consulting
    */
    get_header();
?>

    <div class="banner page-banner">
        <div class="banner-item">
            <div class="container" style="height: 100%;">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="section-header">Management Consulting</h2>
                            <p>Our premium management consulting team delivers end-to-end managed solutions to address multidimensional problems requiring large-scale transformation. </p>
                            <p> Our team has deep expertise in strategy, organizational development, change management, and process improvement capabilities to solve complex client challenges. Injected with innovative technology capabilities wherever possible to enable better, faster, more engaging solutions, we build robust tools to complement people and processes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/videos/Edera Header Mc 1440 336.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div class="support-phase-tabs py-5" style="padding-top: 130px!important;">
        <div class="container">
            <h4 class="text-aqua mb-4">Service Offerings</h4>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pm">Project Management <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#scp">Strategic & Capability Planning <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tr">Upskilling Interventions & Training Tactics <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pi">Process Improvement <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pm">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>Resource Planning</li>
                                                <li>Cost Modeling</li>
                                                <li>Project Status and Risk, Assumptions, Actions, Issues, Dependencies, and Decisions (RA2ID2) Log Tracking</li>
                                                <li>Integrated Master Schedule</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/MC_PM.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="scp">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>Organizational Assessments</li>
                                                <li>Capability Modeling</li>
                                                <li>Innovation</li>
                                                <li>Organization Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/MC_Strat_Cap Planning.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tr">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>Instructional Design</li>
                                                <li>Training Delivery</li>
                                                <li>Technology Adoption and Coaching</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/MC_Training.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane fade" id="pi">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <ul>
                                                <li>Business process reengineering (BPR)</li>
                                                <li>Performance measurement</li>
                                                <li>Optimization</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/MC_Process Improvement.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>