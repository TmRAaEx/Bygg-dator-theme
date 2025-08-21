<?php get_header(); ?>



<div class="center-content">
    <div class="content">

        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('post_image') ?>">
        <?php endif; ?>

        <h1><?php the_title(); ?></h1>

        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>