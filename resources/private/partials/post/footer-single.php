<?php
/**
* Output of an individual post.
*/
global $post;

?>

<footer class="post-footer"><?php

if ('post' === get_post_type()) {
    $author_avatar_size = apply_filters('wordpress_theme_author_avatar_size', 48);
    printf(
        '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>',
        get_avatar(get_the_author_meta('user_email'), $author_avatar_size),
        _x('Author', 'Used before post author name.', 'wordpress_theme'),
        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
        get_the_author()
    );
}

if (in_array(get_post_type(), array('post', 'attachment'))) {
    printf(
        '<time class="post-published" datetime="%1$s">%2$s</time>',
        get_the_date('c'),
        sprintf(
            __('Published on %1$s at %2$s', 'wordpress_theme'),
            get_the_date(),
            get_the_time()
        )
    );
}

if ('post' === get_post_type()) {
    $categories_list = get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'wordpress_theme'));
    if ($categories_list && count($categories_list) > 1) {
        printf(
            '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
            _x('Categories', 'Used before category names.', 'wordpress_theme'),
            $categories_list
        );
    }

    $tags_list = get_the_tag_list('', _x(', ', 'Used between list items, there is a space after the comma.', 'wordpress_theme'));
    if ($tags_list && count($tags_list) > 1) {
        printf(
            '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
            _x('Tags', 'Used before tag names.', 'wordpress_theme'),
            $tags_list
        );
    }
}

if (!is_singular() && !post_password_required() && (comments_open() || get_comments_number())) {
    echo '<span class="comments-link">';
    comments_popup_link(sprintf(
        __('Leave a comment<span class="screen-reader-text"> on %s</span>', 'wordpress_theme'),
        get_the_title()
    ));
    echo '</span>';
}

?></footer>
