<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="/laravel/public/admincss/image/png">

    <title>{{config('app.webname')}} - Login</title>

    <link href="/laravel/public/admincss/css/style.css" rel="stylesheet">
    <link href="/laravel/public/admincss/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form name="login" class="form-signin" action="{{url('Admin/login')}}" method="post">
    				
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">登录</h1>
            <img src="/laravel/public/admincss/images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
        			@if(session('error'))
        <div class="alert alert-danger">
                <ul class="margin-bottom-none padding-left-lg">
                    <li>{{session('error')}}</li>
                </ul>
		</div>
		@endif
             		  @if(count($errors) > 0)
                              <div class="alert alert-danger">
                              		<ul>
                              			@foreach($errors->all() as $error)
                              			 	<li>{{ $error }}</li>
                              			@endforeach
                              		</ul>
                              </div>
                              @endif               
            <input type="text" name="username" class="form-control" placeholder="请输入用户名" autofocus >
            <input type="password" name="password" class="form-control" placeholder="请输入用户密码">
            <input type="hidden" name="redirect" value="{{ $redirect or ' '}}">           
			{{csrf_field()}}

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                	没有用户?
                <a class="" href="registration.html">
                                    申请注册
                </a>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="1" name="remem"> 保存用户名
                <!-- 
                	保存用户名和密码需要给用户写session
                	将用户的用户名和密码做双向加密
                	把字符串以COOKIE形式写给客户端
                	如果某天session过期
                	检测用户里有没有特殊的COOKIE
                	如果有则反解析 把用户名和密码提取出来 检测是否合法 是否是对的
                	然后再写SESSION
                	但这样不安全 会被截获
                 -->
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> 忘记密码?</a>

                </span>
            </label>

        </div>



    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
