@extends('home/layout');
@section('style')

@endsection

@section('page')
个 人 中 心
@endsection

@section('contents')

    
<div class="wrapper">
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
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="profile-pic text-center">
                                        <img src="{{ $data->avatar or '' }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading custom-tab turquoise-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#home" data-toggle="tab">个人信息</a>
                                        </li>
                                        <li class="">
                                            <a href="#about" data-toggle="tab">社交模块</a>
                                        </li>
                                        <li class="">
                                            <a href="#profile" data-toggle="tab">我的文章</a>
                                        </li>
                                        <li class="">
                                            <a href="#contact" data-toggle="tab">设置</a>
                                        </li>
                                    </ul>
                                </header>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">
                                            <ul class="p-info">
                                              <li>
                                                    <div class="title">用户名</div>
                                                    <div class="desk">{{$data->username or '未填写用户名'}}</div>
                                                </li>
                                                <li>
                                                    <div class="title">性别</div>
                                                    <div class="desk">{{$data->sex or '男'}}</div>
                                                </li>
                                                <li>
                                                    <div class="title">会员级别</div>
                                                    <div class="desk">{{$data->status or '普通会员'}}</div>
                                                </li>
                                                <li>
                                                    <div class="title">邮箱</div>
                                                    <div class="desk">{{$data->email or '未填写邮箱'}}</div>
                                                </li>
                                                <li>
                                                    <div class="title">创建时间</div>
                                                    <div class="desk">{{$data->created_at or '未填写创建时间'}}</div>
                                                </li>                                       
                                            </ul>
                                            <a href="{{url('/center/details')}}?id={{$data->id or ''}}"><button type="button" class="btn btn-default btn-lg turquoise-tab">详细信息</button></a>
                                        </div>
                                        <div class="tab-pane" id="about">
                                            <ul class="p-info">
                                              <li>
                                                    <div class="title">我的关注</div>
                                                    <div class="desk"><a href="/center/myguanzhu?id={{$data->id or ''}}">{{$data->guanzhu or '1'}}</a>位</div>
                                                </li>
                                                <li>
                                                    <div class="title">我的粉丝</div>
                                                    <div class="desk"><a href="/center/myfans?id={{$data->id or ''}}">{{$data->fans or '1'}}</div>
                                                </li>                                     
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="profile">
                                            <ul class="p-info">
                                            <?php $i=0;$j=0; ?>
                                            @foreach($article as $art)
                                               <?php ++$i; ?> 
                                            @endforeach
                                            @foreach($comment as $com)
                                                <?php ++$j; ?> 
                                            @endforeach                                        
                                                <li>
                                                    <div class="title">我的文章</div>
                                                    <div class="desk"><a href="{{ url('/center/myarticle?id=')}}{{$data->id or '0'}}">{{$i or '0'}}</a>篇</div>               

                                                </li>
                                                <li>
                                                    <div class="title">我的评论</div>
                                                    <div class="desk"><a href="{{ url('/center/myarticle?id=')}}{{$data->id or '0'}}">{{$j or '0'}}</a>条</div>
                                                </li>
                                                <li>
                                                    <div class="title">我的收藏</div>
                                                    <div class="desk"><a href="{{ url('/center/myarticle?id=')}}{{$data->id or '0'}}">{{$i or '0'}}</a>篇</div>
                                                </li>                                       
                                            </ul>
                                            <a href="{{ url('/center/myarticle?id=')}}{{$data->id or '0'}}"><button type="button" class="btn btn-lg turquoise-tab">管理文章</button>
                                        </div>
                                        <div class="tab-pane" id="contact">
                                        <ul class="p-info">
                                                <li>
                                                    <div class="title">允许陌生人私信</div>
                                                    <div class="desk">是</div>
                                                </li>
                                                <li>
                                                    <div class="title">管理订阅</div>
                                                    <div class="desk">是</div>
                                                </li>
                                                                                      
                                            </ul>
                                            <a href="{{ url('/center/setting?id=')}}{{$data->id or ''}}"><button type="button" class="btn btn-lg turquoise-tab">修改配置</button>
                                            <a href="{{ url('/center/newpassword?id=')}}{{$data->id or ''}}"><button type="button" class="btn btn-lg turquoise-tab">修改密码</button>
                                            </div>
                                        
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body p-states">
                                    <div class="summary pull-left">
                                        <h4>累计 <span>消费</span></h4>
                                        <span>Monthly Summary</span>
                                        <h3>$ {{$buy_total or '未消费'}} 元</h3>
                                    </div>
                                    <div class="chart-bar" id="expense"><canvas style="display: inline-block; width: 68px; height: 35px; vertical-align: top;" width="68" height="35"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body p-states green-box">
                                    <div class="summary pull-left">
                                        <h4>打赏博客 <span>次数</span></h4>
                                        <span>Monthly Summary</span>
                                        <h3>{{$buy_times or '0'}} 次</h3>
                                    </div>
                                    <div class="chart-bar" id="pro-refund"><canvas style="display: inline-block; width: 68px; height: 35px; vertical-align: top;" width="68" height="35"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body p-states">
                                    <div class="summary pull-left">
                                        <h4>累计 <span>收入</span></h4>
                                        <span>Monthly Summary</span>
                                        <h3>$ {{$sell_total or '未收入'}}元</h3>
                                    </div>
                                    <div class="chart-bar" id="expense2"><canvas style="display: inline-block; width: 68px; height: 35px; vertical-align: top;" width="68" height="35"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body p-states">
                                    <div class="summary pull-left">
                                        <h4>现有 <span>资金</span></h4>
                                        <span>Monthly Summary</span>
                                        <h3>$ {{$data->pay or ''}} 元</h3>
                                    </div>
                                    <div class="chart-bar" id="expense2"><canvas style="display: inline-block; width: 68px; height: 35px; vertical-align: top;" width="68" height="35"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/center/chongzhi?id=')}}{{$data->id or ''}}"><button type="button" class="btn btn-lg turquoise-tab">充值</button>
                        <a href="{{ url('/center/tixian?id=')}}{{$data->id or ''}}"><button type="button" class="btn btn-lg turquoise-tab">提现</button>
                                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="profile-desk">
                                        <h1>{{$data->tname or '未填写真实姓名'}}</h1>
                                        <span class="designation">职位</span>
                                        <p>
                                           自我介绍
                                        </p>
                                        <a href="#" class="btn p-follow-btn pull-left"> <i class="fa fa-check"></i>已关注</a>

                                        <ul class="p-social-link pull-right">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <form>
                                    <textarea placeholder="想说点什么吗？" rows="2" class="form-control input-lg p-text-area"></textarea>
                                </form>
                                <footer class="panel-footer">
                                    <button class="btn btn-post pull-right">发布</button>
                                    <ul class="nav nav-pills p-option">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-camera"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa  fa-location-arrow"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-meh-o"></i></a>
                                        </li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    近期好友状态
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                                    <ul class="activity-list">
                                        <li>
                                            <div class="avatar">
                                                <img alt="" src="{{ url('/admincss/images/photos/user1.png') }}">
                                            </div>
                                            <div class="activity-desk">
                                                <h5><a href="#">姓名</a> <span>上传了五张照片</span></h5>
                                                <p class="text-muted">7分钟前在美国</p>
                                                <div class="album">
                                                    <a href="#">
                                                        <img src="{{ url('/admincss/images/gallery/image1.jpg') }}" alt="">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{ url('/admincss/images/gallery/image2.jpg') }}" alt="">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{ url('/admincss/images/gallery/image3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img alt="" src="{{ url('/admincss/images/photos/user2.png') }}">
                                            </div>
                                            <div class="activity-desk">
                                                <h5><a href="#">姓名</a> <span>完成了一个访问</span></h5>
                                                <p class="text-muted">两分钟前在美国</p>
                                                <div class="location-map">
                                                    <div id="map-canvas"></div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="avatar">
                                                <img alt="" src="{{ url('/admincss/images/photos/user3.png') }}">
                                            </div>
                                            <div class="activity-desk">

                                                <h5><a href="#">名字</a> <span>参加了一个会议</span>
                                                    <a href="#">名字</a></h5>
                                                <p class="text-muted">2天前在美国</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="avatar">
                                                <img alt="" src="{{ url('/admincss/images/photos/user4.png') }}">
                                            </div>
                                            <div class="activity-desk">

                                                <h5><a href="#">Jonathan Smith</a> <span>completed the task “wireframe design” within the dead line</span></h5>
                                                <p class="text-muted">4 days ago near Alaska, USA</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="avatar">
                                                <img alt="" src="{{ url('/admincss/images/photos/user5.png') }}">
                                            </div>
                                            <div class="activity-desk">

                                                <h5><a href="#">Jonathan Smith</a> <span>was absent office due to sickness</span></h5>
                                                <p class="text-muted">4 days ago near Alaska, USA</p>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Placed js at the end of the document so the pages load faster -->

    
        

@endsection