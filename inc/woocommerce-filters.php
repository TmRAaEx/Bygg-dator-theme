<?php
add_action('after_setup_theme', function () {
    add_filter('woocommerce_product_tabs', function ($tabs) {
        // Ändra "Beskrivning"
        if (isset($tabs['description'])) {
            $tabs['description']['title'] = __('Beskrivning', 'textdomain');
        }

        // Ändra "Recensioner"
        if (isset($tabs['reviews'])) {
            $tabs['reviews']['title'] = __('Recensioner', 'textdomain');
        }

        if (isset($tabs['additional_information'])) {
            $tabs['additional_information']['title'] = __('Produkt information', 'textdomain');
        }

        return $tabs;
    }, 98);

    add_filter('woocommerce_product_description_heading', function () {
        return __('Tilverkarens beskrivning', 'textdomain');
    });
});
