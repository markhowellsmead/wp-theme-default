<header class="post-header">
<?php

    the_title(sprintf('<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');

    printf(
        '<time class="post-published" datetime="%1$s">%2$s</time>',
        get_the_date('c'),
        sprintf(
            __('%1$s at %2$s', 'wordpress_theme'),
            get_the_date(),
            get_the_time()
        )
    );
?>
</header>
