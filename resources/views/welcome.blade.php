<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{Config('app.webname')}}-@yield('title')</title>
<!-- <link href='http://fonts.useso.com/css?family=Oxygen|Lato:300|Open+Sans:300' rel='stylesheet' type='text/css'> -->

    <link href="{{ url('/home/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ url('/home/style.css') }}" rel="stylesheet">
    
    <link href="{{ url('/home/css/animate-custom.css') }}" rel="stylesheet">
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ url('/home/jquery-1.8.3.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/home/js/bootstrap.min.js') }}"></script>
	
    <!-- jmpress plugin -->
	<script type="text/javascript" src="{{ url('/home/js/jmpress.min.js') }}"></script>
	<!-- jmslideshow plugin : extends the jmpress plugin -->
	<script type="text/javascript" src="{{ url('/home/js/jquery.jmslideshow.js') }}"></script>
    
    
    <script type="text/javascript" src="{{ url('/home/js/jquery.bxslider.min.js') }}"></script>
    
    
    <!-- Responsive menu -->
    
    <script src="{{ url('/home/js/modernizr.custom.js') }}"></script>
    
    <script src="{{ url('/home/js/jquery.dlmenu.js') }}"></script>
    <link rel="shortcut icon" href="{{url('/home/images/favicon.ico')}}" />
</head>

<body>
<!-- 标题栏 114行-->
@section('nav')	
    <div class="container">
    	<div class="header pull-left">
        	
            <a href="index.html" class="logo"><img src="{{ url('/home/img/logo.png') }}" alt="logo" /></a>
            
            <nav class="navbar navbar-default pull-right" role="navigation">
 
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="{{url('/home/index')}}">主页</a></li>
                  <li><a href="{{url('/home/index/aboutus')}}">关于我们</a></li>
                  <li><a href="{{url('/home/center')}}">个人中心</a></li>   
                  <li><a href="{{url('/list')}}">博客</a></li>
                  <li><a href="{{url('/home/index/screen')}}">精选博文</a></li>
                  <li><a href="{{url('/home/index/team')}}">NaN Team</a></li>
                  <li><a href="{{url('/home/index/contact')}}">联系我们</a></li>
                </ul>
                
              </div><!-- /.navbar-collapse -->
            </nav>     
                      <div id="dl-menu" class="dl-menuwrapper pull-right">
						<button class="dl-trigger">打开菜单</button>
						<ul class="dl-menu">
							<li>
								<a href="{{url('/home/index')}}">主页</a>
							</li>
							<li>
								<a href="{{url('/home/index/aboutus')}}">关于我们</a>
							</li>
							<li>
								<a href="{{url('/home/center')}}">个人中心</a>
							</li>
							<li>
								<a href="{{url('/list')}}">博客</a>
							</li>
                            <li>
								<a href="{{url('/home/index/screen')}}">精选博文</a>
							</li>
                            <li>
								<a href="{{url('/home/index/team')}}">NaN Team</a>
							</li>
                            <li>
								<a href="{{url('/home/index/contact')}}">联系我们</a>
							</li>
						</ul>
					</div><!-- /dl-menuwrapper -->  
            
               
        </div>
    </div>
    <!-- 标题栏结束-->



<!-- 滚动栏开始  -->
	<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" title="模板之家">模板之家</a></div>
	<div class="slider-container pull-left">
    
    
    	<section id="jms-slideshow" class="jms-slideshow">
				<div class="step" data-color="color-1" data-x="2000" data-y="1000" data-z="3000" data-rotate="-20">
					<div class="jms-content">
						<h3>和我们分享吧！</h3>
						<a class="jms-link mbl" href="#"><img src="{{ url('/home/img/iphone.png') }}" alt="mbl" /></a>
					</div>
				</div>
				<div class="step" data-color="color-2" data-x="1000" data-z="2000" data-rotate="20">
					<div class="jms-content">
						<h3>和我们分享吧！</h3>
						<a class="jms-link tab" href="#"><img src="{{ url('/home/img/ipad.png') }}" alt="tab" /></a>
					</div>
				</div>
				<div class="step" data-color="color-3" data-x="2000" data-y="1500" data-z="1000" data-rotate="20">
					<div class="jms-content">
						<h3>和我们分享吧！</h3>
						<a class="jms-link pc" href="#"><img src="{{ url('/home/img/pc.png') }}" alt="pc" /></a>
					</div>
				</div>
				<div class="step" data-color="color-4" data-x="3000" data-y="2000">
					<div class="jms-content">
						<h3>和我们分享吧！</h3>
						<a class="jms-link laptop" href="#"><img src="{{ url('/home/img/leptop.png') }}" alt="leptop" /></a>
					</div>
				</div>
			</section>
    
    </div>
@show
<!-- 滚动栏结束 -->
<!-- 内容开始 559行-->
@section('contents') 
    <div class="container">
    
    	<div class="services">
        	<div class="services-header">
                <h2>服务</h2>
                <p>我们明白您的故事是独一无二的，这就是为什么我们的微型博客和解决方案是为每个客户单独制作。</p>
            </div>
            
            
            <div class="row">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<div class="services-box services-box-1">
                        	<div class="row">
                            	<div class="col-lg-3">
                                	<img src="{{ url('/home/img/s-desktop.png') }}" alt="s-desktop" />
                                </div>
                                <div class="col-lg-9">
                                	<div class="services-dtls">
                                    	<h2>平台设计</h2>
                                        <p>我们创建了网页端，安卓，IOS三个平台应用</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<div class="services-box services-box-2 pull-right">
                        	<div class="row">
                            	<div class="col-lg-3">
                                	<img src="{{ url('/home/img/colors.png') }}" alt="s-desktop" />
                                </div>
                                <div class="col-lg-9">
                                	<div class="services-dtls">
                                    	<h2>平台设计</h2>
                                        <p>我们创建了网页端，安卓，IOS三个平台应用</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<div class="services-box services-box-1">
                        	<div class="row">
                            	<div class="col-lg-3">
                                	<img src="{{ url('/home/img/experience.png') }}" alt="s-desktop" />
                                </div>
                                <div class="col-lg-9">
                                	<div class="services-dtls">
                                    	<h2>平台设计</h2>
                                        <p>我们创建了网页端，安卓，IOS三个平台应用</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<div class="services-box services-box-2 pull-right">
                        	<div class="row">
                            	<div class="col-lg-3">
                                	<img src="{{ url('/home/img/s-easy.png') }}" alt="s-desktop" />
                                </div>
                                <div class="col-lg-9">
                                	<div class="services-dtls">
                                    	<h2>平台设计</h2>
                                        <p>我们创建了网页端，安卓，IOS三个平台应用</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
            
            
        </div><!-- End services -->
        
    
    </div><!-- End container -->
    
   <div class="gellary">
   		<h2>作品展示</h2>
        
   </div>
   
   
   <div id="container">
   
 
   <ul class="gellary-content bxslider">
   		
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-1.jpg') }}" src="pic-1" />
            <div class="hover"></div>
            </a>
            <h3>视频</h3>
        </div>
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-3.jpg') }}" src="pic-3" />
            <div class="hover"></div>
            </a>
            <h3>PSD下载</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-2.jpg') }}" src="pic-2" />
            <div class="hover"></div>
            </a>
            <h3>感谢！</h3>
        </div>
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-2.jpg') }}" src="pic-2" />
            <div class="hover"></div>
            </a>
            <h3>感谢！</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-3.jpg') }}" src="pic-3" />
            <div class="hover"></div>
            </a>
            <h3>PSD 下载</h3>
        </div>
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-8.jpg') }}" src="pic-8" />
            <div class="hover"></div>
            </a>
            <h3>某网站</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-4.jpg') }}" src="pic-4" />
            <div class="hover"></div>
            </a>
            <h3>唤醒区域</h3>
        </div>
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-7.jpg') }}" src="pic-7" />
            <div class="hover"></div>
            </a>
            <h3>Pixelarena</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-5.jpg') }}" src="pic-5" />
            <div class="hover"></div>
            </a>
            <h3>回忆录</h3>
        </div>
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-6.jpg') }}" src="pic-6" />
            <div class="hover"></div>
            </a>
            <h3>代替标记</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-6.jpg') }}" src="pic-6" />
            <div class="hover"></div>
            </a>
            <h3>代替标记</h3>
        </div>
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-5.jpg') }}" src="pic-5" />
            <div class="hover"></div>
            </a>
            <h3>回忆录</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-7.jpg') }}" src="pic-7" />
            <div class="hover"></div>
            </a>
            <h3>Pixelarena</h3>
        </div>
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-4.jpg') }}" src="pic-4" />
            <div class="hover"></div>
            </a>
            <h3>唤醒区域</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-8.jpg') }}" src="pic-8" />
            <div class="hover"></div>
            </a>
            <h3>Care.com</h3>
        </div>
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-3.jpg') }}" src="pic-3" />
            <div class="hover"></div>
            </a>
            <h3>PSD Download</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-2.jpg') }}" src="pic-2" />
            <div class="hover"></div>
            </a>
            <h3>Thankyou!</h3>
        </div>
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-2.jpg') }}" src="pic-2" />
            <div class="hover"></div>
            </a>
            <h3>Thankyou!</h3>
        </div>
        </li>
        <li class="als-item">
        <div class="gellary-item item">
            <a href="#">
            <img src="{{ url('/home/img/r-pic-3.jpg') }}" src="pic-3" />
            <div class="hover"></div>
            </a>
            <h3>PSD Download</h3>
        </div>
        <div class="gellary-item item">
        	<a href="#">
            <img src="{{ url('/home/img/r-pic-1.jpg') }}" src="pic-1" />
            <div class="hover"></div>
            </a>
            <h3>Acorn Video</h3>
        </div>
        </li>
   
   
   </ul><!-- End gellary -->
  
   
   </div><!-- End gellary -->

   
   <div class="container">
   
        <div class="process">
			
            <h2>进程</h2>
            
            <div class="row">
            
            	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-1"></div>
                        
                        <h1>头脑风暴</h1>
                        
                        <p>一批纺织样品把摊放在桌上,Samsa是一个旅行推销员,上面挂着一幅画,他最近的一本带插图的杂志和安置在一个镀金的框架。</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-2"></div>
                        
                        <h1>计划</h1>
                        
                        <p>一批纺织样品把摊放在桌上,Samsa是一个旅行推销员,上面挂着一幅画,他最近的一本带插图的杂志和安置在一个镀金的框架。</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-3"></div>
                        
                        <h1>Designing</h1>
                        
                        <p>一批纺织样品把摊放在桌上,Samsa是一个旅行推销员,上面挂着一幅画,他最近的一本带插图的杂志和安置在一个镀金的框架。</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-4"></div>
                        
                        <h1>Deploy</h1>
                        
                        <p>一批纺织样品把摊放在桌上,Samsa是一个旅行推销员,上面挂着一幅画,他最近的一本带插图的杂志和安置在一个镀金的框架。</p>
                        
                    </div>
                </div>
            
            </div>
                    
        </div>
   
   </div><!-- End process -->
   
   
   <div class="recent-post">
   
   		<div class="container">
        	<h2>Recent Post</h2>
            
            <div class="row">
            
            	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                	<div class="r-post not-right-bdr">
                    	<div class="r-post-img">
                    		<img src="{{ url('/home/img/blog01.jpg') }}" alt="blog01" />
                            <div class="date-stamp">
                            	<div class="day">02</div>
                                <div class="month">july</div>
                                <div class="year">2013</div>
                            </div>
                    	</div>
                        
                        <h3>看看我们写吗</h3>
                        
                        <ul class="post-by">
                            <li><a href="#">dona</a></li>
                            <li><a href="#">Demo Posts</a></li>
                        </ul>
                        
                        <p>一批纺织样品把摊放在桌上,Samsa是一个旅行推销员,上面挂着一幅画,他最近的一本带插图的杂志和安置在一个镀金的框架。</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                
                	<div class="r-post not-right-bdr top20">
                    	<div class="r-post-img">
                    		<img src="{{ url('/home/img/blog02.jpg') }}" alt="blog02" />
                            <div class="date-stamp">
                            	<div class="day">02</div>
                                <div class="month">july</div>
                                <div class="year">2013</div>
                            </div>
                    	</div>
                        
                        <ul class="post-by">
                            <li><a href="#">dona</a></li>
                            <li><a href="#">Demo Posts</a></li>
                        </ul>
                        
                        
                    </div><!-- r-post -->
                	
                	<div class="r-post not-right-bdr top20 pull-left">
                    	<div class="r-post-img">
                    		<img src="{{ url('/home/img/blog03.jpg') }}" alt="blog03" />
                            <div class="date-stamp">
                            	<div class="day">02</div>
                                <div class="month">july</div>
                                <div class="year">2013</div>
                            </div>
                    	</div>
                        
                        <ul class="post-by">
                            <li><a href="#">dona</a></li>
                            <li><a href="#">Demo Posts</a></li>
                        </ul>
                        
                        
                    </div><!-- r-post -->
                
                
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                	
                    <div class="r-post not-right-bdr top20">
                    	<div class="r-post-img">
                    		<img src="{{ url('/home/img/blog02.jpg') }}" alt="blog02" />
                            <div class="date-stamp">
                            	<div class="day">02</div>
                                <div class="month">july</div>
                                <div class="year">2013</div>
                            </div>
                    	</div>
                        
                        <ul class="post-by">
                            <li><a href="#">dona</a></li>
                            <li><a href="#">Demo Posts</a></li>
                        </ul>
                        
                        <h3>看看我们写吗</h3>
                        
                        
                        <p>一批纺织样品把摊放在桌上,Samsa是一个旅行推销员,上面挂着一幅画,他最近的一本带插图的杂志和安置在一个镀金的框架。</p>
                        
                    </div><!-- r-post -->
                    
                </div>
            
            </div>
            
        </div>
   
   </div><!--  End recent-post  -->
   
   
   <div class="subscribe">
   
   	<div class="container">
    	<h1>你知道吗？输入邮箱可以订阅我们的文章</h1>
        
        <form>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">
                	<input class="input-lg" type="text" placeholder="Enter email">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                	<button class="btn-effect" type="submit">订阅</button>
                </div>
            </div>
        </form>
        
    </div>
   
   </div><!-- End subscribe -->
   <!-- 内容结束 -->
@show
@section('footer')
<!-- footer 561行-609行-->
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
                        	<li>400电话</li>
                            <li><a href="#">00800 515151</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        
        </div>
   
   </div><!-- End footer -->
@show
    
@section('javascript')  
<!--js结束 676行--> 
   <script type="text/javascript">
			$(function() {
				
				var jmpressOpts	= {
					animation		: { transitionDuration : '0.8s' }
				};
				
				
				$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
					autoplay	: true,
					bgColorSpeed: '0.8s',
					arrows		: false
				}));
				
				
				$('.dropdown').hover(function(){
			 		$(this).find('.dropdown-menu').addClass('animated bounceIn');
				},
				function(){
					$(this).find('.dropdown-menu').removeClass('animated bounceIn');
				});
				
			
				//preloader and home animation starter
				$(window).load(function(){
					//$('#pre_loader_mask').hide().remove();
					//start home animation
					
					$('.services').hover(function(){
					$('.services-box-2').addClass('animated fadeInRight');
					}); 
					
					$('.services').hover(function(){
					$(this).find('.services-box-1').addClass('animated fadeInLeft');
					});
					
					$('.process').hover(function(){
					$(this).find('.process-box').addClass('animated bounceIn');
					});
					
					$('.subscribe').hover(function(){
					$(this).find('.input-lg').addClass('animated rotateInDownLeft');
					$(this).find('.btn-effect').addClass('animated rotateIn');
					});
					
					//collapse circular menu after 7 seceond
					setTimeout(circularMenuConroll,7000);
				});


			$('.bxslider').bxSlider({
			  minSlides: 6,
			  maxSlides: 2,
			  slideWidth: 800,
			  slideMargin: 10
			});
			
			
				
			$( '#dl-menu' ).dlmenu();
				
				
			});
	</script>
@show


</body>
</html>