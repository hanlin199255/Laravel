@extends('admin.layout')
@section('title','分类列表页')
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
<div class="wrapper">  <!-- wrapper 盒子  statistics 统计-->
	 <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            分类列表
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th class="hidden-phone">ID  </th>
            <th class="hidden-phone">分类名称</th>
            <th class="hidden-phone">分类路径</th>
            <th class="hidden-phone">状态</th>
            <th class="hidden-phone">操作</th>
        </tr>
        </thead>
        <tbody>
@foreach($cates as $k=>$v)
        <tr class="gradeX">
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->path}}</td>
            <td class="center hidden-phone">{{$v->status}}</td>
            <td class="center hidden-phone">[<a href="{{url('/admin/cate/add/ ')}}{{ $v->id }}">添加</a>]  [<a href="{{url('/admin/cate/edit/ ')}}{{ $v->id }}">编辑</a>  <a href="{{url('/admin/cate/delete/ ')}}{{ $v->id }}">删除</a>]</td>
        </tr>
@endforeach
        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>

</div>
@endsection
@section('script')
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