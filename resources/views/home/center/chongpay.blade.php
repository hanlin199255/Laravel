@extends('home.layout')

@section('page')
支 付 中 心
@endsection
@section('contents')
<div class="container">
           
        <div class="row">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                 class="hover-pointer">
                                                <b>网上银行支付</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="工商银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0001.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="农业银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0002.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="中国银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0003.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="建设银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0004.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="招商银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0005.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="浦发银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0006.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="广发银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0007.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="交通银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0008.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                                <div class="col-xs-2 col-md-2">
                                                    <a index="中信银行" href="javascript:void(0);" class="thumbnail">
                                                        <img data-src="holder.js/100%x180"
                                                             src="{{ url('/home/bands/0009.jpg') }}"
                                                             style="height: 40px; width: 130px; display: block;">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                 class="collapsed hover-pointer">
                                                <b>其他支付</b>　
                                                <small>(支付宝、微信、银联)</small>
                                            </div>
                                          

                                        </div>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                        	<div class="row">
	                                            <div class="col-xs-2 col-md-2">
	                                                <a index="支付宝" href="javascript:void(0);" class="thumbnail">
	                                                    <img data-src="holder.js/100%x180"
	                                                   		src="{{ url('/home/bands/zhifubao.jpg') }}"
	                                                        style="height: 40px; width: 130px; display: block;">
	                                                </a>
	                                            </div>
	                                            <div class="col-xs-2 col-md-2">
	                                                <a index="微信" href="javascript:void(0);" class="thumbnail">
	                                                    <img data-src="holder.js/100%x180"
	                                                    	src="{{ url('/home/bands/weixin.jpg') }}"
	                                                         style="height: 40px; width: 130px; display: block;">
	                                                </a>
	                                            </div>
	                                            <div class="col-xs-2 col-md-2">
	                                                <a index="银联" href="javascript:void(0);" class="thumbnail">
	                                                    <img data-src="holder.js/100%x180"
	                                                    	src="{{ url('/home/bands/yinlian.jpg') }}"
	                                                         style="height: 40px; width: 130px; display: block;">
	                                                </a>
	                                            </div>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-7">
                                <h5 class="pull-right" style="margin: 0;" >实际支付： ¥</h5>
                            </div>
                            <div class="col-xs-1 clear-padding">
                                <h2 class="cr" style="margin: 0;">{{ $money or '' }}元</h2>
                            </div>
                            <div class="col-xs-1 clear-padding">
                                <a href="{{url('/center/chongsuccess')}}"><button id="btn-sub" type="button"  class="btn btn-default btn-lg turquoise-tab">点击支付</button></a>
                                <div id="type-dialogBox"></div>
                                <div id="stantard-dialogBox"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- START .pay by xiariboke.com -->  
<div style="text-align: center;"><strong>用<span style="color: #339966;">微信</span> OR <span style="color: #337fe5;">支付宝</span> 扫描二维码</strong></div>  
<div style="text-align: center;"><strong>为本站 <span style="color: #ff6600;">打个赏</span></strong></div>  
<div align="center"><img class="wp-image-558 size-thumbnail" src="微信二维码图片地址" alt="pay_weixin" width="150" height="150" /><img class="wp-image-558 size-thumbnail" src="支付宝二维码地址" alt="pay_weixin" width="150" height="150" /></div>  
<div style="text-align: center;"><span style="color: #999999;">金额随意 快来“打”我呀～</span></div>  
<!-- END .pay by xiariboke.com --> 
@endsection