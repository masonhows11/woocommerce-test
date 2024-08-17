<?php get_header('shop'); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <!--  To display cart items use the_content() method  -->
        <?php the_content(); ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>


