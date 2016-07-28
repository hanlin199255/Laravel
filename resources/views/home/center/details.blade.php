@extends('home/layout');
@section('style')

@endsection

@section('page')
个 人 详 细 信 息
@endsection

@section('contents')
<script src="{{ url('/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ url('/plugins/uploadify/uploadify.css') }}"></script>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<div class="panel-body">
<form method="post" class="form-horizontal adminex-form" action="{{url('/center/details')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">用户名</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="username" value="{{$data->username or ''}}">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess" class="col-sm-2 control-label col-lg-2">性别</label>
                        <div class="col-lg-5">
                            <label class="checkbox-inline">
                                <input type="radio" name="sex" value="man" 
                                @if($data->sex == 'man') 
                                "selected"
                                @endif
                                id="inlineCheckbox1"> 男
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio"  name="sex" value="woman" 
                                @if($data->sex == 'woman') 
                                "selected"
                                @endif
                                id="inlineCheckbox2"> 女
                            </label>    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">真实姓名</label>
                        <div class="col-sm-5">
                            <input type="text" name="tname" value="{{$data->tname or ''}}" class="form-control">
                            <span class="help-block">填写真实姓名</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">手机号</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control round-input" name="phone" value="{{$data->phone or ''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">邮箱</label>
                        <div class="col-sm-5">
                            <input type="text"  placeholder="填写邮箱" class="form-control tooltips" name="email" value="{{$data->email or ''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">地址</label>
                        <div class="col-sm-5">
                            <select name="address" id="sheng" value='0'>
								<option value="">--请选择--</option>
								<option value="0">北京市</option>
								<option value="1">天津市</option>
								<option value="2">上海市</option>
								<option value="3">内蒙古自治区</option>
								<option value="4">河北省</option>
								<option value="5">山西省</option>
							</select>
							<select name="address_2" id="shi">
								<option value="">--请选择--</option>
						<!-- 		<option value="">海淀区</option>
								<option value="">昌平区</option>
								<option value="">朝阳区</option>
								<option value="">东城区</option> -->
							</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">头像</label>
                        <div class="col-sm-10" id="preview"><img src='{{$data->avatar}}' width='150' /></div>
                        <label class="col-sm-2 col-sm-2 control-label">  </label>
                        <div class="col-sm-5">
                            <input type="file" name="avatar" id="upload" class="form-control">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">提交</label>
                        <div class="col-sm-5">
                            <input type="submit" value="修改资料" id="focusedInput" class="form-control">
                        </div>
                    </div>                 
                </form>
                </div>
</section>
	</div>
	</div>
	<script>
	/*
		onchange:当select下拉框发生改变的时候
	*/

	// 1.获取对象
	var sheng = document.getElementById('sheng');
	var shi = document.getElementById('shi');

	// 2.当省发生改变的时候
	sheng.onchange = function(){
		// 2.1 获取省份的值
		var val = this.value;
		console.log(val);

		// 2.2 必须先告诉程序省对应的市（必须让省份的值和市关联）
		var arr = [
				['海淀区','昌平区','朝阳区','丰台区'],
				['南开区','塘沽区','河东区','河西区'],
				['浦东区','华西村','崇明区','普陀区'],
				['呼和浩特','包头','鄂尔多斯','锡林郭勒'],
				['邯郸市','石家庄市','秦皇岛市','唐山市']
			];
		// 2.3 将具体的省对应的市获取到
		var city = arr[val];
		 console.log(city);

		// 2.4 获取city的长度
		var len = city.length;

		// 2.5 循环遍历拼接option和数组元素
		var opt = '<option value="">--请选择--</option>';
		for (var i = 0; i < len; i++) {
			opt += '<option value="'+i+'">'+city[i]+'</option>';
		}
		//console.log(opt);

		// 2.6 将拼接的结果写入select#shi
		shi.innerHTML = opt;
	}

	// 任务：三级级联
	</script>
	<script src="{{ url('/plugins/goods_create.js') }}"></script>
@endsection