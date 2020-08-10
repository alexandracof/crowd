var gulp = require('gulp'); //npm install gulp
var gp_uglify = require('gulp-uglify'); //npm install gulp-uglify
var gp_minify_css = require('gulp-clean-css'); //npm install gulp-clean-css
var sass = require('gulp-sass'); //npm install gulp-sass

gulp.task('test', function() {
  console.log('Gulp test');
});

gulp.task('css', function() {
  return gulp.src('assets/*.css')
    .pipe(gp_minify_css({compatibility: 'ie8'}))
    .pipe(gulp.dest('assets/'));
});

gulp.task('js', function() {
  return gulp.src('assets/*.js')
    .pipe(gp_uglify())
    .pipe(gulp.dest('assets/'));
});

gulp.task('deploy', ['css', 'js']);