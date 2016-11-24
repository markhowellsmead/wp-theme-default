<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('Resources/Private/Partials/Post/Content', 'loop');
    }
} else {
    get_template_part('Resources/Private/Partials/Post/Content', 'none');
}
