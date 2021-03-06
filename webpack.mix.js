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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));

mix.copy('resources/vendor/Semantic-UI-CSS-master/semantic.min.css', 'public/css/semantic.min.css');
mix.copy('resources/vendor/Semantic-UI-CSS-master/semantic.min.js', 'public/js/semantic.min.js');
mix.copy('resources/css/styles.css', 'public/css');
mix.copyDirectory('resources/vendor/Semantic-UI-CSS-master/themes', 'public/css/themes');
