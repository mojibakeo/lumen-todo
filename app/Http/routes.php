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

//$app->get('/', function() use ($app) {
//	return $app->welcome();
//});


$app->get('/', [
    'as' => 'top',
    'uses' => 'App\Http\Controllers\TopController@index',
]);

$app->post('/', [
    'uses' => 'App\Http\Controllers\TopController@add',
]);

$app->get('/delete/{id}', [
    'as' => 'delete_task',
    'uses' => 'App\Http\Controllers\TopController@delete',
]);


