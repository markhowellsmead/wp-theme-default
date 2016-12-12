<?php
/**
 * The template parts linked in this file are named specifically. There is no fallback.
 * This is to avoid an infinite loop.
 *
 * If we were to use the function get_template_part() with two parameters and the
 * requested template part wasn't available, then it would fall back to the file you're
 * currently reading. Which would then try to include itself over and over again.
 */
if (have_posts()) {
    if (is_category() || is_tag()) {
        $queried_object = get_queried_object();
        get_template_part('resources/private/partials/listheader-'.$queried_object->taxonomy);
    } elseif (is_year()) {
        get_template_part('resources/private/partials/listheader-year');
    } elseif (is_month()) {
        get_template_part('resources/private/partials/listheader-month');
    } elseif (is_day()) {
        get_template_part('resources/private/partials/listheader-day');
    } elseif (is_search()) {
        get_template_part('resources/private/partials/listheader-search');
    } elseif (is_author()) {
        get_template_part('resources/private/partials/listheader-author');
    }
}
