<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/9
 * Time: 17:55
 */
?>

<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar" />
</a>
<h1>{{ $user->name }}</h1>