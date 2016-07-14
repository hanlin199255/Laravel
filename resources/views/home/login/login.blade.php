<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <link rel="shortcut icon" href="#" type="image/png">

        <title>{{Config('app.webname')}}-登录页面</title>

        <link href="{{ url('/admincss/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/admincss/css/style-responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">

            <form class="form-signin" action="{{ url('login') }}" method="post">
                <div class="form-signin-heading text-center">
                    <h1 class="sign-title">登录</h1>
                    <img src="{{ url('/admincss/images/login-logo.png') }}" alt=""/>
                </div>
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
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="请输入账号" autofocus name="username"  value="{{$data["uname"] or ''}}">
                    <input type="password" class="form-control" placeholder="请输入密码" name="password"  value="{{$data["password"] or ''}}">
                    <input type="text"  style="width:120px" class="form-control" placeholder="请输入验证码" name="code"  value="{{$data["code"] or ''}}"><img src="{{url('/home/login/Vcode').'/'.rand()}}"  style="cursor:pointer" align="top" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" >
                    {{csrf_field()}}
                    <button class="btn btn-lg btn-login btn-block" type="submit">
                        <i class="fa fa-check"></i>
                    </button>

                    <div class="registration">
                        没有账号？
                        <a class="" href="{{ url('register') }}">
                            注册
                        </a>
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" name="remem_me" value="1"> 记住我
                        <span class="pull-right">
                            <a data-toggle="modal" href="#myModal"> 忘记密码?</a>

                        </span>
                    </label>

                </div>

                <!-- Modal -->
                <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your e-mail address below to reset your password.</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
        
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-primary" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- modal -->

            </form>

        </div>



        <!-- Placed js at the end of the document so the pages load faster -->

        <!-- Placed js at the end of the document so the pages load faster -->
        <script src="{{ url('/admincss/js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ url('/admincss/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/admincss/js/modernizr.min.js') }}"></script>

    </body>
</html>
