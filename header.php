<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bygg Dator</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <a href="<?php echo home_url('/'); ?>" class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-logo.png" alt="logotyp med länk till hem">
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

    <div class="site-content">