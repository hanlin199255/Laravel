<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{Config('app.webname')}}-@yield('title')</title>
<!-- <link href='http://fonts.useso.com/css?family=Oxygen|Lato:300|Open+Sans:300' rel='stylesheet' type='text/css'> -->

    <link href="{{ url('/home/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ url('/home/style.css') }}" rel="stylesheet">
    
    <link href="{{ url('/home/css/animate-custom.css') }}" rel="stylesheet">
    
  <script type="text/javascript" src="http://ajax.useso.com/ajax/libs/jquery/1.7/jquery.js"></script>
  
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
        	
            <a href="{{url('/home/index')}}" class="logo"><img src="{{ url('/home/img/logo.png') }}" alt="logo" /></a>
            
            <nav class="navbar navbar-default pull-right" role="navigation">
 
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="{{url('/home/index')}}">主页</a></li>
                  <li><a href="{{url('/home/index/aboutus')}}">关于我们</a></li>
                  <li><a href="{{url('/center/')}}">个人中心</a></li>   
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
						<li><a href="{{url('/center/')}}">欢迎您{{session('username')}}</a> <a>退出</a></li>
							@endif
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
                      <li><a href="{{url('/home/index/team1')}}">团队简历--HL</a></li>
                      <li><a href="{{url('/home/index/team2')}}">团队简历--LT</a></li>
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
							<li>[<a href="{{url('/center/')}}">欢迎您{{session('username')}} </a>| <a href="{{url('/logout')}}">退出</a>]</li>
							@endif
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
                <h2>分类</h2>
                <p>我们明白您的故事是独一无二的，这就是为什么我们的微型博客和解决方案是为每个客户单独制作。</p>
            </div>
            
            

              @foreach($allcates as $v)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<div class="services-box services-box-2 pull-right">
                        	<div class="row">	
                        	<a href="{{url('/list')}}?cate={{$v->id}}">
                            	<div class="col-lg-3">
                                	<img src="{{$v->pic }}" alt="s-desktop" />
                                </div>
                                <div class="col-lg-9">
                                	<div class="services-dtls">
                                    	<h2>{{$v->name}}</h2>
                                        <p>{{$v->descr}}</p>
                                    </div>
                                </div>
                               </a>
                            </div>
                        </div>
                    </div>
             @endforeach
            
            
        </div><!-- End services -->
        
    
    </div><!-- End container -->
    
   <div class="gellary">
   		<h2>知名博主</h2>
        
   </div>
   
   
   <div id="container">
   
 <?php $i=0 ?> 
   <ul class="gellary-content bxslider">
   	@foreach($user as $val)
      <?php ++$i ?> 
          @if($i%2 != 0)
        <li class="als-item">
        <div class="gellary-item item">
        	<a href="{{url('/list')}}?user={{$val->id}}">
            <img src="{{$val->avatar}}"  height="246" width="389"/>
            <div class="hover"></div>
            </a>
            <h3>{{$val->tname}}</h3>
        </div>
        @else
        <div class="gellary-item item">
            <a href="{{url('/list')}}?user={{$val->id}}">
            <img src="{{$val->avatar}}" height="246" width="389"/>
            <div class="hover"></div>
            </a>
            <h3>{{$val->tname}}</h3>
        </div>
        </li>
        @endif
        @endforeach
        
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
            <img src="{{ url('/home/img/r-pic-3.jpg') }}" src="pic-3" />
            <div class="hover"></div>
            </a>
            <h3>PSD 下载</h3>
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
   
   </ul><!-- End gellary -->
  
   
   </div><!-- End gellary -->

   
   <div class="container">
   
        <div class="process">
			
            <h2>progress</h2>
            
            <div class="row">
            
            	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-1"></div>
                        
                        <h1>头脑风暴</h1>
                        
                        <p>努力和效果之间，永远有这样一段距离。成功和失败的唯一区别是，你能不能坚持挺过这段无法估计的距离。拿出键盘，来和我们分享出你的每一天。</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-2"></div>
                        
                        <h1>计划</h1>
                        
                        <p>生活就是日起日落！熬过了黑夜就一定会有朝霞……</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-3"></div>
                        
                        <h1>Designing</h1>
                        
                        <p>人生的每一笔经历，都在书写你的简历。原本你以为微不足道的事情，回头看的时候，都有着无法细数的刻度。自己拼出来的东西，和别人送到嘴边的东西，意义和珍惜的程度都大为不同。</p>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                	<div class="process-box">
                    	<div class="process-img p-img-4"></div>
                        
                        <h1>Deploy</h1>
                        
                        <p>一起共勉，互相支持，不放弃对自我的修行，我们终究会创造属于自己的生命奇迹，加油程序猿！加油攻城狮！</p>
                        
                    </div>
                </div>
            
            </div>
                    
        </div>
   
   </div><!-- End process -->
   
   
   <div class="recent-post">
   
   		<div class="container">
        	<h2>热门文章</h2>
        	
            <div class="row">
            <?php $k=0; ?>
            @foreach($article as $article)
            	@if(++$k== 1)
            	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                	<div class="r-post not-right-bdr">
                    	<div class="r-post-img">
                    		<a href="{{url('/blog')}}/{{$article->id}}"><img src="{{ url('/home/img/image1.jpg') }}" alt="blog01" /></a>
                            <div class="date-stamp">
                            	<div class="day">{{substr($article->created_at,8,2)}}</div>
                                <div class="month">{{substr($article->created_at,5,2)}}</div>
                                <div class="year">{{substr($article->created_at,0,4)}}</div>
                            </div>
                    	</div> 
                    	<h3><a href="{{url('/blog')}}/{{$article->id}}" style="color: white">{{$article->title}}</a></h3>

                        
                        <ul class="post-by">
                              <li><a href="{{url('/list')}}?user={{$article->user_id}}">{{$article->tname}}</a></li>                      
                              <li><a  style="color:#ffd440" >Tags　</a><a href="{{url('/list')}}?cate={{$article->cate_id}}">{{$article->catename}}</a></li>
                       
                        </ul>
                        
                        <p>{{mb_substr(strip_tags($article->content),0,66)}}</p>
                        
                    </div>
                </div>
           
            
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                @elseif($k ==2)  
                	<div class="r-post not-right-bdr top20">
                    	<div class="r-post-img">
                    		<a href="{{url('/blog')}}/{{$article->id}}"><img src="{{ url('/home/img/image2.jpg') }}" alt="blog02" /></a>
                            <div class="date-stamp">
                            	<div class="day">{{substr($article->created_at,8,2)}}</div>
                                <div class="month">{{substr($article->created_at,5,2)}}</div>
                                <div class="year">{{substr($article->created_at,0,4)}}</div>
                            </div>
                    	</div>
                       <h4><a href="{{url('/blog')}}/{{$article->id}}" style="color: white">{{$article->title}}</a></h4>
                        <ul class="post-by">
                            <li><a href="{{url('/list')}}?user={{$article->user_id}}">{{$article->tname}}</a></li>                      
                            <li><a  style="color:#ffd440" >Tags　</a><a href="{{url('/list')}}?cate={{$article->cate_id}}">{{$article->catename}}</a></li>
                        </ul>
                        
                        
                    </div><!-- r-post -->
       		@elseif($k ==3)	
                	<div class="r-post not-right-bdr top20 pull-left">
                		
                    	<div class="r-post-img">
                    		<a href="{{url('/blog')}}/{{$article->id}}"><img src="{{ url('/home/img/image3.jpg') }}" alt="blog03" /></a>
                            <div class="date-stamp">
                            	<div class="day">{{substr($article->created_at,8,2)}}</div>
                                <div class="month">{{substr($article->created_at,5,2)}}</div>
                                <div class="year">{{substr($article->created_at,0,4)}}</div>
                            </div>
                    	</div>
                    	<h4><a href="{{url('/blog')}}/{{$article->id}}" style="color: white">{{$article->title}}</a></h4>
                        <ul class="post-by">
                            <li><a href="{{url('/list')}}?user={{$article->user_id}}">{{$article->tname}}</a></li>                      
                              <li><a  style="color:#ffd440" >Tags　</a><a href="{{url('/list')}}?cate={{$article->cate_id}}">{{$article->catename}}</a></li>
                        </ul>
                    </div><!-- r-post -->
                
                
                </div>
            @elseif($k ==4 )    	
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            
                    <div class="r-post not-right-bdr top20">
                    	<div class="r-post-img">
                    	<a href="{{url('/blog')}}/{{$article->id}}"><img src="{{ url('/home/img/image4.jpg') }}" alt="blog04" /></a>
                            <div class="date-stamp">
                            	<div class="day">{{substr($article->created_at,8,2)}}</div>
                                <div class="month">{{substr($article->created_at,5,2)}}</div>
                                <div class="year">{{substr($article->created_at,0,4)}}</div>
                            </div>
                    	</div>
                        
                        <ul class="post-by">
                            <li><a href="{{url('/list')}}?user={{$article->user_id}}">{{$article->tname}}</a></li>                      
                             <li><a  style="color:#ffd440" >Tags　</a><a href="{{url('/list')}}?cate={{$article->cate_id}}">{{$article->catename}}</a></li>
                        </ul>
                        
                        <h3><a href="{{url('/blog')}}/{{$article->id}}" style="color: white">{{$article->title}}</a></h3>
                        
                    
                        <p>{{mb_substr(strip_tags($article->descr),0,66)}}</p>
                        
                    </div><!-- r-post -->
              
              	 
                </div>
                	 @endif        
              	 @endforeach
         
            </div>
            
        </div>
   
   </div><!--  End recent-post  -->
   
      <div class="subscribe">
   
   	<div class="container">
    	<h1>你知道吗？输入邮箱可以订阅我们的文章</h1>
        
        <form method="post" action="{{url('/subscribe')}}"> 
        @if(session('info'))
            <script type="text/javascript">
                alert("{{session('info')}}");
            </script>
        @endif
        @if(count($errors)>0)
            <script type="text/javascript">
                alert("{{$errors->first()}}");
            </script>
        @endif
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">
                	<input class="input-lg" type="text" name="email" placeholder="请输入邮箱">
                    {{csrf_field()}}
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                	<button class="btn-effect" type="submit" id="subscribe">订阅</button>
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