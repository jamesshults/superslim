var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
//var sass        = require('gulp-sass');
// in command line, run: npm install gulp-compass --save-dev
var compass = require('gulp-compass');
var plumber = require('gulp-plumber');
var minifyCSS = require('gulp-minify-css');

//npm install gulp browser-sync gulp-compass gulp-plumber gulp-minify-css --save-dev

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './style.css',
    './*.php'
    ];

    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "localhost/superslim",
    notify: false
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
/*gulp.task('sass', function () {
    return gulp.src('sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./'))
        .pipe(reload({stream:true}));
});*/

//gulp.task('styles', function() {
  //return gulp.src(['sass/**/*.scss'])
    //.pipe(compass({
      //css: './',
      //sass: 'sass',
      //image: 'images'
    //}))
    //.pipe(gulp.dest('./'))
//})

gulp.task('compass', function() {
  gulp.src('./sass/*.scss')
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(compass({
      css: 'css',
      sass: 'sass',
      image: 'images'
    }))
    .on('error', function(err) {
      // Would like to catch the error here
    })
    .pipe(minifyCSS({
      keepSpecialComments: 1
    }))
    .pipe(gulp.dest('./'));
});

// Default task to be run with `gulp`
gulp.task('default', ['compass', 'browser-sync'], function () {
    gulp.watch("sass/**/*.scss", ['compass']);
});
