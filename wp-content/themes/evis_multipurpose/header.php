<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!-- Banner -->
        <?php
            if (is_front_page()) :
                echo '<div class="banner" style="background: url('.cs_get_option('backgroundImage').') no-repeat 0px 0px;">';
                echo '<div class="website-description">
                        <h1>'.cs_get_option('siteDescription').'</h1>
                     </div>';
            else:
            endif;
        ?>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
                <a class="navbar-brand" href=""><?php echo cs_get_option('siteTitle') ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'Main',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'menu_class' => 'nav navbar-nav ml-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                ?>
            </nav>
        </header>
        <?php
            if (is_front_page()) :
                echo '</div>';
            else:
            endif;
        ?>
        <!-- End of Banner -->