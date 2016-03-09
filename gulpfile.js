/*Dependencias*/
var gulp = require('gulp')
var sass = require('gulp-sass')
var autoprefixer = require('gulp-autoprefixer')
var uglify = require('gulp-uglify')//minifica js
var cleanCSS = require('gulp-clean-css');//minifica css
var cssScss = require('gulp-css-scss');// css to sass

/*Tareas*/

//css to sass 
gulp.task('css-scss', () => {
  return gulp.src('css/style.css')//convierte archivo especifico
    .pipe(cssScss())
    .pipe(gulp.dest('css/'));
});

//sass to .css and minify
gulp.task('sass', function () {
    return gulp.src('css/*.scss')//convierte todos los archivos que terminen en .scss
        .pipe(sass())
       .pipe(autoprefixer())
//.pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('css/'));
});

//.js
gulp.task('compress', function() {
   return gulp.src('js/funciones.js')//convierte archivo especifico
//  return gulp.src('js/'+ archivos)
    .pipe(uglify())
    .pipe(gulp.dest('js/min/'));
});

gulp.watch('css/*.scss',['sass']);
gulp.watch('js/funciones_belleza.js',['compress']);