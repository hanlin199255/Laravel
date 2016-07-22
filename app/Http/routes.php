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

/*
||##############################################################################   ||
||								网站前台																										     ||
||------------------------------------------------------------------------------	 ||
||	*前台网站登录、注册及相关功能											 ||
||	*网站前台首页、文章分类、文章详情、文章评论、文章编辑等功能		     ||
||  *用户个人中心																 ||
||===============================================================================||
*																				 ||
*																				 ||
||===============================================================================||
||							网站前台首页  									     ||
||===============================================================================||
*/
//网站首页路由
// Route::get('/', function ()
// {
//     return view('welcome');
// });


/*                                                                                ||
||===============================================================================||
||							网站首页订阅功能 									   ||
||===============================================================================||
*/                                                                             //||
//订阅功能
Route::Controller('/subscribe','Home\SubController');

/*																			 	
||<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<||
||							网站前台登录、注册									 ||
||------------------------------------------------------------------------------- 	 ||
||	* 评论文章、进入个人中心操作将需要登录、其他操作可无需登录			     ||
||	* 用户注册操作成功时将跳转至邮箱验证页面，用户需激活方可成为正式会员	 ||
||	* 找回密码也需进行邮箱验证													 ||
||===============================================================================||
*/

//前台注册
Route::get('/register','Home\LoginController@register');
Route::post('/register','Home\LoginController@doregister');
Route::get('/send', 'Home\LoginController@send');
Route::get('/active','Home\LoginController@active');
//验证码
Route::get('/home/login/Vcode/{tmp}','CaptchaController@createVcode');
/*
||===============================================================================||
||							网站前台登录                                      				     ||
||------------------------------------------------------------------------------	 ||
||	* 记住我功能																 ||
||  * 忘记密码功能					 											 ||
||  * 重置密码功能					 											 ||
||===============================================================================||
*/
//前台登录
Route::get('/login','Home\LoginController@login');
Route::post('/login','Home\LoginController@dologin');
Route::get('/logout','Home\LoginController@logout');
//忘记密码
Route::get('/forget','Home\LoginController@forget');
Route::post('/forget','Home\LoginController@doforget');
//重置密码
Route::get('/reset','Home\LoginController@reset');
Route::post('/reset','Home\LoginController@doreset');

/*
||===============================================================================||
||							网站前台注册                                      				     ||
||------------------------------------------------------------------------------	 ||
||	* 发送邮件功能															 ||
||  * 激活账号功能					 											 ||
||===============================================================================||
*/

/*
 ||>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>||
*/



/*
||===============================================================================||
||							网站前台界面                                      				     ||
||------------------------------------------------------------------------------	 ||
||	*导航栏显示内容  															 ||
||  *激活账号功能					 											 ||
||===============================================================================||
*/
//前台管理页面
Route::Controller('/home/index','Home\IndexController');
Route::Controller('/cate','Home\ScreenController');
//Route::Controller('/center','Home\CenterController');
Route::get('/blog/{id}','Home\BlogController@blogshow');
Route::get('/list','Home\BlogController@listshow');
//Route::post('/comment/insert','Home\CommentController@insert');



/*
 ||<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<||
||							网站后台登录、注册									 ||
||------------------------------------------------------------------------------- 	 ||
||	* 评论文章、进入个人中心操作将需要登录、其他操作可无需登录			     ||
||	* 用户注册操作成功时将跳转至邮箱验证页面，用户需激活方可成为正式会员	 ||
||	* 找回密码也需进行邮箱验证													 ||
||===============================================================================||
*/
//后台登录页面  注意post get 的使用方式
Route::get('/Admin/login','LoginController@login');
Route::post('/Admin/login','LoginController@dologin');
Route::get('/Admin/logout','LoginController@logout');
Route::post('/Admin/user/setgroup','UserController@setgroup');
Route::post('/Admin/user/grouplimit','UserController@grouplimit');


/*
 ||<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<||
||							网站前台管理路由组									 ||
||------------------------------------------------------------------------------- 	 ||
||	* 评论文章、进入个人中心操作将需要登录、其他操作可无需登录			     ||
||	* 用户注册操作成功时将跳转至邮箱验证页面，用户需激活方可成为正式会员	 ||
||	* 找回密码也需进行邮箱验证													 ||
||===============================================================================||
*/
// 前台路由组
Route::group(['middleware' => 'home'],function(){
	Route::post('/comment/insert','Home\CommentController@insert');
	Route::Controller('/center','Home\CenterController');

});


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


