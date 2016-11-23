<?php
/**
 * This file links the class file for the Theme and through it, any additional classes.
 * Functions should be added to the Theme Class, except for unusual circumstances.
 *
 *
 * @since v1.0
 */

/**
 * This Theme base code is intended for use in WordPress 4.6 or newer.
 */
if (version_compare($GLOBALS['wp_version'], '4.6-alpha', '<')) {
    require get_template_directory().'/Classes/Utilities/BackCompat.php';
} else {
    require_once 'Classes/Theme.php';

    /**
     * $content_width is an icky WordPress requirement, which constrains images and oEmbeds
     * which may appear in the main content column. See https://codex.wordpress.org/Content_Width
     * for full details.
     *
     * Customize this value for your website. (Probably referencing the max.
     * width of the main content column at desktop resolution.)
     *
     * @var int
     */
    $content_width = 600;
}
