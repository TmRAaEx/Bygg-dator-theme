<?php get_header(); ?>




<div id="hero" class="center-content">
    <h1>Welcome to my shop!</h1>
</div>

<div class="center-content">
    <div class="content">
        <?php
        $products = wc_get_products([
            'limit' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
        ?>

        <section class="popular-products">
            <h2><?php echo __('Senaste Produkter!', 'pc-builds'); ?></h2>

            <?php if (!empty($products)): ?>
                <ul class="pc_builds-list">
                    <?php foreach ($products as $product): ?>
                        <li class="pc_build-card">
                            <a href="<?php echo esc_url(get_permalink($product->get_id())); ?>">
                                <p class="pc_build-card-title"><?php echo esc_html($product->get_name()); ?></p>

                                <div class="pc_build-card_image">
                                    <?php echo $product->get_image('medium'); ?>
                                </div>

                                <p class="pc_build-card_price"><?php echo $product->get_price_html(); ?></p>
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
                <ul class="pc_builds-list">
                    <?php while ($pc_builds->have_posts()):
                        $pc_builds->the_post(); ?>

                        <li class="pc_build-card">
                            <a href="<?php the_permalink(); ?>">
                                <p class="pc_build-card-title"><?php the_title() ?></>
                                    <div class="pc_build-card_image">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php echo the_post_thumbnail_url() ?>"
                                                alt="Bild på pc-build<?php the_title() ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <p class="pc_build-card_author"><?php the_author() ?></p>
                            </a>
                        </li>

                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </section>

    </div>
</div>
<?php get_footer(); ?>