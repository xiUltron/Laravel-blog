<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/10/11
 * Time: 16:51
 */
?>

@extends('layouts.default')
@section('title', '密码重置')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">重置密码</div>
                    <div class="panel-body">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('password.email') }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="email">邮箱地址：</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="email" type="email" name="email"
                                           value="{{ old('email') }}" required>

                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">发送密码重置邮件</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop