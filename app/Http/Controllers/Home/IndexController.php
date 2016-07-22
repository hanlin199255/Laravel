<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\CateController;

class IndexController extends Controller
{
   public function getIndex()
   {
   	$allcates = CateController::getCatesByPid(0);
   	$user = DB::table('user')->get();
   	$article = DB::table('article')
   				->select('user.tname','article.*','cates.name as catename')
   				->join('user','user.id','=','article.user_id')
   				->join('cates','cates.id','=','article.cate_id')
   				->where('rec',1)->orderby('id','desc')->limit(4)->get();
   	 return view('welcome',['allcates'=>$allcates,'user'=>$user,'article'=>$article]);
   }
   
   public function getAboutus()
   {
   	return view('home.aboutus');
   }
   
   public function getTeam()
   {
   	return view('home.team');
   }
   
   public function getTeam1()
   {
   	return view('home.team1');
   }
   public function getTeam2()
   {
   	return view('home.team2');
   } 
   public function getContact()
   {
   	return view('home.contact');
   }
   


   
   
}
