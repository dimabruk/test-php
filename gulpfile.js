var gulp = require('gulp');
var del = require('del');
var gulpLoadPlugins = require('gulp-load-plugins');
var runSequence = require('run-sequence');
var $ = gulpLoadPlugins();


gulp.task('extras', () => {
    return gulp.src([
        'app/img/*.*',
        'app/bower_components/jquery/dist/jquery.min.*',
        'app/bower_components/slick-carousel/slick/fonts/*.*',
        'app/bower_components/slick-carousel/slick/*.css',
        'app/bower_components/slick-carousel/slick/*.min.js',
        'app/classes/**/*.*'
    ], {
        base: 'app',
        dot: true
    }).pipe(gulp.dest('dist'));
});

gulp.task('clean', del.bind(null, ['.tmp', 'dist']));

function lint(files, options) {
    return () => {
        return gulp.src(files)
                .pipe($.eslint(options))
                .pipe($.eslint.format());
    };
}

gulp.task('lint', lint('app/js/**/*.js', {
    env: {
        es6: true
    }
}));

gulp.task('php', () => {
    return gulp.src('app/*.php')
            .pipe($.useref({searchPath: ['.tmp', 'app', '.']}))
            .pipe($.sourcemaps.init())
            .pipe($.if('*.js', $.uglify()))
            .pipe($.if('*.css', $.cleanCss({compatibility: '*'})))
            .pipe($.sourcemaps.write())
            .pipe($.if('*.php', $.htmlmin({removeComments: true, collapseWhitespace: true})))
            .pipe(gulp.dest('dist'));
});


gulp.task('watch', ['lint'], () => {
    gulp.watch('app/js/*.js', ['lint']);
});

gulp.task('size', () => {
    return gulp.src('dist/**/*').pipe($.size({title: 'build', gzip: true}));
});


gulp.task('concat', () => {
    return gulp.src(
            ['app/js/*.js'])
            .pipe(concat('scripts.js'))
            .pipe(gulp.dest('app/js'));
});

gulp.task('build', (cb) => {
    runSequence(
            'clean',
            'lint', ['php', 'extras'],
            'size', cb);
});

gulp.task('default', ['clean'], cb => {
    runSequence('build', cb);
});
