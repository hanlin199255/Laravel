@extends('home.layout')

@section('page')
成 功 提 现
@endsection
@section('contents')
<h2><a href="{{url('/home/index')}}">返回首页</a></h2>
       <!-- START .pay by xiariboke.com -->  
<div style="text-align: center;"><strong>用<span style="color: #339966;">微信</span> OR <span style="color: #337fe5;">支付宝</span> 扫描二维码</strong></div>  
<div style="text-align: center;"><strong>为网站 <span style="color: #ff6600;">打个赏</span></strong></div>  
<div align="center"><img class="wp-image-558 size-thumbnail" src="微信二维码图片地址" alt="pay_weixin" width="150" height="150" /><img class="wp-image-558 size-thumbnail" src="支付宝二维码地址" alt="pay_weixin" width="150" height="150" /></div>  
<div style="text-align: center;"><span style="color: #999999;">金额随意 快来“打”我呀～</span></div>  
<!-- END .pay by xiariboke.com --> 
<script type="text/javascript">
	alert('支付成功！款项将在2小时内打入你所输入的账户')
</script>
@endsection