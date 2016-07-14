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
    	$groups = DB::table('group_rules')->get();
    	return view('user.add',compact('groups'));
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
    	     $data = $request ->only(['id','username','password','email','phone','tname','address']);
    	     $data['password'] = Hash::make($data['password']);
    	     $data['token'] = str_random(50);   //str_random封装好的函数生成50位的随机字符串
 
    		 $res = DB::table('user')->insertGetId($data);	 
    		 if($res){
    		 	
    		 	DB::table('groupaccess')->insert(["uid"=>$res,"group_id"=>$request->get('group_id')]);
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
    * 
    * 
    * 查询用户信息 user user_group关联  left join user.id=user_group.id
    */
    public function getIndex(Request $request)
    {
    	$users = DB::table('user')
    				->leftjoin('groupaccess',"user.id","=","groupaccess.uid")
    			 	->where(function($query)use($request)   
     			 	{
    			 		$query->where('user.username','like','%'.$request->input('keywords').'%');
     			 	})
    				->paginate($request->input("num",5));
    	//dd($users);
    	//foreach($users as $user){var_dump($user);}
    	$groups = DB::table("group_rules")->get();
    	return view('user.index',['users' =>$users,'request'=>$request->all(),'groups' =>$groups ]);  
    	
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
    
    
    /**
     * 用户的删除操作
     */
    public function getDelete($id){
    	if(DB::table('user')->where('id',$id)->delete())
    	{
    		DB::table('groupaccess')->where('uid',$id)->delete();
    	return redirect('/Admin/user/index')	->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');
    	}
    }
    
    /**
     * Ajax请求过来修改用户对应分组的功能
     */
    public function setgroup(Request $request){
		
    	if (false !== DB::table('groupaccess')->where('uid',$request->get('uid'))->update(['group_id'=>$request->get('group_id')]))
    	{
    		return response()->json(['status' =>1,'info'=>'修改分组成功']);
    	}else{
    		return response()->json(['status' =>0,'info'=>'修改分组失败']);
    	}
    	
    }
    
    /**
     * 用户权限表
     */
    public function getGrouplist(Request $request)
    {	
    	$group = DB::table('group_rules')->get();
    	$users_rule = DB::table("user_rule")->get();
    	return view('user.grouplist',['group' =>$group,'users_rule' =>$users_rule ]);
    }
    
    
    /**
     * ajax传参过来修改group权限
     * 	//查询表group_rules判断添加还是删除权限  返回一个字符串形式 1,2,3
     * 	//修改表group+rules数据并返回结果
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function grouplimit(Request $request)
    {
    	
    	$res= DB::table('group_rules')->where('id',$request->get('id'))->pluck("rules"); 
    	//dd($res);
    	$rule =explode(',', $res[0]);
    	//dd($rule);
		if(false != $key =array_search($request->get('rules'),$rule))
		{
			unset($rule[$key]);
		}else{
			array_push($rule, $request->get('rules'));
		}
	
		if(false !==DB::table('group_rules')->where('id',$request->get('id'))->update(['rules' =>join(",",$rule)]))
		{
			
			return response()->json(["status"=>1,"info"=>"修改权限成功"]);
		}else{
			return response()->json(['status' =>0,'info'=>'修改权限失败']);
		}
    }
    
    /**
     * 启用相应权限显示模板
     */
    public function getRuleindex()
    {
    	
    	$rules = DB::table('user_rule')->get();
    	return view('user.rule',compact('rules'));
    }
    
    public function postRules(Request $request)
    {
    	if($request->get('rule') != null){
    	$rules = join (',',$request->get('rule'));
    	}else{
    		return back()->with("error","参数未选中");
    	}
    	
    	//dd($rules);
    	//dd($request->get("rule"));
    	//dd($request->get("submit"));
    	//dd($request->all());
    	switch ($request->get("submit"))
    	{
    		
    		case "选中有效":
    		
    			DB::update("UPDATE user_rule SET status='1' WHERE id in ({$rules})");
    			break;
		
    		case "选中禁用":
    			DB::update("UPDATE user_rule SET status='0' WHERE id in ({$rules})");
    			break;
    			
    		default:
    			dd('未定义');
    	}
    	return back()->with("success","状态变更成功");
    	
    }
    
    
    
}
