//Gulp
import gulp from "gulp";

// Import
import "./clean";
import "./image";
import "./script";
import "./css";

gulp.task("build", gulp.series("clean", "image:min", "image:set", "image:copy", "js:build", "css:build"));
