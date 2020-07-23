<?php ?>
<article <?php post_class(); ?>>

    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <h2><?php the_title(); ?></h2>

    <div class="team-member-postion">
        <?php the_field('team_member_position'); ?>
    </div>

    <div class="team-member-description">
        <?php the_field('team_member_description'); ?>
    </div>

</article>