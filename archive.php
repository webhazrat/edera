<?php get_header(); ?>

<div class="page-content py-5">
    <div class="container">
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

        <?php endwhile; else: ?>
            <h3 class="no-result">No results please try another tag</h3>
        <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>