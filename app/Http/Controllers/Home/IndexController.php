<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
   
   public function getScreen()
   {
   	return view('home.screen');
   }
   
   
}
