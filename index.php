<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display content when nothing more specific matches a query.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @since v0.0.1
 */
get_header();

get_template_part('Resources/Private/Partials/Post/Loop');

get_footer();
