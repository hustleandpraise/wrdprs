const path = require("path");
const CopyPlugin = require("copy-webpack-plugin");

const config = {
    entry: "./src/js/main.ts",
    output: {
        filename: "[name].min.js",
        path: path.join(__dirname, "assets/dist/js"),
    },
    target: ["web", "es5"],
    resolve: {
        modules: [path.resolve("./src/js"), path.resolve("./node_modules")],
        extensions: [".tsx", ".ts", ".js"],
    },
    module: {
        rules: [
            {
                test: /\.(ts|js)x?$/,
                exclude: /node_modules/,
                use: ["swc-loader"],
            },
        ],
    },

    plugins: [
        new CopyPlugin({
            patterns: [
                { from: "./src/img", to: "../img" },
                { from: "./src/fonts", to: "../fonts" },
            ],
        }),
    ],
};

module.exports = config;
