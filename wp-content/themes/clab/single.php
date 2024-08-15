<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

        <?php get_template_part('tpls/blog/single-header') ?>
        <?php get_template_part('tpls/blog/single-content') ?>
        <?php get_template_part('tpls/blog/single-author') ?>


    <?php endwhile; ?>
<?php endif; ?>

<?php comments_template(); ?>
<?php get_template_part('tpls/blog/single-related-posts') ?>
<?php get_footer(); ?>

