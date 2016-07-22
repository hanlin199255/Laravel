@extends('home.layout')

@section('page')
修 改 密 码
@endsection
@section('contents')
<div class="row">
<div class="col-lg-12" style="margin: 0 0 0 750" >
<section class="panel">

<div class="panel-body" >
<form method="post" class="form-horizontal adminex-form" action="{{url('/center/newpassword')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">原始密码:</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="password" value="">
                            <input type="hidden" name="id" value="{{$id}}">
                            {{csrf_field()}}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">新密码:</label>
                        <div class="col-sm-4">
                            <input type="password" name="newpassword" value="" class="form-control">
                            <span class="help-block">填写新密码</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">确认新密码:</label>
                        <div class="col-sm-4">
                            <input type="password" name="renewpassword" value="" class="form-control">
                            <span class="help-block">确认新密码</span>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" value="修改密码" id="focusedInput" class="form-control">
                        </div>
                    </div>                 
                </form>
                </div>
</section>
	</div>
	</div>
	
@endsection