@extends('/admin/layout')
@section('title','文章信息管理页')

@section('css')
<link href="{{ url('/admincss/js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
  <link href="{{ url('/admincss/js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ url('/admincss/js/data-tables/DT_bootstrap.css') }}" />

  <link href="{{ url('/admincss/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/admincss/css/style-responsive.css') }}" rel="stylesheet">
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
							<div class="btn-group pull-right">
								<a href="{{url('/admin/article/add')}}"><button class="btn btn-primary" id="editable-sample_new">
									添加文章
									<i class="fa fa-plus"></i>
								</button></a>
							</div>
							<div class="btn-group pull-left">
								<button data-toggle="dropdown"
									class="btn btn-default dropdown-toggle">
									工具
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-left">
									<li>
										<a href="#">打印</a>
									</li>
									<li>
										<a href="#">保存为PDF</a>
									</li>
									<li>
										<a href="#">输出到Excel</a>
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
									<form action="{{url('/admin/article/index')}}" method="get">
										<div id="editable-sample_length" class="dataTables_length">
											--页--
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
											</label>--/篇--<button class="btn btn-primary">确定</button>
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
											colspan="1" style="width: 177px;" aria-label="First Name">标题</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 222px;"
											aria-label="Last Name: activate to sort column ascending">描述</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 333px;"
											aria-label="Points: activate to sort column ascending">内容</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 277px;"
											aria-label="Status: activate to sort column ascending">封面</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 138px;"
											aria-label="Edit: activate to sort column ascending">作者</th>
											<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 138px;"
											aria-label="Edit: activate to sort column ascending">所属类</th>
										<th class="sorting" role="columnheader" tabindex="0"
											aria-controls="editable-sample" rowspan="1" colspan="1"
											style="width: 177px;"
											aria-label="Delete: activate to sort column ascending">管理</th>
									</tr>
								</thead>
								<tbody >
									
								@foreach($article as $k=>$v)
									<tr class="">
										<td class="center">{{$v->title}}</td>
										<td class="center">{{$v->descr}}</td>
										<td class="center">{{strip_tags(mb_substr($v->content,0,50))}}</td>
										<td class="center"><img src="{{$v->pic}}" height="110" width="180"></td>
										<td class="center">{{$v->tname}}</td>
										<td class="center">{{$v->catename}}</td>
										<td class=" ">
											<a href="{{url('admin/article/delete/ ')}}{{$v->id}}"
												class="delete">
												<i class="fa fa-times"></i>
												删除
											</a>
											<a href="{{url('admin/article/edit/ ')}}{{$v->id}}"
												class="edit">
												<i class="fa fa-edit"></i>
												编辑
											</a>
											<a href="{{url('blog/ ')}}{{$v->id}}"
												class="select" target="_blank">
												<i class="fa fa-book"></i>
												查看
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
										{!!$article->appends($request)->render()!!}


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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!-- <div class="wrapper"> -->


<!--  <div class="row"> -->
<!--         <div class="col-sm-12"> -->
<!--         <section class="panel"> -->
<!--         <header class="panel-heading"> -->
<!--             文章信息 -->
<!--             <span class="tools pull-right"> -->
<!--                 <a href="javascript:;" class="fa fa-chevron-down"></a> -->
<!--                 <a href="javascript:;" class="fa fa-times"></a> -->
<!--              </span> -->
<!--         </header> -->
<!--         <div class="panel-body"> -->
<!--         <div class="adv-table"> -->
<!--         <table class="display table table-bordered" id="hidden-table-info"> -->
<!--         <thead> -->
<!--         <tr> -->
<!--             <th>文章ID</th> -->
<!--             <th>文章标题</th> -->
<!--             <th class="hidden-phone">文章描述</th> -->
<!--             <th class="hidden-phone">文章内容</th> -->
<!--             <th class="hidden-phone">文章创建时间</th> -->
<!--             <th class="hidden-phone">文章主图</th> -->
<!--             <th class="hidden-phone">文章所属用户</th> -->
<!--             <th class="hidden-phone">文章所属分类</th> -->
<!--             <th class="hidden-phone">管理</th> -->
<!--         </tr> -->
<!--         </thead> -->
<!--         <tbody> -->
<!--         @foreach($article as $k=>$v) -->
<!--         <tr class="gradeX"> -->
<!--             <td>{{$v->id}}</td> -->
<!--             <td>{{$v->title}}</td> -->
<!--             <td class="hidden-phone">{{$v->descr}}</td> -->
<!--             <td class="center hidden-phone">{{$v->content}}</td> -->
<!--             <td class="center hidden-phone">{{$v->created_at}}</td> -->
<!--             <td class="center hidden-phone"><img src="{{$v->pic}}" alt="" height="50px"></td> -->
<!--             <td class="center hidden-phone">{{$v->user_id}}</td> -->
<!--             <td class="center hidden-phone">{{$v->cate_id}}</td> -->
<!--             <td class="center hidden-phone"><a href="{{url('admin/article/edit/ ')}}{{$v->id}}">编辑</a>  <a href="{{url('admin/article/delete/ ')}}{{$v->id}}">删除</a></td> -->
<!--         </tr> -->
<!--         @endforeach -->
<!--          </tbody> -->
<!--         </table> -->
<!-- 					{!!$article->appends($request)->render()!!} -->
<!--         </div> -->
<!--         </div> -->
<!--         </section> -->
<!--         </div> -->
<!--         </div> -->
<!-- </div> -->
@endsection

@section('js')
<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ url('/admincss/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('/admincss/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ url('/admincss/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('/admincss/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/admincss/js/modernizr.min.js') }}"></script>
<script src="{{ url('/admincss/js/jquery.nicescroll.js') }}"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="{{ url('/admincss/js/advanced-datatable/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ url('/admincss/js/data-tables/DT_bootstrap.js') }}"></script>
<!--dynamic table initialization -->
<script src="{{ url('/admincss/js/dynamic_table_init.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ url('/admincss/js/scripts.js') }}"></script>
@endsection