<?php 
    /*
        Template Name: Creative
    */
    get_header();
?>

    <div class="banner page-banner">
        <div class="banner-item">
            <div class="container" style="height: 100%;">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="section-header">Creative</h2>
                            <p>Edera partners with clients to break down complex information to clearly communicate impact and drive action through compelling narratives and visuals. We create compelling narratives and visuals that break through the sea of communications and make it easy for the intended audience to understand the importance and take desired action. Our bring together multi-disciplinary teams of technical writers, editors, designers, quality assurance professionals, and creative strategists use a proven and repeatable process to accelerate creation of best-in-class content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <video autoplay="" muted="" loop="" id="video-banner">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/attachment/videos/Edera Header Design 1440 336_.m4v" type="video/mp4">
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#csid">Creative Strategy and Information Design <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#cgdb"> Custom Graphics, Design, and Branding <i class="bi bi-arrow-right"></i></button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#twe">Technical Writing & Editing <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="csid">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <p>We know that information must be communicated in a clear, consumable to drive the desired impact. Our Creative Team fuses design thinking with gorgeous graphics to transform complex data and information into attractive, persuasive visual stories that break through the noise of mass communications, empowering your audience to quickly understand the importance, meaning, and desired action.</p>
                                            <ul>
                                                <li>Visual storytelling and presentation design</li>
                                                <li>Infographics</li>
                                                <li>User-journey visualization</li>
                                                <li>Dashboard development</li>
                                                <li>Capability model visualization</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Creative_Data Vis.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cgdb">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <p>Our designers specialize in fusing form with function. We create compelling designs and collateral that capture audience attention and aligns and elevates your existing branding..</p>
                                            <ul>
                                                <li>Digital, web and mobile</li>
                                                <li>User experience (UX)/user interface (UI)</li>
                                                <li>Art direction, layout design and 508 compliance</li>
                                                <li>Marketing, social media, and events</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Creative_CustomGraphics_Design.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="twe">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="phase-tab-text">
                                            <p>Our approach to technical writing and editing focuses on our client’s success throughout the creative process, allowing us to deliver professional, easily consumable content that resonates with audiences.</p>
                                            <ul>
                                                <li>Professional, technically proficient writing</li>
                                                <li>Clean and error-free written materials</li>
                                                <li>Style guide and federal 508 compliance</li>
                                                <li>Clear and concise messaging</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/Creative_Tech Writing and Editing.jpeg" alt="">
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