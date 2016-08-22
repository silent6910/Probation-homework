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

$app->group(['prefix' => 'member'], function () use ($app) {
    $app->post('increase', 'App\Http\Controllers\memberController@increase');
    $app->post('modify', 'App\Http\Controllers\memberController@modify');
    $app->post('delete', 'App\Http\Controllers\memberController@delete');
});

$app->post('login', 'loginController@login');
$app->post('logout', 'logoutController@logout');
$app->group(['prefix' => 'money'], function () use ($app) {
    $app->post('action','App\Http\Controllers\moneyController@action');
    $app->post('record','App\Http\Controllers\moneyController@record');
    $app->post('test','App\Http\Controllers\moneyController@test');
});



//$app->post('{param}/{param2}',$param.'Controller@'.$param2);  將網址當作參數路由至該function
/*$app->post('{param}/{param2}',[        將網址參數帶到function當作參數
'as' => 'param', 'uses' => '???Controller@index'
]);*/
