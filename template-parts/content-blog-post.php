<?php ?>
<article <?php post_class(); ?>>

    <div class="article-thumbnail">
        <?php
        if (!is_single()) {
        ?>
            <a href="<?php the_permalink(); ?>" class="article-post-thumbnail"><?php the_post_thumbnail(); ?></a>
        <?php
        } else {
            the_post_thumbnail();
        }
        ?>
    </div>

    <div class="article-content">
        <?php
        if (!is_single()) {
        ?>
            <h2 class="article-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); echo do_shortcode('[addtoany]'); ?>

        <?php
        } else {
        ?>
            <?php the_title('<h2 class="article-title">', '</h2>'); ?>

            <div class="article-excerpt">
                <?php the_content(); ?>
            </div>
        <?php
        }
        ?>
    </div>

</article>