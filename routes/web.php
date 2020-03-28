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

//delete data
$router->delete('mahasiwa/{id}', 'UserController@destroy');

//kumpulin tugas
$router->get('submission', 'GitsController@index');

//get key
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
