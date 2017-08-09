<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/9
 * Time: 17:35
 */
?>

@extends('layouts.default')
@section('title', $user->name)
@section('content')
    {{ $user->name }} - {{ $user->email }}
@stop