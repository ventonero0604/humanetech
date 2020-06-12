//Gulp
import gulp from "gulp";
import uglify from "gulp-uglify";
import concat from "gulp-concat";
import babel from "gulp-babel";
import hash from './hash';

// Data
const pkg = require("../package.json");
const path = {
  src: pkg.directories.src,
};

gulp.task("js", function () {
  console.log("--------- js task ----------");
  return gulp
    .src(path.src + "/js/*.js")
    .pipe(babel())
    .pipe(concat("main.js"))
    .pipe(gulp.dest(path.src + "/dist/js/"));
});

gulp.task("js:build", function () {
  console.log("--------- js:build task ----------");
  return gulp
    .src(path.src + "/js/*.js")
    .pipe(babel())
    .pipe(concat(`main_${hash.normal()}.js`))
    .pipe(uglify({output: {comments: 'some'}}))
    .pipe(gulp.dest("./build/js/"));
});
