<?php 
    get_header();
    global $wp_query;
?>

<div class="page-content py-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/attachment/Kaleidescope Pattern.svg');">
    <div class="container">
        <div class="search-area">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="pb-5">
                <div class="search-input">
                    <i class="bi bi-search"></i>
                    <input type="search" name="s" class="form-control" placeholder="Search..." value="<?php the_search_query(); ?>">
                </div>
            </form>
            <div class="search-result-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="search-header">
                            <h2 class="section-header">Results for "<?php the_search_query(); ?>"</h2>
                            <div class="text-end mb-2">
                                <?php  
                                    if(have_posts()) :
                                        $paged = get_query_var('paged') ? get_query_var('paged') : 1; 
                                        $prev_posts = ($paged -1) * $wp_query->query_vars['posts_per_page'];
                                        $from = 1 + $prev_posts;
                                        $to = count($wp_query->posts) + $prev_posts;
                                        $of = $wp_query->found_posts;
                                ?>
                                    <span><?php echo $from .'-'. $to .' of '. $of .' results '; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                            if(have_posts()) :
                            while(have_posts()) : the_post();    
                        ?>

                        <div class="search-result-item">
                            <h3 class="sub-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 20, '.'); ?></p>
                            <div class="tags">
                                <span><?php echo get_the_date(); ?></span>
                                <?php if(has_tag()) :
                                    echo get_the_tag_list();
                                endif; ?>
                            </div>
                        </div>

                        <?php endwhile; ?>
                        

                        <div class="pagination-area mt-4">
                            <nav>
                                <?php bootstrap_pagination($wp_query->max_num_pages, $paged); ?>
                            </nav>
                        </div>
                        <?php else: ?>
                            <h3 class="no-result">No results please try another search</h3>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-4">
                        <div class="popular-searches">
                            <h4>Popular Searches</h4>
                            <ul>
                                <li><a href="?s=Search Web">Search Web</a></li>
                                <li> <a href="?s=Opportunities"> Opportunities</a></li>
                                <li> <a href="?s=GiveBack">GiveBack </a></li>
                                <li> <a href="?s=Events">Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>