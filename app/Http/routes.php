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

/** @var Dingo\Api\Routing\Router $api */
$api = $app->make(Dingo\Api\Routing\Router::class);

$api->version('v1', ['middleware' => ['cors']], function($api) {
	$api->get('questions/recent', 'App\Http\Controllers\QuestionController@recent');
});

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api'], function() use ($app) {

});