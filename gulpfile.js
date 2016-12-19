'use strict';

// make Browersync work with old version of Node
require('es6-promise').polyfill();

var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),  //Prefix css
    rename = require('gulp-rename'),              //Rename ext
    cssnano = require('gulp-cssnano'),            //Reduce css white space
    uglify = require('gulp-uglify'),              //Reduce js white space
    jscs = require('gulp-jscs'),               //Checks js code style with jscs
    jshint = require('gulp-jshint'),      //Checks if are following js standards
    stylish = require('jshint-stylish'),  //Organizes js error reports
    browserSync = require('browser-sync');

var plumberErrorHandler = {
   errorHandler: notify.onError({
      title: 'Gulp',
      message: 'Error: <%= error.message %>'
   })
};

gulp.task('styles', function() {
   gulp.src('./sass/style.scss')
      .pipe(plumber(plumberErrorHandler))
      .pipe(sass())
      .pipe(autoprefixer({
         browsers: ['last 2 versions']
      }))
      .pipe(gulp.dest('./'))         //Adding an un-cssnanoed version in root
      .pipe(cssnano())
      .pipe(rename('style.min.css'))
      .pipe(gulp.dest('./build/css'));
});

gulp.task('scripts', function(){
    gulp.src('./js/*.js')
    //   .pipe(uglify())
    //   .pipe(rename({
    //     extname: '.min.js'
    //   }))
      .pipe(gulp.dest('./build/js'));
});

gulp.task('jscs', function () {
   return gulp.src('./js/*.js')
       .pipe(jscs('.jscsrc'));
});

gulp.task('lint', function() {
  return gulp.src('./js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
});

gulp.task('browser-sync', function() {
   var files = [
      './build/css/*.css',
      './build/js/*.js',
      './*.php',
      './**/*.php',
   ];

    browserSync.init(files, {
        proxy: 'showcase.dev',
    });

    gulp.watch(files).on('change', browserSync.reload);
});

gulp.task('watch', function() {
   gulp.watch('./sass/*.scss', ['styles']);
   gulp.watch('./js/*.js', ['scripts']);
});

gulp.task('default', ['watch', 'browser-sync']);
