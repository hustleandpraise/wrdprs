const presets = [
    [
        "@babel/env",
        {
            targets: {
                chrome: "58",
                ie: "10"
            },
            useBuiltIns: "usage",
            corejs: 3
        }
    ]
];

const plugins = ["@babel/plugin-syntax-object-rest-spread"];

module.exports = { presets, plugins };
