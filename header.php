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
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '374849710045968');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
            src="https://www.facebook.com/tr?id=553721675505659&ev=PageView
	&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="nav-down header">
        <div class="container">
            <div class="row">

                <!-- <a class="navbar-brand" href="#">Book a 1-1 Gong Bath</a> -->
                <?php if (pll_current_language() == 'en') {  ?>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>/1-1-session/">
                    <?php } else { ?>

                        <a class="navbar-brand" href="<?php echo site_url(); ?>/1-1-sitzung/">
                        <?php

                    } ?>
                        <?php

                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo  pll_e('Book a 1-1 Session');
                        }

                        ?>

                        </a>
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