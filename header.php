<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dasgongbad
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=“facebook-domain-verification” content=“5mqfi39kktdceythffakrkf059eiic” />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name=”facebook-domain-verification” content=”5mqfi39kktdceythffakrkf059eiic” />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="nav-down header">
        <div class="container">
            <div class="row">

                <!-- <a class="navbar-brand" href="#">Book a 1-1 Gong Bath</a> -->
                <?php if (pll_current_language() == 'en') {  ?>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>/en/">
                    <?php } else { ?>

                        <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <?php

                    } ?>
                        <?php

                        $custom_logo_id = get_theme_mod('custom_logo');
                        // Get the image source array
                        $logo_array = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if (has_custom_logo() && $logo_array) {
                            // Use the first element of the array ($logo_array[0]) for the URL
                            echo '<img src="' . esc_url($logo_array[0]) . '" alt="' . get_bloginfo('name') . '" width="70%">';
                        } else {
                            // Call pll_e() by itself without echo
                            pll_e('Book a 1-1 Session');
                        }

                        ?>
                        </a>
                    </a>
                    <div class="cpm-header-right">
                        <div class="header-page-title primary-menu-wrapper">

                            <?php
                            wp_nav_menu(array(
                                'menu'            => 'primary',
                                'theme_location'  => 'menu-1',
                                'container'       => 'ul',
                                'menu_id'         => false,
                                'depth'           => 0,

                            ));
                            ?>

                        </div>
                        <div id="language_menu" class="secondary-menu">


                            <?php
                            wp_nav_menu(array(
                                'menu'            => 'secondary',
                                'theme_location'  => 'menu-2',
                                //'container'       => 'ul',
                                'menu_id'         => false,
                                'depth'           => 0,

                            ));
                            ?>
                        </div>
                        <a id="right-menu" href="#sidr">
                            <div class="menu-wrapper">
                                <div class="hamburger-menu"></div>
                            </div>
                        </a>
                    </div>



            </div>
        </div>
    </header>
    <div id="sidr">
        <?php
        wp_nav_menu(array(
            'menu'            => 'primary',
            'theme_location'  => 'menu-1',
            //'container'       => 'ul',
            'menu_id'         => false,
            'depth'           => 0,

        ));
        ?>
    </div>
    <div class="sidr-wrap">