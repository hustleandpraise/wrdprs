![WRDPRS](./wrdprs.png)

# WRDPRS Boilerplate

This is the base theme we start with at Hustle & Praise. For getting your hands dirty real quick inside of the aul Wordpress.

# Whats in the box

## Build Tools

We use tools like babel and webpack to transpile and compile our javascript

-   [https://webpack.js.org](https://webpack.js.org/)
-   [https://swc.rs/](https://swc.rs//)

Webpack also compiles our Images and Fonts. This is included in `webpack.config.js`

Webpack is run from package.json with:

`npm run dev`

This compiles the js, but for a development environment

`npm run build`

This compiles all files for production and minifies js and images.

Source files for JS, Fonts and Images can be found in the `/src` folder

All files are compiled to `/assets/dist/[name]`

## Javascript

We write our javacript in typescript for that type-safe goodness and use SWC above to compile for browsers. All javascript must be put into main.ts, and smaller chunks to be imported into main.ts

Use of jQuery is banned and we try to keep and, if at all, plugins written in ES6

For DOM queries we use a wrapper called 'Bling', which can be found in `src/js/libs/bling.ts`. It has a similar format to jQuery sizzle for selectors - but only 6 lines.

Docs can be found here: [https://gist.github.com/paulirish/12fb951a8b893a454b32](https://gist.github.com/paulirish/12fb951a8b893a454b32)

## Tailwind & PostCSS

We write our styles in tailwind. main.css contains the imports. We also include some component files for creating an DRY elements, or importing styles for plugins.

[https://tailwindcss.com/](https://tailwindcss.com/)

PostCSS is used the build tool we used to compile CSS. We used the tailwind plugin along with:

-   postcss-nested
-   postcss-import
-   autoprefixer
-   cssnano

[https://postcss.org/](https://postcss.org/)

We can compile the css with:

`npm run dev:tailwind`

This compiles the css unminifed and without prefixes.

`npm run build:tailwind`

This compiles all files for production and minifies js and images.

## PHP

Our functions.php file loads in some starter files located in the `/lib` folder.

-   **CPT.php** is our class for creating posts types - docs here [https://github.com/jjgrainger/wp-custom-post-type-class/](https://github.com/jjgrainger/wp-custom-post-type-class/)
-   **methods.php** - includes some handy helper methods to make development easier. Each of these is documented inline with the function. View the file to learn more.
-   **post_types.php** - This file uses CPT to create a few basic post types of Testimonials, Sponsors and Partners. These can be added to or removed as needed depending on the projects needs.
-   **setup.php** - handles some Wordpress defaults, registers a primary navigation for the theme and a footer widget space. Feel free to add/remove from here.
-   **wrapper.php** - This will be expanded on further below with "Templates"
-   **titles.php** - a function for grabbing a title easier based on where/post type

## Template Wrapper

Each page extends from base.php, as a layout file. So there's no need to include include the header/footer files on each template. If you view the base file there are comments as to what's happening.

## Advanced Custom Fields

We use ACF Pro. We encourage use of this for any settings fields for page templates. We've also included a Theme Settings Options page should this be applicable. There are already some fields set up. Feel free to remove anything not needed.

[http://www.advancedcustomfields.com](http://www.advancedcustomfields.com/)

[https://www.advancedcustomfields.com/resources/options-page/](https://www.advancedcustomfields.com/resources/options-page/)

We've also included php "types" with the stub library.

## Ninja Forms

We use ninjaforms for all contact forms. We'd prefer if you could stick to this. There are some example forms installed already in the theme.

[https://ninjaforms.com](https://ninjaforms.com)

# Guidelines

Generally we want to stick with the format provided, however you can use different DOM query libraries, SCSS libraries and extra tools.

We use Space indentations, at 4 spaces.
