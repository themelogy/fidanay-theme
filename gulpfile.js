var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/fidanay';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    mix.del(['assets/css', 'assets/js']);
    mix.del(themePath+'/**');

    mix.sass('bootstrap.scss', 'resources/assets/css/bootstrap.min.css')
        .sass('custom.scss', 'resources/assets/css/custom.min.css')
        .sass('style.scss', 'resources/assets/css/style.css')
        .sass('theme/blue1.scss', 'resources/assets/css/colors/blue1.css');

	mix.styles([
	   'vendor/rs-plugin/css/settings.css'
	], 'assets/vendor/rs-plugin/css/settings.min.css', 'assets/');
	
	mix.styles([
	   'revo-slider/custom.css'
	], 'assets/css/revo-slider/custom.min.css');
	
    mix.styles([
        'bootstrap.min.css',
        'custom.min.css',
        'style.css',
		'blue1.css'
    ], 'assets/css/all.min.css');

    mix.scripts([
        'jquery.min.js',
		'jquery-ui.min.js',
		'bootstrap.min.js',
		'owl-carousel/owl.carousel.min.js',
		'jquery.magnific-popup.js',
		'main.js'
    ], 'assets/js/all.min.js');
	
	mix.copy('resources/assets', 'assets');

    mix.stylistPublish();

});