'use strict';

//Gulp
import gulp from 'gulp';

// Util
import requireDir from 'require-dir';

gulp.task('default', gulp.task('watch'));

requireDir('./tasks');
