<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Carbon\Carbon;

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


$router->group(['prefix' => 'api'], function ($router) {
    //利用者API
    $router->get('/users', 'UserController@index');
    $router->post('/users', 'UserController@store');
    $router->get('/users/{id}', 'UserController@show');
    $router->put('/users/{id}', 'UserController@update');
    $router->delete('/users/{id}', 'UserController@destroy');
    //天候API
    $router->get('/weathers', 'WeatherController@index');
    $router->post('/weathers', 'WeatherController@store');
});

Route::get('{path:.*}', function () {
    return view('app');
});
