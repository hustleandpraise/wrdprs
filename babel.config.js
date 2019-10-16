const presets = [
    "@babel/preset-react",
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

const plugins = [
    "@babel/plugin-syntax-object-rest-spread",
    "@babel/plugin-proposal-class-properties"
];

module.exports = { presets, plugins };
