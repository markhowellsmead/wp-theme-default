<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('resources/private/partials/post/content', 'loop'); // Falls back to content.php if content-loop.php isn't available
    }
} else {
    get_template_part('resources/private/partials/post/content', 'none');
}
