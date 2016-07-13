<?php

namespace App\Http\Middleware;

use Closure;

use Session;
class CommonMedilleware
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
    	
  if ( !session('id')&& !preg_match("/^\/laravel\/public\/Admin\/login/", $_SERVER['REQUEST_URI'])){
    	{  	 
    		return redirect("/Admin/login");
    	}
     return $next($request);
    }
}

}