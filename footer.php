<?php ?>

</main> <!-- .site-main -->
</div> <!-- .content-area -->

<footer class="site-footer" id="site-footer">
    <?php

    wp_nav_menu(array(
        'theme_location'    =>  'menu-footer',
        'container'         =>  'nav',
        'container_class'   =>  'footer-menu-nav',
        'menu_class'        =>  'footer-menu'
    ));

    $themeInfo = wp_get_theme();
    ?>
    <span>developed by <a href="<?= $themeInfo->get('Author URI') ?>" class="theme-author"><?= $themeInfo->get('Author') ?></a>. </span>
</footer>
<?php wp_footer(); ?>
</body>

</html>