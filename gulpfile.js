var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {
    browserSync.init(null, {
        notify: false,
        proxy: 'localhost:8000',
        open: false,
        files: [
                'app/**/*.php',
                'resources/views/**/*.php',
                'public/js/**/*.js',
                'public/css/**/*.css'
        ],
        watchOptions: {
                usePolling: true,
                interval: 500
        }
    });
    watch('./resources/**/*.php', function() {
        browserSync.reload();
    });
});

