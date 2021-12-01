// npm install gulp sass gulp-csso gulp-concat gulp-sourcemaps browser-sync

const { src, dest, watch } = require('gulp');
var sass = require('gulp-sass')(require('sass'));
const minifyCSS = require('gulp-csso');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();

function css() {
  return src('sass/style.scss')
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(minifyCSS())
  .pipe(sourcemaps.write())
  .pipe(dest('./'))
  .pipe(browserSync.stream());
}

function js() {
  return src('js/theme/*.js')
  .pipe(concat('theme.js'))
  .pipe(dest('js'));
}

function browser() {
  browserSync.init({
      proxy: 'http://localhost:8888/',
      files: [
          './**/*.php',
          './js/theme/*.js'
      ]
  });

  watch('sass/**/*.scss', css);
  watch('js/theme/*.js', js).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.default = browser;