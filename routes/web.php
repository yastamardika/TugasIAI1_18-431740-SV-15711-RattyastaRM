<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('mahasiwa', 'UserController@index');
//show per id
$router->get('mahasiwa/{id}', 'UserController@show');

//change data
$router->put('mahasiwa/{id}', 'UserController@update');

//kumpulin tugas
$router->post('submission', 'GitsController@store');
$router->get('submission', 'GitsController@index');
$router->delete('submission/{id}', 'GitsController@destroy');

//nomer 3 bilangan pangkat tiga
$router->get('pangkatTiga','TaskController@index');
$router->get('pangkatTelu/{angka}','TaskController@default');

//get key
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
