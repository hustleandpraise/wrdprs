const path = require("path");
const CopyPlugin = require("copy-webpack-plugin");
const { WebpackManifestPlugin } = require("webpack-manifest-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const lightningcss = require("lightningcss");
const browserslist = require("browserslist");
const TerserPlugin = require("terser-webpack-plugin");

const config = {
    entry: {
        main: "./src/ts/main.ts",
    },
    output: {
        filename: "[name].[chunkhash].js",
        path: path.join(__dirname, "assets/dist"),
        clean: true,
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
            {
                test: /\.css$/i,
                exclude: /node_modules/,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    "postcss-loader",
                ],
            },
        ],
    },

    plugins: [
        new CopyPlugin({
            patterns: [
                { from: "./src/img", to: "./img" },
                { from: "./src/fonts", to: "./fonts" },
            ],
        }),
        new WebpackManifestPlugin({
            removeKeyHash: true,
            writeToFileEmit: true,
            basePath: "",
            publicPath: "/assets/dist/",
            filename: "manifest.json",
            filter: (file) => {
                if (file.name.includes("gitkeep")) return false;
                return true;
            },
        }),
        new MiniCssExtractPlugin({
            filename: "[name].[chunkhash].css",
        }),
    ],
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin({
                extractComments: false,
                terserOptions: {
                    sourceMap: false,
                    compress: {
                        drop_console: true,
                    },
                },
            }),
            new CssMinimizerPlugin({
                minify: CssMinimizerPlugin.lightningCssMinify,
                minimizerOptions: {
                    targets: lightningcss.browserslistToTargets(
                        browserslist(">= 0.25%")
                    ),
                },
            }),
        ],
    },
};

module.exports = config;
