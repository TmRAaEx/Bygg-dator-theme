<?php
defined('ABSPATH') || exit;

global $product;

$image_url = $product->get_image_id() ? wp_get_attachment_url($product->get_image_id()) : wc_placeholder_img_src();
?>
<div class="center-content">
    <div class="product-wrapper">
        <h1 class="product-title">
            <?php the_title(); ?>
        </h1>
        <div class="product-content">
            <img src="<?php echo $image_url ?>" alt="<?php the_title() ?>" class="product-img">


            <div class="product-interact">

                <?php
                the_excerpt();
                ?>

                <p class="product-category-wrapper">Kategori:
                    <?php echo wc_get_product_category_list($product->get_id(), ', ', '<span class="product-categories">', '</span>'); ?>
                </p>

                <p class="product-price"><?php echo $product->get_price(); ?> kr</p>

                <?php
                woocommerce_template_single_add_to_cart();
                ?>
            </div>
        </div>

        <?php
        woocommerce_output_product_data_tabs();
        ?>
        <?php
        woocommerce_output_related_products(); ?>

    </div>
</div>