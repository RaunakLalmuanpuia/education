process.env.DISABLE_NOTIFIER = true;

const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const cleanCss = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");

const paths = {
  styles: {
    src: "resources/assets/sass/app.scss",
    dest: "public_html/css/",
  },
  scripts: {
    src: [
      "resources/assets/js/script.js",
      "resources/assets/js/handlebars.helpers.js",
      "resources/assets/js/teachers.create.js",
      "resources/assets/js/teachers.index.js",
    ],
    dest: "public_html/js/",
  },
  cssCopy: {
    src: "resources/assets/css/**/*",
    dest: "public_html/css/",
  },
};

function styles() {
  return gulp
    .src(paths.styles.src)
    .pipe(sass().on("error", sass.logError))
    .pipe(rename("app.css"))
    .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
  return gulp
    .src(paths.scripts.src)
    .pipe(concat("all.js"))
    .pipe(gulp.dest(paths.scripts.dest));
}

function cssCopy() {
  return gulp.src(paths.cssCopy.src).pipe(gulp.dest(paths.cssCopy.dest));
}

function build(done) {
  gulp.series(styles, scripts, cssCopy)(done);
}

exports.styles = styles;
exports.scripts = scripts;
exports.cssCopy = cssCopy;
exports.build = build;

// Default task
exports.default = build;
