<?php

namespace TOPLEVELNAMESPACE\THEMENAMESPACE;

class Theme
{
    use Taxonomy;

    public $themeoptions = array();
    public $version = '';
    public $themedata = array();

    /**
     * Debug helper function. You probably don't need this in a production-quality Theme.
     */
    public function dump($var, $die = false)
    {
        echo '<pre>'.print_r($var, 1).'</pre>';
        if ($die) {
            die();
        }
    }

    /**
     * This function will be run when the class is initialized.
     * Add your hook and filter references here.
     */
    public function __construct()
    {
        $this->themeoptions = get_option('themeoptions_TEXT_DOMAIN');
        $this->themedata = wp_get_theme();
        $this->version = $this->themedata->Version; // from style.css in the theme root folder

        /*
         * This removes the admin bar in the frontend. Delete this code
         * if you'd rather let logged-in users work with the admin bar.
         */
        add_filter('show_admin_bar', '__return_false');

        /*
         * Add default posts and comments RSS feed links to head.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Add the CSS files and JavaScripts for the website output.
         */
        add_action('wp_enqueue_scripts', array($this, 'addFrontendScripts'));
        add_action('wp_enqueue_scripts', array($this, 'addFrontendStyles'));
    }

    /**
     * Adds the CSS files to the frontend page header using wp_head.
     */
    public function addFrontendStyles()
    {
        wp_enqueue_style('css-reset', get_template_directory_uri().'/resources/public/css/css-reset.css', null, $this->version);
        wp_enqueue_style('theme', get_stylesheet_uri(), array('css-reset'), $this->version, 'all');
    }

    /**
     * Adds the JavaScript files to the frontend page header using wp_head.
     */
    public function addFrontendScripts()
    {
        // In header
        wp_enqueue_script('jquery'); // Use WordPress core version

        // In footer
        wp_enqueue_script('ui', get_template_directory_uri().'/resources/public/javascript/ui.js', array('jquery'), $this->version, true);
        wp_localize_script('ui', 'TEXT-DOMAIN-JS', array(
            'translations' => array(
                'Hello world' => __('Hello world', 'TEXT_DOMAIN'),
            ),
        ));
    }
}

new Theme();
