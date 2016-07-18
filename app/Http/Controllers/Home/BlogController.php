<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use DB;

use Session;

use App\Http\Controllers\CateController;

class BlogController extends Controller
{
   	public function getIndex()
   	{
   	}
   	
   	/**
   	 * 显示文章详情
   	 * 查询时有必要加select函数  如果不加关联表将会覆盖主表的同名ID 面对冲突需要做别名
   	 * 也可以通过select把表里单个需要的提取出来
   	 */
   	
   	public function blogshow($id)
   	{
   		$article = DB::table('article')
   				  ->select('user.*','article.*','cates.name as catename')    
   				  ->leftjoin('user',"user.id","=","article.user_id")
   				  ->join('cates',"cates.id","=","article.cate_id")
   				  ->where('article.id','=',$id)
   				  ->first();
   		//dd($article);
   		
   		//读取所对应的评论信息
   		$comment= DB::table('comment')
   						->select('user.username','comment.*')
   						->join('user','user.id','=','comment.user_id')
   						->where('article_id',$id)
   						->get();
   		//dd($comment);
   		$count = count($comment);
   		//dd($count);
   		
   		
   		/**
   		 * 获取顶级分类  从catecontroller获取
   		 * @return Ambigous <\Illuminate\View\View, \Illuminate\Contracts\View\Factory, mixed, \Illuminate\Foundation\Application, \Illuminate\Container\static>
   		 */
   		
   		$cates = CateController::getTopcate();
   		
   		//dd($cates);
   		
   		/**
   		 *获取推荐文章列表 
   		 */
   		$recs = DB::table('article')->where('rec','1')->orderBy('id','desc')->limit(3)->get();
   		//dd($recs);
   		
   		/**
   		 * 获取所有分类信息 做分类具体页
   		 */

   		//$allCates= CateController:: getCatesByPidArr($cates, 0);
 
   		
   		//展现内容
   		return view('home.blog.show',
   				['article'=>$article,
   				'comment'=>$comment,
   				'count'=>$count,
   				'cates'=>$cates,
   				'recs'=>$recs]);
   	}
   	
   	

   	

   	
   	/**
   	 * 列表显示的方法
   	 * han 脑子要往前去想事情
   	 * @param Request $request
   	 * @return Ambigous <\Illuminate\View\View, \Illuminate\Contracts\View\Factory, mixed, \Illuminate\Foundation\Application, \Illuminate\Container\static>
   	 */
   	
   	
   	public function listshow (Request $request)
   	{	
   		$article = DB::table('article')
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
   		
   		return view('home.blog.blog',
   				['article'=>$article,
   				'cates'=>$cates,
   				'recs'=>$recs,
   				'allcates'=>$allcates,
   				'request'=>$request->all()    //切记此处要加此参数保证分页不出错,条件筛选时
				]);
   	}
   	
}
