<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/8
 * Time: 11:49
 */
?>

@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>注册
                    <span class="pull-right">已有账号？现在<a href="{{ route('login') }}" class="btn btn-success" role="button">登录</a></span>
                </h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form action="{{ route('users.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control"
                               value="{{ old('password_confirmation') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop