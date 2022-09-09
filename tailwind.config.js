/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./partials/**/*.php",
        "./*.php",
        "./templates/**/*.php",
        "./src/js/**/*.ts",
        "./safelist.txt",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/typography")],
};
