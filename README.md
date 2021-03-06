# BoilerPress
A starter theme/boilerplate for WordPress created mostly for myself and team @ [TMD](http://tmdcreative.com). It's an adaptation of [Starkers](https://github.com/viewportindustries/starkers) mixed with [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate) stuff, and other general bits and pieces I tend to include in every WP project.  My goal with this is to help speed up the mundane parts of the development process and more importantly improve coding and organizational consistency across projects. 

*This is a very early rough version.*

## Notes on base stylesheet
### Not quite sure the best way to organize our stylesheets, but as a base, here's what I propose so far:
```
01 Defaults
02 Typography -typ
03 Global Elements -glbl
   - Navigation -nav
   - Header -hdr
   - Footer -ftr
04 Page Specific Elements -pse
   - Home -home
   - Blog Styles -blog
05 Forms/Buttons
06 Grid -gs
07 Helper Classes -hc
08 Media Queries -mc
09 WordPress Base Styles -wpc
```
* You can jump down to a section by searching #xxx, for example to navigate to the grid simply search #gs
* Included is a basic grid system based on [Bootstraps](https://github.com/twitter/bootstrap) 12 column fluid grid
* A slightly modified version of [Normalize](https://github.com/necolas/normalize.css/) is included in the css folder and @imported in the stylesheet. For production you should concatenate and minify into one file. Not the end of the world if you don't though.

### General CSS guidelines
*  Let's stay away from using ID selectors as much as possible. and do your best to prevent using [Magic Numbers](http://css-tricks.com/magic-numbers-in-css/)
* Try to keep things DRY [more info](http://ow.ly/kzaNt)

### Notes
* jQuery 1.9.1 is registered in functions.php to prevent multiple instances of jQuery being loaded so don't link it in your header.php or whatever.
* [Modernizr](http://modernizr.com/) - Comes in handy as most of our projects need to have IE7/8 support. The html5shiv v3.6 is included in Modernizr.  Use the [build tool](http://modernizr.com/download/)  to create a custom build based on the projects needs.

### Included in /js/plugins.js
* [Selectivizr](http://selectivizr.com/) - It's a bummer IE7/8 don't support attribute selectors and CSS3 pseudo-classes (for the most part), this fixes that.
* [Placeholder polyfill](https://github.com/mathiasbynens/jquery-placeholder) - "Enables HTML5 placeholder behavior for browsers that aren’t trying hard enough yet."  For form input placeholders just do this type of thing:  `<input type="text" placeholder="Search...">`

## Stuff to add
* ~~Root files like .htaccess that includes gzipping and all that fun stuff.~~
* Add [Advanced Custom Fields](https://github.com/elliotcondon/acf/) snippets and examples in a template file. ACF is awesome and fixes most short comings WP has as a CMS.
* Include more default styling? Maybe some base form styling?
* Common icon set using a custom icon font
* Fork a Sass/Compass version with a Grunt file that includes basic project helpers like jshint, csslint, image minifier, etc.
