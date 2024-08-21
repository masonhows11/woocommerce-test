<?php
// define const
define('CLAB_URL', get_template_directory_uri().'/');
define('CLAB_PATH', get_template_directory().DIRECTORY_SEPARATOR);
const CLAB_APP = CLAB_PATH . 'app' . DIRECTORY_SEPARATOR ;
const CLAB_ASSETS_URL = CLAB_URL . 'assets';
//
add_action('after_setup_theme','clab_setup');

if(!function_exists('clab_setup')){
    function clab_setup(){

        // add title
        add_theme_support('title-tag');
        // is current  theme support woocommerce plugin
        add_theme_support('woocommerce');
        // add custom image size
        add_image_size('blog-index-thumbnail-size', 730, 432);
        // register nav menu location
        register_nav_menu('top', 'WP Custom Top Menu');
        // register_nav_menu( 'top menu', 'Top menu');


    }
}

function register_clab_blog_sidebar(){

    //register sidebars
    register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'clab-blog-sidebar',    // ID should be LOWERCASE  ! ! !
        'description'   => 'a sidebar for theme home page',
        'class'         => '',
        'before_widget' => '<div class="blog-widget mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => ' <h6 class="mb-4">',
        'after_title'   => '</h6>'
    ]);
}

add_action('widgets_init', 'register_clab_blog_sidebar');

// hide admin bar in front
add_filter('show_admin_bar','__return_false');

function calb_comment($comment, $args, $depth)
{

    ?>
    <li class="comment ">
        <article class="comment-body">
            <footer class="comment-meta">
                <div class="comment-author ">
                    <?php echo get_avatar($comment, '128');  ?>
                    <?php printf(__('<b class="fn">%s</b> <span class="says">says:</span>'), get_comment_author_link()); ?>
                </div><!-- .comment-author -->

                <div class="comment-metadata">
                    <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                        <?php
                        /* translators: 1: date, 2: time */
                        printf(
                            __('%1$s'),
                            get_comment_date('l,Y,m')
                        ); ?>
                    </a>
                </div><!-- .comment-metadata -->

            </footer><!-- .comment-meta -->

            <div class="comment-content">
                <?php comment_text(); ?>
            </div><!-- .comment-content -->

            <div class="reply">
                <?php
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => 'comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth']
                        )
                    )
                ); ?>
            </div>
        </article><!-- .comment-body -->
    </li><!-- #comment-## -->
    <?php

}
// to active comments for products
add_filter( 'comments_open', 'woocommerce_ir_force_enable_reviews', 9999, 2 );
function woocommerce_ir_force_enable_reviews( $enable, $post_id ) {
   if ( 'product' === get_post_type( $post_id ) ) {
      $enable = true;
   }
   return $enable;
}

if(is_admin()){
    include CLAB_APP . 'admin/admin.php';
    include CLAB_PATH . 'options-panel/index.php';
}
include CLAB_APP .'user/user.php';
include CLAB_PATH .'wc-customize.php';
