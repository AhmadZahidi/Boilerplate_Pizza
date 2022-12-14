const mix = require("laravel-mix");

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

mix.react("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

mix.js("resources/js/admin/admin.js", "public/js");

mix.sass("resources/sass/admin/admin.scss", "public/css");

// mix.react("resources/react/pages/FromMix.js", "public/js/").version();
// mix.react("resources/react/pages/TestPage.js", "public/js/").version();

mix.react("resources/js/Customer/ProfileOption.js", "public/js").version();
