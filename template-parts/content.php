<?php ?>
<!-- <section <?php post_class(); ?>> -->
<?php
if (has_post_thumbnail()) {
?>
    <div class="section-content home-detail" style="background-image: linear-gradient(90deg, rgba(108,176,171,0.8), rgba(83,98,147,0.8)), url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <?php the_content(); ?>
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
<!-- </section> -->