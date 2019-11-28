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
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
 */

mix.js(['resources/js/app.js',
        'resources/js/swiper.min.js',
        'resources/js/masonry.pkgd.min.js',
        'resources/js/jquery.collapsible.min.js',
        'resources/js/custom.js',] 
        ,'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
            'resources/css/elegant-fonts.css',
            'resources/css/font-awesome.min.css',
            'resources/css/swiper.min.css',
            'resources/css/themify-icons.css',
            'resources/css/style.css'
            ], 'public/css/all.css');
