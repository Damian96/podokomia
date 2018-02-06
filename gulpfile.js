var package = require('./package'),
	gulp = require('gulp'),
	del = require('del'),
	uglifyjs = require('gulp-uglify-es').default,
	uglifycss = require('gulp-uglifycss'),
	jshint = require('gulp-jshint'),
	fontello = require('gulp-fontello');

var paths = {
	css: [
		'src/css/*.css'
	],
	js: [
		'src/js/*.js',
		'!src/js/*.min.js'
	],
	other: [
		'src/images/*',
		'src/js/*.min.js',
		'src/downloads/*',
		'src/includes/*',
		'src/includes/*/*',
		'src/includes/*/*/*',
		'src/*'
	]
};

// Not all tasks need to use streams
// A gulpfile is just another node program and you can use any package available on npm
var clean = function() {
  // You can use multiple globbing patterns as you would with `gulp.src`
  return del(['build/*']);
};

var destination = function(file) {
		// dirname = base
		return file.base.replace('\\src\\', '\\build\\')
	},
	minifyJS = function() {
		gulp.src(paths.js)
			.pipe(jshint(package.jshintConfig))
			.pipe(jshint.reporter('default'))
			.pipe(uglifyjs())
			.pipe(gulp.dest(destination));
	},
	minifyCSS = function() {
		var cssOptions = {uglyComments: true};
		gulp.src(paths.css)
			.pipe(uglifycss(cssOptions))
			.pipe(gulp.dest(destination));
	},
	copyOther = function() {
		gulp.src(paths.other)
			.pipe(gulp.dest(destination));
	},
	downloadGlyphs = function() {
		var options = {
			font: 'font',
			css: 'css',
		};

		return gulp.src('fontello-config.json')
			.pipe(fontello(options))
			.pipe(gulp.dest('build'));
	};

gulp.task('minifyJS', minifyJS);
gulp.task('minifyCSS', minifyCSS);
gulp.task('copyOther', copyOther);
gulp.task('glyph', downloadGlyphs);

gulp.task('build', ['clean', 'minifyCSS', 'minifyJS', 'copyOther', 'glyph']);
gulp.task('watch', function() {
	gulp.watch(paths.js, minifyJS);
	gulp.watch(paths.css, minifyCSS);
	gulp.watch(paths.other, copyOther);
	gulp.watch('fontello-config.json', downloadGlyphs);
});

gulp.task('clean', clean);
gulp.task('default', ['clean', 'minifyCSS', 'minifyJS', 'copyOther', 'glyph', 'watch']);