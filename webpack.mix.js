const mix = require("laravel-mix");

// Compile JavaScript and Tailwind CSS
mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);

// Optional: versioning for cache-busting in production
if (mix.inProduction()) {
    mix.version();
}
