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
$router->group(['prefix'=>'api'], function() use ($router){
    $router->group(['prefix'=>'users'], function() use ($router){
        $router->post('/login', 'UserController@login');
        $router->post('/', 'UserController@register');
        $router->get('/me', 'UserController@me');
        $router->get('/check-auth', 'UserController@checkUserAuth');
    });
});
