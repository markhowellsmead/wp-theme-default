<?php
/**
 * The single post template file.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */
get_header();

the_post();

get_template_part('resources/private/partials/post/content', 'single');

get_footer();
