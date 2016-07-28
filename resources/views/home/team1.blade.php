@extends('home/layout');
@section('style')
 <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/font-awesome.min.css')}}" />

        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/colors/DarkBlue.css')}}" id="colors-style" />
        <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/switcher.css')}}" />

        <!-- CSS | animate -->
        <!-- Credits: http://daneden.github.io/animate.css/ -->
        <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/animate.min.css')}}" />

        <!-- CSS | Normalize -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/jquery.mCustomScrollbar.css')}}" />

        <!-- CSS | Google Fonts -->


        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/main.css')}}" />

        <!-- CSS | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <link rel="stylesheet" type="text/css" href="{{url('/home/jianli/css/prettyPhoto.css')}}"/>




 

        <style>
            @media only screen and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 0px !important;
                }
                .resp-vtabs ul.resp-tabs-list {
                    width: 10%;
                    margin-right: 2px !important;
                }
            }

            @media only screen and (max-width : 800px){

                .widget-profil {
                    float: none !important;
                }
            }

            .widget-profil {
                float: right;
            }

            .resp-vtabs ul.resp-tabs-list {
                float: right;
                margin-right:12px;
            }
            .resp-vtabs .resp-tabs-container {
                margin-left: 0px !important;
            }   
        </style>
@endsection

@section('page')
Team - 韩林
@endsection


@section('contents')
           
     <div class="container">
   
       
              <!-- MAIN CONTENT -->
        <div id="outermain">

        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Laoding page -->
        <div id="preloader"><div id="spinner"></div></div>


        <!-- .slideshow -->
        <ul class="cb-slideshow" id="cb_slideshow" style="display:none">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul>
        <!-- /.slideshow --> 
        <br /><br /> 
        <!-- .wrapper --> 
 

            <!--- .Content --> 
            <section class="tab-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">   

                                <div class="col-md-3 widget-profil">

                                    <div class="row">

    <!-- Profile Image -->
    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">
         
         
                                
         <div class="image-holder one" id="pic_prof_1" style="display:block">
        
                <img class="head-image up circle" src="{{url('home/jianli/images/img/up.png')}}" width="150" height="150" alt="" />
                <img class="head-image up-left circle" src="{{url('home/jianli/images/img/upleft.png')}}" width="150" height="150" alt="" />
                <img class="head-image left circle" src="{{url('home/jianli/images/img/left.png')}}" width="150" height="150" alt="" />
                <img class="head-image down-left circle" src="{{url('home/jianli/images/img/downleft.png')}}" width="150" height="150" alt="" />
                <img class="head-image down circle" src="{{url('home/jianli/images/img/down.png')}}" width="150" height="150" alt="" />
                <img class="head-image down-right circle" src="{{url('home/jianli/images/img/downright.png')}}" width="150" height="150" alt="" />
                <img class="head-image right circle" src="{{url('home/jianli/images/img/right.png')}}" width="150" height="150" alt="" />
                <img class="head-image up-right circle" src="{{url('home/jianli/images/img/upright.png')}}" width="150" height="150" alt="" />
                <img class="head-image front circle" src="{{url('home/jianli/images/img/front.png')}}" width="150" height="150" alt="" />
                
        </div>
        
        <!-- style for simple image profile -->     
        <div class="circle-img" id="pic_prof_2" style="display:none"></div>
       
    
    </div>
    <!-- End Profile Image -->
  
    <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
    
    
        <!-- Profile info -->
        <div id="profile_info">
            <h1 id="name" class="transition-02">韩 林</h1>
            <h4 class="line">PHPer</h4>
            <h6><span class="fa fa-map-marker"></span> 北京 , 中国</h6>
        </div>
        <!-- End Profile info -->  
        
        
        <!-- Profile Description -->
        <div id="profile_desc">
            <p>
               		天津工业大学：软件工程
            </p>
            <p>
                 	座右铭：    天行健君子以自强不息，</p>
               <p>  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 地势坤君子以厚德载物。</p>
            
        </div>
        <!-- End Profile Description -->  
        
        
        <!-- Name -->
         <div id="profile_social">
            <h6>我的社交平台</h6>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/1.png')}}" height="100%" width="99%"></a>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/2.png')}}" height="100%" width="99%"></a>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/3.png')}}" height="100%" width="99%"></a>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/4.png')}}" height="100%" width="99%"></a>
           <a href="#"><IMG alt="" src="{{url('home/jianli/images/5.png')}}" height="100%" width="99%"></a>
            <div class="clear"></div>
        </div>
        <!-- End Name -->  
      
    
    
    </div>
  
</div>
                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul class="resp-tabs-list">
                                            <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile">           
                                                <span class="tite-list">简况</span>
                                                <i class="fa fa-user icon_menu icon_menu_active"></i>
                                            </li>

                                            <li class="tabs-resume hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="resume"> 
                                                <span class="tite-list">履历</span>
                                                <i class="fa fa-tasks icon_menu"></i>
                                            </li>

                                            <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="portfolio"> 
                                                <span class="tite-list">作品集</span>
                                                <i class="fa fa-briefcase icon_menu"></i>
                                            </li>

                                            <li class="tabs-blog hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="blog">
                                                <span class="tite-list">博客</span>
                                                <i class="fa fa-bullhorn icon_menu"></i>
                                            </li>

                                            <li class="tabs-contact hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="contact" style="margin-bottom: 48px !important;"> 
                                                <span class="tite-list">联系我</span>
                                                <i class="fa fa-envelope icon_menu"></i> 
                                            </li>

                                            <a href="#" id="print"><i class="fa fa-print icon_print"></i> </a>
                                            <a href="#" id="downlowd"><i class="fa fa-download icon_print"></i> </a>

                                        </ul>
                                        <!-- /resp-tabs-list -->



                                        <!-- resp-tabs-container --> 
                                        <div class="resp-tabs-container">

                                            <!-- profile -->
                                            <div id="profile" class="content_2">
                                                <!-- .title -->
<h1 class="h-bloc">简历 - 关于我</h1>

<div class="row top-p">
    <div class="col-md-6 profile-l">
        
        <!--About me-->
        <div class="title_content">
            <div class="text_content">Lin Han</div>
            <div class="clear"></div>
        </div>

           <ul class="about">

            <li>
                <i class="glyphicon glyphicon-user"></i>
                <label>名字</label>
                <span class="value">韩林</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-calendar"></i>
                <label>出生日期</label>
                <span class="value">5月20日, 1992年</span>
                <div class="clear"></div>
            </li>

            <li> 
                <i class="glyphicon glyphicon-map-marker"></i>
                <label>地址</label>
                <span class="value">中国 , 北京</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-envelope"></i>
                <label>邮箱</label>
                <span class="value">199205208@qq.com</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-phone"></i>
                <label>电话</label>
                <span class="value">+86 18636421255</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-globe"></i>
                <label>站点</label>
                <span class="value"><a href="http://www.hanlin777.cn" target="_blank" >www.hanlin777.cn</a></span>
                <div class="clear"></div>
            </li>

        </ul>


        <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
           
			一年的实习项目经验涉及电商，金融；
		 </p>
        
         <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
         具备部分产品规划、需求分析能力，善于沟通，有良好的团队合作精神。
        </p>

    </div>
    <!-- End left-wrap -->

    <div class="col-md-6 profile-r">

        <div class="cycle-slideshow">
            <img src="{{url('home/jianli/images/img-profile/about_1.jpg')}}" alt="" />
            <img src="{{url('home/jianli/images/img-profile/about_2.png')}}" alt="" />
            <img src="{{url('home/jianli/images/img-profile/about_3.png')}}" alt="" />
        </div>

    </div>

</div>

    <div class="clear"></div>


    <div class="row" id="services">
        <div class="col-md-12">
            <div class="title_content">
                <div class="text_content">I can I be be </div>
                <div class="clear"></div>
            </div>
    
    
            <div class="col-md-4 pack-service">
                <div class="service">
                    <div class="service-icon"><i class="fa fa-tag"></i></div>
                    <div class="service-detail">
                        <h6>状态</h6>
                        <p>离职--考虑机会.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pack-service">
                <div class="service">
                    <div class="service-icon"><i class="fa fa-cogs"></i></div>
                    <div class="service-detail">
                        <h6>期望职位</h6>
                        <p>PHP</p>
                         <p>|-电子商务-互联网金融-|</p>
                         <p>|-O2O-教育培训-|</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pack-service">
                <div class="service">
                    <div class="service-icon"><i class="fa fa-arrows-alt"></i></div>
                    <div class="service-detail">
                        <h6>期待地点</h6>
                        <p>北京 or 杭州</p>
                    </div>
                </div>
            </div>
         </div> 
    </div><!-- End Services -->


    <div class="clear"></div>
    <div class="border-list"></div>
    
    <div class="row">
    <div class="col-md-12">
        <div class="bottom-p">
            <div class="title_content">
                <div class="text_content">My Services 2</div>
                <div class="clear"></div>
            </div>
    
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapse_tabs">
                                Making Money
                                <i class="glyphicon glyphicon-chevron-up" style="float: right;font-size: 13px;"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapse_tabs">
                                Easy to Customize
                                <i class="glyphicon glyphicon-chevron-down" style="float: right;font-size: 13px;"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapse_tabs">
                                Moving Let Us Help
                                <i class="glyphicon glyphicon-chevron-down" style="float: right;font-size: 13px;"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
 </div>
 
 
  </div>
    <div class="clear"></div>
                                            </div>
                                            <!-- End .profile -->

                                            <!-- .resume -->
                                            <div id="resume" class="content_2">
                                                <!-- .title -->
<h1 class="h-bloc">技能 - 个人信息</h1> 

<div class="row">

   <!-- .resume-right -->
    <div class="col-md-6">

        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">技能</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <div class="skills">
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="75%">
                <div class="skillbar-title"><span>PHP</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">75%</div>
            </div>
    
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="70%">
                <div class="skillbar-title"><span>HTML</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">70%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="70%">
                <div class="skillbar-title"><span>Css</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">70%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="30%">
                <div class="skillbar-title"><span>Photoshop</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">30%</div>
            </div>
            <!-- /.skillbar -->
        </div>
        
        
         
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">办公软件</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
            
        <div class="skills">       
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="70%">
                <div class="skillbar-title"><span>MS Excel</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">70%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="75%">
                <div class="skillbar-title"><span>MS Word</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">75%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="60%">
                <div class="skillbar-title"><span>Powerpoint</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">60%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="40%">
                <div class="skillbar-title"><span>SharePoint</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">40%</div>
            </div>
            <!-- /.skillbar -->   
        </div>
        
        
     
        
  
        
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">我的简历</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <!-- .download_resume -->
        <a class="download" style="margin:0;float: left;" href="#">
            <span data-hover="Download My Resume"><i class="glyphicon glyphicon-download-alt"></i> 下载我的简历</span>
        </a>
        <!-- /.download_resume -->

    </div>
     <!-- /.resume-right -->
     
     
     
     <!-- .resume-left -->
    <div class="col-md-6 resume-left">    
        <!-- .title_content -->
        <div class="title_content" style="margin-bottom:5px">
            <div class="text_content">实习经验</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <!-- .attributes -->
        <ul class="attributes">
            <li class="first">
                <h5>电商二次开发(PHPer)<span class="duration"><i class="fa fa-calendar color"></i> 2015 - 2016</span></h5>
                <h6><span class="fa fa-briefcase"></span>PHPChina.</h6>
                <p>1、在公司已有框架下进行二次开发，</p>
				<p>2、依据客户需求，参与需求分析，编码及功能测试等。</p>
            </li>
            <li>
                <h5>大客户助理 <span class="duration"><i class="fa fa-calendar color"></i> 2015.11 - 2015.12</span></h5>
                <h6><span class="fa fa-briefcase"></span> PHPChina</h6>
                <p>1、协助部门进行推广计划和策略的制定；<p>
<p>2、负责配合渠道部门向客户讲解公司产品PPT；<p>
<p>3、通过与客户的交流，参与项目招标并搜集产品市场需求；<p>
<p>4、对客户的需求进行分析、绘制相应需求的工作流程图；<p>
<p>5、项目跟进推动项目的成功，汇报进展。</p>
            </li>

        </ul>
        <!-- /.attributes -->
        <br>
        
        <!-- .title_content -->
<!--         <div class="title_content"> -->
<!--             <div class="text_content">Education</div> -->
<!--             <div class="clear"></div> -->
<!--         </div> -->
        <!-- /.title_content -->
        
        <!-- .attributes -->
<!--         <ul class="attributes"> -->
<!--             <li class="first"> -->
<!--                 <h5>Master of Engineering <span class="duration"><i class="fa fa-calendar color"></i> 2011 - 2013</span></h5> -->
<!--                 <h6><span class="fa fa-book"></span> Name of University</h6> -->
<!--                 <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p> -->
<!--             </li> -->
<!--             <li> -->
<!--                 <h5>Bachelor of Engineering <span class="duration"><i class="fa fa-calendar color"></i> 2010 - 2011</span></h5> -->
<!--                 <h6><span class="fa fa-book"></span> Name of University</h6> -->
<!--                 <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p> -->
<!--             </li> -->
<!--         </ul> -->
        <!-- /.attributes -->
<!--         <br>   -->
        
        
          <!-- .title_content -->
<!--         <div class="title_content"> -->
<!--             <div class="text_content">Awards</div> -->
<!--             <div class="clear"></div> -->
<!--         </div> -->
        <!-- /.title_content -->
        
        <!-- .attributes -->
<!--         <ul class="attributes"> -->
<!--             <li class="first"> -->
<!--                 <h5>Graphic &amp; Art Direction <span class="duration"><i class="fa fa-calendar color"></i> 2013 - 2014</span></h5> -->
<!--                 <h6><span class="fa fa-trophy"></span> Name of Institute</h6> -->
<!--                 <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p> -->
<!--             </li> -->
<!--             <li> -->
<!--                 <h5>Design &amp; Art Direction <span class="duration"><i class="fa fa-calendar color"></i> 2012 - 2013</span></h5> -->
<!--                 <h6><span class="fa fa-trophy"></span> Name of Institute</h6> -->
<!--                 <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p> -->
<!--             </li> -->
  
<!--         </ul> -->
        <!-- /.attributes -->
<!--         <br>   -->
        
    </div>
    <!-- /.resume-left -->
</div>

  <div style="clear: both"></div>  
  
  
<!-- client reference -->
<div class="row">
    <div class="col-md-12">   
    
<div class="reference clearfix"> 
            
         <!-- .title_content -->
        <div class="title_content" style="margin-bottom:5px">
            <div class="text_content">实习所得</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        

        <ul>
            <li class="clearfix">
                <img src="{{url('home/jianli/images/portfolio/16.jpg')}}" class="img_reference" width="100" height="100" alt="">
                <p>“脱离了在大学课堂上，相对简单的小模块零散模块的开发。涉身到真正的大项目，整个电商解决提供方案中，从懵懂到读懂公司代码再到运用熟练。提高的不仅是编码能力，逻辑能力，更多的是对整个业务及需求的认知，可以使自己在编码阶段更好的去完成需求。 </span>
            </li>
            <li class="clearfix">
                <img src="{{url('home/jianli/images/portfolio/15.jpg')}}" class="img_reference" width="100" height="100" alt="">
                <p>“1、两个月的市场经验，对软件工程专业的我来说是完成了一个“闭环”，而不仅仅局限于编码，测试和维护阶段，对互联网电子商务解决方案有了更清晰直观的了解，通过对客户的接触，了解需求，分析需求，从而配合数据库设计人员设计出合适的软件结构，有效的帮助开发人员完成功能的实现。
</p><p>2、两个月的市场工作鉴于自己本身是码农一枚，所以设计出的模块层次，模块间的调用相比起来会更符合开发人员更好的完成项目。</p></span>
            </li>

        </ul>
</div>
 </div>
     
     
     
     
     <div style="clear: both"></div>   
</div>

                                            </div>
                                            <!-- End .resume -->

                                            <!-- .portfolio -->
                                            <div id="portfolio" class="content_2">
                                                
                                                <!-- .title -->
                                                <h1 class="h-bloc">作品集 </h1>

                                                <!-- .container-portfolio -->
                                                <div class="container-portfolio">

                                                    <!-- #filters -->
                                                    <ul id="filters" class="clearfix">
                                                        <li><span class="filter active" data-filter="catWeb catGraphic catMotion logo">All</span></li>
                                                        <li><span class="filter" data-filter="catWeb">网站开发</span></li>
<!--                                                         <li><span class="filter" data-filter="catGraphic">Graphic Design</span></li> -->
                                                        <li><span class="filter" data-filter="catMotion">Logo</span></li>
                                                        <li><span class="filter" data-filter="logo">站点设计</span></li>
                                                    </ul>
                                                    <!-- /#filters -->
                                    
                                                    <!-- #portfoliolist -->
                                                    <div id="portfoliolist">

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">    
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">     
                                                                <a href="{{url('home/jianli/images/portfolio/1.png')}}" rel="portfolio" title="Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus.consectetur adipiscingVivamus sit amet">
                                                                    <img src="{{url('home/jianli/images/portfolio/1.png')}}" alt="Visual Infography" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">中北镇社区网</a>
                                                                            <span class="text-category">网站开发及优化</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>      
                                                        <!-- /.portfolio -->

 

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">    
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">     
                                                           
 																<a href="{{url('home/jianli/images/portfolio/4.png')}}" rel="portfolio">
                                                                    <img src="{{url('home/jianli/images/portfolio/4.png')}}" alt="Sonor's Design" />
                                                          
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">本地分类旅游酒店主页</a>
                                                                            <span class="text-category">站点设计</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>      
                                                        <!-- /.portfolio -->
 
                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">         
                                                                <a href="{{url('home/jianli/images/portfolio/2.png')}}" rel="portfolio">
                                                                    <img src="{{url('home/jianli/images/portfolio/2.png')}}" alt="Sonor's Design" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">庞大汽车商城</a>
                                                                            <span class="text-category">二次开发</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>              
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catMotion" data-cat="catMotion">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">         
                                                                <a href="{{url('home/jianli/images/portfolio/4.jpg')}}" rel="portfolio">
                                                                    <img src="{{url('home/jianli/images/portfolio/4.jpg')}}" alt="Typography Company" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Motion Graphic</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>  
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">
                                                                <a href="{{url('home/jianli/images/portfolio/3.png')}}" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                                                                    <img src="{{url('home/jianli/images/portfolio/3.png')}}" alt="Weatherette" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">意法商城</a>
                                                                            <span class="text-category">二次开发</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>  
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catMotion" data-cat="catMotion">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">     
                                                                <a href="{{url('home/jianli/images/portfolio/6.jpg')}}" rel="portfolio">               
                                                                    <img src="{{url('home/jianli/images/portfolio/6.jpg')}}" alt="BMF" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Motion Graphic</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>  
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catGraphic" data-cat="catGraphic">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">     
                                                                <a href="{{url('home/jianli/images/portfolio/7.jpg')}}" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">                
                                                                    <img src="{{url('home/jianli/images/portfolio/7.jpg')}}" alt="Techlion" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Graphic Design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">     
                                                                <a href="{{url('home/jianli/images/portfolio/8.jpg')}}" rel="portfolio" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien.">
                                                                    <img src="{{url('home/jianli/images/portfolio/8.jpg')}}" alt="KittyPic" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Logo</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>  
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">         
                                                                <a href="{{url('home/jianli/images/portfolio/9.jpg')}}" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                                                                    <img src="{{url('home/jianli/images/portfolio/9.jpg')}}" alt="Graph Plotting" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Web Design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>  
                                                        <!-- /.portfolio -->

                                                      

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper"> 
                                                                <a href="{{url('home/jianli/images/portfolio/11.jpg')}}" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                                                                    <img src="{{url('home/jianli/images/portfolio/11.jpg')}}" alt="Mobi Sock" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Logo</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>  
                                                        <!-- /.portfolio -->

                                                     

                                                        <div class="clear"></div>

                                                    </div>
                                                    <!-- #portfoliolist -->
                                                </div>
                                                <!-- /.container-portfolio -->
                                                                                       </div>
                                            <!-- End .portfolio -->

                                            <!-- .blog -->
                                            <div id="blog" class="content_2">
                                                <h1 class="h-bloc">博客</h1><br> 

<div class="col-md-12">
    <div class="row">

        <!-- Page Blog -->
        <div class="col-md-12" id="blog_page">
            <!-- start Page Blog -->
            <section id="blog-page">

                <!-- Post 1 --> 
                <article id="post-1" class="blog-article">                    

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12 post_media">
                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>
                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <div id="carousel-1" class="carousel slide" data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                                <li data-target="#carousel-1" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">

                                                <div class="item active">
                                                    <img src="{{url('home/jianli/images/blog/blog-1.jpg')}}" alt="" />
                                                    <div class="carousel-caption">
                                                        <h4>2016-7-19</h4>
                                                        <p>------------------------------------------------------------</p>
                                                    </div>
                                                </div>


                                                <div class="item">
                                                    <img src="{{url('home/jianli/images/blog/blog-2.jpg')}}" alt="" />
                                                    <div class="carousel-caption">
                                                        <h4>2016-7-16</h4>
                                                        <p>------------------------------------------------------------</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="{{url('home/jianli/images/blog/blog-3.jpg')}}" alt="" />
                                                    <div class="carousel-caption">
                                                        <h4>2016-7-10</h4>
                                                        <p>------------------------------------------------------------</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>

                                            <a class="right carousel-control" href="#carousel-1" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="{{url('/blog')}}/2" class="read_more">如何成为一名优秀的全栈工程师？</a></div>
                                            <div class="clear"></div>
                                        </div>

                                        <ul class="info">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> 07 21, 2016</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by <a href="{{url('/list')}}?user=6">小韩</a></li>
                                          
                                        </ul>

                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> 我的前一篇文章《给职场新人的 10 点建议》发表后，得到了很多网友，特别是年轻程序员朋友们的喜爱，这令我颇感意外，但又很受鼓舞。同时，我也收到了一些私信，大多来自那些毕业不久，刚步入工作岗位的职场新人。询问的内容也大多是如何选择职业方向，如何成为一名优秀的软件工程师，以及怎样快速提高自身的技能等。我在一一回复的同时，不禁想结合自身的经历，谈谈如何才能成为一名优秀的全栈工程师。 什么是全栈工程师 全栈工程师一词，最早出现于Facebook工程师Calos Bueno的一篇文章 - Full Stack（需翻墙）。他把全栈工程师定义为对性能影响有着深入理解的技术通才。自那以后全栈这个词便流行起来，我看到过的就有全栈工程师，全栈设计师，全栈运维，全栈市场营销人员等等。而在针对互联网人才的招聘网站上，全栈工程师更是一跃成为热门招聘职位，其薪资水平也比一般的开发工程师职位要高出一截。...</p></div>
                                    </div>
                                </div>  

                                <a href="{{url('/blog')}}/2" >Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>
                <!-- End Post 1 -->

                <div class="clear"></div>

                <!-- Post 2 -->
                <article id="post-2" class="blog-article">                    

                    <div class="col-md-12">

                                                <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="{{url('/blog')}}/2" class="read_more">如何成为一名优秀的全栈工程师？</a></div>
                                            <div class="clear"></div>
                                        </div>

                                        <ul class="info">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> 07 21, 2016</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by <a href="{{url('/list')}}?user=6">小韩</a></li>
                                          
                                        </ul>

                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> 我的前一篇文章《给职场新人的 10 点建议》发表后，得到了很多网友，特别是年轻程序员朋友们的喜爱，这令我颇感意外，但又很受鼓舞。同时，我也收到了一些私信，大多来自那些毕业不久，刚步入工作岗位的职场新人。询问的内容也大多是如何选择职业方向，如何成为一名优秀的软件工程师，以及怎样快速提高自身的技能等。我在一一回复的同时，不禁想结合自身的经历，谈谈如何才能成为一名优秀的全栈工程师。 什么是全栈工程师 全栈工程师一词，最早出现于Facebook工程师Calos Bueno的一篇文章 - Full Stack（需翻墙）。他把全栈工程师定义为对性能影响有着深入理解的技术通才。自那以后全栈这个词便流行起来，我看到过的就有全栈工程师，全栈设计师，全栈运维，全栈市场营销人员等等。而在针对互联网人才的招聘网站上，全栈工程师更是一跃成为热门招聘职位，其薪资水平也比一般的开发工程师职位要高出一截。...</p></div>
                                    </div>
                                </div>  

                                <a href="{{url('/blog')}}/2" >Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>
                <!-- End Post 2 -->

                <div class="clear"></div>

                <!-- Post 3 -->
                <article id="post-3" class="blog-article">                    

                    <div class="col-md-12">

                                             <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="{{url('/blog')}}/2" class="read_more">如何成为一名优秀的全栈工程师？</a></div>
                                            <div class="clear"></div>
                                        </div>

                                        <ul class="info">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> 07 21, 2016</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by <a href="{{url('/list')}}?user=6">小韩</a></li>
                                          
                                        </ul>

                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> 我的前一篇文章《给职场新人的 10 点建议》发表后，得到了很多网友，特别是年轻程序员朋友们的喜爱，这令我颇感意外，但又很受鼓舞。同时，我也收到了一些私信，大多来自那些毕业不久，刚步入工作岗位的职场新人。询问的内容也大多是如何选择职业方向，如何成为一名优秀的软件工程师，以及怎样快速提高自身的技能等。我在一一回复的同时，不禁想结合自身的经历，谈谈如何才能成为一名优秀的全栈工程师。 什么是全栈工程师 全栈工程师一词，最早出现于Facebook工程师Calos Bueno的一篇文章 - Full Stack（需翻墙）。他把全栈工程师定义为对性能影响有着深入理解的技术通才。自那以后全栈这个词便流行起来，我看到过的就有全栈工程师，全栈设计师，全栈运维，全栈市场营销人员等等。而在针对互联网人才的招聘网站上，全栈工程师更是一跃成为热门招聘职位，其薪资水平也比一般的开发工程师职位要高出一截。...</p></div>
                                    </div>
                                </div>  

                                <a href="{{url('/blog')}}/2" >Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>

                <!-- End Post 3 -->

            </section>

            <!-- End Page Blog -->



            <!-- Page Blog - Post 1 -->
            <section id="post-1-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">

                            <div class="col-md-12 post_media">
                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>
                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <div id="carousel-2" class="carousel slide" data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-2" data-slide-to="1"></li>
                                                <li data-target="#carousel-2" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">

                                                <div class="item active">
                                                    <img src="{{url('home/jianli/images/blog/blog-1.jpg')}}" alt="">
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>


                                                <div class="item">
                                                    <img src="{{url('home/jianli/images/blog/blog-2.jpg')}}" alt="">
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="{{url('home/jianli/images/blog/blog-3.jpg')}}" alt="">
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="title_content">
                                <div class="text_content">Blog Post Gallery</div>
                                <div class="clear"></div>
                            </div>

                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <div class="col-md-12 first">
                                <div class="info">
                                    <div>
                                        <span class="tag">#php</span>
                                        <span class="tag">#web</span>
                                        <span class="tag">#web design</span>
                                    </div>


                                    <ul class="info-post">
                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                        <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                    </ul>
                                </div>

                                <div class="clear"></div>      


                                <div class="about_author">
                                    <div class="title_content" style="margin-bottom:10px">
                                        <div class="text_content">BILL GATES</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="prg_content">
                                        <img src="" width="100" height="100" alt="img">

                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Praesent condimentum sed elit
                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                            amet cursus libero. In fringilla egestas ornare.
                                        </div>

                                        <div class="nb_post" style="margin-top: 10px;">
                                            <b id="nb_post"> 15 posts</b> created by author
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>      


                                <div class="post_comments">

                                    <div class="title_content">
                                        <div class="text_content">7 Comments</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="comments">

                                        <div class="comment">
                                            <img src="" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->



                                    </div><!-- .post_comments -->

                                    <div class="clear"></div>      


                                    <div class="comment_form">
                                        <div class="title_content">
                                            <div class="text_content">Leave A Comment</div>
                                            <div class="clear"></div>
                                        </div>


                                        <form method="post" id="comment_form">
                                            <p class="form-group" id="contact-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="inputSuccess"  er="Name*...">
                                            </p>
                                            <p class="form-group" id="contact-email"> 
                                                <label for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control" id="inputSuccess"  er="Email*...">
                                            </p>

                                            <p class="form-group" id="contact-message">
                                                <label for="message">Your Message</label>
                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError"  er="Your Comment..."></textarea>
                                            </p>
                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                        </form>                        
                                        <div class="clear"></div>

                                    </div>
                                </div>



                                <div class="col-md-12" style="margin-top: 20px;">
                                    <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 1 -->

            <!-- Page Blog - Post 2 -->
            <section id="post-2-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">

                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                </div>

                            </div>

                            <div class="title_content">
                                <div class="text_content">BLOG ASIDE POST</div>
                                <div class="clear"></div>
                            </div>


                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <div class="col-md-12 first">
                                <div class="info">
                                    <div>
                                        <span class="tag">#php</span>
                                        <span class="tag">#web</span>
                                        <span class="tag">#web design</span>
                                    </div>


                                    <ul class="info-post">
                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                        <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                    </ul>
                                </div>

                                <div class="clear"></div>      


                                <div class="about_author">
                                    <div class="title_content" style="margin-bottom:10px">
                                        <div class="text_content">BILL GATES</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>


                                    <div class="prg_content">
                                        <img src="http:// .it/100x100" width="100" height="100" alt="img">

                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Praesent condimentum sed elit
                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                            amet cursus libero. In fringilla egestas ornare.
                                        </div>

                                        <div class="nb_post" style="margin-top: 10px;">
                                            <b id="nb_post"> 15 posts</b> created by author
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>      


                                <div class="post_comments">

                                    <div class="title_content">
                                        <div class="text_content">7 Comments</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="comments">

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->



                                    </div><!-- .post_comments -->

                                    <div class="clear"></div>      


                                    <div class="comment_form">

                                        <div class="title_content">
                                            <div class="text_content">Leave A Comment</div>
                                            <div class="clear"></div>
                                        </div>


                                        <form method="post" id="comment_form">
                                            <p class="form-group" id="contact-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="inputSuccess"  er="Name*...">
                                            </p>
                                            <p class="form-group" id="contact-email"> 
                                                <label for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control" id="inputSuccess"  er="Email*...">
                                            </p>

                                            <p class="form-group" id="contact-message">
                                                <label for="message">Your Message</label>
                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError"  er="Your Comment..."></textarea>
                                            </p>
                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                        </form>                        
                                        <div class="clear"></div>

                                    </div>
                                </div>



                                <div class="col-md-12"  style="margin-top: 20px;">
                                    <a href="#post-3" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <a href="#post-1" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 2 -->

            <!-- Page Blog - Post 3 -->
            <section id="post-3-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">


                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>

                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <img src="{{url('home/jianli/images/blog/blog-2.jpg')}}" class="img-hover" alt="">
                                    </div>

                                </div>
                            </div>

                            <div class="title_content">
                                <div class="text_content">BLOG POST IMAGE</div>
                                <div class="clear"></div>
                            </div>


                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <div class="col-md-12 first">
                                <div class="info">
                                    <div>
                                        <span class="tag">#php</span>
                                        <span class="tag">#web</span>
                                        <span class="tag">#web design</span>
                                    </div>


                                    <ul class="info-post">
                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                        <li><i class="glyphicon glyphicon-tag"></i> Photoshop</li>
                                    </ul>
                                </div>

                                <div class="clear"></div>      


                                <div class="about_author">
                                    <div class="title_content" style="margin-bottom:10px">
                                        <div class="text_content">BILL GATES</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>


                                    <div class="prg_content">
                                        <img src="http:// .it/100x100" width="100" height="100" alt="img">

                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Praesent condimentum sed elit
                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                            amet cursus libero. In fringilla egestas ornare.
                                        </div>

                                        <div class="nb_post" style="margin-top: 10px;">
                                            <b id="nb_post"> 15 posts</b> created by author
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>      


                                <div class="post_comments">

                                    <div class="title_content">
                                        <div class="text_content">7 Comments</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="comments">

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http:// .it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->



                                    </div><!-- .post_comments -->

                                    <div class="clear"></div>      


                                    <div class="comment_form">

                                        <div class="title_content">
                                            <div class="text_content">Leave A Comment</div>
                                            <div class="clear"></div>
                                        </div>


                                        <form method="post" id="comment_form">
                                            <p class="form-group" id="contact-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="inputSuccess"  er="Name*...">
                                            </p>
                                            <p class="form-group" id="contact-email"> 
                                                <label for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control" id="inputSuccess"  er="Email*...">
                                            </p>

                                            <p class="form-group" id="contact-message">
                                                <label for="message">Your Message</label>
                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError"  er="Your Comment..."></textarea>
                                            </p>
                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                        </form>                        
                                        <div class="clear"></div>

                                    </div>
                                </div>


                                <div class="col-md-12" style="margin-top: 20px;">
                                    <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a href="#blog" id="blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 3 -->


        </div>


        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title h3_modal" style="color: #fff !important;">FlexyVcard - Responsive Vcard Template</h3>
                    </div>
                    <div class="modal-body">
                        <p>FlexyVcard is an impressive and professional online vcard, a beautiful portfolio with sliding effect, resume and contact information with Google map.</p>
                        <p>It’s simple! Just download and install in a few minutes, you can show your online card to your friend, customer or employer in an interview by phone or tablet. Because FlexyVcard is a responsive template, you can view your website on pc as well as handheld devices. You can also link to your social profiles, display your portfolio in many media format such as image, youtube video, flash...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
                                            </div>
                                            <!-- End .blog -->

                                            <!-- .contact -->
                                            <div id="contact" class="content_2">
                                                
                                        <h1 class="h-bloc">联系我</h1>


                                        <div class="row">



                                            <div class="col-lg-12">
                                                <div class="row" id="contact-user">
                                                    <div class="col-md-5">
                                                        <div class="contact-info">
                                                            <!--<h3 class="main-heading"><span>Contact info</span></h3>-->

                                                            <div class="title_content" style="float: none;">
                                                                <div class="text_content">地理信息</div>
                                                                <div class="clear"></div>
                                                            </div>

                                                            <ul>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-map-marker"></i> 地址:</span> 北京 ----,中国.</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-envelope"></i> 邮箱:</span> 199205208@qq.com</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-phone"></i> 联系电话:</span> +86 18636421255</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-globe"></i> Website:</span> www.hanlin777.com</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-comment"></i> 微信:</span> zheshigemimi</li>

                                                            </ul>
                                                        </div>
                                                        <!-- /Contact Info -->
                                                        <div class="clear"></div>

                                                        <!--<h3 class="main-heading" style="margin-left: 22px;"><span>Follow me</span></h3>-->

                                                        <div class="title_content tiltle_contacts" style="float: none;">
                                                            <div class="text_content">Follow me</div>
                                                            <div class="clear"></div>
                                                        </div>

                                                    
      <div id="profile_social">
            
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/1.png')}}" height="100%" width="99%"></a>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/2.png')}}" height="100%" width="99%"></a>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/3.png')}}" height="100%" width="99%"></a>
            <a href="#"><IMG alt="" src="{{url('home/jianli/images/4.png')}}" height="100%" width="99%"></a>
           <a href="#"><IMG alt="" src="{{url('home/jianli/images/5.png')}}" height="100%" width="99%"></a>
            <div class="clear"></div>
        </div>

                                              


                                                    </div>

                                                    <div class="col-md-7">
                                                        <!-- Contact Form -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">扫我！Let's keep in touch！
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>

                                                        <div class="contact-form">
                                                            <!--<h3 class="main-heading"><span>Let's keep in touch</span></h3>-->

<img src="{{url('home/jianli/images/2.jpg')}}" height="66%" width="77%">

                                                            <div id="contact-status"></div>


                                                        </div>
                                                        <!-- /Contact Form -->
                                                    </div>
                                                </div>
                                            </div>  



                                        </div>                                            </div>
                                            <!-- End .contact -->

                                        </div>
                                        <!-- End #resp-tabs-container --> 

                                    </div><!-- End verticalTab -->

                                </div><!-- End flexy_content -->


                            </div><!-- End row -->

                        </div><!-- End col-md-12 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </section>
            <!-- End Content -->

        </div>
        <!-- End wrapper -->

        <!-- Switcher -->
        <div id="custumize-style">
            <h2>修改主题<a href="#" class="switcher"><i class="fa fa-cogs icon-switcher"></i></a></h2>
            <div>
                <h3>主题颜色</h3>
                <ul class="colors-style" id="color1">

                    <li><a href="#" class="darkolivegreen"></a></li>
                    <li><a href="#" class="green"></a></li>
                    <li><a href="#" class="blue"></a></li>
                    <li><a href="#" class="red"></a></li>
                    <li><a href="#" class="yellow"></a></li>

                    <li><a href="#" class="DarkBlue"></a></li>
                    <li><a href="#" class="orange"></a></li>
                    <li><a href="#" class="rose"></a></li>
                    <li><a href="#" class="lightseagreen"></a></li>
					<li><a href="#" class="gray"></a></li>
                </ul>
            </div>
            <div> 

                <h3 class="layouts">头像属性</h3>
                <div id="show">

                    <div class="clean-check">

                        <input type="radio" id="r1" name="style_profile" value="style_profile_1" checked="checked" />
                        <label for="r1"><span></span>动图</label>

                        <input type="radio" id="r2" name="style_profile" value="style_profile_2" />
                        <label for="r2"><span></span>固定</label>

                    </div>
                </div>


                
   

                <h3 class="layouts">页面动画</h3>
                <div id="show">

                    <select name="one" class="dropdown-select">
                        <optgroup label="Bouncing Entrances">
                            <option value="bounceIn" selected>bounceIn</option>
                            <option value="bounceInDown">bounceInDown</option>
                            <option value="bounceInLeft">bounceInLeft</option>
                            <option value="bounceInRight">bounceInRight</option>
                            <option value="bounceInUp">bounceInUp</option>
                        </optgroup>

                        <optgroup label="Fading Entrances">
                            <option value="fadeIn">fadeIn</option>
                            <option value="fadeInDown">fadeInDown</option>
                            <option value="fadeInLeft">fadeInLeft</option>
                            <option value="fadeInRight">fadeInRight</option>
                            <option value="fadeInUp">fadeInUp</option>
                        </optgroup>      
                    </select>

                </div>

                <h3 class="layouts" style="padding-top:5px">背景设置</h3>
                <div id="show">

                    <div class="clean-check">

                        <input type="radio" id="s1" name="layout" value="bg_color" checked="checked" />
                        <label for="s1"><span></span>默认</label>
                        
                        <input type="radio" id="s2" name="layout" value="bg_slider" />
                        <label for="s2"><span></span>动起来</label>

                    </div>

                </div>

            </div>

            <div> 
                <h3>纯色背景</h3>
                <ul class="colors-style bgsolid" id="bgsolid">
                    <li><a href="#" class="gray-bg"></a></li>
                    <li><a href="#" class="green-bg"></a></li>
                    <li><a href="#" class="blue-bg"></a></li>
                    <li><a href="#" class="red-bg"></a></li>
                    <li><a href="#" class="yellow-bg"></a></li>
                </ul>
            </div> 

            <div>  
                <h3>图片背景</h3>
                <ul class="colors-style bg" id="bg">
                    <li><a href="#" class="bg1"></a></li>
                    <li><a href="#" class="bg2"></a></li>
                    <li><a href="#" class="bg3"></a></li>
                    <li><a href="#" class="bg4"></a></li>
                    <li><a href="#" class="bg5"></a></li>
                </ul>
            </div>

            <div id="button-reset"><a href="#" class="button color blue boxed">设置</a></div>
        </div>
        <!-- End Switcher -->
        <!-- End Switcher -->






        </div>
        <!-- END MAIN CONTENT -->
            

        
    
    </div><!-- End container -->
    <br /><br />

   

    
    



        <!-- jquery | jQuery 1.11.0 -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="{{url('/home/jianli/js/jquery.min.js')}}"></script>

        <!-- Js | jquery.cycle -->
        <!-- Credits: https://github.com/malsup/cycle2 -->
        <script type="text/javascript" src="{{url('/home/jianli/js/jquery.cycle2.min.js')}}"></script>

        <!-- Js | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <script type="text/javascript" src="{{url('/home/jianli/js/bootstrap.min.js')}}"></script> 

        <!-- Js | easyResponsiveTabs -->
        <!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
        <script type="text/javascript" src="{{url('/home/jianli/js/easyResponsiveTabs.min.js')}}"></script> 

        <!-- Js | jquery.cookie -->
        <!-- Credits: https://github.com/carhartl/jquery-cookie --> 
        <script type="text/javascript" src="{{url('/home/jianli/js/jsSwitcher/jquery.cookie.js')}}"></script>   

        <!-- Js | switcher -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <script type="text/javascript" src="{{url('/home/jianli/js/jsSwitcher/switcher.js')}}"></script>    

        <!-- Js | mCustomScrollbar -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <script type="text/javascript" src="{{url('/home/jianli/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>     

        <!-- Js | gmaps -->
        <!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
        
        <script type="text/javascript" src="{{url('/home/jianli/js/gmaps.min.js')}}"></script>

        <!-- Js | Js -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <script type="text/javascript" src="{{url('/home/jianli/js/main.js')}}"></script>

        <!-- jquery | rotate and portfolio -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="{{url('/home/jianli/js/jquery.mixitup.min.js')}}"></script> 
        <script type="text/javascript" src="{{url('/home/jianli/js/HeadImage.js')}}"></script>

        <!-- jquery | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <script type="text/javascript" src="{{url('/home/jianli/js/jquery.prettyPhoto.js')}}"></script>


        <!-- code js for image rotate -->
        <script type="text/javascript">

            var mouseX;
            var mouseY;
            var imageOne;

            /* Calling the initialization function */
            $(init);

            /* The images need to re-initialize on load and on resize, or else the areas
             * where each image is displayed will be wrong. */
            $(window).load(init);
            $(window).resize(init);

            /* Setting the mousemove event caller */
            $(window).mousemove(getMousePosition);

            /* This function is called on document ready, on load and on resize
             * and initiallizes all the images */
            function init() {

                /* Instanciate the mouse position variables */
                mouseX = 0;
                mouseY = 0;

                /* Instanciate a HeadImage class for every image */
                imageOne = new HeadImage("one");

            }

            /* This function is called on mouse move and gets the mouse position. 
             * It also calls the HeadImage function to display the correct image*/
            function getMousePosition(event) {

                /* Setting the mouse position variables */
                mouseX = event.pageX;
                mouseY = event.pageY;

                /*Calling the setImageDirection function of the HeadImage class
                 * to display the correct image*/
                imageOne.setImageDirection();

            }

        </script>

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    
    
    
    
   
@endsection