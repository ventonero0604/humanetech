//Gulp
import gulp from "gulp";

// Util
import gulpLoadPlugin from "gulp-load-plugins";
//
// import
import "./build";

const $ = gulpLoadPlugin();

// イメージサーバーに反映
gulp.task("deploy", (cb) => {
  gulp.series("build", "deploy:imagecenter", cb);
  cb();
});

gulp.task("deploy:imagecenter", () => {
  return gulp.src("./build/**/*").pipe(
    $.rsync({
      root: "./build",
      hostname: "",
      destination: "",
    })
  );
});
