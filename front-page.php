<?php get_header(); ?>



<div id="hero" class="center-content">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Banner">
</div>

<div class="center-content">
    <div class="content">
        <?php
        $placeholder = wc_placeholder_img_src();

        $products = wc_get_products([
            'limit' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
        ?>

        <section class="popular-products">
            <h2><?php echo __('Senaste Produkter!', 'pc-builds'); ?></h2>

            <?php if (!empty($products)): ?>
                <ul class="grid-list">
                    <?php foreach ($products as $product): ?>
                        <li class="card product-card">
                            <a href="<?php echo esc_url(get_permalink($product->get_id())); ?>">
                                <p class="card-title"><?php echo esc_html($product->get_name()); ?></p>
                                <div class="card-image">
                                    <?php echo $product->get_image('medium') ?: '<img src="' . esc_url($placeholder) . '" alt="Ingen bild">'; ?>
                                </div>
                                <p class="card-meta"><?php echo $product->get_price_html(); ?></p>
                            </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>


        <section class="popular-pc_builds">
            <h2><?php echo __('Senaste builds!', 'pc-builds') ?></h2>
            <?php $args = [
                'post_type' => 'pc-build',
                'post_per_page' => 5,
                'post_status' => 'publish'
            ];

            $pc_builds = new WP_Query($args);

            if ($pc_builds->have_posts()): ?>
                <ul class="grid-list">
                    <?php while ($pc_builds->have_posts()):
                        $pc_builds->the_post(); ?>

                        <li class="card pc_build-card">
                            <a href="<?php the_permalink(); ?>">
                                <p class="card-title"><?php the_title(); ?></p>
                                <div class="card-image">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url($placeholder); ?>" alt="Ingen bild" />
                                    <?php endif; ?>
                                </div>
                                <p class="card-meta"><?php the_author(); ?></p>
                            </a>
                        </li>


                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </section>

    </div>
</div>
<?php get_footer(); ?>