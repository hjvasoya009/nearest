<?php

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content');
    endwhile;
else :
    get_template_part('template-parts/content-none.php');
endif;

get_footer();

// test