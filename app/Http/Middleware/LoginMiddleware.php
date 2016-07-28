<?php

namespace App\Http\Middleware;

use Closure;

use DB;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {	
    	//$refer = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : ' ';
    	if(!session('id'))
    	{
    		//$url = url('/Admin/login').'?redirect='.$refer;
    
    		return redirect('/Admin/login')->with('error','用户未登录');
    	 
    	}else{
    		$group_id = DB::table('user')
    		->leftjoin('groupaccess',"user.id","=","groupaccess.uid")
    		->where('user.id',Session('id'))->pluck('groupaccess.group_id');
    	    // dd($group_id);    group的id
    		$rules = DB::table('group_rules')->where("id",$group_id)->pluck('rules');
    
    		//dd($rules);    group的rules 1,2,3,4,5

    		
    		//查看当前请求的权限ID
    		$subject = preg_replace("/\?.+$/", "", $_SERVER["REQUEST_URI"]);
    		$subject = preg_replace("/\/\d+/", "", $subject);
    		$rule = DB::table('user_rule')->where('name',$subject)->where('status',1)->pluck('id');
    		
    		
    		
    		
    		//dd($rule);   //user_rule 的id
    		foreach($rule as $v){
    		if(!in_array($rule[0], explode(",",$rules[0])) && $rule[0])
    		{
    			
    			return redirect('/Admin')->with("error","您没有相关权限");
    		}
    		}
    	}
    	
        return $next($request);
    }
}
