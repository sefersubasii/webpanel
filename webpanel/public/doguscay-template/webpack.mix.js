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


mix.sass('css/main.scss', 'css/main.css')
        .options({
            processCssUrls: false
        });

mix.styles([
    'plugins/bootstrap/css/bootstrap.min.css',
    'plugins/fullpage/jquery.fullPage.css',
    'plugins/owl/css/owl.carousel.min.css',
    'plugins/owl/css/owl.theme.default.min.css',
    'css/main.css'
], 'css/all.css');

mix.scripts([
    'plugins/jquery/jquery-3.4.1.min.js',
    'plugins/bootstrap/js/bootstrap.min.js',
    'plugins/fullpage/jquery.fullPage.min.js',
    'plugins/owl/js/owl.carousel.min.js',
    'plugins/lazyload/lazyload.min.js',
    'js/main.js'
], 'js/all.js');
