<?php
get_header(); ?>

<div class="category-archive">

    <h1><?php single_cat_title(); ?></h1>

    <?php
    $terms = get_terms([
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
    ]);

    if (!empty($terms) && !is_wp_error($terms)):
        echo '<ul class="product-categories">';
        foreach ($terms as $term):
            $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
            $image = wp_get_attachment_url($thumbnail_id);
            ?>
            <li class="category-item">
                <a href="<?php echo get_term_link($term); ?>">
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($term->name); ?>">
                    <?php endif; ?>
                    <span><?php echo esc_html($term->name); ?></span>
                </a>
            </li>
            <?php
        endforeach;
        echo '</ul>';
    endif;
    ?>

</div>

<?php get_footer(); ?>