<?php ?>
<section <?php post_class(); ?>>
    <?php
    if (has_post_thumbnail()) {
    ?>
        <div class="home-detail" style="background-image: linear-gradient(90deg, rgba(108,176,171,0.8), rgba(83,98,147,0.8)), url('<?php echo get_the_post_thumbnail_url(); ?>');">

            <div class="section-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="section-content">
            <?php the_content(); ?>
        </div>
    <?php
    }
    ?>
</section>

<!-- linear-gradient(to right bottom, #f16f3b73, #732a1085), url(../img/goal.jpg) #6cb0ab, #536293) -->