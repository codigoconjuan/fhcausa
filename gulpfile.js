var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var $    = require('gulp-load-plugins')();


var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './style.css',
    './*.php',
    'css/app.css'
    ];

    //initialize browsersync
    browserSync.init(files, {
      //browsersync with a php server
      proxy: "http://fundacionhonoriscausa.dev/",
      notify: false
    });
});

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('css'));
});

gulp.task('default', ['sass', 'browser-sync'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});
