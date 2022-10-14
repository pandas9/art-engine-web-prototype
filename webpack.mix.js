const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);

mix.scripts([
    'resources/js/pages/main.js'
    ], 'public/js/pages/main.js');

mix.scripts([
    'resources/js/pages/helper.js'
    ], 'public/js/pages/helper.js');
    