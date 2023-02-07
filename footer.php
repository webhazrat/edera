<div class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_first_column'); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_second_column'); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_third_column'); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_fourth_column'); ?>
                    <!-- <div class="footer-item">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="#">Edera L3C</a></li>
                            <li><a href="#">1730 Pennsylvania Avenue NW | Suite 875, Washington, DC 20006</a></li>
                            <li><a href="mailto:info@edera.com">info@edera.com</a></li>
                            <li><a href="#">202.888.8404</a></li>
                        </ul>
                        <ul class="social-links">
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/linkedin-logo.svg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/gsa-logo.svg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/attachment/hubzone-logo.svg" alt=""></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-3">
        <div class="container">
            <div class="d-flex justify-content-center gap-3">
                &copy; 2023 | Edera L3C
                <?php 
                    wp_nav_menu(array(
                        'menu_class' => 'copyright-navigation',
                        'container' => 'ul',
                        'theme_location' => 'menu4',
                        'fallback_cb' => '__return_false'
                    ));
                ?>
            </div>
        </div>
    </div>
    
    <?php wp_footer(); ?>
</body>

</html>