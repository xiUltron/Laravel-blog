<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/31
 * Time: 10:35
 */
?>

@foreach(['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach