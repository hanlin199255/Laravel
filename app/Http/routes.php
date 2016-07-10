<?php

/*
|--------------------------------------------------------------------------
| Application Routes   HL
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//网站首页路由
Route::get('/', function () 
{
    return view('welcome');
});

//后台登录页面
Route::get('/Admin/login','LoginController@login');
Route::post('/Admin/login','LoginController@dologin');


//后台路由组
Route::group(['middleware' => 'login'],function(){

//后台首页的路由规则
Route::get("/Admin","AdminController@index");


//后台用户管理
Route::controller('/Admin/user','UserController');


});


