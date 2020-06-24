const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/Admin/dash.js', 'public/js/Admin')
   .sass('resources/sass/app.scss', 'public/css'),
   .sass('resources/sass/evento.scss','public/css'),
   .sass('resources/sass/Admin/dashboard.scss', 'public/css/admin');

