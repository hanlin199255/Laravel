<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
//引入特定库
use Gregwar\Captcha\CaptchaBuilder;

class CaptchaController extends Controller
{
    /**
    *验证码页面
    */
    public function createVcode()
    {
        ob_clean();//清除操作
         //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        // \Session::flash('milkcaptcha', $phrase); //debug
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
          // exit(); //debug
    }
}
