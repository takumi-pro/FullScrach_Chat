const { watch } = require("gulp");
const browserSync = require("browser-sync").create();

const path = {
    root: ".",
    htmlncss: "./dist"
}

const BuildServer = () => {
    browserSync.init({
        server: {
            baseDir: "./dist",
            index: "index.html"
        }
    });
}

const reload = (done) => {
    browserSync.reload();
    done();
}

watch("./dist/*.html", reload);
watch("./dist/*.css", reload);

exports.default = () => {
    BuildServer();
}

