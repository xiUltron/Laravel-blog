<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/4
 * Time: 16:26
 */
?>
        <!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sample') —— IT Skynet</title>
</head>
<body @yield('background')>
@include('layouts._header')
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
    </div>
    @include('layouts._footer')
</div>
<div id="app"></div>
<script src="/js/app.js"></script>
<script src="/js/addStatus.js?time=<?php echo time();?>"></script>
</body>
</html>