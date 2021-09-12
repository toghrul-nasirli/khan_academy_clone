const mix = require('laravel-mix');

mix.js('resources/js/front.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/front.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sourceMaps();
