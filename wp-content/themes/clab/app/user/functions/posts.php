<?php
function get_related_posts($category_id, $count = -1)
{
    $related_posts_collection = [];
    $related_posts = new WP_Query([
        'cat' => $category_id,
        'posts_per_page' => $count
    ]);

    if ($related_posts->have_posts()):
        while ($related_posts->have_posts()): $related_posts->the_post();
            $related_posts_collection[] = [
                'title' => get_the_title(),
                'category' => get_the_category(),
                'thumbnail' => get_the_post_thumbnail(),
                'link' => get_the_permalink(),
                'exceprt' => get_the_excerpt(),
                'author' => get_the_author_meta('display_name'),
                'avatar' => get_avatar_url(get_the_author_meta( 'ID' )),
            ];
        endwhile;
    endif;

    return $related_posts_collection;
}