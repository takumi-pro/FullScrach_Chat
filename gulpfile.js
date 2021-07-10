const { watch, dest, src, series, parallel } = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("sass"));

const path = {
    root: ".",
    htmlncss: "./dist"
}

// const cssSass = (done) => {
//     src("./src/sass/app.scss")
//     .pipe(sass())
//     .pipe(dest("./dist"));
//     done();
// }

const BuildServer = () => {
    browserSync.init({
        server: {
            baseDir: "dist",
            index: "index.html"
        }
    });
}

const reload = (done) => {
    browserSync.reload();
    done();
}

const watchTask = () => {
    // watch("./src/sass/app.scss", cssSass);
    watch("./dist/index.html", reload);
    watch("./dist/app.css", reload);
}

exports.default = () => {
    // cssSass();
    BuildServer();
    watchTask();
}

