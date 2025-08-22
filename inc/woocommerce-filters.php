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

// add_action('woocommerce_after_add_to_cart_button', function () {
//     global $product;
//     echo '<a href="' . wc_get_cart_url() . '" class="button go-to-cart" style="margin-left: 1rem;">Gå till kundvagnen</a>';
// });

