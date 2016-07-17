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
    <link href="{{url('/home/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/style.css')}}" rel="stylesheet">
    
    <link href="{{url('/home/css/animate-custom.css')}}" rel="stylesheet">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="http://ajax.useso.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('/home/js/bootstrap.min.js')}}"></script>
	
    <!-- Responsive menu -->
    
    <script src="{{url('/home/js/modernizr.custom.js')}}"></script>
    
    <script src="{{url('/home/js/jquery.dlmenu.js')}}"></script>
   
@endsection

@section('page')
博 客
@endsection

@section('contents')

   <div class="container">
   
            
              <!-- MAIN CONTENT -->
        <div id="outermain">
            <div class="container">
                <div class="row">
           
                    <section id="maincontent" class="eight columns positionleft">
                        <div class="padcontent">

                            <section class="content">
								@foreach($article as $v)
                                <article class="post">
                                    <div class="date-wrapper"> 
                                        <div class="date-value">{{substr($v->created_at,8,2)}}</div>
                                        <div class="month-value">{{substr($v->created_at,5,2)}}</div>
                                    </div>
                                    <div class="header-wrapper">
                                        <h2 class="posttitle"><a href="{{url('/blog')}}/{{$v->id}}">{{$v->title}}</a></h2>
                                        <div class="entry-utility">
                                            <div class="user">作者: <a href="#">{{$v->tname}}</a></div> <div class="tag">Tags: <a href="{{url('/list/')}}?cate={{$v->cate_id}}">{{$v->catename}}</a></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="postimg">
                                        <img src="{{$v->pic}}" alt="" />
                                    </div>
       
                                    <div class="entry-content">
										<p> {{$v->content}}.....</p>
                                        <a href="{{url('/blog')}}/{{$v->id}}" class="more" style="color:#75c8b9">阅读本文  &rarr;</a>
                                    </div>
                                   
                                    <div class="clear"></div>
                                </article>
								@endforeach
						
                                <div class="wp-pagenavi" >
                                    
                                    
                                  {!!$article->appends($request)->render()!!}
                                
                                </div>
                            </section>
                         
                        </div>
                    </section>
                    
                 <aside id="sidebar" class="four columns">
                        <div class="padsidebar">
                        <ul>
                          <li class="widget-container">
                                <h2 class="widget-title">搜索</h2>
                                <form action="{{url('/list')}}" id="searchform" method="get">
                                    <div class="bgsearch">
                                    <input type="text" value="" id="s" name="keyword"> 
                                    <input type="submit" value="" class="searchbutton">
                                    </div>
                                </form>
                            </li>
                            
                            <li class="widget-container">
                                <h2 class="widget-title">文章分类</h2>
                                <ul>
                                @foreach($cates as $v)
                                    <li><a href="{{url('/list')}}?cate={{$v->id}}">{{$v->name}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            
                            <li class="widget-container">
                                <h2 class="widget-title">推荐文章</h2>
                                <ul class="rp-widget">
                                @foreach($recs as $v)
                                    <li>
                                        <div class="postimg"><img src="{{$v->pic}}" alt="" width="100" /></div>
                                        <h3><a href="{{url('/blog')}}/{{$v->id}}">{{$v->title}}.</a></h3>
                                        <span class="smalldate">{{substr($v->created_at,0,16)}}</span>
                                        <span class="clear"></span>
                                    </li> 
                               @endforeach     
                                </ul>
                            </li>
                            <li class="widget-container">
                                <h2 class="widget-title">Text Widget</h2>
                                <div class="textwidget">Nunc in diam ut tortor vestibulum eleifend sit amet at diam. Phasellus mollis, ante et suscipit egestas, elit nunc facilisis elit, vitae malesuada dui mauris aliquam mi.</div>
                            </li>
                        </ul>
                        </div>
                    </aside>
                 
                 
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
            

        
    
    </div><!-- End container -->

@endsection