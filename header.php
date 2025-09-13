<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5S7N84N7');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bygg Dator</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <a href="<?php echo home_url('/'); ?>" class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-logo.png"
                alt="logotyp med länk till hem">
        </a>

        <?php
        wp_nav_menu([
            'theme_location' => 'top-menu',
            'container' => 'nav',
            'container_class' => 'top-menu',
            'menu_class' => '',
            'fallback_cb' => false
        ]); ?>


    </header>

    <section class="site-content">