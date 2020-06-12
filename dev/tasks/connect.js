//Gulp
import gulp from "gulp";
import connect from "gulp-connect-php";

// Util
import browserSync from "browser-sync";

// Data
const pkg = require("../package.json");
const path = {
  src: pkg.directories.src,
};

gulp.task("connect", (cd) => {
  connect.server(
    {
      port: 8000,
      base: "/home/{username}/git/{hoge}/",
    },
    (cd) => {
      browserSync({
        port: 8008,
        proxy: "10.21.116.124:8000",
      });
      cd();
    }
  );
  cd();
});

// local開発用
gulp.task("connect:local", (cd) => {
  connect.server(
    {
      port: 8000,
      base: "./",
    },
    function () {
      browserSync({
        proxy: "localhost:8000",
      });
    }
  );
  cd();
});

gulp.task("connect:reload", () => {
  return gulp.src(path.src).pipe(connect.reload());
});

gulp.task("bs-reload", (cd) => {
  browserSync.reload();
  cd();
});
