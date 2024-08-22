<div class="col-lg-8">
    <?php

    // use options-panel feature
    $home_posts_count = clab_get_general_option('home_posts_count');
    if (intval($home_posts_count) > 0) {
        query_posts(['posts_per_page' => intval($home_posts_count)]);
    }
    //
    $show_category = clab_get_posts_option('show_category');
    $show_excerpt = clab_get_posts_option('show_excerpt');
    ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

            <div class="blog-post">
                <a href="#"><img class="rounded mb-lg-5 mb-4" src="<?php echo CLAB_URL; ?>assets/img/blog/b1.jpg" alt="card image"/></a>
                <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="meta font-lora my-4">
                    <?php if($show_category): ?>
                    <a href="#">سفر کردن</a>
                    <?php endif; ?>
                    <span class="meta-separator"></span>
                    <a href="#">1398 فروردین</a>
                </div>
                <?php if($show_excerpt): ?>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <!--pagination-->
    <div class="pagination justify-content-center mb-4">
        <a href="#" class="btn btn-dark disabled"><i class="fa fa-angle-left"></i></a>
        <div class="h6 mt-2 mx-4">
            1 از 17
        </div>
        <a href="#" class="btn btn-dark"><i class="fa fa-angle-right"></i></a>
    </div>

</div>
