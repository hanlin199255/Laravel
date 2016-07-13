@extends('admin/layout')
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
        <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            General Table
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                         </span>
                        </header>
                        <form action="rules" method="post">
                        <div class="btn-group" style="margin: 9px 0 5px 15px;">
                             
                           
                        <input type="submit" name="submit" value="选中有效" class="btn btn-primary">
                        <input type="submit" name="submit" value="选中禁用" class="btn btn-primary">   
                        
                         </div>
                        <div class="panel-body">
                            <table class="table  table-hover general-table">
                                <thead>
                                <tr>
                                    <th> Company</th>
                                    <th class="hidden-phone">Descrition</th>
                                    <th>Profit</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>

                              @foreach($rules as $rule)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="rule[]" value="{{$rule->id}}" />
                                            {{$rule->id}}
                                        
                                    </td>
                                    <td class="hidden-phone">{{substr($rule->name,22)}}</td>  
                                    <td><span class="label label-danger label-mini"> {{$rule->title}}</span></td>
                                    <td>
                                    {{$rule->status == 1 ? "启用":"禁用"}}
<!--                                       <input type="radio" name="staus_{{$rule->id}}" value="1" @if($rule->status == 1) checked @endif />启用 -->
<!--                                       <input type="radio" name="staus_ {{$rule->id}}" value="0" @if($rule->status == 0) checked @endif />不启用  -->
                                    </td>

                                </tr>
                             @endforeach
                           {{csrf_field()}}
</form>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
@endsection           