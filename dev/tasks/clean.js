// Gulp
import gulp from "gulp";

// Util
import del from "del";

gulp.task("clean", (cb) => {
  return del(["build/css", "build/js", "build/image"]).then(() => {
    cb();
  });
});
