<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/9/29
 * Time: 10:12
 */
?>

        <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册确认链接</title>
</head>
<body>
<h1>{{ $user()->name }} 您好！感谢在 itskynet 进行注册！</h1>
<p>
    我们即将完成您的账户创建。您可以使用此账户登录 www.itskynet.com。
</p>
<p>
    登录邮箱：{{ $user()->email }}
    显示昵称：{{ $user()->name }}
</p>
<p>
    请点击下面的链接完成注册
    <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>
<p>
    如果这不是您本人的操作，请忽略此邮件。
</p>
</body>
</html>