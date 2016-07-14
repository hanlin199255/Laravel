@extends('home/layout');
@section('style')
 <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

	<!-- CSS
  ================================================== -->
  	<link href='http://fonts.useso.com/css?family=Roboto:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('/home/styles/style.css')}}" />
    <link rel="stylesheet" href="{{url('/home/styles/inner.css')}}" />
    <link rel="stylesheet" href="{{url('/home/styles/color.css')}}" />
    <link rel="stylesheet" href="{{url('/home/styles/layout.css')}}" />
    <link rel="stylesheet" href="{{url('/home/styles/prettyPhoto.css')}}"  media="screen" />
    

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" />
<link href='http://fonts.useso.com/css?family=Oxygen|Lato:300|Open+Sans:300' rel='stylesheet' type='text/css'>

	<link href="{{url('/home/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/style.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/css/animate-custom.css')}}" rel="stylesheet">
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="http://ajax.useso.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('/home/js/bootstrap.min.js')}}"></script>
	
    
    <!-- jQuery (portfolio) -->
    <script src="{{url('/home/js/isotope.js')}}"></script>
    <script src="{{url('/home/js/fancybox.js')}}"></script>
    
    
    <!-- Responsive menu -->
    
    <script src="{{url('/home/js/modernizr.custom.js')}}"></script>
    
    <script src="{{url('/home/js/jquery.dlmenu.js')}}"></script>
@endsection


@section('page')
精 选 博 文
@endsection

@section('contents')

        
      <div class="container">
 <!-- MAIN CONTENT -->
        <div id="outermain" class="fullwidth">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                            
                            <!-- Begin Portfolio Nav -->
                            <div id="frame-filter">
                            <ul id="filter">
                                <li class="current"><a href="#" data-filter="*">all categories</a><span></span></li>
                                <li><a href="#" data-filter=".wordpress">wordpress</a><span></span></li>
                                <li><a href="#" data-filter=".design">design</a><span></span></li>
                                <li><a href="#" data-filter=".photography">photography</a><span></span></li>
                            </ul> 
                            <div class="clear"></div>
                            </div> 
                            <!-- End Portfolio Nav -->    
                              
                            <!-- Begin Portfolio Items -->
                            <div id="ts-display" class="row">
                                    <div class="one_fourth columns item wordpress">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf1.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf1.gif')}}" alt=""/>
                                            </a>							
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">The Thirsty Goat</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi.  </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item design">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf2.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf2.gif')}}" alt=""/>	</a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Koala Safari</a></h2>
                                             <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi.  </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
            
                                    <div class="one_fourth columns item wordpress">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf3.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf3.gif')}}" alt=""/></a>						
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Ivory Garden</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi.  </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
            
                                    <div class="one_fourth columns item photography">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf4.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf4.gif')}}" alt=""/>	</a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Workband</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item design">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf5.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf5.gif')}}" alt=""/>	</a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Door to Door Services</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item wordpress">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf6.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf6.gif')}}" alt=""/>	</a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Who is it</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    
                                    <div class="one_fourth columns item photography">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf7.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf7.gif')}}" alt=""/>	</a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Bike to Work</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item design">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf8.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf8.gif')}}" alt=""/>	</a>				
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Amazing Theme</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item wordpress">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf9.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf9.gif')}}" alt=""/></a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Goldpixel</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item photography">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf10.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf10.gif')}}" alt=""/>	</a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Bike to Work</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item design">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf11.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf11.gif')}}" alt=""/>	</a>				
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Amazing Theme</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                                    <div class="one_fourth columns item wordpress">
                                        <div class="ts-display-pf-img">
                                            <a class="image" href="{{url('/home/images/content/pf/pf12.gif')}}" data-rel="prettyPhoto[mixed]" >
                                            <span class="rollover"></span>
                                            <span class="zoom"></span>
                                            <img src="{{url('/home/images/content/pf/pf12.gif')}}" alt=""/></a>					
                                        </div>
                                        <div class="ts-display-pf-text">
                                            <h2><a href="#">Goldpixel</a></h2>
                                            <span>Suspendisse dui sem, ullamcorper eu imperdiet eu, dapibus nisi. </span>
                                        </div>
                                        <div class="ts-display-clear"></div>
                                    </div>
                            </div>
                            <!-- End Portfolio Items -->
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        
    </div><!-- End container -->
      <script type="text/javascript">
			$(function() {
				
				
				
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
				
			$( '#dl-menu' ).dlmenu();
				
			});

			function runisotope(){
	$container = jQuery('#ts-display');
		$container.isotope({
			itemSelector : '.item'
		});

	// filter items when filter link is clicked
	jQuery('#filter li').click(function(){
	jQuery('#filter li').removeClass('current');
		jQuery(this).addClass('current');
			var selector = jQuery(this).find('a').attr('data-filter');
			$container.isotope({ filter: selector });
		return false;
	}); 
};
jQuery(window).load(function(){
	runisotope();
});

jQuery(window).smartresize(function(){
	runisotope();
});
	</script>
<script type="text/javascript" src="{{url('/home/js/jquery-1.7.1.min.js')}}"></script>

<!-- jQuery Superfish -->
<script type="text/javascript" src="{{url('/home/js/hoverIntent.js')}}"></script> 
<script type="text/javascript" src="{{url('/home/js/superfish.js')}}"></script> 
<script type="text/javascript" src="{{url('/home/js/supersubs.js')}}"></script>


<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="{{url('/home/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{url('/home/js/fade.js')}}"></script>
<script type="text/javascript" src="{{url('/home/js/jquery-easing-1.3.js')}}"></script>

<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="{{url('/home/js/tinynav.min.js')}}"></script>

<!-- Custom Script -->
<script type="text/javascript" src="{{url('/home/js/custom.js')}}"></script>

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="{{url('/home/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{url('/home/js/fade.js')}}"></script>
<script type="text/javascript" src="{{url('/home/js/jquery-easing-1.3.js')}}"></script>

<!-- jQuery Isotope -->
<script type="text/javascript" src="{{url('/home/js/jquery.isotope.min.js')}}"></script>
      
@endsection