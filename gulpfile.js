var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    stripCssComments = require('gulp-strip-css-comments')
lr = require('tiny-lr'),
    server = lr();

gulp.task('sass', function () {
    return gulp.src('sass/style.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 2 version'))
        .pipe(minifycss())
        // .pipe(stripCssComments())
        .pipe(gulp.dest(''))
});

gulp.task('lint', function () {
    return gulp.src('js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('js/dist'))
});

gulp.task('watch', function () {
    server.listen(35729, function (err) {
        if (err) {
            return console.log(err);
        }

        // Watch .js files
        gulp.watch('js/*.js', ['lint']);

        // Watch .scss files
        gulp.watch('sass/**/*.scss', ['sass']);
    });
});

gulp.task('default', ['sass', 'lint']);