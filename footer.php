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
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-3">
        <div class="container">
            <div class="d-flex justify-content-center gap-3">
                <?php echo get_theme_mod('copyright'); ?>
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