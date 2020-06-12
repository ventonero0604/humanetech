//Gulp
import gulp from "gulp";
import gulpLoadPlugin from "gulp-load-plugins";
import base64 from "gulp-base64";

// postCss plugin
import postcssImport from "postcss-import";
import atImport from "postcss-partial-import";
import cssnext from "postcss-cssnext";
import cssstats from "postcss-cssstats";
import reporter from "postcss-reporter";
import size from "postcss-size";
import each from "postcss-each";
import modulesValues from "postcss-modules-values";
import mixins from "postcss-mixins";
import sort from "postcss-sorting";
import cssnano from "cssnano";
import stylelint from "stylelint";
import cssnested from "postcss-nested";
import rename from 'gulp-rename';
import hash from './hash';

const $ = gulpLoadPlugin();
const supportBrowser = ["iOS >= 5.0", "Android >= 2.3"];

// Data
const pkg = require("../package.json");
const path = {
  src: pkg.directories.src,
};

gulp.task("stylelint", () => {
  const processors = [
    stylelint(),
    reporter({
      clearMessages: true,
    }),
  ];

  return gulp
    .src(path.src + "/css/**/*.css")
    .pipe($.plumber())
    .pipe($.postcss(processors));
});

gulp.task(
  "css",
  gulp.series("stylelint", () => {
    const processors = [
      postcssImport(),
      atImport(),
      size,
      each,
      cssnested,
      modulesValues(),
      mixins({
        mixinsDir: "./src/css/function/_function",
      }),
      cssnext({
        browsers: supportBrowser,
        features: {
          customProperties: true,
          calc: true,
          customMedia: false,
          mediaQueriesRange: false,
          nesting: true,
        },
      }),
      sort(),
    ];

    return (
      gulp
        .src(path.src + "/css/*.css")
        .pipe($.plumber())
        .pipe($.postcss(processors))
        .pipe(gulp.dest(path.src + "/dist/css/"))
        .pipe(
          base64({
            extensions: [/\/datauri\//],
          })
        )
        //なんかうまくいかないから２回dest
        .pipe(gulp.dest(path.src + "/dist/css/"))
    );
  })
);

gulp.task(
  "css:build",
  gulp.series("stylelint", (cd) => {
    const processors = [
      atImport(),
      size,
      each,
      cssnested,
      modulesValues(),
      mixins({
        mixinsDir: "./src/css/function/_function",
      }),
      cssnext({
        browsers: supportBrowser,
        features: {
          customProperties: true,
          calc: true,
          customMedia: false,
          mediaQueriesRange: false,
          nesting: true,
          color: true,
        },
      }),
      sort(),
      cssnano(),
    ];

    gulp
      .src(path.src + "/css/*.css")
      .pipe($.plumber())
      .pipe($.postcss(processors))
      .pipe(gulp.dest(path.src + "/dist/css/"))
      .pipe(
        $.base64({
          extensions: [/\/datauri\//],
        })
      )
      .pipe(gulp.dest(path.src + "/dist/css/"))
      .pipe(rename(`style_${hash.normal()}.css`))
      .pipe(gulp.dest("./build/css/"));

    cd();
  })
);

gulp.task("cssstats", () => {
  const processors = [
    cssstats(function (stats) {
      console.log(stats);
    }),
  ];

  return gulp
    .src(path.src + "/dist/css/*.css")
    .pipe($.plumber())
    .pipe($.postcss(processors));
});
