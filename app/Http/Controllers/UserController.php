<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;       //提示DB找不到时千万记得引用

use Hash;    //Hash是静态方法 记得引用

class UserController extends Controller
{
	/**
	 * 后台用户的添加页面显示
	 */
    public function getAdd()
    {
    	return view('user.add');
    }
    
    /**
     * 声明添加方法
     */
    public function postInsert(Request $request)
    {
    	
    	/** 
    	 * 手动验证的方法
    	 * if(!$request->input('username'))
    	 *{
    	 *	return back()->with('error','请填写用户名!');   //with用来做闪存操作 将信息存入session 供用户下次使用 这里是闪存了添加用户时的验证信息 闪存只在跳转的时候用
    	 *}
    	 */
    	
    	 
    	 /**
    	  * laravel内置表单验证
    	  * validate接受三个参数
    	  * @param1 第一个是你传递过来参数的请求
    	  * @param2第二个是当前要检测的规则
    	  * @param3第三个是对规则进行翻译 做文本的解释
    	  */
    	 $this->validate($request,[
    	 	  'username' => 'required',
			  'password'  => 'required',
    	 	  'repassword' => 'required|same:password',
			  'email' => 'required|email'
			],['username.required' => '请填写用户名',
			 'password.required' => '密码必须填写',
			 'repassword.required' => '确认密码必须填写',
			 'repassword.same' => '两次密码输入不一致',
			 'email.required' => '邮箱不能为空',
			 'email.email' => '邮箱格式错误'
			]);
    	 
    	 
    		/**
    		 * 执行数据库的添加操作
    		 * 利用only提取部分参数
    		 */     	 	  
    	     $data = $request ->only(['username','password','email','phone','tname','address']);
    	     $data['password'] = Hash::make($data['password']);
    	     $data['token'] = str_random(50);   //str_random封装好的函数生成50位的随机字符串
    	     //dd($data);
    	     
    	     
    		 $res = DB::table('user')->insert($data);
    		 if($res){
    		 	return redirect('Admin/user/index')->with('success','添加成功');  //如果执行成功跳转到用户首页
    		 }else{
    		 	return back()->with('error','添加失败');
    		 }
    		 //dd($request->all());
    }
    
    
   /**
    * 用户列表页
    * 1.读取数据 并且分页(model+分页类 两类合作)
    * 创建Model->获取总数->创建分页对象->Limt参数->当前页面读取哪些信息
    * 2分配到模板执行显示
    * return view() 注意view参数的配置 参数1需要用到的模板
    *                                             参数2需要用到的参数 需要解析的参数都要放进来
    * 此代码对where使用函数进行用户搜索的筛选功能 使用use时为了在闭包里对外层变量$request进行了调用
    */
    public function getIndex(Request $request)
    {
    	$users = DB::table('user')
    			 	->where(function($query)use($request)   
    			 	{
    			 		$query->where('username','like','%'.$request->input('keywords').'%');
    			 	})
    				->paginate($request->input("num",5));
    	//dd($users);
    	
    	return view('user.index',['users' =>$users,'request'=>$request->all()]);  
    	
    }

  	/**
  	 * 用户修改
  	 * 1读取数据库,2显示模板
  	 */
    public function getEdit($id)
    {
    	$res=DB::table('user')->where('id', '=', $id)->first();
    	//dd($res);
    	return view('user.edit',['userInfo' =>$res]);
    	
    }
    
    public function postUpdate(Request $request)
    {
    	
    	
    	$data = $request->only(['username','password','email','phone','tname','address']);
    	$this->validate($request,[
    			'username' => 'required',
    			'email' => 'required|email'
    			],['username.required' => '请填写用户名',
    			'email.required' => '邮箱不能为空',
    			'email.email' => '邮箱格式错误'
    			]);
    	$res = DB::table('user')->where('id','=',$request->input('id'))->update($data); 
    	if($res)
    	{
    		return redirect('/Admin/user/index')->with('success','更新成功');
    	}else{
    		return back()->with('error','更新失败');
    	}
    }
    
}
