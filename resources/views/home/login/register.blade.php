<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="li">
        <link rel="shortcut icon" href="#" type="image/png">

        <title>{{Config('app.webname')}}-注册页面</title>

        <link href="{{ url('/admincss/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/admincss/css/style-responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="{{ url('/js/html5shiv.js') }}"></script>
        <script src="{{ url('/js/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">

            <form class="form-signin" action="{{ url('/register') }}" method="post">
                <div class="form-signin-heading text-center">
                    <h1 class="sign-title">注册账号</h1>
                    <img src="{{ url('/admincss/images/login-logo.png') }}" alt=""/>
                </div>
                <div class="login-wrap">
                 @if(count($errors)>0)
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-body">
                                <!--statistics start-->
                                <div class="alert alert-block alert-danger fade in">                  
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>糟糕！</strong>
                                    <ul>
                                        @foreach( $errors->all() as $error)
                                        <li> {{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @endif
                @if(session('error'))
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-body">
                                <!--statistics start-->
                                <div class="alert alert-block alert-danger fade in">                  
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>糟糕！</strong>
                                    <ul>
                                        <li> {{session('error')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @endif
                    <p> 请在下方输入登录信息</p>
                    <input type="text" autofocus="" placeholder="请输入您的账号" class="form-control" name="username" value="">
                    <input type="password" placeholder="请输入您的密码" class="form-control" name="password" value="">
                    <input type="password" placeholder="请再次输入您的密码" class="form-control" name="repassword" value="">
                   
                    <div class="radios">
                        <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                            <input type="radio" checked="" value="man" id="radio-01" name="sex"> 先生
                        </label>
                        <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                            <input type="radio" value="women" id="radio-02" name="sex"> 小姐
                        </label>
                    </div>
                    <input type="text" autofocus="" placeholder="您的邮箱[用于找回密码]" class="form-control" name="email">
                    {{ csrf_field()}}
                     <input type="text" style="width:120px" class="form-control" placeholder="请输入验证码" name="vcode"  value="{{$data["code"] or ''}}"><img src="{{url('/home/login/Vcode').'/'.rand()}}"  style="cursor:pointer" align="top" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" >
                    <label class="checkbox">
                        <input type="checkbox"  name='agreement' value="agree this condition">我已经阅读并且同意 <a href="">《 NaN用户协议》</a>
                    </label>
                    <button type="submit" class="btn btn-lg btn-login btn-block">
                        <i class="fa fa-check"></i>
                    </button>

                    <div class="registration">
                        已有账号
                        <a href="{{url('/login')}}" class="">
                            登录
                        </a>
                    </div>

                </div>

            </form>

        </div>



        <!-- Placed js at the end of the document so the pages load faster -->

        <!-- Placed js at the end of the document so the pages load faster -->
        <script src="{{ url('/admincss/js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ url('/admincss/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/admincss/js/modernizr.min.js') }}"></script>

    </body>
</html>
