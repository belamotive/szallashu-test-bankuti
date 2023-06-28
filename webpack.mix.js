const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

mix.sass("resources/sass/app.scss", "public/css");

if (mix.inProduction()) {
    mix.version(); // Enable versioning for cache-busting in production
} else {
    mix.browserSync("localhost:8000"); // Enable BrowserSync for live reloading
    mix.webpackConfig({
        devtool: "inline-source-map", // Enable source maps for easier debugging in development
    });
}
