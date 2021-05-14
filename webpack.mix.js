const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
        'resources/views/app/css/reset.css',
        'resources/views/app/css/style.css',
        'resources/views/app/css/responsive.css',
    ], 'public/app/css/style.css')
    .styles([
        'resources/views/app/css/owl/owl.carousel.min.css',
        'resources/views/app/css/owl/owl.theme.default.min.css'
    ], 'public/app/css/owl.css')
    .scripts([
        'resources/views/app/js/script.js'
    ],'public/app/js/script.js')
    .scripts([
        'resources/views/app/js/jquery.min.js'
    ],'public/app/js/jquery.js')
    .scripts([
        'resources/views/app/js/owl/owl.carousel.min.js',
        'resources/views/app/js/owl/setup.js'
    ],'public/app/js/owl.js')
.version();
