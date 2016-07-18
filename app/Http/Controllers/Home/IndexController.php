<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use DB;

class IndexController extends Controller
{
   public function getIndex()
   {
   	 return view('welcome');
   }
   
   public function getAboutus()
   {
   	return view('home.aboutus');
   }
   
   public function getTeam()
   {
   	return view('home.team');
   }
   
   public function getContact()
   {
   	return view('home.contact');
   }
   


   
   
}
