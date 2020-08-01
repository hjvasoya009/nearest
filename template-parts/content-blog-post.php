<?php ?>
<article <?php post_class(); ?>>

    <div class="article-thumbnail">
        <?php
        if (!is_single()) {
        ?>
            <a href="<?php the_permalink(); ?>" class="article-post-thumbnail"><?php the_post_thumbnail(); ?></a>
        <?php
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

            <div class="likeshare-blog">
                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]');
                echo do_shortcode('[addtoany]'); ?>
            </div>

        <?php
        } else {
        ?>
            <?php the_title('<h2 class="single-article-title">', '</h2>'); ?>

            <div class="author-date">
                <div class="article-author"> by <?php the_author(); ?></div>
                <div class="article-date"><?php the_date(); ?></div>
            </div>

            <!-- <?php the_post_thumbnail(); ?> -->
            <div class="article-excerpt">
                <?php the_content(); ?>
            </div>

            <div class="likeshare-single-blog">
                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]');
                echo do_shortcode('[addtoany]'); ?>
            </div>

        <?php
        }
        ?>
    </div>

</article>