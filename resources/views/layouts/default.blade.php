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
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title', 'Sample') —— IT Skynet</title>
</head>
<body>
@include('layouts._header')
<div class="container">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>
