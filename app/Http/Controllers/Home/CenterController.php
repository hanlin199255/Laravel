<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RepasswordRequest;
use App\Http\Controllers\Controller;
use DB;
use Config;
use Hash;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        // if($id = $request->input('id') !== session('id')){
        //   return redirect('/login')->with('error','请登录');
        // }
        // $data = DB::table('user')
        // ->join('article','user.id','=','article.user_id')
        // ->join('comment','user.id','=','comment.uid')
        // ->select('user.*','article.title','article.pic','article.cate_id','article.created_at','comment.content','comment.atime','comment.uname')
        // ->get();


        // $id = $request->input('id');
        $id = session('id');
        // dd($data);//debug
        $data = DB::table('user')->where('id','=',$id)->first();
        $article = DB::table('article')->where('user_id','=',$id)->get();
        $comment = DB::table('comment')->where('user_id','=',$id)->get();
        //查找id为当前用户id的购买和所得记录
        $reward_buy = DB::table('reward')->where('buy_id',$id)->get();
        $reward_sell = DB::table('reward')->where('sell_id',$id)->get();
        //对id为当前用户的购买文章进行遍历，得到支付的总次数以及总金额
        $buy_times = 0;
        $buy_total = 0;
        foreach ($reward_buy as $k1 => $v1) {
            ++$buy_times;
            $buy_total += $v1->pay;
        }
        //对id为当前用户通过文章获得的金钱进行遍历，得到获得金钱总金额
        $sell_total =0;
        foreach ($reward_sell as $k2 => $v2) {
           $sell_total += $v1->pay;
        }
        // dd($buy_times,$buy_total,$sell_total);//debug
        // dd($reward_buy,$reward_sell); //debug
        // dd($data,$article,$comment);
        return view('home.center.index',['data'=>$data,'article'=>$article,'comment'=>$comment,'buy_times'=>$buy_times,'buy_total'=>$buy_total,'sell_total'=>$sell_total]);
    }

    /**
     * 显示个人资料的详情
     *
     */
    public function getDetails(Request $request)
    {
       // if($id = $request->input('id') !== session('id')){
       //    return redirect('/center')->with('error','访问地址非法');
       //  }
      $id = session('id');
    	$data = DB::table('user')->where('id','=',$id)->first();
    	return view('home.center.details',['data'=>$data]);
    }

    public function postDetails(Request $request)
    {
       // if($id = $request->input('id') !== session('id')){
       //    return redirect('/center')->with('error','访问地址非法');
       //  }
       $id = session('id');      
    	$data = $this->dealRequest($request);
    	$data['updated_at'] = date('Y-m-d H:i:s');
    	// 插入数据库
        if(DB::table('user')->where('id',$data['id'])->update($data)){
            return redirect('/center')->with('success','修改成功！');
        } else {
            return back()->with('error', '修改失败');
        }
    }

    /**
    * 处理数据
    */
    private function dealRequest(Request $request)
    {
        $data = $request->except(['_token']);
        //文件上传
        if($request->hasFile('avatar')) {
            //拼接文件名称
            $pathname = time().rand(100000,999999).'.'.$request->file('avatar')->getClientOriginalExtension();
            //上传文件
            $request->file('avatar')->move(Config::get('app.upload_dir') ,$pathname);
            //拼接路径字段
            $data['avatar'] = trim(Config::get('app.upload_dir').$pathname,'.');
        }
        // dd($data);
        //返回数据
        return $data;
    }

    /**
    * 修改密码
    */
  	public function getNewpassword(Request $request)
  	{
       // if($id = $request->input('id') !== session('id')){
       //    return redirect('/center')->with('error','访问地址非法');
       //  }
  		$id = session('id');
  		return view('home.center.newpassword',['id'=>$id]);
  	}

  	/**
    * 修改密码操作
    */
  	public function postNewpassword(RepasswordRequest $request)
  	{
  		// $id = $request->input('id');
      $id = session('id');
  		$user = DB::table('user')->where('id','=',$id)->first();  		
        //检测密码是否一致
        if(Hash::check($request->input('password'), $user->password)) {
        	$data['password'] = Hash::make($requset->input('password'));
        	$data['created_at'] = date('Y-m-d H:i:s');        	
     		if(DB::table('user')->where('id',$id)->update($data)){
            return redirect('/center')->with('success','修改密码成功！下次登录请使用新密码');
	        } else {
	            return back()->with('error', '修改密码失败');
	        }
  		} else {
  			return back()->with('error', '密码错误，请再次输入');
  		}   
    }

    // 获取我的文章页面
    // public function getMyarticle()
    // {
    //     return view('home.center.myarticle');
    // }


    


    /**
    * 充值页面
    */
    public function getChongzhi(Request $request)
    {
      // $money = session('money');
      return view('home.center.chongzhi');
    }

    /**
    * 充值支付页面
    */
    public function getChongpay(Request $request)
    {
      // $id = $request->input('id');
      $id = session('id');
      $money = $request->input('money');
      $request->session()->flash('money', $money);
      return view('home.center.chongpay',['money'=>$money]);
    }
   
     /**
    * 充值支付成功页面
    */
    public function getChongsuccess(Request $request)
    {
      $id = session('id');
      // $money = $request->input('money');
      $money = session('money');  
      $money = 2000;//debug
      //对提现流水表进行传入数据
      $czData['c_id'] = $id;
      $czData['c_pay'] = $money;
      $czData['c_time'] = date('Y-m-d H:i:s');
      //对用户表进行传入数据
      $user = DB::table('user')->where('id',$id)->first();
      // dd($user);debug
      $uData['pay'] = $user->pay + $money;
      // dd($uData['pay']);//debug
      $uData['updated_at'] = date('Y-m-d H:i:s');
      // dd($uData,$czData);
      //自动事务操作
      $info = DB::transaction(function() use ($czData,$uData,$id){
        DB::table('chongzhi')->insert($czData);
        DB::table('user')->where('id',$id)->update($uData);
      });
      if(!$info){

         return view('home.center.success');
       } else {
        return back()->with('error','充值失败,请联系管理员');
       }
     }
  /**
    * 提现页面
    */
    public function getTixian(Request $request)
    {

      return view('home.center.tixian');
    }

    /**
    * 提现成功页面
    */
    public function postTipay(Request $request)
    {
       $id = session('id');
       $txData = $request->except('_token');
       // dd($txData);
      // $money = session('money');
      //对提现流水表进行传入数据
      // $txData['c_id'] = $id;
      // $txData['c_pay'] = $money;
      $txData['t_time'] = date('Y-m-d H:i:s');
      $txData['t_id'] = $id;
      //对用户表进行传入数据
      $user = DB::table('user')->where('id',$id)->first();
      // dd($user);//debug
      $uData['pay'] = $user->pay - $txData['t_pay'];
      // dd($uData);
      if($uData['pay']<0){

        return back()->with('txerror','提现失败，账户余额不足！');
      }
      // dd($uData['pay']);//debug
      $uData['updated_at'] = date('Y-m-d H:i:s');
      // dd(DB::table('user')->where('id',$id)->update($uData));
      // dd(DB::table('tixian')->insert($txData));
      //自动事务操作
     $info = DB::transaction(function() use ($txData,$uData,$id){
        DB::table('tixian')->insert($txData);
        DB::table('user')->where('id',$id)->update($uData);
      });


      // dd($info);
      if(!$info){

         return view('home.center.tisuccess');
       } else {
        return back()->with('txerror','提现失败,请联系管理员');
       }


    }






     
    
}
