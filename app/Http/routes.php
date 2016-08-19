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


$app->post('member/increase','memberController@increase');
$app->post('member/modify','memberController@modify');
$app->post('member/delete','memberController@delete');
$app->post('login','loginController@login');
$app->post('logout','logoutController@logout');
$app->post('money/action','moneyController@action');
$app->post('money/record','moneyController@record');
$app->post('money/test','moneyController@test');

//$app->post('{param}/{param2}',$param.'Controller@'.$param2);  將網址當作參數路由至該function
/*$app->post('{param}/{param2}',[        將網址參數帶到function當作參數
'as' => 'param', 'uses' => '???Controller@index'
]);*/