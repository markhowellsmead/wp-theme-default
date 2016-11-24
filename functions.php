<?php
/**
 * This file links the class file for the Theme and through it, any additional classes.
 * Functions should be added to the Theme Class, except for unusual circumstances.
 */

/**
 * This Theme base code is intended for use in WordPress 4.6 or newer.
 */
if (version_compare($GLOBALS['wp_version'], '4.6-alpha', '<')) {
    require get_template_directory().'/Classes/Utilities/BackCompat.php';
} else {
    spl_autoload_register(function ($class_name) {
        if (false !== strpos($class_name, 'WordpressTheme')) {
            $classes_dir = realpath(plugin_dir_path(__FILE__)).DIRECTORY_SEPARATOR.'Classes'.DIRECTORY_SEPARATOR;
            $class_file = str_replace('MHM\WordpressTheme\\', DIRECTORY_SEPARATOR, $class_name).'.php';
            require_once $classes_dir.$class_file;
        }
    });

    new MHM\WordpressTheme\Theme();

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
