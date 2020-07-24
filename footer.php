<?php ?>

</main> <!-- .site-main -->
</div> <!-- .content-area -->

<footer class="site-footer" id="site-footer">
    <?php
    $themeInfo = wp_get_theme();
    ?>
    <span>developed by <a href="<?= $themeInfo->get('Author URI') ?>" class="theme-author"><?= $themeInfo->get('Author') ?></a>. </span>
</footer>
<?php wp_footer(); ?>
</body>

</html>