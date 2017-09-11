{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: ultron--}}
{{--* Date: 2017/8/3--}}
{{--* Time: 17:31--}}
{{--*/--}}
@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>IT Skynet</h1>
        <p class="lead">
            欢迎 {{ Auth::user()->name }}
        </p>
        <p class="lead">
            你现在看到的是<a href="http://www.itskynet.com">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@stop