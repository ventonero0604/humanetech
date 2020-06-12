//Gulp
import gulp from "gulp";

// Import
import "./image";
import "./css";
import "./script";
import "./connect";

// Data
const pkg = require("../package.json");
const path = {
  src: pkg.directories.src,
  template: pkg.directories.template,
  contents: pkg.directories.contents
};

gulp.task(
  "watch:local",
  gulp.series(
    gulp.parallel("image:set", "css", "js", "connect:local"),
    (cd) => {
      gulp.watch("./contents/**/*", gulp.series("bs-reload"));
      gulp.watch(path.src + "/css/**/*", gulp.series("css", "bs-reload"));
      gulp.watch(path.src + "/js/*", gulp.series("js", "bs-reload"));
      cd();
    }
  )
);

gulp.task(
  "watch",
  gulp.series(gulp.parallel("image:set", "css", "js", "connect"), (cd) => {
    gulp.watch("./contents/**/*", gulp.series("bs-reload"));
    gulp.watch(path.src + "/css/**/*", gulp.series("css", "bs-reload"));
    gulp.watch(path.src + "/js/*", gulp.series("js", "bs-reload"));
    cd();
  })
);
