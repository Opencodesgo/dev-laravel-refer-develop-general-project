<?php

/*
|--------------------------------------------------------------------------
| Web Routes 	Web路由
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//以下为新增的 router

//Route::resource('user'=>'UserController');
//Route::resource('user', 'UserController');
//Route::get($uri, $callback);

//localhost:9023/index
Route::get('/index', 'IndexController@index');
Route::get('/index/checkenv', 'IndexController@checkEnv');

//localhost:9023/demo01
Route::get('/demo01', 'Demo01Controller@index');
Route::get('/demo01/{func}', 'Demo01Controller@func');

Route::get('/demo02/{func}', 'Demo02Controller@func');
Route::get('/demo03/{func}', 'Demo03Controller@func');
Route::get('/demo04/{func}', 'Demo04Controller@func');
Route::get('/demo05/{func}', 'Demo05Controller@func');
Route::get('/demo06/{func}', 'Demo06Controller@func');
Route::get('/demo07/{func}', 'Demo07Controller@func');
Route::get('/demo08/{func}', 'Demo08Controller@func');
Route::get('/demo09/{func}', 'Demo09Controller@func');
Route::get('/demo10/{func}', 'Demo10Controller@func');
Route::get('/demo11/{func}', 'Demo11Controller@func');
Route::get('/demo12/{func}', 'Demo12Controller@func');
Route::get('/demo13/{func}', 'Demo13Controller@func');
Route::get('/demo14/{func}', 'Demo14Controller@func');
Route::get('/demo15/{func}', 'Demo15Controller@func');
Route::get('/demo16/{func}', 'Demo16Controller@func');
Route::get('/demo17/{func}', 'Demo17Controller@func');
Route::get('/demo18/{func}', 'Demo18Controller@func');
