<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

class CommonController extends Controller
{
	/**
	 * 公有控制器
	 */
 	public function __construct()
 	{
 		/**
 		 * 验证登录状态 如果未登录则跳转到登录页
 		 */
 		if(!Session::has("userData"))
 		{
 			//return redirect("/laravel/public/Admin/login");
 			header("Location:/laravel/public/Admin/login");
 			exit;
 		}else{
 			//验证权限 当前登录用户是否有操作权限 userData->uid->rule 
 		}
 	}
    
}
