<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<?php
if (is_page( 'Contact' )) {
    $class = 'contact-page';
} else {
    $class = '';
}
?>

<body <?php body_class($class); ?>>
    <header class="site-header-wrapper">
        <div class="site-header">
            <div class="site-branding">

                <?php the_custom_logo(); ?>

                <h1 class="site-title">
                    <a href="<?php home_url('/'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>

                <div class="site-description">
                    <?php bloginfo('description'); ?>
                </div>

            </div> <!-- .site-branding -->

            <div class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location'    =>  'menu-primary',
                    'container'         =>  'nav',
                    'container_class'   =>  'primary-menu',
                    'menu_class'        =>  'header-menu'
                ));
                ?>
            </div>
        </div>
    </header>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">