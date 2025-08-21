<?php
defined('ABSPATH') || exit;

global $product; // WooCommerce product object

// Produkt titel
the_title('<h1 class="product-title">', '</h1>');

// Produkt image
echo woocommerce_get_product_thumbnail(); // main image

// Pris
echo $product->get_price_html();

// Add to cart
woocommerce_template_single_add_to_cart();

// Short description
the_excerpt();

// Tabs (beskrivning, reviews)
woocommerce_output_product_data_tabs();

// Relaterade produkter
woocommerce_output_related_products();
