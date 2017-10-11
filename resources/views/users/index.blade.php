<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/9/19
 * Time: 09:53
 */
?>

@extends('layouts.default')
@section('title', '所有用户')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h1>所有用户</h1>
        <ul class="users">
            @foreach($users as $user)
                @include('users._user')
            @endforeach
        </ul>

        {!! $users->render() !!}
    </div>
    <div class="go-top">
        <div class="arrow"></div>
        <div class="stick"></div>
    </div>
@stop