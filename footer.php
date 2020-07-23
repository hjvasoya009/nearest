<?php ?>

</main> <!-- .site-main -->
</div> <!-- .content-area -->

<footer class="site-footer" id="site-footer">
    <?php
    $themeInfo = wp_get_theme();
    ?>
    <small>Proudly powered by <a href="https://wordpress.org/">WordPress</a>. | Theme: <?= $themeInfo->get('Theme Name') ?> v<?= $themeInfo->get('Version') ?> developed by <a href="<?= $themeInfo->get('Author URI') ?>"><?= $themeInfo->get('Author') ?></a>. </small>
</footer>
<?php wp_footer(); ?>
</body>

</html>