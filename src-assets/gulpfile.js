'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var prettify = require('gulp-prettify');
var minify = require('gulp-minify');
var concat = require('gulp-concat');  
var uglify = require('gulp-uglify');  

// Compile & Generate Style File
gulp.task('styles', function () {
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(cleanCSS({compatibility: 'ie8'})) //Later on
        .pipe(gulp.dest('../assets/css/'));


});

// Compile & Generate Javscript File
 gulp.task('scripts', function() {
      return gulp.src([

            //jQuery
          	'javascripts/vendor-components/jquery/jquery.1.12.4.min.js',

      		//Bootstrap Components

            //'javascripts/bootstrap-components/affix.js',
			//'javascripts/bootstrap-components/alert.js',
			'javascripts/bootstrap-components/button.js',
			//'javascripts/bootstrap-components/carousel.js',
			'javascripts/bootstrap-components/collapse.js',
			'javascripts/bootstrap-components/dropdown.js',
			'javascripts/bootstrap-components/modal.js',
			//'javascripts/bootstrap-components/popover.js',
			//'javascripts/bootstrap-components/scrollspy.js',
			'javascripts/bootstrap-components/tab.js',
			//'javascripts/bootstrap-components/tooltip.js',
			'javascripts/bootstrap-components/transition.js',

          //Vendor Components
          'javascripts/vendor-components/lazy-load/lazyload.transpiled.min.js',
          'javascripts/vendor-components/jquery-countdown/jquery-countdown.js',


          'javascripts/vendor-components/mix-it-up/jquery.mixitup.min.js',
          'javascripts/vendor-components/jquery-validate/jquery.validate.min.js',


          //Common Components
          'javascripts/common-components/global.js',

          //Components

          'javascripts/components/filterable-items.js',
          'javascripts/components/forms-validation.js',
          'javascripts/components/smooth-scroll.js',
          'javascripts/components/fixed-header.js',
          'javascripts/components/particles.js',
      ])
	   .pipe(concat('scripts.js'))
	   .pipe(uglify())
	   .pipe( gulp.dest('../assets/js/'));


 });


// Watch If SCSS File Changes
gulp.task('styles:watch', function () {
    gulp.watch('./scss/**/*.scss', ['styles']);
});

// Watch If SCSS File Changes
gulp.task('rtl:watch', function () {
    gulp.watch('./scss/**/*.scss', ['styles']);
});


// Watch If Javascript File Changes
gulp.task('scripts:watch', function () {
	gulp.watch('./javascripts/**/*.js', ['scripts']);
});

gulp.task('default', ['styles', 'scripts' , 'styles:watch' , 'scripts:watch']);