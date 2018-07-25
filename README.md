# WordPress Theme starter code

## Description
This is the code I use when starting work on a WordPress Theme. It provides the folder structure and files 
which are always used in every project. It tends to be the starting point for a CMS-type (Page-based) website, 
so if you're starting work on (e.g.) a classic two-column Post-driven blog Theme, this version may not be for you.

The folder structure is more orderly than other Theme starter projects, as it adheres to principles set out by 
more classically large CMS, like TYPO3. It's as close as I can get to [PSR-4](http://www.php-fig.org/psr/psr-4/), although I'm not an expert… yet!

## Notes
* The standard code insists on WordPress 4.6 or newer. Amend the code in ``functions.php`` if this doesn't match with your requirements.
* Because this code uses [PHP namespaces](http://php.net/manual/en/language.namespaces.php), it will only work on servers running PHP 5.4 or newer.
* Not all of the code files in this example are annotated. If you need to know how the template hierarchy works, then read the [core documentation](https://codex.wordpress.org/Theme_Development) before you start.

### Customization
* The WordPress Admin Bar is deactivated by default, through use of the ``show_admin_bar`` hook. Remove the code in the Theme class if you'd rather let logged-in users work with the admin bar.
* The CSS file ``css-reset.css`` is a normalizer. See https://github.com/markhowellsmead/css-reset for an extensive explanation, or if you need a newer version.
* This code pulls in unminified JavaScript files. Change the links to use your own minified versions if you need to.

## Usage
1. Download this repository as a ZIP file.
2. Rename the folder to match your Theme name.
3. Remove this README file and replace it with your own. Everyone loves good documentation.
4. Replace all instances of ``TEXT_DOMAIN``, ``TEXT_DOMAIN_JS`` and ``THEME_KEY`` with the *lowercase* key of your Theme - e.g. ``my_great_theme``. This should be used for translation calls etc. and should ideally be lowercase and match the folder name of your theme.
5. ``TEXT_DOMAIN_JS`` must be usable as a [JavaScript object name](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Working_with_Objects). So no spaces, dashes or special characters.
6. Replace all instances of ``THEMENAMESPACE`` with the [Pascal case](https://en.wikipedia.org/wiki/PascalCase) version of your Theme key. e.g. ``MyGreatTheme``. This should be analagous to the theme's text domain, but in PascalCase.
7. Replace all instances of the main PHP namespace ``TOPLEVELNAMESPACE`` with your own unique top level PHP namespace. 
8. The standard compatability check looks for **WordPress 4.6** or newer and **PHP 5.3** or newer. If this doesn't match your theme requirements, replace all instances of these version numbers throughout the theme before you start work.
9. Make a great WordPress Theme!

## Author
Mark Howells-Mead | www.permanenttourist.ch | Since 23rd November 2016

## License
Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
