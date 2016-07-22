<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{Config('app.webname')}}-yield('title')</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
      <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
<!-- <link href='http://fonts.useso.com/css?family=Oxygen|Lato:300|Open+Sans:300' rel='stylesheet' type='text/css'> -->




    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="shortcut icon" href="#" type="image/png">

  <link href="{{ url('/admincss/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/admincss/css/style-responsive.css') }}" rel="stylesheet">
   <!-- CSS
  ================================================== -->
   <!--  <link href='http://fonts.useso.com/css?family=Roboto:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Nova+Square' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="{{ url('/home/styles/style.css') }}" />
    <link rel="stylesheet" href="{{ url('/home/styles/inner.css') }}" />    
    <link rel="stylesheet" href="{{ url('/home/styles/color.css') }}" />
    <link rel="stylesheet" href="{{ url('/home/styles/layout.css') }}" />
    <link href="{{ url('/home/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ url('/admincss/style.css') }}" rel="stylesheet">
    
    <link href="{{ url('/home/css/animate-custom.css') }}" rel="stylesheet">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script type="text/javascript" src="http://ajax.useso.com/ajax/libs/jquery/1.7/jquery.js"></script>-->
    <script type="text/javascript" src="{{url('/home/jquery-1.8.3.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/home/js/bootstrap.min.js') }}"></script>
    
    <!-- Responsive menu -->
    
    <script src="{{ url('/home/js/modernizr.custom.js') }}"></script>
    
    <script src="{{ url('/home/js/jquery.dlmenu.js') }}"></script>
    <link rel="shortcut icon" href="{{ url('/home/images/favicon.ico') }}" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
    <div class="container">
        <div class="header pull-left">
            
            <a href="index.html" class="logo"><img src="{{ url('/home/img/logo.png') }}" alt="logo" /></a>
            
            <nav class="navbar navbar-default pull-right" role="navigation">
 
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.html">主页</a></li>
                  <li><a href="about.html">关于我们</a></li>
                  <li><a href="blog.html">博客</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                   <li><a href="111.html">g个人中心</a></li>
                  <li><a href="team.html">网站团队</a></li>
                </ul>
                
              </div><!-- /.navbar-collapse -->
            </nav>

            <div id="dl-menu" class="dl-menuwrapper pull-right">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li>
                                <a href="index.html">主页</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Dropdown</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">Fine Jewelry</a></li>
                                    <li><a href="#">Fashion Jewelry</a></li>
                                    <li><a href="#">Watches</a></li>
                                    <li>
                                        <a href="#">Wedding Jewelry</a>
                                        <ul class="dl-submenu">
                                            <li><a href="#">Engagement Rings</a></li>
                                            <li><a href="#">Bridal Sets</a></li>
                                            <li><a href="#">Women's Wedding Bands</a></li>
                                            <li><a href="#">Men's Wedding Bands</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="team.html">Our Team</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /dl-menuwrapper -->


        
        </div>
    </div>

    
    <div class="blog">
    
    
    <div class="container">
    
        
        
        <div class="blog-post pull-left">
            <div class="blog-header">
                <div class="ribbon-stitches-bottom"></div>
                <h1>用户中心@yield('biaoti')</h1>
                <div class="ribbon-stitches-bottom"></div>
            </div>
   
   </div>
   </div><!--blog-->
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
                   @if(session('success'))
        <section class="panel">
                <div class="panel-body">
                        <!--statistics start-->
                    <div class="alert alert-success alert-block fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <h4>
                            <i class="icon-ok-sign"></i>
                        </h4>
                        <p>{{session('success')}}</p>
                    </div>
                </div>
            <section>
        @endif
       

    
    @if(session('error'))
     <section class="panel">
                <div class="panel-body">
                        <!--statistics start-->
                    <div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong></strong>{{session('error')}}
                    </div>
                </div>
            </section>

    @endif
   @section('contents')
   @show 
 
   <div class="footer">
   
        <div class="container">
        
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="address">
                        <h3>Get in touch</h3>
                        
                        <ul>
                            <li><a href="#">E: support@brightlight.com.bd</a></li>
                            <li><a href="#">P: 0418 281 810</a></li>
                            <li><a href="#">W: www.brightlight.com.bd</a></li>
                        </ul>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="address">
                        <h3>公司地址</h3>
                        
                        <ul>
                            <li>Bright Light</li>
                            <li>1No. Rode Chandgaon Abashik</li>
                            <li>Chittagong Bangladesh</li>
                        </ul>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="address">
                        <h3>免费服务</h3>
                        
                        <ul>
                            <li>Call Now</li>
                            <li><a href="#">00800 515151</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        
        </div>
   
   </div><!-- End footer -->
    
        
<script src="{{ url('/admincss/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('/admincss/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ url('/admincss/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('/admincss/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/admincss/js/modernizr.min.js') }}"></script>
<script src="{{ url('/admincss/js/jquery.nicescroll.js') }}"></script>

<!--Sparkline Chart-->
<script src="{{ url('/admincss/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ url('/admincss/js/sparkline/sparkline-init.js') }}"></script>

<!--google map-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script> -->


<!--common scripts for all pages-->
<script src="{{ url('/admincss/js/scripts.js') }}"></script>

<script>

    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>
</body>
</html>