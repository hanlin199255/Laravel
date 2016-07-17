<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
    public function insert(Request $request)
    {
    	$this->validate($request,[
    			'content' => 'required',
    			
    			],['content.required' => '评论内容不能为空',
    			
    			]);
    	
    		$data = $request->only(['article_id','content']);
    		$data['user_id'] = session('id');
    		
    		if(DB::table('comment')->insert($data)){
    			return back()->with('info','评论成功');
    		}else{
    			return back()->with('info','评论失败');
    		}
    }
    
    
   
    
    
}
