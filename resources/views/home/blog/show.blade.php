@extends('home/layout');
@section('style')
     <script src="{{ url('/home/jquery.js') }}"></script>
  
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
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('/home/js/bootstrap.min.js')}}"></script>
    
    
    <!-- jQuery (portfolio) -->
    <script src="{{url('/home/js/isotope.js')}}"></script>
    <script src="{{url('/home/js/fancybox.js')}}"></script>
    
    
    <!-- Responsive menu -->
       <script src="{{url('/home/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/home/js/modernizr.custom.js')}}"></script>
    
    <script src="{{url('/home/js/jquery.dlmenu.js')}}"></script>

@endsection

@section('page')
{{$article->title}}
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
                            
                                <article class="post">
                                    <div class="date-wrapper"> 
                                        <div class="date-value">{{substr($article->created_at,8,2)}}</div>
                                        <div class="month-value">{{substr($article->created_at,5,2)}}月</div>
                                    </div>
                                    <div class="header-wrapper">
                                        <h2 class="posttitle"><a>{{$article->title}}</a></h2>
                                        <div class="entry-utility">
                                            <div class="user">作者笔名: <a href="{{url('/list')}}?user={{$article->user_id}}">{{$article->tname}}</a></div> <div class="tag">分类: <a href="{{url('/list/')}}?cate={{$article->cate_id}}">{{$article->catename}}</a></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="postimg">
                                        <img src="{{$article->pic}}" alt="" />
                                    </div>
                                    
        						  <!-- 文章主体 内容 start-->
                                    <div class="entry-content">
                               
                               <!-- 文章内容最好不要做解析 例如用到blockquote p 标签等等 -->
                                       <p>{!!$article->content!!}</p>    
                                        
                                     
                                        <blockquote><pre>$article = DB::table('article')
   													->where('id','=',$id)
   													->first();
   										return view('home.blog.show',['article'=>$article]);</pre>
   									   {{$article->descr}}
   									    </blockquote>
                                       
                                    </div>
                                   <!-- 文章主体 内容 end-->
                                   
                                    <div class="clear"></div>
                                </article>
                                
                                <div class="author">
                                    <h3>关于作者:</h3>
                                    <div class="alignleft"><img class="avatar scale-with-grid" alt="" src="{{url('/home/images/content/avatar.gif')}}"></div>
                                    <div class="author-desc">
                                    <h5>John Doe</h5>
                                    <p>Aliquam erat volutpat. Nulla vel dolor vitae purus blandit semper. Sed neque eros, viverra vel sollicitudin mollis, luctus eget nulla. Maecenas in risus eu velit pretium egestas eget sit amet magna. Cum sociis natoque penatibus.</p>
                                    </div>
                                </div>
                                <div class="separator"></div>
                                <section id="comment">
                                    <h3>{{$count}} Comments</h3>
                                    <ol class="commentlist">
                                    @foreach($comment as $k=>$v)
                                        <li>
                                            <div class="comment-body">
                                                <div class="comment-arrow"></div>
                                                <div class="avatar-img"><img src="{{url('/home/images/content/avatar.gif')}}" alt="" class="avatar"/></div>
                                                <cite class="fn">{{$v->username}}</cite>
                                                <span class="tdate">August 17, 2010 7:15 am</span> &nbsp;/&nbsp; <span class="reply"><a href="#">Reply</a></span>
                                                <div class="commenttext">
                                                    <p>{!!$v->content!!}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
<!--                                         <li> -->
<!--                                             <div class="comment-body"> -->
<!--                                                 <div class="comment-arrow"></div> -->
<!--                                                 <div class="avatar-img"><img src="{{url('/home/images/content/avatar.gif')}}" alt="" class="avatar"/></div> -->
<!--                                                 <cite class="fn"><a href="#">Michael John</a></cite> -->
<!--                                                 <span class="tdate">August 17, 2010 7:15 am</span> &nbsp;/&nbsp; <span class="reply"><a href="#">Reply</a></span> -->
<!--                                                 <div class="commenttext"> -->
<!--                                                     <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p> -->
<!--                                                 </div> -->
<!--                                             </div> -->
<!--                                             <ol> -->
<!--                                                 <li> -->
<!--                                                     <div class="comment-body"> -->
<!--                                                         <div class="comment-arrow"></div> -->
<!--                                                         <div class="avatar-img"><img src="{{url('/home/images/content/avatar.gif')}}" alt="" class="avatar"/></div> -->
<!--                                                         <cite class="fn"><a href="#">Wayne Rooney</a></cite> -->
<!--                                                         <span class="tdate">August 17, 2010 7:15 am</span> &nbsp;/&nbsp; <span class="reply"><a href="#">Reply</a></span> -->
<!--                                                         <div class="commenttext"> -->
<!--                                                             <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p> -->
<!--                                                         </div> -->
<!--                                                     </div> -->
<!--                                                 </li> -->
<!--                                             </ol> -->
<!--                                         </li> -->

                                    </ol>
                                </section>              

                            </section>
                         
                        </div>
                    </section>
                    
                    <aside id="sidebar" class="four columns">
                        <div class="padsidebar">
                        <ul>
                         
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
            
 	<script type="text/javascript" charset="utf-8" src="{{url('/ueditor/utf8-php/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{url('/ueditor/utf8-php/ueditor.all.min.js')}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{url('/ueditor/utf8-php/lang/zh-cn/zh-cn.js')}}"></script>
        
         <div id="contactform">
                                <form action="{{url('/comment/insert')}}" method="post" >
                                  <fieldset>
                                
                                      <h3	 style="color: #e85244">评论文章</h3>
                         @if(count($errors) > 0)
                            <div class="alert alert-danger" style="width: 150px">
                              			@foreach($errors->all() as $error)
                              			 	<p>{{ $error }}</p>
                              			@endforeach
                              </div>
                         @endif
                        
                        @if(session('info'))
                       <script>
                        alert("{{session('info')}}")
                        
                        </script>
                        @endif
                        
<!-- Small modal bootstrap摩太狂  这是一段很恶心的代码....-->
<!-- 						@if(session('info')) -->
<!-- 							<div id="modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> -->
<!-- 	 						 <div class="modal-dialog modal-sm"> -->
<!--   									  <div class="modal-content"> -->
<!--   									  session('info') -->
<!--   							</div> -->
<!--  							 </div> -->
<!-- 								</div>  -->
<!--    						@endif	 -->
<!--       <script type="text/javascript" src="{{url('/home/js/jquery-1.7.1.min.js')}}"></script> -->
<!-- 		<script type="text/javascript"> -->
			<!-- $('.modal').modal(options); -->
<!--    		</script>	 -->
                        
                        
                        
				            <script id="editor" type="text/plain"  style="width:720px;height:300px;" name="content"></script>
                                      <br />
                                       {{csrf_field()}} 
                                       <input type="hidden" name="article_id" value="{{$article->id}}">
                                      <input type="submit" value="发表"/>
                                  </fieldset>
                                </form>
                                <div class="clear"></div>
                                <script type="text/javascript">
    //实例化编辑器
  							  var ue = UE.getEditor('editor',{
  	  							  toolbars:[
  	  	  	  							  ['fullscreen','source','undo','bold','backcolor','forecolor','redo']
  	  	  	  							]
   	  	  	  							 });

									</script>
         </div><!-- end contactform -->
    
    </div><!-- End container -->
    


<!-- jQuery Superfish -->
<script type="text/javascript" src="{{url('/home/js/hoverIntent.js')}}"></script> 
<script type="text/javascript" src="{{url('/home/js/superfish.js')}}"></script> 
<script type="text/javascript" src="{{url('/home/js/supersubs.js')}}"></script>


<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="{{url('/home/js/tinynav.min.js')}}"></script>

<!-- Custom Script -->
<script type="text/javascript" src="{{url('/home/js/custom.js')}}"></script>

<!-- Form Contact Script -->
<script type="text/javascript" src="{{url('/home/js/contact.js')}}"></script>

@endsection