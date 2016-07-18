<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\CateController;

class ScreenController extends Controller
{
    public function getScreen(Request $request)
    {   		$article = DB::table('article')
   					->where(function($query)use($request)
   					{
   						if($request->has('cate'))
   						{
   							$query->where('path','like','%'.','.$request->input('cate').'%')
   									   ->orwhere('cate_id',$request->input('cate'));
   						}
   						if($request->has('user'))
   						{
   							$query->where('user_id',$request->input('user'));
   						}
   					
   						if($request->has('keyword')){					//搜索条件查询
   							$query->where('title','like','%'.$request->input('keyword').'%')
   									  ->orwhere('content','like','%'.$request->input('keyword').'%')
   									  ->orwhere('tname','like','%'.$request->input('keyword').'%');
   						}
   					})
   					->select('article.*','user.tname','cates.name as catename')
   					->leftjoin('user','user.id','=','article.user_id')
   					->join('cates','cates.id','=','article.cate_id')
   					->orderby('id','desc')->paginate(2);
   		
   				
   		$cates = CateController::getTopcate();
   		
   		
   		$recs = DB::table('article')->where('rec','1')->orderBy('id','desc')->limit(3)->get();
   		
   		$allcates = CateController::getCatesByPid(0);
   		//dd($allcates);
   		
   		return view('home.screen',
   				['article'=>$article,
   				'cates'=>$cates,
   				'recs'=>$recs,
   				'allcates'=>$allcates,
   				'request'=>$request->all()    //切记此处要加此参数保证分页不出错,条件筛选时
				]);
   	}
    	
}
