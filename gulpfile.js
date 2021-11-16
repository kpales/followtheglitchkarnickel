const   gulp = require('gulp'),
        sourcemaps = require('gulp-sourcemaps'),
        browserSync = require('browser-sync').create(),
        gulpConfig = require('./gulpconfig.json'),
        cleanCSS = require('gulp-clean-css'),
        sass = require('gulp-sass');

//Required for sass to see relative paths
const sassPaths = [
    'assets/icons'
];

let message = function(file) {
    console.log(file.path);
    return false;
};

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['./sass/*.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass({includePaths:sassPaths}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest("./assets/css"))
        .pipe(browserSync.stream());
});
// minifies css + IE compactibility

/*gulp.task('minify-css',() => {
    return gulp.src('./styles/css/!*.css')
        .pipe(sourcemaps.init())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./styles/css/'));
});*/

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass' , function() {

    browserSync.init(gulpConfig.browserSyncOptions);

    gulp.watch(['./sass/*.scss'], gulp.series('sass'));
    gulp.watch("./**/*.php").on('change', browserSync.reload);
}));

gulp.task('default', gulp.series('serve'));
