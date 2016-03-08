/*Dependencias*/
var gulp = require('gulp')
var sass = require('gulp-sass')
var autoprefixer = require('gulp-autoprefixer')
var uglify = require('gulp-uglify')//minifica js
var cleanCSS = require('gulp-clean-css');//minifica css

/*Tareas*/
//.css
gulp.task('sass', function () {
    return gulp.src('css/*.scss')
        .pipe(sass())
       .pipe(autoprefixer())
//.pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('css/'));
});

//.js
gulp.task('compress', function() {
   return gulp.src('js/funciones_belleza.js')
//  return gulp.src('js/'+ archivos)
    .pipe(uglify())
    .pipe(gulp.dest('js/min/'));
});

gulp.watch('css/*.scss',['sass']);
gulp.watch('js/funciones_belleza.js',['compress']);