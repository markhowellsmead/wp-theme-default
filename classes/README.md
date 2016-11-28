# WordPress Theme starter code: Classes

## Description
This folder contains PHP files in a [PSR-4](http://www.php-fig.org/psr/psr-4/) structure. The files contain sample code, split 
into individual files. Each file contains code relating to a specific aspect of theme development, which you can use if you need it. 

### Theme
The Theme class is the main “engine” of the theme. This contains all of the standard stuff you'll need for every theme.

### Taxonomy
Functions which relates to the WordPress taxonomy structure: tags, categories and custom taxonomies.

### Usage
This folder is part of the project [wp-theme-default](https://github.com/mhmli/wp-theme-default): a WordPress Theme starter 
project which you can use to build your own object-oriented WordPress Theme.

If you need to use functionality from a trait class, then add the code (e.g.) ``use Taxonomy;`` at the top of the *Theme* class. As long as 
the trait file is in the same namespace as the *Theme* class, then it will be automatically loaded. Only load the classes you actually need, 
in order to make the code as efficient as possible. (Loading classes you don't need may run code or define functions which use memory unnecessarily.)

## Author
Mark Howells-Mead | www.markweb.ch | Since 23rd November 2016

## License
Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
