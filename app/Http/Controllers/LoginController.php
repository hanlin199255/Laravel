<?php

namespace App\Http\Controllers;

use DB;

use Hash;

use Crypt;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;



class LoginController extends Controller
{
    /**
     * 用户后台登录页面显示
     */
	public function login(){
		
		return view('admin.login');
	}
	
	/**
	 * 用户的登录操作
	 * 1先获取用户信息
	 * 2检测密码是否一致 Hash::check(参数1是原文密码,参数2是库的密码)  验证通过后让用户登录
	 */
	public function dologin(LoginRequest $request)
	{	
		
		//dd($request->all());

		$user = DB::table('user')
					->where('username',$request->input('username'))
					->first();
		
		session(['username'=>$user->username]);
		
		if($user){
			
			
		if(Hash::check($request->input('password'),$user->password))
		{
			session(['id'=>$user->id]);
			
			
			//记住我的操作
			if($request->input('remem')){
				$str = 'han:han';
				//加密
				$auth_user = Crypt::encrypt($str);
				//写入cookie
				\Cookie::queue('auth_user',$auth_user,60*24*30);
				
			}
			
			return redirect('/Admin')->with('success','登录成功');
			
		}else{
			return back()->with('error','登录失败');
		}
		
		}else{
			return back()->with('error','用户不存在');
		}
	}
	
	
	/**
	 * 退出登录
	 * 1销毁session 退出到登录页
	 */
	public function logout()
	{
		Session::forget(['id']);
		return redirect('/Admin/login');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}

