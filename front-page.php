<?php
get_header();

wp_reset_query();  // Restore global post data

$args = array(
    'post_type'         =>  'page',
    'posts_per_page'    =>  '6',
    'orderby'           =>  'menu_order',
    'order'             =>  'ASC'
);

$my_query = new WP_Query($args);

if ($my_query->have_posts()) {
    while ($my_query->have_posts()) {
        $my_query->the_post();
        // $my_query->the_title();
        get_template_part('template-parts/content');
    }
} else {
    get_template_part('template-parts/content-none');
}


get_footer();
