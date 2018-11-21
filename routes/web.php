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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$router->get('/', [
    'as' => 'index',
    'uses' => 'MainController@home'
]);

// route user
$router->get('/user/{id}', [
    'as' => 'user',
    'uses' => 'UserController@user'
]);

$router->post('/post', [
    'as' => 'userPost',
    'uses' => 'UserController@userPost'
]);

$router->post('/post/{id}/comment', [
    'as' => 'commentPost',
    'uses' => 'UserController@commentPost'
]);