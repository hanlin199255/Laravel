<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="/laravel/public/admincss/image/png">

  <title>AdminEx</title>
	
  @section('style')
  
	
  <!--icheck-->
  <link href="/laravel/public/admincss/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="/laravel/public/admincss/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="/laravel/public/admincss/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="/laravel/public/admincss/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="/laravel/public/admincss/css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="/laravel/public/admincss/js/morris-chart/morris.css">

  <!--common-->
  <link href="/laravel/public/admincss/css/style.css" rel="stylesheet">
  <link href="/laravel/public/admincss/css/style-responsive.css" rel="stylesheet">

  @show


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="/laravel/public/admincss/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="/laravel/public/admincss/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/laravel/public/admincss/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="{{url('/Admin')}}"><i class="fa fa-home"></i> <span>主页</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-underline"></i> <span>用户管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/Admin/user/add')}}"> 用户添加</a></li>
                         <li><a href="{{url('/Admin/user/index')}}"> 用户列表</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                    </ul>
                </li>
                
               <li class="menu-list"><a href=""><i class="fa  fa-list-ol"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/Admin/actype/add')}}"> 分类添加</a></li>
                         <li><a href="{{url('/Admin/actype/index')}}"> 分类列表</a></li>
                    </ul>
                </li>
                
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web Development</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="/laravel/public/admincss/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/laravel/public/admincss/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/laravel/public/admincss/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/laravel/public/admincss/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/laravel/public/admincss/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/laravel/public/admincss/images/photos/user-avatar.png" alt="" />
                            John Doe
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->
        </div>  
        <!-- header section end-->
        
        @if(session('success'))
        <div class="alert alert-success">
                <ul class="margin-bottom-none padding-left-lg">
                    <li>{{session('success')}}</li>
                </ul>
		</div>
		@endif
		
		@if(session('error'))
        <div class="alert alert-danger">
                <ul class="margin-bottom-none padding-left-lg">
                    <li>{{session('error')}}</li>
                </ul>
		</div>
		@endif
		
         @yield('contents')
        <!-- page heading start-->     <!-- page heading end-->
        
        <!--body wrapper start-->      <!--body wrapper end-->
		@show
        
        
        <!--footer section start-->
        <footer>
            2016 &copy; Not a Number <a href="" target="_blank">H.L and L.T</a>京ICP证00000999
            <div data-sudaclick="blk_footer" class="footer" id="footer">
                    <p><a target="_blank" href="#">京网文[2014]2045-295号</a>&#12288;<a target="_blank" href="#">互联网新闻信息服务许可</a></p> 
                    <p><a target="_blank" href="#">国家药监局（京）-经营性-2014-0004</a>&#12288;<a target="_blank" href="">京教研[2002]7号</a>&#12288;<a target="_blank" href="">电信业务审批[2001]字第379号</a></p>
                    <p><a target="_blank" href="#">增值电信业务经营许可证B2-20090108</a>&#12288;<a target="_blank" href="">电信与信息服务业务经营许可证000007号</a>&#12288;<a target="blank" href="">京卫网审[2015]第0749号</a></p>
					<p><a target="_blank" href="#">广播电视节目制作经营许可证（京）字第828号</a> <a target="_blank" href="2">甲测资字1100078</a> <a target="_blank" href="">京公网安备11000002000016号</a></p>
                    </div>
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

@section('script')
<!-- Placed js at the end of the document so the pages load faster -->
<script src="/laravel/public/admincss/js/jquery-1.10.2.min.js"></script>
<script src="/laravel/public/admincss/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/laravel/public/admincss/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/laravel/public/admincss/js/bootstrap.min.js"></script>
<script src="/laravel/public/admincss/js/modernizr.min.js"></script>
<script src="/laravel/public/admincss/js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="/laravel/public/admincss/js/easypiechart/jquery.easypiechart.js"></script>
<script src="/laravel/public/admincss/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="/laravel/public/admincss/js/sparkline/jquery.sparkline.js"></script>
<script src="/laravel/public/admincss/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="/laravel/public/admincss/js/iCheck/jquery.icheck.js"></script>
<script src="/laravel/public/admincss/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="/laravel/public/admincss/js/flot-chart/jquery.flot.js"></script>
<script src="/laravel/public/admincss/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="/laravel/public/admincss/js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="/laravel/public/admincss/js/morris-chart/morris.js"></script>
<script src="/laravel/public/admincss/js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="/laravel/public/admincss/js/calendar/clndr.js"></script>
<script src="/laravel/public/admincss/js/calendar/evnt.calendar.init.js"></script>
<script src="/laravel/public/admincss/js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="/laravel/public/admincss/js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="/laravel/public/admincss/js/dashboard-chart-init.js"></script>
@show
</body>
</html>
