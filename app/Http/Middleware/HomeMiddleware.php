<?php

namespace App\Http\Middleware;

use Closure;

class HomeMiddleware
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
  	  	 $refer = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : ' ';
   		 if(session('id'))
    {
    	 return $next($request);
    
    }else{
   		  $url = url('/Admin/login').'?redirect='.$refer;
  		  return redirect($url)->with('error','用户未登录');
   		 }
    }
}