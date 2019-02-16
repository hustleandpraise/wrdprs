# README

# WRDPRS Boilerplate

This is the base theme we start with at Hustle & Praise. These are for internal use only and are only really used to get your hands dirty quick.

# Whats in the box

## Build Tools

We use tools like babel and webpack to transpile and compile our javascript

-   [https://webpack.js.org](https://webpack.js.org/)
-   [https://babeljs.io](https://babeljs.io/)

Webpack also compiles our SCSS, Images and Fonts. This is included in `webpack.config.js`

Webpack is run from package.json with:

`npm run dev`

This compiles the js, but for a development environment

`npm run build`

This compiles all files for production and minifies css, js and images.

Source files for JS, SCSS, Fonts and Images can be found in the `/src` folder

All files are compiled to `/assets/dist/[name]`

## Javascript

We write our javacript using ES6 in house and use our build tools above to compile for older browsers. All javascript must be put into main.js, and smaller chunks to be imported into main.js

Use of jQuery is discouraged and we try to keep and, if at all, plugins written in ES6

For DOM queries we use a micro library called 'Bling', which can be found in `src/js/libs/bling.js`. It has a similar format to jQuery

Docs can be found here: [https://gist.github.com/paulirish/12fb951a8b893a454b32](https://gist.github.com/paulirish/12fb951a8b893a454b32)

## SCSS

We write our styles in ma modular format, which can be seen in the src directory. Normalize is also included. We also use a library helper called Preboot to help with some css.

Normalize: [https://necolas.github.io/normalize.css/](https://necolas.github.io/normalize.css/)

Preboot Docs can be found here: [https://github.com/moonpyk/preboot.scss](https://github.com/moonpyk/preboot.scss)

## PHP

Our functions.php file loads in some starter files located in the `/lib` folder.

-   CPT.php is our class for creating posts types - docs here [https://github.com/jjgrainger/wp-custom-post-type-class/](https://github.com/jjgrainger/wp-custom-post-type-class/)
-   methods.php - includes some handy helper methods to make development easier. Each of these is documented inline with the function. View the file to learn more.
-   post_types.php - This file uses CPT to create a few basic post types of Testimonials, Sponsors and Partners. These can be added to or removed as needed depending on the projects needs.
-   setup.php - handles some Wordpress defaults, registers a primary navigation for the theme and a footer widget space. Feel free to add/remove from here.
-   wrapper.php - This will be expanded on further below with "Templates"
-   titles.php - a function for grabbing a title easier based on where/post type

## Wrapper

Each page extends from base.php, as a layout file. So there's no need to include include the header/footer files on each template. If you view the base file there are comments as to what's happening.

## Advanced Custom Fields

We use ACF Pro. We encourage use of this for any settings fields for page templates. We've also included a Theme Settings Options page should this be applicable. There are already some fields set up. Feel free to remove anything not needed.

[http://www.advancedcustomfields.com](http://www.advancedcustomfields.com/)

[https://www.advancedcustomfields.com/resources/options-page/](https://www.advancedcustomfields.com/resources/options-page/)

## Ninja Forms

We use ninjaforms for all contact forms. We'd prefer if you could stick to this. There are some example forms installed already in the theme.

[https://ninjaforms.com](https://ninjaforms.com)

# Guidelines

Generally we want to stick with the format provided, however you can use different DOM query libraries, SCSS libraries and extra tools.

We use Space indentations, at 4 spaces.
