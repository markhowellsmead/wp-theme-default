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
 * The code in this file does not use PHP namespaces, so that it can catch any problems
 * in old server environments too.
 *
 * The definition, whether this code should be run or not, is in functions.php.
 */

/**
 * Prevent switching to this theme on old versions of WordPress.
 *
 * Switches to the default theme.
 */
function THEME_KEY_switch_theme()
{
    switch_theme(WP_DEFAULT_THEME, WP_DEFAULT_THEME); // These are PHP constants and do not need to be changed.

    unset($_GET['activated']);

    add_action('admin_notices', 'THEME_KEY_upgrade_notice');
}
add_action('after_switch_theme', 'THEME_KEY_switch_theme');

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * this Theme on WordPress versions prior to 4.6.
 *
 *  @global string $wp_version WordPress version.
 */
function THEME_KEY_upgrade_notice()
{
    $message = sprintf(
        __('The selected theme requires at least WordPress version %1$s and PHP version %2$s. You are running WordPress %3$s and PHP version %4$s. Please upgrade and try again.', 'TEXT_DOMAIN'),
        '4.6',
        '5.3',
        $GLOBALS['wp_version'],
        PHP_VERSION
    );
    printf('<div class="error"><p>%s</p></div>', $message);
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.6.
 *
 * @global string $wp_version WordPress version.
 */
function THEME_KEY_customize()
{
    wp_die(sprintf(
        __('The selected theme requires at least WordPress version %1$s and PHP version %2$s. You are running WordPress %3$s and PHP version %4$s. Please upgrade and try again.', 'TEXT_DOMAIN'),
        '4.6',
        '5.3',
        $GLOBALS['wp_version'],
        PHP_VERSION
    ), '', array(
        'back_link' => true,
    ));
}
add_action('load-customize.php', 'THEME_KEY_customize');

/**
 * Prevents the theme preview from being loaded on WordPress versions prior to 4.6.
 *
 * @global string $wp_version WordPress version.
 */
function THEME_KEY_preview()
{
    if (isset($_GET['preview'])) {
        wp_die(sprintf(
            __('The selected theme requires at least WordPress version %1$s and PHP version %2$s. You are running WordPress %3$s and PHP version %4$s. Please upgrade and try again.', 'TEXT_DOMAIN'),
            '4.6',
            '5.3',
            $GLOBALS['wp_version'],
            PHP_VERSION
        ));
    }
}
add_action('template_redirect', 'THEME_KEY_preview');
