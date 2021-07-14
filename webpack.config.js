const path = require("path");

module.exports = {
    mode: "production",
    entry: "./src/js/app.js",
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "bundle.js"
    },
    module: {
        rules: [
            {
                test: /\.(sa|sc)ss$/,
                use: ["style-loader", "css-loader", "sass-loader"]
            }
        ]
    }
}