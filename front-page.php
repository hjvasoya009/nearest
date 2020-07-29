<?php
get_header();

$args = array(
    'post_type'         =>  'page',
    'posts_per_page'    =>  '7',
    'orderby'           =>  'menu_order',
    'order'             =>  'ASC'
);

$my_query = new WP_Query($args);

if ($my_query->have_posts()) {
    $countPost = 1;
    while ($my_query->have_posts()) {
        $my_query->the_post();
        // $my_query->the_title();
        if ($countPost == 6) {
            echo '<div class="section-content-wrap">';
        }
        get_template_part('template-parts/content');

        if ($countPost == 7) {
            echo '</div>';
        }
        $countPost++;
    }
} else {
    get_template_part('template-parts/content-none');
}

wp_reset_query();  // Restore global post data

get_footer();
