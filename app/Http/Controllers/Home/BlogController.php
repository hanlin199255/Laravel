<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
   	public function getIndex()
   	{
   		return view('home.blog.blog');
   	}
}
