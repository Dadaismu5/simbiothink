let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.styles([
     'public/css/bootstrap.css',
     'public/css/styles.css',
     'public/css/animate.css',
     'public/css/portfolio.css',
     'public/css/animations.min.css',
     'public/css/normalize.css',
     'public/css/demo.css',
     'public/css/stuff.css',
     'public/css/slideshow.css',
     'public/css/slideshow_layouts.css',
     'public/css/animsition.css',
     'public/css/responsive.css',
 ], 'public/css/master.css');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
