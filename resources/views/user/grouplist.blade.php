@extends('/admin/layout') 
@section('style')

    <link rel="shortcut icon" href="#" type="{{url('/admincss/image/png')}}">
  <link href="{{url('/admincss/css/style.css')}}" rel="stylesheet">
    <link href="{{url('/admincss/css/style.css')}}" rel="stylesheet">
  <link href="{{url('admincss/css/style-responsive.css')}}" rel="stylesheet">


      <link href="{{url('/admincss/css/style.css')}}" rel="stylesheet">
  <link href="{{url('/admincss/css/style-responsive.css')}}" rel="stylesheet">

@endsection

@section('contents')
<div class="page-heading">
            <h3>
                Basic Table
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Table</a>
                </li>
                <li class="active"> Basic Table </li>
            </ul>
        </div>
        <div class="wrapper">
            <div class="row">
            
            <div class="col-sm-18">
                <section class="panel">
                    <header class="panel-heading">
                        Striped Table
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                    </header>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-sm-1">#</th>
                                <th class="col-sm-1">名称</th>
                                <th class="col-sm-8" >用户权限</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($group as $key=>$val)
                            <tr>
                            
                                <td class="col-sm-1">{{$val->id}}</td>
                                <td class="col-sm-1">{{$val->title}}</td>
                                       
                                <td class="col-sm-8">      
                                        @foreach($users_rule as $k=>$v) 
                                        @if(in_array($v->id,explode(',',$val->rules)))
                                   <label  class="col-sm-2"> <input type="checkbox" group_id ="{{$val->id}}" name="users_rule"  value="{{$v->id}}" checked>{{$v->title}}</label>
                                	   @else
                                	<label  class="col-sm-2"> <input type="checkbox" group_id ="{{$val->id}}" name="users_rule"  value="{{$v->id}}">{{$v->title}}</label>
                                	   @endif
                                	    @endforeach 
                                     </td>
                            
                                
                            </tr>
						@endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    
         
        </div>
@endsection        
@section('script')        
<script>

  $(function () {
	    $("table.table input:checkbox").click(function () {
	      //  alert($(this).val()+'hahaha');
	        //发送ajax请求 给该分组添加或者删除权限  有则改之无则加勉
	        $.ajax({
	        	
	            type : "post",
	            url : "/laravel/public/Admin/user/grouplimit",
	            data : "rules=" + $(this).val() + "&id=" + $(this).attr("group_id"),
	            dataType :"json",
	            success : function (result){
	                alert(result.info);
	                if (!result.status) location.reload();
	            }
	        });
	    })
	})
  </script>
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
<script src="/laravel/public/admincss/js/1.js"></script>

<!--common scripts for all pages-->
<script src="/laravel/public/admincss/js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="/laravel/public/admincss/js/dashboard-chart-init.js"></script>
        

@endsection
