<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->group(['middleware' => 'web'], function ($router) {
    $router->get('dd_session', function(){
        dd(session()->all());
    });
    $router->get('/',              ['as' => 'dashboard',     'uses' => 'AdminController@dashboard']);
    $router->get('/blank',         ['as' => 'blank',         'uses' => 'AdminController@blank']);
    $router->get('/flot',          ['as' => 'flot',          'uses' => 'AdminController@flot']);
    $router->get('/forms',         ['as' => 'forms',         'uses' => 'AdminController@forms']);
    $router->get('/grid',          ['as' => 'grid',          'uses' => 'AdminController@grid']);
    $router->get('/icons',         ['as' => 'icons',         'uses' => 'AdminController@icons']);
    $router->get('/morris',        ['as' => 'morris',        'uses' => 'AdminController@morris']);
    $router->get('/panels-wells',  ['as' => 'panels-wells',  'uses' => 'AdminController@panelsWells']);
    $router->get('/tables',        ['as' => 'tables',        'uses' => 'AdminController@tables']);
    $router->get('/typography',    ['as' => 'typography',    'uses' => 'AdminController@typography']);
    $router->get('/notifications', ['as' => 'notifications', 'uses' => 'AdminController@notifications']);
    $router->get('/buttons',       ['as' => 'buttons',       'uses' => 'AdminController@buttons']);
    $router->auth();
});
