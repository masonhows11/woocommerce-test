<hr>
<div class="component-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-3 text-md-center">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 28,null,null,[
                            'class' => 'avatar-lg rounded-circle mb-3 d-inline-block'
                        ]); ?>
<!--                        <img class="avatar-lg rounded-circle mb-3 d-inline-block" src="--><?php //echo CLAB_URL; ?><!--assets/img/team/t-3.jpg" alt="توماس جانسون">-->
                    </div>
                    <div class="col-md-9">
                        <h5 class="font-lora font-weight-normal mb-4">
                            <?php the_author_meta('description'); ?>
                          </h5>
                        <div class="border-left mb-3"> &nbsp;</div>
                        <strong class="text-primary"><?php the_author_meta('display_name'); ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
