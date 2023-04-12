/** @type {import('tailwindcss').Config} */
const glob = require("glob");

/*
|--------------------------------------------------
| About the Glob...
| This is because were using the webpack manifest
| the ./*.php will cause a loop, so we need to glob
| individual files instead of global. Annoying, but it works.
|--------------------------------------------------
*/

module.exports = {
    content: [
        "./partials/**/*.php",
        // "./*.php",
        "./templates/**/*.php",
        "./src/js/**/*.ts",
        "./safelist.txt",
    ].concat(glob.sync("./**/*.php")),
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/typography")],
};
