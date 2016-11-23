# WordPress Theme starter code

## Description
This is the code I use when starting work on a WordPress Theme. It provides the folder structure and files 
which are always used in every project. It tends to be the starting point for a CMS-type (Page-based) website, 
so if you're starting work on (e.g.) a classic two-column Post-driven blog Theme, this version may not be for you.

The folder structure is more orderly than other Theme starter projects, as it adheres to principles set out by 
more classically large CMS, like TYPO3. This doesn't necessarily improve functionality, but it brings the file 
structure closer to a PHP class autoloader environment.

## Notes
* The standard code insists on WordPress 4.6 or newer. Amend the code in ``functions.php`` if this doesn't match with your requirements.
* Because this code uses [PHP namespaces](http://php.net/manual/en/language.namespaces.php), it will only work on servers running PHP 5.3 or newer.

### Customization
* The WordPress Admin Bar is deactivated by default, through use of the ``show_admin_bar`` hook. Remove the code in the Theme class if you'd rather let logged-in users work with the admin bar.
* The CSS file ``css-reset.css`` is a normalizer. See https://github.com/mhmli/css-reset for an extensive explanation, or if you need a newer version.
* This code pulls in unminified JavaScript files. Change the links to use your own minified versions if you need to.

## Usage
* Download this repository as a ZIP file, or clone it through Git.
* Rename the folder to match your Theme name.
* Remove this README file and replace it with your own. Everyone loves good documentation.
* Replace all instances of ``wordpress_theme`` with the key of your Theme - e.g. ``my_great_theme``.
* Replace all instances of ``WordpressTheme`` with the [Pascal case](https://en.wikipedia.org/wiki/PascalCase) version of your Theme key. e.g. ``MyGreatTheme``.
* Replace all instances of the main PHP namespace ``MHM`` with your own unique prefix. Use this prefix for all your projects: for example, the main namespace prefixes ``MyGreatTheme``.
* Make a great WordPress Theme!

## Changelog

### 0.0.1
* Initial version

## Author
Mark Howells-Mead | www.markweb.ch | This repository began on 23rd November 2016

## License
Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
