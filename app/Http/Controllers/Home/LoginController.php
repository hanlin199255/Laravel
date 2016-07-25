<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Hash,Crypt,Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use DB;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ForgetRequest;
use Session;
class LoginController extends Controller
{
    /**
    *前台的用户登录页面显示
    */
    public function login(request $request)
    {
    	$redirect = $request->get('redirect');
        return view('home.login.login',['redirect'=>$redirect]);
    }

    /**
    *前台的用户登录页面验证
    */  
    public function dologin(LoginRequest $request)
    {
        //检测验证码
        $code = $request->input('vcode');
        //如果两次密码不一致 
        if($code != session('vcode')) {
            return back()->with('error','验证码错误！');
        }
        //获取用户的信息
        $user = DB::table('user')
            ->where('username',$request->input('username'))
            ->first();
        if(!$user)
        {
        	return back()->with('error','用户不存在');
        }
        //检测密码是否一致
        if(Hash::check($request->input('password'), $user->password)) {
            //用户可以登录
            session(['id' =>$user->id]);
            //记住我
            if($request->input('remem_me')) {
                $str = 'admin|admin';
                //加密
                $auth_user = Crypt::encrypt($str);
                //写入cookie
                \Cookie::queue('auth_user',$auth_user, 60*24*30);
            }
			$url = $request->input('redirect','/center?id={$user->id}');
            return redirect($url)->with('success', '登录成功');
        } else {
            return back()->with('error','登录失败,密码错误');
        }
    }
    
    /**
    *前台的用户注册页面显示
    */    
    public function register()
    {
        return view('home.login.register');
    }

     /**
    *前台的用户注册页面验证
    */  
     public function doregister(RegisterRequest $request)
     {
        //检测验证码
        $code = $request->input('vcode');
        //如果两次密码不一致 
        if($code != session('vcode')) {
            return back()->with('error','验证码错误！');
        }
        //执行插入操作
        $data = $request->only(['username','password','sex','email']);
        $data['password'] = Hash::make($data['password']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['pay'] = 0;
        $data['token'] =  str_random(50);//生成一个长度为50的字符串
        //执行插入
        if($id = DB::table('user')->insertGetId($data)){ //若数据库有递增的ID可以用这个
            DB::table('groupaccess')->insert(['uid'=>$id,'group_id'=>1]);
            // dd($data['email'],$id,$data['token']);
            $this->sendActiveMail($data['email'],$id,$data['token']);           
            // 直接登录
            session(['id' =>$id]);
            return view('home.login.success');
        } else {
            return back()->with('error','注册失败，请联系管理员');
        }
     }


     /**
     *向用户发送激活邮件
     */
     private function sendActiveMail($email, $id, $token)
     {
        // Mail::raw('恭喜您注册成功,请点击下面的连接完成激活<a href="www.ball.com/jihuo?id='.$id.'&token='.$token.'">激活</a>',function ($message)use(Email) {
        //     $message->subject('注册成功提醒邮件');
        //     $message->to($email);
        // });
         // $user = User::findOrFail($id);
        //将模版解析 并且发送邮件
        Mail::send('mail.active', ['email'=>$email,'id'=>$id,'token'=>$token], function ($message) use($email) {
            $message->to($email)->subject('注册成功提醒邮件');
        });
     }

     //发送邮件
     public function send()
     {
        // Mail::raw('恭喜您注册成功',function ($message) {
        //     // $message->subject('提醒邮件');
        //     $message->from('18513579408@163.com')
        //     $message->to('8656755@qq.com')->subject('提醒邮件');
        // });

        $data = ['email'=>'8656755@qq.com', 'name'=>'liteng', 'uid'=>'44', 'activationcode'=>'123456'];
            Mail::send('activemail', $data, function($message) use($data)
            {
                $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
            });
     }

     // 激活邮件
     public function active(Request $request)
     {
        //获取id
        $id = $request->input('id');
        //读取数据库
        $data = DB::table('user')->where('id',$id)->first();
        // dd($data); //debug
        //对比
        if($request->input('token') == $data->token && $data->status == 1) {
            $tmp['status'] = 2;
            $tmp['updated_at'] = date('Y-m-d H:i:s');
            if(DB::table('user')->where('id',$id)->update($tmp)) {
                //重置
                $this->resetToken($id);
                return redirect("/login")->with('success','激活成功');
            } else {
                return redirect('/')->with('error','激活失败1');
            }
        } else{
         return redirect('/')->with('error','激活失败2');
        }
     }

     //重置秘钥token

     private function resetToken($id)
     {
        DB::table('user')->where('id',$id)->update([
            'token' =>str_random(50)
        ]);
     }
        

    //找回密码
     public function forget()
     {
        return view('home.login.forget');
     }
    
    //处理邮箱  检测是否存在并发送找回密码的邮件
     public function doforget(ForgetRequest $request)
     {

        //检测验证码
        $code = $request->input('vcode');
        //如果两次密码不一致 
        if($code != session('vcode')) {
            return back()->with('error','验证码错误！');
        }
        //检测邮箱格式以及邮箱是否存在
        $user = DB::table('user')->where('email',$request->input('email'))->first();
        //发送邮件找回
        $this->sendFoundMail($user->email,$user->id,$user->token);
        //执行跳转
        return redirect('/')->with('info','找回密码邮件已经发送到你的邮箱中，请注意查收');
     }

     private function sendFoundMail($email,$id,$token)
     {
         //将模版解析 并且发送邮件
        Mail::send('mail.found', ['email'=>$email,'id'=>$id,'token'=>$token], function ($message) use($email) {
            $message->to($email)->subject('找回密码提醒邮件'); //to 用来接受收件人的地址。subject 用来接受主题的
        });
     }

     //重置密码表单
     public function reset(Request $request)
     {
        //获取id和token
        $user = DB::table('user')->where('id',$request->input('id'))->first();
        //判断
        // if(empty($user)){
        //     return redirect('/');
        // }

        if($user['token'] === $request->input('token')){
            //显示表单内容
            return view('home.login.reset',['user' => $user]);
        }
     }

     //执行重置密码操作
     public function doreset(Request $request)
     {        
        //检测验证码
        $code = $request->input('vcode');
        //如果两次密码不一致 
        if($code != session('vcode')) {
            return back()->with('error','验证码错误！');
        }
        //加密密码
        $data['password'] = Hash::make($request->input('password'));
        $data['token'] = str_random(50);
        //更新
        if(DB::table('user')->where('id',$request->input('id'))->update($data)){
            return redirect('/')->with('info','重置密码成功');
        } else {
            return back()->with('error','重置密码失败');
        }
     }
     
     
     /**
      * 退出登录
      * 1销毁session 退出到登录页
      */
     public function logout()
     {
     	Session::forget(['id']);
     	return redirect('/login');
     }
}
