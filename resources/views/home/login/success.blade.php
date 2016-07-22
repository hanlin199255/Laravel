@extends('home.layout')
@section('title','注册成功')
@section('page','注册成功')
@section('contents')
恭喜您注册成功，一封激活邮件已经发入你所填写的邮箱，你可以继续浏览网站，但无法执行发布博客、评论等操作；<a href="{{url('/center')}}">返回个人中心</a>

@endsection