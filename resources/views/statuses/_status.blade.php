<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/10/16
 * Time: 10:52
 */
?>

<li id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    </a>
    <div class="user">
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    </div>
    <div class="timestamp">
        {{ $status->created_at->diffForHumans() }}
    </div>
    <div class="content">
        {{ $status->content }}
    </div>
</li>
