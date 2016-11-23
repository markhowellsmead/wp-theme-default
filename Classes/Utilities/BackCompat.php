<?php
/**
 * Backwards compatability functionality.
 *
 * Based on code from the Twenty Sixteen Theme.
 *
 * Prevents this Theme from running on WordPress versions prior to 4.6,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.6.
 *
 * This code does not use PHP namespaces, so that it can catch any problems
 * in old server environments too.
 *
 * @since v0.0.1
 */

/**
 * Prevent switching to this Theme on old versions of WordPress.
 *
 * Switches to the default theme.
 */
function wordpress_theme_switch_theme()
{
    switch_theme(WP_DEFAULT_THEME, WP_DEFAULT_THEME);

    unset($_GET['activated']);

    add_action('admin_notices', 'wordpress_theme_upgrade_notice');
}
add_action('after_switch_theme', 'wordpress_theme_switch_theme');

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * this Theme on WordPress versions prior to 4.6.
 *
 *  @global string $wp_version WordPress version.
 */
function wordpress_theme_upgrade_notice()
{
    $message = sprintf(__('The selected Theme requires at least WordPress version 4.6. You are running version %s. Please upgrade and try again.', 'wordpress_theme'), $GLOBALS['wp_version']);
    printf('<div class="error"><p>%s</p></div>', $message);
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.6.
 *
 * @global string $wp_version WordPress version.
 */
function wordpress_theme_customize()
{
    wp_die(sprintf(__('The selected Theme requires at least WordPress version 4.6. You are running version %s. Please upgrade and try again.', 'wordpress_theme'), $GLOBALS['wp_version']), '', array(
        'back_link' => true,
    ));
}
add_action('load-customize.php', 'wordpress_theme_customize');

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.6.
 *
 * @global string $wp_version WordPress version.
 */
function wordpress_theme_preview()
{
    if (isset($_GET['preview'])) {
        wp_die(sprintf(__('The selected Theme requires at least WordPress version 4.6. You are running version %s. Please upgrade and try again.', 'wordpress_theme'), $GLOBALS['wp_version']));
    }
}
add_action('template_redirect', 'wordpress_theme_preview');
