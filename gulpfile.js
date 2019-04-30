const gulp = require('gulp');
const useref = require('gulp-useref');
const gulpif = require('gulp-if');
const uglify = require('gulp-uglify');
const minifyCss = require('gulp-clean-css');
const clean = require('gulp-clean');
const imagemin = require('gulp-imagemin');
const imageminMozJpeg = require('imagemin-mozjpeg');
const realFavicon = require ('gulp-real-favicon');
const fs = require('fs');

const pathFiles = {
    input : 'src',
    output : 'dist'
};

/*
    TOP LEVEL FUNCTIONS
    gulp.task = Define task
    gulp.src = Point to files to use
    gulp.dest = Points to folder to output the result
    gulp.watch =  Watch files and folders for change (in real time and live)

*/

// Task for getting a message
gulp.task('message', function(done) {
    console.log('test');
    done();
});

//  Task for copying and remplace min assets (CSS & JS) in php files
gulp.task('copy-php-files', function (done) {
    gulp.src('src/*.php')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', minifyCss()))
        .pipe(gulp.dest('dist'));
    done();
});

// Task for copying other folders (video, realisation, font, files, favico)
gulp.task('copy-others-assets', function(done) {
    gulp.src('.htaccess')
        .pipe(gulp.dest('dist'))
    gulp.src('composer.json')
        .pipe(gulp.dest('dist'))
    gulp.src('portfolio_kal.sql')
        .pipe(gulp.dest('dist'))
    gulp.src('src/files/*')
        .pipe(gulp.dest('dist/files'))
    gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'))
    gulp.src('src/phpmailer/*')
        .pipe(gulp.dest('dist/phpmailer'))
    gulp.src('src/realisation/**/*')
        .pipe(gulp.dest('dist/realisation'))
    gulp.src('src/video/*')
        .pipe(gulp.dest('dist/video'))
    done();
});

//  Task for optimizing image
gulp.task('optimize-image', function(done) {
    gulp.src('src/img/**/*')
        .pipe(imagemin([
            imageminMozJpeg({
                quality: 70
            })
        ]))
        .pipe(gulp.dest('dist/img'));
    done();
});

// Task for generating favico
// Check this for more information : https://realfavicongenerator.net/favicon_result?file_id=p1d6votc3t18kksjb152v1s0d1m6h6

// File where the favicon markups are stored
var FAVICON_DATA_FILE = 'faviconData.json';
// Fichier créer car on ne peut pas changer le path des icons dans index.html. Le fichier faviconData.json est a chaque fois écraser et recréer lorsqu'on génére les favicons
const FAVICON_DATA_FILE_BY_KAL = 'faviconDataKal.json';

// Generate the icons. This task takes a few seconds to complete.
// You should run it at least once to create the icons. Then,
// you should run it whenever RealFaviconGenerator updates its
// package (see the check-for-favicon-update task below).
gulp.task('generate-favicon', function(done) {
	realFavicon.generateFavicon({
		masterPicture: 'src/favicon/favicon.png',
		dest: 'dist/favicon',
		iconsPath: '/',
		design: {
			ios: {
				pictureAspect: 'backgroundAndMargin',
				backgroundColor: '#ffffff',
				margin: '14%',
				assets: {
					ios6AndPriorIcons: false,
					ios7AndLaterIcons: false,
					precomposedIcons: false,
					declareOnlyDefaultIcon: true
				}
			},
			desktopBrowser: {},
			windows: {
				pictureAspect: 'noChange',
				backgroundColor: '#00aba9',
				onConflict: 'override',
				assets: {
					windows80Ie10Tile: false,
					windows10Ie11EdgeTiles: {
						small: false,
						medium: true,
						big: false,
						rectangle: false
					}
				}
			},
			androidChrome: {
				pictureAspect: 'noChange',
				themeColor: '#ffffff',
				manifest: {
					name: 'KAL',
					display: 'standalone',
					orientation: 'notSet',
					onConflict: 'override',
					declared: true
				},
				assets: {
					legacyIcon: false,
					lowResolutionIcons: false
				}
			},
			safariPinnedTab: {
				pictureAspect: 'blackAndWhite',
				threshold: 50.78125,
				themeColor: '#5bbad5'
			}
		},
		settings: {
			scalingAlgorithm: 'Mitchell',
			errorOnImageTooSmall: false,
			readmeFile: false,
			htmlCodeFile: false,
			usePathAsIs: false
		},
		markupFile: FAVICON_DATA_FILE
	}, function() {
		done();
	});
});

// Inject the favicon markups in your HTML pages. You should run
// this task whenever you modify a page. You can keep this task
// as is or refactor your existing HTML pipeline.
gulp.task('inject-favicon-markups', function() {
	return gulp.src([ 'dist/index.php' ])
		.pipe(realFavicon.injectFaviconMarkups(JSON.parse(fs.readFileSync(FAVICON_DATA_FILE_BY_KAL)).favicon.html_code))
		.pipe(gulp.dest('dist'));
});

// Check for updates on RealFaviconGenerator (think: Apple has just
// released a new Touch icon along with the latest version of iOS).
// Run this task from time to time. Ideally, make it part of your
// continuous integration system.
gulp.task('check-for-favicon-update', function(done) {
	var currentVersion = JSON.parse(fs.readFileSync(FAVICON_DATA_FILE)).version;
	realFavicon.checkForUpdates(currentVersion, function(err) {
		if (err) {
			throw err;
		}
    });
    done();
});

// Task for cleaning the older dist folder
gulp.task('clean', function(done){
	return gulp.src('dist', {read: false})
		.pipe(clean())
	done();
});


// Gulp default allow to write only gulp to manage all others tasks (l'ordre se fait d'abord de gauche à droite)
gulp.task('default',  gulp.series('clean','copy-php-files', 'copy-others-assets', 'optimize-image', 'generate-favicon', 'inject-favicon-markups'));