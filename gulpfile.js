var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
    .sass('admin.scss')
    .version('/public/css/admin.css');

    mix.scripts([
    		'../vendors/sb-admin/bower_components/jquery/dist/jquery.min.js',
    		'../vendors/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js',
		    '../vendors/sb-admin/bower_components/metisMenu/dist/metisMenu.min.js',
		    '../vendors/sb-admin/bower_components/raphael/raphael-min.js',
		    '../vendors/sb-admin/bower_components/morrisjs/morris.min.js',
		    'morris-data.js'
    	]);
});

