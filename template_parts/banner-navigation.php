<div class="banner-navigation py-2" style="background-color: #f2f2f2;">
    <div class="container">
        <div class="banner-navigation-content">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar2">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar2">
                    <?php 
                        wp_nav_menu(array(
                            'menu_class' => 'navbar-nav gap-4',
                            'container' => 'ul',
                            'theme_location' => 'menu3',
                            'fallback_cb' => '__return_false',
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                </div>
            </nav>
            <div class="insight-search-area">
                <form action="">
                    <div class="control-icon">
                        <input type="search" name="searchText" id="searchText">
                        <button type="submit" id="insightSearchBtn"><i class="bi bi-search"></i></button>
                        <button type="button" id="insightSearchClose"><i class="bi bi-x"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>