@extends('home.layout')

@section('page')
个人中心
@endsection
@section('contents')
<div class="container">
           
        <div class="wrapper">

            <div class="row">
                <div class="col-sm-12">

                    <!--price start-->
                    <div class="text-center price-head">
                        <h1 class="color-terques"> 选择以下的金额进行充值</h1>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h1> 小额 </h1>

                            </div>
                            
                            <div class="pricing-quote">
                                ￥100<span class="note">.00</span>
                            </div> 
                            <ul class="list-unstyled"></ul>                         
                            <div class="price-actions">
                                <a href="{{ url('/center/chongpay?id=')}}{{session('id') or ''}}&money=100" class="btn">充值</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h1> 基础 </h1>

                            </div>
                            <div class="pricing-quote">
                                ￥500<span class="note">.00</span>
                            </div>
                            <ul class="list-unstyled">                                
                            </ul>
                            <div class="price-actions">
                                <a href="{{ url('/center/chongpay?id=')}}{{session('id') or ''}}&money=500" class="btn">充值</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table most-popular">
                            <div class="pricing-head">
                                <h1> 大额 </h1>

                            </div>
                            <div class="pricing-quote">
                                ￥2000<span class="note">.00</span>
                            </div>
                            <ul class="list-unstyled">
                            </ul>
                            <div class="price-actions">
                                <a href="{{ url('/center/chongpay?id=')}}{{session('id') or ''}}&money=2000" class="btn">充值</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-3">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h1> 土豪  </h1>
                            </div>
                            <div class="pricing-quote">
                                ￥10000<span class="note">.00</span>
                            </div>
                            <ul class="list-unstyled">
                            </ul>
                            <div class="price-actions">
                                <a href="{{ url('/center/chongpay?id=')}}{{session('id') or ''}}&money=10000" class="btn">充值</a>
                            </div>
                        </div>
                    </div>
                    <!--price end-->
                </div>
            </div>

        </div>
    </div>
 @endsection
