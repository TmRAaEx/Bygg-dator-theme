<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        const gtm_id = 'GTM-5S7N84N7';  //wp-config is inside docker so just put this here
        (function (window, document, scriptTag, dataLayerName, gtmId) {
            window[dataLayerName] = window[dataLayerName] || [];
            window[dataLayerName].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });

            var firstScript = document.getElementsByTagName(scriptTag)[0];
            var gtmScript = document.createElement(scriptTag);
            var dlParam = dataLayerName !== 'dataLayer' ? '&l=' + dataLayerName : '';

            gtmScript.async = true;
            gtmScript.src = 'https://www.googletagmanager.com/gtm.js?id=' + gtmId + dlParam;

            firstScript.parentNode.insertBefore(gtmScript, firstScript);

        })(window, document, 'script', 'dataLayer', gtm_id);
    </script>
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