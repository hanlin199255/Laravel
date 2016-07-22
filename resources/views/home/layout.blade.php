<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{config('app.webname')}}</title>

<!-- <link href='http://fonts.useso.com/css?family=Oxygen|Lato:300|Open+Sans:300' rel='stylesheet' type='text/css'> -->

	<link href="{{url('/home/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/style.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/css/animate-custom.css')}}" rel="stylesheet">
         <script src="{{ url('/home/jquery.js') }}"></script>
     <script src="{{ url('/home/jquery-1.8.3.min.js') }}"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('/home/js/bootstrap.min.js')}}"></script>
	
    <!-- Responsive menu -->
    
    <script src="{{url('/home/js/modernizr.custom.js')}}"></script>
    
    <script src="{{url('/home/js/jquery.dlmenu.js')}}"></script>
    <link rel="shortcut icon" href="{{url('/home/images/favicon.ico')}}" />
    <!-- jQuery (portfolio) -->
    <!--<script src="js/isotope.js"></script>
    <script src="js/fancybox.js"></script>-->


    @yield('style')
    <!-- css meta引入 -->
    @show
</head>

<body>

	
    <div class="container">
    	<div class="header pull-left">
        	
            <a href="{{url('/home/index')}}" class="logo"><img src="{{url('/home/img/logo.png')}}" alt="logo" /></a>
            
            <nav class="navbar navbar-default pull-right" role="navigation">
 
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="{{url('/home/index')}}">主页</a></li>
                  <li><a href="{{url('/home/index/aboutus')}}">关于我们</a></li>
                  <li><a href="{{url('/center')}}">个人中心</a></li>   
                  <li><a href="{{url('/list')}}">博客</a></li>
                  <li><a href="{{url('/cate/screen')}}">博文分类</a></li>      
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">NaN Team <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                   	  <li><a href="{{url('/home/index/team')}}">Team</a></li>
                      <li><a href="{{url('/home/index/team1')}}">团队简历--HL</a></li>
                      <li><a href="{{url('/home/index/team2')}}">团队简历--LT</a></li>
                    </ul>
                  </li>
<!--                   <li><a href="{{url('/home/index/team')}}">NaN Team</a></li> -->
                  <li><a href="{{url('/home/index/contact')}}">联系我们</a></li>
                  							@if(!session('id'))
							<li><a href="{{url('/login')}}">[登录 or 注册]</a></li>
							@else
							<li><a href="{{url('/center/')}}">欢迎您{{session('username')}}</a></li>
							@endif
                </ul>
                
              </div><!-- /.navbar-collapse -->
            </nav>
			
            <div id="dl-menu" class="dl-menuwrapper pull-right">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="{{url('/home/index')}}">主页</a>
							</li>
							<li>
								<a href="{{url('/home/index/us')}}">关于我们</a>
							</li>
							<li>
							<a href="{{url('/center')}}">个人中心</a>
							</li>   
							<li>
								<a href="{{url('/list')}}">博客</a>
							</li>
                            <li>
								<a href="{{url('/cate/screen')}}">博文分类</a>
							</li>
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">NaN Team <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                   	  <li><a href="{{url('/home/index/team')}}">Team</a></li>
                      <li><a href="{{url('/home/index/team1')}}">团队简历&HL</a></li>
                      <li><a href="{{url('/home/index/team2')}}">团队简历&&LT</a></li>
                    </ul>
                  </li>
<!--                             <li> -->
<!-- 								<a href="{{url('/home/index/team')}}">NaN Team</a> -->
<!-- 							</li> -->
                            <li>
								<a href="{{url('/home/index/contact')}}">联系我们</a>
							</li>
						@if(!session('id'))
							<li><a href="{{url('/login')}}">[登录 or 注册]</a></li>
							@else
							<li><a href="{{url('/center/')}}">欢迎您{{session('username')}}</a></li>
							@endif
						</ul>
					</div><!-- /dl-menuwrapper -->


        
        </div>
    </div>
	
	
    <div class="blog">
    <div class="container">
    	<div class="blog-header pull-left">
            <div class="ribbon-stitches-bottom"></div>
        		<h1>
        		<!-- 注意此处添加页面标题 -->
        		@yield('page')
        		@show
        		</h1>
           <div class="ribbon-stitches-bottom"></div>       
       </div>
    </div>
    </div><!--blog-->	


      @yield('contents')
      <!--  主体内容 -->
      @show

    
   
	
   <div class="footer">
   
   		<div class="container">
        
        	<div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                	<div class="address">
                    	<h3>取得联系</h3>
                        
                        <ul>
                        	<li><a href="#">E: NaN@163.com</a></li>
                            <li><a href="#">P: 010 0000077</a></li>
                            <li><a href="#">W: www.NaNblog.com</a></li>
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
    
    
    
   <script type="text/javascript">
			$(function() {
				
				$( '#dl-menu' ).dlmenu();
				
				
				$('.dropdown').hover(function(){
			 		$(this).find('.dropdown-menu').addClass('animated bounceIn');
				},
				function(){
					$(this).find('.dropdown-menu').removeClass('animated bounceIn');
				});
				
				
				$('.services').hover(function(){
			 		$(this).find('.services-box-1').addClass('animated fadeInLeft');
				},
				function(){
					$(this).find('.services-box-1').removeClass('animated fadeInLeft');
				});
				
				$('.services').hover(function(){
			 		$(this).find('.services-box-2').addClass('animated fadeInRight');
				},
				function(){
					$(this).find('.services-box-2').removeClass('animated fadeInRight');
				});
				
				
				
				
				// Portfolio
				
				
				var $container = $('.portfolioContainer');
				$container.isotope({
					filter: '*',
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false
					}
				});
			 
				$('.portfolioFilter a').click(function(){
					$('.portfolioFilter .current').removeClass('current');
					$(this).addClass('current');
			 
					var selector = $(this).attr('data-filter');
					$container.isotope({
						filter: selector,
						animationOptions: {
							duration: 750,
							easing: 'linear',
							queue: false
						}
					 });
					 return false;
				}); 
	
			$("a#example7").fancybox({
					'titlePosition'	: 'inside'
			});
			
			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			
			
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown-select > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text('Gender: ' + obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-1').removeClass('active');
				});

			});
			
			//end Portfolio
				
			
			});
	</script>

   @yield('script')
   <!-- JS引入 --> 
   @show
   
</body>
</html>

