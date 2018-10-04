var gulp = require('gulp');
var sass = require('gulp-sass');

//taks para o sass
gulp.task('sass', function(){
  return gulp.src('./_sass/**/*.scss')
  .pipe(sass())
  .pipe(gulp.dest('./css'));
});

//taks para watch
gulp.task('watch', function(){
  gulp.watch('_sass/**/*.scss', ['sass'])
});

//task defaut gump
gulp.task('default',['sass', 'watch']);
