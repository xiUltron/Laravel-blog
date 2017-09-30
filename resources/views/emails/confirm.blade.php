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
<h1>感谢在 itskynet 进行注册！</h1>
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