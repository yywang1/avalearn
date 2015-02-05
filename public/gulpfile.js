var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less', function () {
    gulp.src(['./less/*.less'])
        .pipe(less())
        .pipe(gulp.dest('./css'));
});

gulp.task('default', function () {
    gulp.run('less');

    //监视less文件的变化
    //gulp.watch('./less/**/*.less', function () {
    //    gulp.run('less');
    //});
});
