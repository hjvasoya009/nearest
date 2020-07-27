<?php

get_header();

if (is_post_type_archive('team_member')) {
?>; <h1>Team Nearest</h1><?php
                        }
                        if (have_posts()) :

                            while (have_posts()) :
                                the_post();

                                if (is_post_type_archive('team_member')) :
                                    get_template_part('template-parts/content-team-member');
                                else :
                                    get_template_part('template-parts/content');
                                endif;

                            endwhile;

                        else :
                            get_template_part('template-parts/content-none.php');

                        endif;

                        get_footer();
