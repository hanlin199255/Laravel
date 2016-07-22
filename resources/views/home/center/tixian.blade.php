@extends('home.layout')

@section('page')
提 现 中 心
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
                                                <b>网上银行提现</b>
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
            <div class="col-lg-6">
                <section class="panel">                   
                    <div class="panel-body">
                        <form method="post" action="{{ url('/center/tipay')}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">银行卡号或者支付宝帐号</label>
                                <input type="text" name='t_zhifubao' value="" placeholder="请输入卡号或者支付宝帐号" id="exampleInputEmail1" class="form-control">
                            </div>
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputPassword1">提现金额（单位：元）</label>
                                <input type="text" name='t_pay' value="" placeholder="请输入提现金额" id="exampleInputPassword1" class="form-control">
                            </div>
                            <button class="btn col-xs-offset-7 col-xs-4  btn-default btn-lg turquoise-tab" type="submit">申请提现</button>
                        </form>

                    </div>
                </section>
            </div>           
            </section>

            </div>
        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('txerror'))
<script type="text/javascript">

    alert('{{session('txerror')}}')

</script>
@endif
  @endsection
