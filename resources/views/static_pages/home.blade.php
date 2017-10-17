{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: ultron--}}
{{--* Date: 2017/8/3--}}
{{--* Time: 17:31--}}
{{--*/--}}
@extends('layouts.default')
@section('title','主页')
{{--@section('background')--}}
{{--class="home-body"--}}
{{--@stop--}}
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>微博列表</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user'=>Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div>
            <div class="jumbotron">
                <h1>IT Skynet</h1>
                {{--@if(Auth::check())--}}
                {{--<p class="lead">--}}
                {{--欢迎 {{ Auth::user()->name }}--}}
                {{--</p>--}}
                {{--@else--}}
                <p class="lead">
                    亲爱的游客
                </p>
                {{--@endif--}}
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
        </div>
    @endif
@stop