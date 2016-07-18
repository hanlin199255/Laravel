<?php

use Illuminate\Routing\Console\MiddlewareMakeCommand;
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

//前台管理页面
Route::Controller('/home/index','Home\IndexController');
Route::Controller('/cate','Home\ScreenController');
Route::get('/blog/{id}','Home\BlogController@blogshow');
Route::get('/list','Home\BlogController@listshow');
Route::post('/comment/insert','Home\CommentController@insert')->middleware('login');


//后台登录页面  注意post get 的使用方式
Route::get('/Admin/login','LoginController@login');
Route::post('/Admin/login','LoginController@dologin');
Route::get('/Admin/logout','LoginController@logout');
Route::post('/Admin/user/setgroup','UserController@setgroup');
Route::post('/Admin/user/grouplimit','UserController@grouplimit');



//后台路由组
Route::group(['middleware' => 'login'],function(){

//后台首页的路由规则
Route::get('/Admin','AdminController@index');


//后台用户管理
Route::Controller('/Admin/user','UserController');

//后台分类管理路由
Route::Controller('/admin/cate','CateController');

//后台文章
Route::Controller('/admin/article','ArticleController');
});


