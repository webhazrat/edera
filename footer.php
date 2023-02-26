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

    <!-- <div class="floating-in">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73" height="73" viewBox="0 0 73 73"> 
                <g id="Component_54_12" data-name="Component 54 – 12" transform="translate(9 4)">
                    <g id="Group_2955" data-name="Group 2955" transform="translate(-8212 -3721)">
                    <g transform="matrix(1, 0, 0, 1, 8203, 3717)" filter="url(#Rectangle_1511)">
                        <rect id="Rectangle_1511-2" data-name="Rectangle 1511" width="55" height="55" rx="9" transform="translate(9 4)" fill="#fff"/>
                    </g>
                    <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M51.071,2.25H3.916A3.946,3.946,0,0,0,0,6.215V53.285A3.946,3.946,0,0,0,3.916,57.25H51.071A3.956,3.956,0,0,0,55,53.285V6.215A3.956,3.956,0,0,0,51.071,2.25ZM16.623,49.393H8.471V23.145h8.164V49.393ZM12.547,19.56a4.727,4.727,0,1,1,4.727-4.727A4.729,4.729,0,0,1,12.547,19.56ZM47.18,49.393H39.028V36.625c0-3.045-.061-6.961-4.235-6.961-4.248,0-4.9,3.315-4.9,6.74V49.393H21.742V23.145h7.82V26.73h.11A8.586,8.586,0,0,1,37.4,22.494c8.25,0,9.785,5.439,9.785,12.51Z" transform="translate(8212 3718.75)" fill="#0072b6"/>
                    </g>
                </g>
            </svg>
        </a>
    </div> -->
    
    <?php wp_footer(); ?>
</body>

</html>