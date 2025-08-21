<div class="product-hero">
    <?php echo woocommerce_get_product_thumbnail(); ?>
</div>

<div class="product-info">
    <h1><?php the_title(); ?></h1>
    <?php woocommerce_template_single_price(); ?>
    <?php woocommerce_template_single_add_to_cart(); ?>
    <?php the_excerpt(); ?>
</div>

<div class="product-tabs">
    <?php woocommerce_output_product_data_tabs(); ?>
</div>

<div class="related-products">
    <?php woocommerce_output_related_products(); ?>
</div>