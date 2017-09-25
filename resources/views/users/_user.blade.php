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

    @can('destory', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</li>
