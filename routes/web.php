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

$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('/login', 'AuthController@login');
    $router->post('/register', 'AuthController@register');


    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->put('/register', 'AuthController@update');
        $router->post('/logout', 'AuthController@logout');

        $router->get('/mockdata', 'mock_dataController@index');
        $router->get('/mockdata/{id}', 'mock_dataController@getmock_dataById');
        $router->post('/mockdata', 'mock_dataController@store');
        $router->put('/mockdata/{id}', 'mock_dataController@update');
        $router->delete('/mockdata/{id}', 'mock_dataController@destroy');
    });
});
