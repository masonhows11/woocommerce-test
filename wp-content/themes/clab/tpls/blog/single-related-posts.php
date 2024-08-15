<?php
$cats = get_the_category();
$related_posts = get_related_posts($cats[0]->term_id, 3);
?>

<section class="section-gap bg-gray">
    <div class="container">
        <div class="row mb-lg-5 mb-4">
            <div class="col-md-8">
                <h5>پست های مشابه</h5>
            </div>
        </div>

        <div class="row justify-content-center">

            <?php foreach ($related_posts as $post): ?>
                <div class="col-md-4 mt-2">
                    <div class="card border-0 mb-md-0 mb-3 box-hover">
                        <a href="#">
                            <?php if (!empty($post['thumbnail'])): ?>
                                <img class="card-img-top" src="<?php echo $post['thumbnail']; ?>" alt="card image">
                            <?php else: ?>
                                <img class="card-img-top" src="<?php echo CLAB_URL; ?>'assets/img/cards/3a.jpg'"
                                     alt="card image">
                            <?php endif; ?>
                        </a>
                        <div class="card-body py-4">
                            <a href="<?php echo $post['link'] ?>"
                               class="mb-2 d-block"><?php echo $post['category'][0]->name ?></a>
                            <h5 class="mb-4"><a href="<?php echo $post['link'] ?>"><?php echo $post['title'] ?></a></h5>
                            <div class="mb-4">
                                <p><?php echo $post['exceprt'] ?></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <img class="avatar-sm rounded-circle mr-3" src="<?php echo $post['avatar']; ?>"
                                     alt="<?php echo $post['author'] ?>">
                                <span><?php echo $post['author'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>
<!--blog end-->
