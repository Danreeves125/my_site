// yarn add --dev gulp gulp-sass gulp-rename gulp-uglify gulp-concat gulp-cssnano es6-promise gulp-watch gulp-ex-replace gulp-error-handle gulp-sourcemaps

var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    rename       = require('gulp-rename'),
    uglify       = require('gulp-uglify'),
    concat       = require('gulp-concat'),
    cssnano      = require('gulp-cssnano'),
    watch        = require('gulp-watch'),
    errorHandler = require('gulp-error-handle'),
    sourcemaps = require('gulp-sourcemaps'),
    ext_replace  = require('gulp-ext-replace'),
    babel  = require('gulp-babel');

function change() {
    return gulp.src([
        // "node_modules/overlayscrollbars/css/OverlayScrollbars.css",
        'node_modules/choices.js/public/assets/styles/choices.css',
        'node_modules/overlayscrollbars/css/OverlayScrollbars.css',
        // 'node_modules/normalize.css/normalize.css',
    ])
        .pipe(ext_replace('.scss'))
        .pipe(gulp.dest('src/scss/node-imports'))
}

function fontAwesome() {
    return gulp.src(
        'node_modules/@fortawesome/fontawesome-free/webfonts/**.*'
    )
        .pipe(gulp.dest('dist/fonts/webfonts'));
}

function styles() {
    return gulp.src('src/scss/app.scss')
        .pipe(sass({
            outputStyle: 'compressed' // if css compressed **file size**
        }).on('error', sass.logError))
        // .pipe(cssnano({ zindex: false }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('dist/css'));
}

function scripts() {
    return gulp.src([
        // 'node_modules/jquery-parallax.js/parallax.js',
        // 'node_modules/tippy.js/dist/tippy.cjs.js',
        // 'node_modules/@rqrauhvmra/tobi/js/tobi.min.js',
        'node_modules/choices.js/public/assets/scripts/choices.js',
        'node_modules/overlayscrollbars/js/OverlayScrollbars.js',
        'node_modules/smooth-scroll/dist/smooth-scroll.js',
        'node_modules/swiper/js/swiper.js',
        // 'node_modules/swiper/js/swiper.js',
        // 'assets/js/custom/sliders.js',
        // 'assets/js/custom/select2.js',
        'src/js/active/*.js'
    ])
        .pipe(babel())
        .pipe(concat('main.js'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(errorHandler())
        // .pipe(uglify())
        .pipe(gulp.dest('dist/js/'));
}

function watchFiles() {
    gulp.watch('src/scss/**/*.scss', gulp.series('styles'));
    gulp.watch('src/js/active/*.js', gulp.series('scripts'));
}


gulp.task('scripts', scripts);
gulp.task('styles', styles);
gulp.task('fontAwesome', fontAwesome);
gulp.task('change', change);

gulp.task('default', gulp.parallel(change, scripts, styles, fontAwesome));

gulp.task("watch", function () {
    watchFiles()
});
