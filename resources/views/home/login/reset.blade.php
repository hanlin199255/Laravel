<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <link rel="shortcut icon" href="#" type="image/png">

        <title>{{Config('app.webname')}}-找回密码</title>

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

            <form class="form-signin" action="{{ url('/forget') }}" method="post">
                <div class="form-signin-heading text-center">
                    <h1 class="sign-title">重置密码</h1>
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
                <div class="login-wrap">
                    <input type="password" class="form-control" placeholder="请输入新密码" autofocus name="password"  value="">   
                    <input type="password" class="form-control" placeholder="请再次输入密码" autofocus name="repassword"  value="">  
                    <input type="hidden" name="id" value="{{ $user['id'] }}">               
                    <input type="text"  style="width:120px" class="form-control" placeholder="请输入验证码" name="vcode"  value=""><img src="{{url('/home/login/Vcode').'/'.rand()}}"  style="cursor:pointer" align="top" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" >
                    {{csrf_field()}}
                    <button class="btn btn-lg btn-login btn-block" type="submit">
                        <i class="fa fa-check"></i>
                    </button>

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
