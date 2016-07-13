@extends('/admin/layout') 

@section('style')
  <link href="/laravel/public/admincss/css/style.css" rel="stylesheet">
  <link href="/laravel/public/admincss/css/jquery.stepy.css" rel="stylesheet">
  <link href="/laravel/public/admincss/css/style-responsive.css" rel="stylesheet">
@endsection

@section('contents')
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Form Wizard
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">Form Wizard</li>
            </ul>
        </div>
        <!-- page heading end-->
        <hr/>

 <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="square-widget">
                        <div class="widget-container">
                            <div class="stepy-tab">
                            </div>
                            
                           <!--h路径-->
                            <form  class="form-horizontal" action="/laravel/public/Admin/user/update" method="post">
                          
                              <!-- 判断是否显示验证 这里与主模板重复 只留下lavravel提示的blade模板提示信息显示块即可 -->
<!--                               @if(session('error')) -->
<!--                              <div class="alert alert-block alert-danger fade in">                   -->
<!--                                 <button data-dismiss="alert" class="close close-sm" type="button"> -->
<!--                                     <i class="fa fa-times"></i> -->
<!--                                 </button> -->
<!--                                 <strong>{{session('error')}}</strong>   -->
<!--                             </div> -->
<!--                               @endif -->
                        
                              
                              <!-- 此处表单需要做的验证 用户名不可以存在 密码两次必须正确 邮箱格式必须正确 ..laravel有vilidate方法  -->
                              <!-- 下面是laravel提供的blade模板提示信息显示块 -->
 							@if(count($errors) > 0)
                              <div class="alert alert-danger">
                              		<ul>
                              			@foreach($errors->all() as $error)
                              			 	<li>{{ $error }}</li>
                              			@endforeach
                              		</ul>
                              </div>
                              @endif
                            
                            
                                    <legend>基本信息</legend>
                                    <div class="form-group">
                                       <label class="col-md-2 col-sm-2 control-label" >用户名</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="Username" class="form-control" name="username"value="{{$userInfo->username}}" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">邮箱地址</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="Email Address" class="form-control"  name="email" value="{{$userInfo->email}}">
                                        </div>
                                    </div>

                             

                                
                                
                               
                                    <legend>其他信息</legend>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">电话</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="Phone" class="form-control" name="phone" value="{{$userInfo->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">昵称</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="Mobile" class="form-control" name="tname" value="{{$userInfo->tname}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">地址</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea rows="5" cols="60" placeholder="  Address" class="form-control" name="address" >{{$userInfo->address}}</textarea>
                                        {{csrf_field()}}   <!-- 注意添加token 不然不会提交 -->
                                        <input type="hidden" name="id" value="{{$userInfo->id}}"> <!-- 修改时ID也必须加上 -->
                                        </div>
                                    </div>
                             
								<input type="submit" class="btn btn-info finish" value="修改">
                                
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--body wrapper end-->
 
@endsection
@section('script')

<script src="/laravel/public/admincss/js/jquery-1.10.2.min.js"></script>
<script src="/laravel/public/admincss/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/laravel/public/admincss/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/laravel/public/admincss/js/jquery.validate.min.js"></script>
<script src="/laravel/public/admincss/js/jquery.stepy.js"></script>
<script src="/laravel/public/admincss/js/bootstrap.min.js"></script>
<script src="/laravel/public/admincss/js/modernizr.min.js"></script>
<script src="/laravel/public/admincss/js/jquery.nicescroll.js"></script>


<!--common scripts for all pages-->
<script src="/laravel/public/admincss/js/scripts.js"></script>
    /*=====STEPY WIZARD====*/

@endsection         