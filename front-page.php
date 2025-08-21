<?php get_header(); ?>


<div id="hero" class="center-content">
    <h1>Welcome to my shop!</h1>
</div>





<div class="center-content">
    <div class="content">

        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>