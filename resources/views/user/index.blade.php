@extends('admin/layout') 
@section('style')
  <link href="/laravel/public/admincss/css/style.css" rel="stylesheet">
  <link href="/laravel/public/admincss/css/style-responsive.css" rel="stylesheet">
     
@endsection

@section('contents')
 <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Form Wizard
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">Form Wizard</li>
            </ul>
        </div>
 <!-- page heading end-->

<div class="wrapper">
	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading">
					Editable Table
					<span class="tools pull-right">
						<a class="fa fa-chevron-down" href=""></a>
						<a class="fa fa-times" href=""></a>
					</span>
				</header>
				<div class="panel-body">
					<div class="adv-table editable-table ">
						<div class="clearfix">
							<div class="btn-group">
								<button class="btn btn-primary" id="editable-sample_new">
									添加用户
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="btn-group pull-right">
								<button data-toggle="dropdown"
									class="btn btn-default dropdown-toggle">
									Tools
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="#">Print</a>
									</li>
									<li>
										<a href="#">Save as PDF</a>
									</li>
									<li>
										<a href="#">Export to Excel</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="space15"></div>
						<div role="grid" class="dataTables_wrapper form-inline"
							id="editable-sample_wrapper">
							<div class="row">
								<div class="col-lg-6">

									<!-- 通过form设置显示的条数进行值传递 以及 搜索 (h路径)-->
									<form action="/laravel/public/Admin/user/index" method="get">
										<div id="editable-sample_length" class="dataTables_length">
											<label>
												<select name="num" size="1" aria-controls="editable-sample"
													class="form-control xsmall">
													<!-- 设置当前值等于用户输入值 进行判断 -->
													<option value="5"
														@if((!empty($request['num'])) && $request['num'] ==
														5) selected="selected" @endif>5</option>
													<option value="10"
														@if((!empty($request['num'])) && $request['num'] ==
														10)  selected="selected" @endif>10</option>
													<option value="15"
														@if((!empty($request['num'])) && $request['num'] ==
														15) selected="selected" @endif>15</option>
													<option value="100"
														@if((!empty($request['num'])) && $request['num'] ==
														100) selected="selected" @endif>100</option>
												</select>
												records per page
											</label>
										</div>
								
								</div>
								<div class="col-lg-6">
									<div class="dataTables_filter" id="editable-sample_filter">
										<label>
											<button class="btn btn-primary">搜索</button>
											：
											<input type="text" name="keywords"
												class="form-control medium"
												value="{{$request['keywords'] or ''}}">
										</label>
									</div>
								</div>
							</div>
							</form>
							<!-- form设置显示条数和搜索结束 -->

							<table class="table table-striped table-hover table-bordered dataTable">
								<thead>
									<tr role="row">
										<th class="sorting_disabled" role="columnheader" rowspan="1"
											colspan="1" style="width: 303px;" aria-label="First Name">用户名</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 297px;"
											aria-label="Last Name: activate to sort column ascending">邮箱</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 194px;"
											aria-label="Points: activate to sort column ascending">用户权限</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 361px;"
											aria-label="Status: activate to sort column ascending">状态</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 138px;"
											aria-label="Edit: activate to sort column ascending">编辑</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 199px;"
											aria-label="Delete: activate to sort column ascending">删除</th>
									</tr>
								</thead>
								<tbody >
									@foreach($users as $k=>$v)
									<!--tr class="@if($k%2 == 0) even @else odd @endif"  此处使用了JS的隔行换色-->
									<tr class="">
										<td class="  sorting_1">{{$v->username}}</td>
										<td class=" ">{{$v->email}}</td>
										<td class=" ">
											<select name="group_id" uid="{{$v->uid}}">
												@foreach($groups as $group) @if($v->group_id == $group->id)
												<option name="group_id" value="{{$group->id}}"
													selected="selected">{{$group->title}}</option>
												@else
												<option value="{{$group->id}}">{{$group->title}}</option>
												@endif @endforeach
											</select>
										</td>
										<td class="center ">{{showState($v->status)}}</td>
										<td class=" ">
											<a href="/laravel/public/Admin/user/edit/{{$v->id}}"
												class="edit">
												<i class="fa fa-edit"></i>
												修改
											</a>
										</td>
										<td class=" ">
											<a href="/laravel/public/Admin/user/delete/{{$v->id}}"
												class="delete">
												<i class="fa fa-times"></i>
												删除
											</a>
										</td>
									
									</tr>
										@endforeach
								</tbody>
							</table>

							<div class="row">
								<div class="col-lg-6">
									<div class="dataTables_info" id="editable-sample_info">
										<!-- show 1 to 5 -->
									</div>
								</div>
								<div class="col-lg-6">
									<div class="dataTables_paginate paging_bootstrap pagination">

										<!--分页实现-->
										{!!$users->appends($request)->render()!!}


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>        

@endsection 
@section('script')
<script>
$(function(){
	$("select[name=group_id]").change(function(){
		
	var result = confirm("确定要修改用户对应的分组？");
        if (!result) 
            location.reload();
         //   return;
        
        //发送AJAX 请求到服务器端处理
        $.ajax({

            type : "post",
            url : "/laravel/public/Admin/user/setgroup",
            data : "group_id=" + $(this).val() + "&uid=" + $(this).attr("uid"), 
            dataType : "json",
      
            success : function (result) {
                alert(result.info);
                if (!result.status) location.reload();
            }

        });


  
        
    });
})
</script>
<script src="/laravel/public/admincss/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/laravel/public/admincss/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/laravel/public/admincss/js/bootstrap.min.js"></script>
<script src="/laravel/public/admincss/js/modernizr.min.js"></script>
<script src="/laravel/public/admincss/js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="/laravel/public/admincss/js/easypiechart/jquery.easypiechart.js"></script>
<script src="/laravel/public/admincss/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="/laravel/public/admincss/js/sparkline/jquery.sparkline.js"></script>
<script src="/laravel/public/admincss/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="/laravel/public/admincss/js/iCheck/jquery.icheck.js"></script>
<script src="/laravel/public/admincss/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="/laravel/public/admincss/js/flot-chart/jquery.flot.js"></script>
<script src="/laravel/public/admincss/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="/laravel/public/admincss/js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="/laravel/public/admincss/js/morris-chart/morris.js"></script>
<script src="/laravel/public/admincss/js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="/laravel/public/admincss/js/calendar/clndr.js"></script>
<script src="/laravel/public/admincss/js/calendar/evnt.calendar.init.js"></script>
<script src="/laravel/public/admincss/js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="/laravel/public/admincss/js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="/laravel/public/admincss/js/dashboard-chart-init.js"></script>

@endsection