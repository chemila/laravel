<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//NOTE: 优先级后面的覆盖前面的配置
Route::get('/', 'TestController@index');
Route::get('/user', 'UserController@index');
/**
Route::filter(
    'test',
    function () {
        var_dump('test');
    }
);

Route::get(
    '/',
    [
        'before' => 'test',
        function () {
            echo 'u r here';
        }
    ]
);
**/

Route::controller('test', 'TestController');
//Route::resource('test', 'TestController');