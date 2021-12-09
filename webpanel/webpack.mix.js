const mix = require('laravel-mix');

/**
 * Frontend Assets
 */
mix.js('resources/frontend/js/app.js', 'public/js')
mix.sass('resources/frontend/sass/main.scss', 'public/css')
    .options({
        processCssUrls: false
    });

mix.styles([
    'public/css/main.css'
], 'public/css/all.css');

mix.scripts([
    'public/js/app.js'
], 'public/js/all.js');


/**
 * Backend Assets
 */
mix.js('resources/backend/js/app.js', 'public/backend/js')
    .sass('resources/backend/sass/app.scss', 'public/backend/css')
    .copy('node_modules/admin-lte/dist/img', 'public/backend/images')
    .copy('node_modules/tinymce/themes', 'public/backend/js/tinymce/themes')
    .copy('node_modules/tinymce/icons', 'public/backend/js/tinymce/icons')
    .copy('node_modules/tinymce/skins', 'public/backend/js/tinymce/skins')
    .copy('node_modules/tinymce/plugins', 'public/backend/js/tinymce/plugins')
