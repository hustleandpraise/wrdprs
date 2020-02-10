const path = require("path");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");

const config = {
    entry: "./src/js/main.js",
    output: {
        filename: "[name].min.js",
        path: path.join(__dirname, "assets/dist/js")
    },
    resolve: {
        modules: [path.resolve("./src"), path.resolve("./node_modules")]
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ["babel-loader"]
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            url: false
                        }
                    },
                    "postcss-loader",
                    "sass-loader"
                ]
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "../css/main.css"
        }),
        new CopyWebpackPlugin([
            {
                from: "./src/img",
                to: "../img"
            },
            {
                from: "./src/fonts",
                to: "../fonts"
            }
        ])
    ],
    optimization: {
        minimizer: [
            new UglifyJsPlugin({
                cache: true,
                parallel: true,
                sourceMap: true
            }),
            new OptimizeCSSAssetsPlugin()
        ],
        splitChunks: {
            chunks: "all",
            name: "vendor"
        }
    }
};

module.exports = config;
