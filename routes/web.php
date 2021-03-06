<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/user', 'UsersController@index');
$router->post('/user', 'UsersController@store');
$router->get('/user/{id}', 'UsersController@show');
$router->put('/user/{id}', 'UsersController@update');
$router->delete('/user/{id}', 'UsersController@destroy');
