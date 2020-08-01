<?php
get_header();

if (have_posts()) {
    if (is_home()) {
?>
        <h2 class="blogpage-pagetitle">Blog Articles</h2>

        <div class="blog-posts">

        <?php
    } else if (is_search()) {
        ?>
            <h2 class="blogpage-pagetitle"><?php _e('Search Results:', 'locale'); ?> <?php the_search_query(); ?></h2>

            <div class="blog-posts">

            <?php
        }
        while (have_posts()) {
            the_post();
            if (is_home() || is_single() || is_search()) {
                get_template_part('template-parts/content-blog-post');
            } else {
                get_template_part('template-parts/content');
            }
        }
        if (is_home()) {
            ?>
            </div>
    <?php
        }
    } else {
        get_template_part('template-parts/content-none.php');
    }

    get_footer();
