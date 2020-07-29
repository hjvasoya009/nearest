<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        if (is_home() || is_single()) {
            get_template_part('template-parts/content-blog-post');
        } else {
            get_template_part('template-parts/content');
        }
        
    }
} else {
    get_template_part('template-parts/content-none.php');
}

get_footer();
