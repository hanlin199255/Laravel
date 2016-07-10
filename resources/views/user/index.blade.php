@extends('admin/layout')
@section('contents')
<div class="page-heading">
  <h3>用户列表</h3>
  <ul class="breadcrumb">
    <li>
      <a href="#">Dashboard</a></li>
    <li>
      <a href="#">Data Table</a></li>
    <li class="active">Editable Table</li></ul>
</div>
<div class="wrapper">
  <div class="row">
    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">Editable Table
          <span class="tools pull-right">
            <a class="fa fa-chevron-down" href="javascript:;"></a>
            <a class="fa fa-times" href="javascript:;"></a>
          </span>
        </header>
        <div class="panel-body">
          <div class="adv-table editable-table ">
            <div class="clearfix">
              <div class="btn-group">
                <button class="btn btn-primary" id="editable-sample_new">添加用户
                  <i class="fa fa-plus"></i></button>
              </div>
              <div class="btn-group pull-right">
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Tools
                  <i class="fa fa-angle-down"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li>
                    <a href="#">Print</a></li>
                  <li>
                    <a href="#">Save as PDF</a></li>
                  <li>
                    <a href="#">Export to Excel</a></li>
                </ul>
              </div>
            </div>
            <div class="space15"></div>
            <div role="grid" class="dataTables_wrapper form-inline" id="editable-sample_wrapper">
              <div class="row">
                <div class="col-lg-6">
                
                <!-- 通过form设置显示的条数进行值传递 以及 搜索 (h路径)-->
                 <form action="/laravel/public/Admin/user/index" method="get">
                  <div id="editable-sample_length" class="dataTables_length">
                    <label>
                      <select name="num" size="1" aria-controls="editable-sample" class="form-control xsmall">
                        <!-- 设置当前值等于用户输入值 进行判断 -->
                        <option value="5" @if((!empty($request['num'])) && $request['num'] == 5) selected="selected" @endif>5</option>
                        <option value="10"  @if((!empty($request['num'])) && $request['num'] == 10)  selected="selected" @endif >10</option>
                        <option value="15"  @if((!empty($request['num'])) && $request['num'] == 15) selected="selected" @endif >15</option>
                        <option value="100"  @if((!empty($request['num'])) && $request['num'] == 100) selected="selected" @endif >100</option></select>records per page</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="dataTables_filter" id="editable-sample_filter">
                    <label><button class="btn btn-primary">搜索</button>：
                      <input type="text" name="keywords" class="form-control medium" value="{{$request['keywords'] or ''}}"></label>
                      </div>
                </div>
              </div>
              </form>
              <!-- form设置显示条数和搜索结束 -->
              
              <table id="editable-sample" class="table table-striped table-hover table-bordered dataTable" aria-describedby="editable-sample_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 303px;" aria-label="First Name">用户名</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" style="width: 297px;" aria-label="Last Name: activate to sort column ascending">邮箱</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" style="width: 194px;" aria-label="Points: activate to sort column ascending">创建时间</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" style="width: 361px;" aria-label="Status: activate to sort column ascending">状态</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" style="width: 138px;" aria-label="Edit: activate to sort column ascending">编辑</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" style="width: 199px;" aria-label="Delete: activate to sort column ascending">删除</th></tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  @foreach($users as $k=>$v)
                 <!--tr class="@if($k%2 == 0) even @else odd @endif"  此处使用了JS的隔行换色--> 
			     <tr class="">
                    <td class="  sorting_1">{{$v->username}}</td>
                    <td class=" ">{{$v->email}}</td>
                    <td class=" ">{{$v->created_at}}</td>
                    <td class="center ">{{showState($v->status)}}</td>
                    <td class=" ">
                      <a href="/laravel/public/Admin/user/edit/{{$v->id}}" class="edit"><i class="fa fa-edit"></i>修改</a></td>
                    <td class=" ">
                      <a href="/laravel/public/Admin/user/delete/{{$v->id}}" class="delete"><i class="fa fa-times"></i>删除</a></td>
                  @endforeach
                  </tr>
                </tbody>
              </table>

              <div class="row">
                <div class="col-lg-6">
                  <div class="dataTables_info" id="editable-sample_info"><!-- show 1 to 5 --></div></div>
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
