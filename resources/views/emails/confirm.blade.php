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
<h2>{{ $user->name }} 您好！</h2>
<p>
    我们即将完成您的账户创建。您可以使用此账户登录 www.itskynet.com。
</p>
<p>
    登录邮箱：{{ $user->email }}<br/>
    显示名称：{{ $user->name }}
</p>
<p>
    请点击下面的链接完成注册
</p>
<a href="{{ route('confirm_email', $user->activation_token) }}" role="button" style="text-align: center; align-content: center; align-items: center; background: #017ee6;">
    验证您的电子邮件
</a>
<p>
    如果你没有注册过，可放心忽略这封电子邮件。别人可能错误地键入了你的电子邮件地址。
</p>
</body>
</html>