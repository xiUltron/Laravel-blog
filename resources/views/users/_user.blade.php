<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/9/20
 * Time: 17:34
 */
?>

<li>
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    <a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>
</li>
