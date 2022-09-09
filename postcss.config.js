module.exports = {
    plugins: {
        "postcss-import": {},
        "postcss-nested": {},
        tailwindcss: {},
        ...(process.env.NODE_ENV === "production" && {
            autoprefixer: {},
            cssnano: {},
        }),
    },
};
